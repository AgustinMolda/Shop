<?php
        const HOST= "localhost";
        const DBNAME="shop";
        const USER= "root";
        const PASSWORD= "";
        function conectar(){
               return $conexion= new PDO('mysql:host='. HOST. 'dbname='. DBNAME, USER, PASSWORD);
        }
    