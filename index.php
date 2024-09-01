<?php
/*
 * --------------------------------------------------------------------------
 * Bootgly PHP Framework
 * Developed by Rodrigo Vieira (@rodrigoslayertech)
 * Copyright 2023-present
 * Licensed under MIT
 * --------------------------------------------------------------------------
 */

define('BOOTGLY_WORKING_BASE', __DIR__);
define('BOOTGLY_WORKING_DIR', BOOTGLY_WORKING_BASE . DIRECTORY_SEPARATOR);

// @ Autoload composer (if exists):
(@include __DIR__ . '/@imports/autoload.php') ||
(  // @ Autoboot platforms (submodules):
   (@include __DIR__ . '/Bootgly/autoboot.php') &&
   (@include __DIR__ . '/Console/autoboot.php') &&
   (@include __DIR__ . '/Web/autoboot.php')
) || exit(1);
