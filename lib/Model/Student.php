<?php

/**
 * @author Markus Tacker <m@tacker.org>
 * @version $Id$
 */

/**
 * Model für einen Student.
 *
 * Basiert auf der Tabelle studierende
 *
 * @author Markus Tacker <m@tacker.org>
 * @version $Id$
 */
class Model_Student extends Model_Base
{
    /**
     * @var int
     * @column
     */
    private $matnr;

    /**
     * @var string
     * @column
     */
    private $vorname;

    /**
     * @var string
     * @column
     */
    private $nachname;

    /**
     * @var int
     * @column
     */
    private $fachsem;

    /**
     * @var Model_Studiengang
     * @todo TODO Unterstützung für Referenzen
     * @-column studiengang_id
     * @-reference studiengang.id
     */
    private $studiengang;

    /**
     * @var string
     * @column
     */
    private $adresse1;

    /**
     * @var string
     * @column
     */
    private $adresse2;

    /**
     * @var int
     * @column
     */
    private $plz;

    /**
     * @var string
     * @column
     */
    private $stadt;

    /**
     * @var string
     * @column
     */
    private $land;

    /**
     * @var string
     * @column
     */
    private $email;

    /**
     * @var string
     * @column
     */
    private $tel;

    /**
     * @param string $adresse1
     * @return void
     */
    public function setAdresse1($adresse1)
    {
        $this->adresse1 = trim($adresse1);
    }

    /**
     * @return string
     */
    public function getAdresse1()
    {
        return $this->adresse1;
    }

    /**
     * @param string $adresse2
     * @return void
     */
    public function setAdresse2($adresse2)
    {
        $this->adresse2 = trim($adresse2);
    }

    /**
     * @return string
     */
    public function getAdresse2()
    {
        return $this->adresse2;
    }

    /**
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = trim($email);
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param int $fachsem
     * @return void
     */
    public function setFachsem($fachsem)
    {
        $this->fachsem = (int)$fachsem;
    }

    /**
     * @return int
     */
    public function getFachsem()
    {
        return $this->fachsem;
    }

    /**
     * @param string $land
     * @return void
     */
    public function setLand($land)
    {
        $this->land = trim($land);
    }

    /**
     * @return string
     */
    public function getLand()
    {
        return $this->land;
    }

    /**
     * @param int $matnr
     * @return void
     */
    public function setMatnr($matnr)
    {
        $this->matnr = (int)$matnr;
    }

    /**
     * @return int
     */
    public function getMatnr()
    {
        return $this->matnr;
    }

    /**
     * @param string $nachname
     * @return void
     */
    public function setNachname($nachname)
    {
        $this->nachname = trim($nachname);
    }

    /**
     * @return string
     */
    public function getNachname()
    {
        return $this->nachname;
    }

    /**
     * @param int $plz
     * @return void
     */
    public function setPlz($plz)
    {
        $this->plz = (int)$plz;
    }

    /**
     * @return int
     */
    public function getPlz()
    {
        return $this->plz;
    }

    /**
     * @param string $stadt
     * @return void
     */
    public function setStadt($stadt)
    {
        $this->stadt = trim($stadt);
    }

    /**
     * @return string
     */
    public function getStadt()
    {
        return $this->stadt;
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

    /**
     * @param string $tel
     * @return void
     */
    public function setTel($tel)
    {
        $this->tel = trim($tel);
    }

    /**
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param string $vorname
     * @return void
     */
    public function setVorname($vorname)
    {
        $this->vorname = trim($vorname);
    }

    /**
     * @return string
     */
    public function getVorname()
    {
        return $this->vorname;
    }

    /**
     * Gibt den Tabellennamen zurück
     *
     * @static
     * @return string
     */
    public function getSchema()
    {
        return 'studierende';
    }
}