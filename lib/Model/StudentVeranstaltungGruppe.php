<?php

/**
 * @author Markus Tacker <m@tacker.org>
 * @version $Id$
 */

/**
 * Model für die Zuordnung eines Studenten zu einer Veranstaltung und einer Gruppe
 *
 * Basiert auf der Tabelle studierende_veranstaltung_gruppe
 *
 * @author Markus Tacker <m@tacker.org>
 * @version $Id$
 */
class Model_StudentVeranstaltungGruppe extends Model_Base
{
    /**
     * @var Model_Student
     */
    private $student;

    /**
     * @var Model_Veranstaltung
     */
    private $veranstaltung;

    /**
     * @var Model_VeranstaltungGruppe
     */
    private $gruppe;

    /**
     * @param Model_VeranstaltungGruppe $gruppe
     * @return void
     */
    public function setGruppe(Model_VeranstaltungGruppe $gruppe)
    {
        $this->gruppe = $gruppe;
    }

    /**
     * @return Model_VeranstaltungGruppe
     */
    public function getGruppe()
    {
        return $this->gruppe;
    }

    /**
     * @param Model_Student $student
     * @return void
     */
    public function setStudent(Model_Student $student)
    {
        $this->student = $student;
    }

    /**
     * @return Model_Student
     */
    public function getStudent()
    {
        return $this->student;
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
}