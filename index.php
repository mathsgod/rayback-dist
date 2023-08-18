<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
Phar::loadPhar("rayback.phar");
require_once "phar://rayback.phar/index.php";
