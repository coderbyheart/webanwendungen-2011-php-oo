<?php

/**
 * @author Markus Tacker <m@tacker.org>
 * @version $Id$
 */

/**
 * Model für einen Ort.
 *
 * Basiert auf der Tabelle ort
 *
 * @author Markus Tacker <m@tacker.org>
 * @version $Id$
 */
class Model_Ort extends Model_Base
{
    /**
     * @var int
     */
    private $plz;

    /**
     * @var string
     */
    private $ort;

    /**
     * @var string
     */
    private $zusatz;

    /**
     * @var string
     */
    private $vorwahl;

    /**
     * @var string
     */
    private $bundesland;

    /**
     * @param string $bundesland
     * @return void
     */
    public function setBundesland($bundesland)
    {
        $this->bundesland = $bundesland;
    }

    /**
     * @return string
     */
    public function getBundesland()
    {
        return $this->bundesland;
    }

    /**
     * @param string $ort
     * @return void
     */
    public function setOrt($ort)
    {
        $this->ort = $ort;
    }

    /**
     * @return string
     */
    public function getOrt()
    {
        return $this->ort;
    }

    /**
     * @param int $plz
     * @return void
     */
    public function setPlz($plz)
    {
        $this->plz = $plz;
    }

    /**
     * @return int
     */
    public function getPlz()
    {
        return $this->plz;
    }

    /**
     * @param string $vorwahl
     * @return void
     */
    public function setVorwahl($vorwahl)
    {
        $this->vorwahl = $vorwahl;
    }

    /**
     * @return string
     */
    public function getVorwahl()
    {
        return $this->vorwahl;
    }

    /**
     * @param string $zusatz
     * @return void
     */
    public function setZusatz($zusatz)
    {
        $this->zusatz = $zusatz;
    }

    /**
     * @return string
     */
    public function getZusatz()
    {
        return $this->zusatz;
    }
}