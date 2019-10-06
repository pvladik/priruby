<?php
require_once(__DIR__.'/vendor/autoload.php');
require_once(__DIR__ . '/services/FlangesConn.php');

use Latte\Engine;

$latte = new Engine();

$latte->render('views/index.latte', []);