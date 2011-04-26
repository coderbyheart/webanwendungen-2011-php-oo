<?php

/**
 * @author Markus Tacker <m@tacker.org>
 * @version $Id$
 */

/**
 * Model für eine Veranstaltungsgruppe
 *
 * Basiert auf der Tabelle veranstaltung_gruppe
 *
 * @author Markus Tacker <m@tacker.org>
 * @version $Id$
 */
class Model_VeranstaltungGruppe extends Model_Base
{
    /**
     * @var Model_Veranstaltung
     */
    private $veranstaltung;

    /**
     * @var string
     */
    private $gid;

    /**
     * @var int
     */
    private $wochentag;

    /**
     * @var Time
     */
    private $uhrzeit;

    /**
     * @param string $gid
     * @return void
     */
    public function setGid($gid)
    {
        $this->gid = $gid;
    }

    /**
     * @return string
     */
    public function getGid()
    {
        return $this->gid;
    }

    /**
     * @param Model_Time $uhrzeit
     * @return void
     */
    public function setUhrzeit(Model_Time $uhrzeit)
    {
        $this->uhrzeit = $uhrzeit;
    }

    /**
     * @return Model_Time
     */
    public function getUhrzeit()
    {
        return $this->uhrzeit;
    }

    /**
     * @param Model_Veranstaltung $veranstaltung
     * @return void
     */
    public function setVeranstaltung(Model_Veranstaltung $veranstaltung)
    {
        $this->veranstaltung = $veranstaltung;
    }

    /**
     * @return Model_Veranstaltung
     */
    public function getVeranstaltung()
    {
        return $this->veranstaltung;
    }

    /**
     * @param int $wochentag
     * @return void
     */
    public function setWochentag($wochentag)
    {
        $this->wochentag = $wochentag;
    }

    /**
     * @return int
     */
    public function getWochentag()
    {
        return $this->wochentag;
    }
}