<?php
require_once(__DIR__ . '/FlangesConn.php');

use Flanges\Services\FlangesConn;

$flanges = new FlangesConn($_GET['pn'],$_GET['dn']);

echo json_encode($flanges->getRequest());