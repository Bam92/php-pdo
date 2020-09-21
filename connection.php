<?php

function db_connect()
{
    try {
        require "config.php";
        $connection = new PDO($dsn, $username, $password, $options);

        return $connection;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}