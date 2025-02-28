<?php
        const HOST= "localhost";
        const DBNAME="shop";
        const USER= "root";
        const PASSWORD= "";
        function conectar(){
               return $conexion= new PDO('mysql:host='. HOST. 'dbname='. DBNAME, USER, PASSWORD);
        }



        function limpiarCadena($cadena){
            $cadena= trim($cadena);
            $cadena= str_ireplace("<script>", "", $cadena);
            $cadena= str_ireplace("</script>","",$cadena);
            $cadena = str_ireplace("<script src","",$cadena);
            $cadena= str_ireplace("<script type=","",$cadena);
            $cadena= str_ireplace("<script src","",$cadena);    
            $cadena= str_ireplace("<script type=","",$cadena);
            $cadena= str_ireplace("SELECT * FROM","",$cadena);
            $cadena= str_ireplace("DELETE FROM", "",$cadena);
            $cadena= str_ireplace("INSERT INTO","",$cadena);
            $cadena= str_ireplace("DROP TABLE","",$cadena);
            $cadena= str_ireplace("DROP DATABASE","",$cadena);
            $cadena=str_ireplace("TRUNCATE TABLE", "", $cadena);
            $cadena=str_ireplace("SHOW TABLES;", "", $cadena);
            $cadena=str_ireplace("SHOW DATABASES;", "", $cadena);
            $cadena=str_ireplace("<?php", "", $cadena);
            $cadena=str_ireplace("?>", "", $cadena);
            $cadena=str_ireplace("--", "", $cadena);
            $cadena=str_ireplace("^", "", $cadena);
            $cadena=str_ireplace("<", "", $cadena);
            $cadena=str_ireplace("[", "", $cadena);
            $cadena=str_ireplace("]", "", $cadena);
            $cadena=str_ireplace("==", "", $cadena);
            $cadena=str_ireplace(";", "", $cadena);
            $cadena=str_ireplace("::", "", $cadena);
            $cadena= trim($cadena);
            $cadena= stripslashes($cadena);
            return $cadena;

        }