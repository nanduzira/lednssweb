<?php
    class DB_CONNECT {
        function __construct() {

        }
        function __destruct() {

        }
        public function connect() {
            require_once 'config.php';
            $DB_HOST = DB_HOST;
            $DB_DATABASE = DB_DATABASE;
            $DB_USER = DB_USER;
            $DB_PASSWORD = DB_PASSWORD;
            try {
                $con = new PDO("mysql:host=$DB_HOST;dbname=$DB_DATABASE", $DB_USER, $DB_PASSWORD);
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $con;
            }
            catch(PDOException $e) {
                return false;
            }
        }
        public function close() {
            $con = null;
        }
    }
?>