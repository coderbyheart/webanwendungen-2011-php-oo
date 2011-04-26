<?php

/**
 * @author Markus Tacker <m@tacker.org>
 * @version $Id$
 */

/**
 * Basisklasse für alle Listings
 *
 * @author Markus Tacker <m@tacker.org>
 * @version $Id$
 */
abstract class Listing_Base
{
    /**
     * @var Model_Base[]
     */
    private $listingModel;
    
    /**
     * @global string
     */
    const ORDER_ASC = 'ASC';

    /**
     * @global string
     */
    const ORDER_DESC = 'DESC';

    /**
     * @var string
     */
    private $orderDirection;

    /**
     * @var string
     */
    private $orderColumn;

    /**
     * @var int
     */
    private $numRows;

    /**
     * @var int
     */
    private $numPages;

    /**
     * @var int
     */
    private $rowsPerPage = 20;

    /**
     * @var int
     */
    private $page = 1;

    /**
     * @var PDO
     */
    private $dbc;

    /**
     * @param PDO $dbc
     */
    public function __construct(PDO $dbc)
    {
        $this->dbc = $dbc;
        $modelClass = $this->getModel();
        $this->listingModel = new $modelClass;
        $this->orderDirection = $this->getDefaultOrderDirection();
        $this->orderColumn = $this->getDefaultOrderColumn();
    }

    /**
     * @return int
     */
    public function getNumPages()
    {
        return $this->numPages;
    }

    /**
     * @param int $numRows
     * @return void
     */
    protected function setNumRows($numRows)
    {
        $this->numRows = (int)$numRows;
        $this->numPages = ceil($this->getNumRows() / $this->getRowsPerPage());
    }

    /**
     * @return int
     */
    public function getNumRows()
    {
        return $this->numRows;
    }

    /**
     * @param int $rowsPerPage
     * @return void
     */
    public function setRowsPerPage($rowsPerPage)
    {
        $this->rowsPerPage = $rowsPerPage;
    }

    /**
     * @return int
     */
    public function getRowsPerPage()
    {
        return $this->rowsPerPage;
    }

    /**
     * Gibt die aktive Datenbankverbindung zurück
     * 
     * @return PDO
     */
    public function getDbc()
    {
        return $this->dbc;
    }

    /**
     * @param int $page
     * @return void
     */
    public function setPage($page)
    {
        $this->page = $page;
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Gibt den Offset anhand der aktuellen Seite zurück
     *
     * @return int
     */
    public function getOffset()
    {
        return ($this->getPage() - 1) * $this->getRowsPerPage();
    }
    
    /**
     * Gibt die Richtung zurück, in der sortiert wird
     *
     * @return string
     */
    public function getOrderDirection()
    {
        return $this->orderDirection;
    }

    /**
     * Setzt die Richtung, in der sortiert wird
     *
     * @param string
     */
    public function setOrderDirection($dir)
    {
        switch($dir) {
        case self::ORDER_ASC:
        case self::ORDER_DESC:
            $this->orderDirection = $dir;
        default:
            throw new Listing_Exception(sprintf('Unknown sort direction: %s', $dir));
        }
    }

    /**
     * Gibt die Spalte zurück, nach der sortiert wird
     *
     * @return string
     */
    public function getOrderColumn()
    {
        return $this->orderColumn;
    }

    /**
     * Setzt die Spalte, nach der sortiert wird
     *
     * @param string $orderColumn
     * @return void
     */
    public function setOrderColumn($orderColumn)
    {
        if (!in_array($orderColumn, $this->listingModel->getColumns())) throw new Listing_Exception(sprintf('Unknown sort column: %s', $orderColumn));
        $this->orderColumn = $orderColumn;
    }

    /**
     * Gibt die standard Storierreihenfolge zurück
     *
     * @abstract
     * @return void
     */
    abstract public function getDefaultOrderDirection();

    /**
     * Gibt das standard Sortierfeld zurück
     *
     * @abstract
     * @return void
     */
    abstract public function getDefaultOrderColumn();

    /**
     * Liefert die Datensätze der aktuellen Seite zurück
     *
     * @return Model_Base[]
     */
    public function getRows()
    {
        $modelClass = $this->getModel();
        $schema = $this->listingModel->getSchema();

        // Zählen
        $sql = sprintf('SELECT COUNT(*) AS num FROM %s', $schema);
        $result = $this->getDbc()->query($sql);
        $num = $result->fetch(PDO::FETCH_OBJ);
        $result->closeCursor();
        $this->setNumRows((int)$num->num);

        // Aktuelle Seite laden
        $prefix = function($v) use ($schema) { return $schema . '.' . $v; };
        $cols = array_map($prefix, $this->listingModel->getColumns());
        $sql = sprintf('SELECT %s FROM %s ORDER BY %s %s LIMIT %d OFFSET %d', join(',', $cols), $schema, $prefix($this->getOrderColumn()), $this->getOrderDirection(), $this->getRowsPerPage(), $this->getOffset());
        $result = $this->getDbc()->query($sql);
        $rows = array();
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $model = new $modelClass();
            foreach($row as $k => $v) {
                $setter = 'set' . ucfirst($k);
                call_user_func(array($model, $setter), $v);
            }
            $rows[] = $model;
        }
        $result->closeCursor();
        return $rows;
    }

    /**
     * Gibt des Model des Listings zurück
     *
     * @return string
     */
    abstract public function getModel();

}
