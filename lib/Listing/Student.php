<?php

/**
 * Listet Studenten auf
 *
 * @author Markus Tacker <m@tacker.org>
 * @version $Id$
 */
class Listing_Student extends Listing_Base
{
    /**
     * Setzt den Text für die Freitext-Suche
     *
     * @todo TODO: Implementieren
     * @param string $search
     * @return void
     */
    public function setSearchString($search)
    {
    }

    /**
     * Fügt einen Filter hinzu
     *
     * @todo TODO: Implementieren
     * @param Model_Base $filter
     * @return void
     */
    public function addFilter(Model_Base $filter)
    {
    }

    /**
     * Gibt des Model des Listings zurück
     *
     * @return string
     */
    public function getModel()
    {
        return 'Model_Student';
    }

    /**
     * Gibt das standard Sortierfeld zurück
     *
     * @return void
     */
    public function getDefaultOrderColumn()
    {
        return 'nachname';
    }

    /**
     * Gibt die standard Storierreihenfolge zurück
     *
     * @return void
     */
    public function getDefaultOrderDirection()
    {
        return Listing_Base::ORDER_ASC;
    }
}
