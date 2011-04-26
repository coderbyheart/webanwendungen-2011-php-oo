<?php

/**
 * @author Markus Tacker <m@tacker.org>
 * @version $Id$
 */

/**
 * Abstrahiert den Zugriff auf die Datenbankschickt
 *
 * @author Markus Tacker <m@tacker.org>
 * @version $Id$
 */
class Persistence_DB
{
    /**
     * @var Persistence_DB
     */
    private static $instance;

    /**
     * @var PDO
     */
    private $dbc;

    /**
     * Baut eine Verbindung zur Datenbank auf
     *
     * @see http://www.php.net/manual/de/ref.pdo-pgsql.connection.php
     * @return Persistence_DB
     */
    private function __construct()
    {
        $config = Config::getInstance();
        $dsn = sprintf('pgsql:host=%s;port=%d;dbname=%s;user=%s;password=%s', $config->getDBHost(), $config->getDBPort(), $config->getDatabase(), $config->getDBUser(), $config->getDBPassword());
        $this->dbc = new PDO($dsn);
    }

    /**
     * Erzeugt eine neue Datenbankverbindung, falls diese noch nicht besteht und gibt diese zurück
     *
     * @static
     * @return Persistence_DB
     */
    public static function singleton()
    {
        if (self::$instance === null) {
            $class = __CLASS__;
            self::$instance = new $class();
        }
        return self::$instance;
    }

    /**
     * Gibt eine Instanz der Datenbankverbindung zrück
     *
     * @return Persistence_DB
     */
    public static function getInstance()
    {
        return self::singleton();
    }

    /**
     * @return Listing_Student
     */
    public function getStudents()
    {
        return new Listing_Student($this->dbc);
    }

}
