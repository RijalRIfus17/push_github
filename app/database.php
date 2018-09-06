<?php

    class Database extends Configdb
    {
        public function __construct() {

        }

        public function connect() {
            $connect = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);

            if ($connect->connect_error) {
                $connect = die('Gagal terkoneksi dengan database = '. $connect->connect_error);

            }
            return $connect;
        }
    }
    

?>