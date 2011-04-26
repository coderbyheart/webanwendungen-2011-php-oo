<?php

/**
 * @author Markus Tacker <m@tacker.org>
 * @version $Id$
 * @category Tests
 */

/**
 * Test für Listing_Student
 *
 * @author Markus Tacker <m@tacker.org>
 * @version $Id$
 * @category Tests
 */
class Test_ListingStudent extends PHPUnit_Framework_TestCase
{
    /**
     * Test für {@link Listing_Student}
     * 
     * @return void
     */
    public function testSimple()
    {
        $db = Persistence_DB::getInstance();
        $listing = $db->getStudents();
        $result = $listing->getRows();
        $this->assertEquals(20000, $listing->getNumRows(), 'Anzahl der Zeilen ist 20.000');
        $this->assertEquals(1000, $listing->getNumPages(), 'Anzahl der Seiten ist 1.000');
        $this->assertEquals(20, $listing->getRowsPerPage(), 'Anzahl der Zeilen pro Seite ist 20');
        $this->assertEquals(20, count($result), 'Anzahl der Zeilen ist 20');

        $student = $result[0];
        $this->assertEquals(138000, $student->getMatnr(), 'Matrikelnummer');
        $this->assertEquals('Justus', $student->getVorname(), 'Vorname');
        $this->assertEquals('Abel', $student->getNachname(), 'Nachname');
        $this->assertEquals(2, $student->getFachsem(), 'Fachseminar');
        $this->assertEquals('Brunnenstraße 196', $student->getAdresse1(), 'Adresse 1');
        $this->assertEquals('', $student->getAdresse2(), 'Adresse 2');
        $this->assertEquals(28759, $student->getPlz(), 'PLZ');
        $this->assertEquals('Bremen', $student->getStadt(), 'Stadt');
        $this->assertEquals('Deutschland', $student->getLand(), 'Land');
        $this->assertEquals('Justus.Abel@example.org', $student->getEmail(), 'E-Mail');
        $this->assertEquals(944584881, $student->getTel(), 'Telefon');
    }
}