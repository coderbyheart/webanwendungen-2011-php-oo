#!/usr/bin/env php
<?php

/**
 * Führt die Unit-Tests mit PHPUnit 3.6 aus
 * 
 * @author Markus Tacker <m@tacker.org>
 * @version $Id$
 * @category Tests
 */

$vendor = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'phpunit' . DIRECTORY_SEPARATOR;
$paths = array(
    $vendor . 'phpunit',
    $vendor . 'phpunit-story',
    $vendor . 'dbunit',
    $vendor . 'phpunit-mock-objects',
    $vendor . 'php-timer',
    $vendor . 'php-token-stream',
    $vendor . 'phpunit-selenium',
    $vendor . 'php-text-template',
    $vendor . 'php-file-iterator',
    $vendor . 'php-code-coverage'
);

ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR . join(PATH_SEPARATOR, $paths));

require_once 'PHP/CodeCoverage/Filter.php';
PHP_CodeCoverage_Filter::getInstance()->addFileToBlacklist(__FILE__, 'PHPUNIT');

if (extension_loaded('xdebug')) {
    xdebug_disable();
}

if (strpos('@php_bin@', '@php_bin') === 0) {
    set_include_path(dirname(__FILE__) . PATH_SEPARATOR . get_include_path());
}

require_once 'PHPUnit/Autoload.php';

define('PHPUnit_MAIN_METHOD', 'PHPUnit_TextUI_Command::main');

PHPUnit_TextUI_Command::main();