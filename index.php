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

(@include __DIR__ . '/@imports/autoload.php')
|| (@include __DIR__ . '/Bootgly/autoload.php')
|| exit(1);
