<?php
        require_once "../auxiliar/Conexion.php";

        $conexion= conectar();

        $nombre= limpiarCadena($_POST['nombre']);
        $apellido= limpiarCadena($_POST['apellido']);
        $email= limpiarCadena($_POST['email']);
        $telefono= limpiarCadena($_POST['telefono']);
        $usuario= limpiarCadena($_POST['usuario']);
        $clave= limpiarCadena($_POST['contrasenia']);
        $repetirClave=limpiarCadena($_POST['contrasenia2']);
        $success= false;

        if($clave==$repetirClave){
            
               $clave= password_hash($clave,PASSWORD_BCRYPT,['cost'=>10]);
            
        }else{
            echo 'Las claves no coinciden';
            exit();
        }
     

        $user= $conexion->prepare("INSERT INTO users(name,surename,email,phone,username,pass) VALUES(:nombre,:surename,:email,:phone,:username,:pass)");

        $data=[
            ':nombre'=>$nombre,
            ':surename' =>$apellido,
            ':email' => $email,
            ':phone' => $telefono,
            ':username'=> $usuario,
            ':pass' => $clave
        ];

       
        $user->execute($data);
        if($user->execute()){
            echo '<p>Usuario registrado con éxito</p>';
            header("Location: ../index.php");
        }
        

       

        $user=null;
