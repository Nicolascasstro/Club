<?php

    // Creamos una clase para usarla como objeto mas adelante(PDO)

    class conexion{
        
        public function get_conexion(){

            // Los valores de las variables se cambian segun los datos de el hosting
            
            $user = "root";
            $pass = "";
            $host = "localhost";
            $db = "sbam_club";

            $conexion = new PDO("mysql: host=$host; dbname=$db", $user , $pass);
            return $conexion;

        }
    }


?>