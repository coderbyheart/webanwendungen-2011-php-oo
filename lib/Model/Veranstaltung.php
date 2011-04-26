<?php

/**
 * @author Markus Tacker <m@tacker.org>
 * @version $Id$
 */

/**
 * Model für eine Veranstaltung.
 *
 * Basiert auf der Tabelle veranstaltung
 *
 * @author Markus Tacker <m@tacker.org>
 * @version $Id$
 */
class Model_Veranstaltung extends Model_Base
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var Model_Modul
     */
    private $modul;

    /**
     * @var Model_VeranstaltungTyp
     */
    private $typ;

    /**
     * @var string
     */
    private $bezeichnung;

    /**
     * @var int
     */
    private $max_teiln;

    /**
     * @var int
     */
    private $dauer;

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
     * @param int $dauer
     * @return void
     */
    public function setDauer($dauer)
    {
        $this->dauer = $dauer;
    }

    /**
     * @return int
     */
    public function getDauer()
    {
        return $this->dauer;
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

    /**
     * @param int $max_teiln
     * @return void
     */
    public function setMaxTeiln($max_teiln)
    {
        $this->max_teiln = $max_teiln;
    }

    /**
     * @return int
     */
    public function getMaxTeiln()
    {
        return $this->max_teiln;
    }

    /**
     * @param Model_Modul $modul
     * @return void
     */
    public function setModul(Model_Modul $modul)
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
     * @param Model_VeranstaltungTyp $typ
     * @return void
     */
    public function setTyp(Model_VeranstaltungTyp $typ)
    {
        $this->typ = $typ;
    }

    /**
     * @return Model_VeranstaltungTyp
     */
    public function getTyp()
    {
        return $this->typ;
    }
}