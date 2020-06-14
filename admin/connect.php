<?php

    $dsn = 'mysql:host=localhost;dbname=shop';
    $username = 'root';
    $pass = '';
    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND    =>  'SET NAMES UTF8',
    );

    try {
        $con = new PDO( $dsn, $username, $pass, $options );
        $con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    } catch ( PDOException $error ) {
        echo 'Can\'t Establish Connection' . $error->getMessage();
    }