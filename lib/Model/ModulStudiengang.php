<?php

/**
 * @author Markus Tacker <m@tacker.org>
 * @version $Id$
 */

/**
 * Model für die Zuordnung von Modul zu Studiengang
 *
 * Basiert auf der Tabelle liste
 *
 * @author Markus Tacker <m@tacker.org>
 * @version $Id$
 */
class Model_ModulStudiengang extends Model_Base
{
    /**
     * @var Model_Modul
     */
    private $modul;

    /**
     * @var Model_Studiengang
     */
    private $studiengang;

    /**
     * @var int
     */
    private $fachsem;

    /**
     * @param int $fachsem
     * @return void
     */
    public function setFachsem($fachsem)
    {
        $this->fachsem = $fachsem;
    }

    /**
     * @return int
     */
    public function getFachsem()
    {
        return $this->fachsem;
    }

    /**
     * @param Model_Modul $modul
     * @return void
     */
    public function setModul($modul)
    {
        $this->modul = $modul;
    }

    /**
     * @return Model_Modul
     */
    public function getModul()
    {
        return $this->modul;
    }

    /**
     * @param Model_Studiengang $studiengang
     * @return void
     */
    public function setStudiengang(Model_Studiengang $studiengang)
    {
        $this->studiengang = $studiengang;
    }

    /**
     * @return Model_Studiengang
     */
    public function getStudiengang()
    {
        return $this->studiengang;
    }
}