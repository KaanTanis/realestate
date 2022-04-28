<?php

/**
 * Writen by KaanTanis <kt@kaantanis.com>
 *
 * Don't Modify anything this file if you are not a developer
 */

/** Register The Auto Loader */
require_once __DIR__ . '/../vendor/autoload.php';

/** Session started */
session_start();

/** Register The Helper */
require_once __DIR__ . '/../helpers/helpers.php';

/** Register The Routes */
include '../routes/web_admin.php';
