<?php

class Conexion{

    static public function conectar(){

        $link = new PDO("mysql:host=buqwnwgzogvxmtay0e5c-mysql.services.clever-cloud.com;dbname=buqwnwgzogvxmtay0e5c",
                        "uwcduieb8caifmxx",
                        "hSuz1p4dWvcNSJWkuiiO",
                        );

        $link->exec("set names utf8");

        return $link;

    }
}