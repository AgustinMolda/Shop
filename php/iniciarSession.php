<?php

require_once "../auxiliar/Conexion.php";


    $username = limpiarCadena($_POST['login_usuario']);
    $password = limpiarCadena($_POST['login_clave']);

    
    $stmt = conectar()->query("SELECT * FROM users WHERE username= '$username'");
    
    

            
        /*if($username == $stmt['username'] && password_verify($password, $stmt['pass'])){
        
            header("Location: ../index.php?vista=main");
            exit();

        }else{
            echo "Usuario o contraseña incorrectos.";
        }*/

        if ($stmt->rowCount() == 1) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
            // Verificar la contraseña
            if (!password_verify($password, $user['pass'])) {
                $_SESSION['id']= $user['user_id'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['surename'] = $user['surename'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['phone'] = $user['phone'];
                $_SESSION['username']= $user['username'];
                header("Location: ../index.php?vista=main");
                exit();
            } else {
                echo " contraseña incorrectos.";
            }
        } else {
            echo "Usuario incorrectos.";
        }


    



    $stmt=null;
