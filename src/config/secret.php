<?php
//správně by se nemělo verzovat
$config = [
    'host' => $_ENV['MYSQL_HOSTNAME'],
    'dbName' => $_ENV['MYSQL_DATABASE'],
    'username' => $_ENV['MYSQL_USER'],
    'password' => $_ENV['MYSQL_PASSWORD']
];