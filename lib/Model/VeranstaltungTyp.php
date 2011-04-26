<?php

/**
 * @author Markus Tacker <m@tacker.org>
 * @version $Id$
 */

/**
 * Model für einen Veranstaltungstyp.
 *
 * Basiert auf der Tabelle veranstaltungstyp
 *
 * @author Markus Tacker <m@tacker.org>
 * @version $Id$
 */
class Model_VeranstaltungTyp extends Model_Base
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
     * @var int
     */
    private $max_teiln_def;

    /**
     * @var int
     */
    private $max_dupl_def;

    /**
     * @var int
     */
    private $dauer_def;

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
     * @param int $dauer_def
     * @return void
     */
    public function setDauerDef($dauer_def)
    {
        $this->dauer_def = $dauer_def;
    }

    /**
     * @return int
     */
    public function getDauerDef()
    {
        return $this->dauer_def;
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
     * @param int $max_dupl_def
     * @return void
     */
    public function setMaxDuplDef($max_dupl_def)
    {
        $this->max_dupl_def = $max_dupl_def;
    }

    /**
     * @return int
     */
    public function getMaxDuplDef()
    {
        return $this->max_dupl_def;
    }

    /**
     * @param int $max_teiln_def
     * @return void
     */
    public function setMaxTeilnDef($max_teiln_def)
    {
        $this->max_teiln_def = $max_teiln_def;
    }

    /**
     * @return int
     */
    public function getMaxTeilnDef()
    {
        return $this->max_teiln_def;
    }
}