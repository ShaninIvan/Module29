<?php
    define('PDO_DSN', "mysql:host=database:3306;dbname=userDB");
    define('PDO_USER', 'root');
    define('PDO_PASS', '1234');
    define('PDO_OPTION', [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_EMULATE_PREPARES   => true,
    ]);
?>
