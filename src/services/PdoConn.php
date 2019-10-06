<?php

namespace Flanges\Services;

use PDO;
use PDOException;

class PdoConn
{
    public static function init()
    {
        include(__DIR__.'/../config/secret.php');

        try {
            $dbh = 'mysql:host=' . $config['host'] . ';dbname=' . $config['dbName'];

            $pdo = new PDO($dbh, $config['username'], $config['password']);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
        } catch (PDOException $e) {
            die('Connection failed: ' . $e->getMessage());
        }
    }

}