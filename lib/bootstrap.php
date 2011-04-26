<?php

/**
 * Konfiguriert die Anwendung
 *
 * @author Markus Tacker <m@tacker.org>
 * @version $Id$
 */

/**
 * @global string Konstante für das Home-Verzeichnis
 */
define('HOME', __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR);

/**
 * @global string Konstante für das lib-Verzeichnis
 */
define('LIB', __DIR__ . DIRECTORY_SEPARATOR);

// Autoloader initialisieren
require_once LIB . 'Autoloader.php';
spl_autoload_register(array('Autoloader', 'autoload'));