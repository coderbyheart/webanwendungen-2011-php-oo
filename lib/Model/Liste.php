<?php

/**
 * @author Markus Tacker <m@tacker.org>
 * @version $Id$
 */

/**
 * Model für eine Liste.
 *
 * Basiert auf der Tabelle liste
 *
 * @author Markus Tacker <m@tacker.org>
 * @version $Id$
 */
class Model_Liste extends Model_Base
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $bezeichnung;

    /**
     * @var Studiengang
     */
    private $studiengang;


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