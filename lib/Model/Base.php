<?php

/**
 * @author Markus Tacker <m@tacker.org>
 * @version $Id$
 */

/**
 * Basisklasse für alle Models
 *
 * @author Markus Tacker <m@tacker.org>
 * @version $Id$
 */
abstract class Model_Base
{
    /**
     * Gibt den Tabellennamen zurück
     *
     * @abstract
     * @return string
     */
    abstract public function getSchema();

    /**
     * Speichert die Ergebnisse von getColumns()
     * @var array
     */
    private static $colinfo = array();

    /**
     * Gibt die Datenbank-Spalten eine Models zurück
     *
     * Dazu wird Reflection benutzt.
     *
     * @see http://php.net/manual/en/book.reflection.php
     * @return array
     */
    public function getColumns()
    {
        $class = get_class($this);
        if (!isset(self::$colinfo[$class])) {
            $ref = new ReflectionClass($class);
            $cols = array();
            foreach($ref->getProperties() as $prop) {
                if (preg_match('/@column( .+)?/', $prop->getDocComment(), $colmatch)) {
                    if (isset($colmatch[1])) {
                        $cols[] = sprintf('%s as %s', trim($colmatch[1]), $prop->getName());
                    } else {
                        $cols[] = $prop->getName();
                    }
                }
            }
            self::$colinfo[$class] = $cols;
        }
        return self::$colinfo[$class];
    }
}
