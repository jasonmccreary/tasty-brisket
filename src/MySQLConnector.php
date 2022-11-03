<?php

namespace JMac;

class MySQLConnector
{
    public function users()
    {
        $mysqli = new \mysqli(
            getenv('DB_HOST'),
            getenv('DB_USER'),
            getenv('DB_PASSWORD'),
            getenv('DB_NAME'),
            getenv('DB_PORT')
        );

        $result = $mysqli->query('SELECT user FROM mysql.user');

        return $result->fetch_all();
    }
}
