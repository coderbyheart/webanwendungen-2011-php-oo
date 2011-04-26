<?php

/**
 * @author Markus Tacker <m@tacker.org>
 * @version $Id$
 */

/**
 * Model für einen Studiengang.
 *
 * Basiert auf der Tabelle studiengang
 *
 * @author Markus Tacker <m@tacker.org>
 * @version $Id$
 */
class Model_Studiengang extends Model_Base {
    
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $bezeichnung;

    /**
     * @param string $bezeichnung
     * @return void
     */
    public function setBezeichnung($bezeichnung)
    {
        $this->bezeichnung = $bezeichnung;
    }

    /**
     * @return string
     */
    public function getBezeichnung()
    {
        return $this->bezeichnung;
    }

    /**
     * @param int $id
     * @return void
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
