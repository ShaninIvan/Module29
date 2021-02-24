<?php
    final class Database{
        private static $connect = null;

        public static function connection(){
            if (self::$connect === null){
                require_once(ROOT . '/app/config/dbConfig.php');
                self::$connect = new PDO(PDO_DSN, PDO_USER, PDO_PASS, PDO_OPTION);
                return self::$connect;
            }else{
                return self::$connect;
            }
        }
    }
?>
