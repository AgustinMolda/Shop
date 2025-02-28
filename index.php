<!DOCTYPE html>
<html lang="es-AR">
        <?php include_once "./auxiliar/head.php" ?>
        
<body>
            <?php
                   $vista= isset($_GET['vista']) ? $_GET['vista']:null; 

                    if(!empty($vista)){
                            $rutaArchivo= "./views/" . $vista . ".php";
                    

                    if(file_exists($rutaArchivo)){
                           include_once $rutaArchivo; 
                    }else{
                            echo "No se ha espesificado ninguna vista";
                    }

                }
            ?>
            <header>
                    <h1><strong>WELCOME</strong></h1>
                        <div>
                            <a href="./views/register.php" class="btn btn-round -btn-green">Registrarse</a>
                            <a href="./views/login.php" class="btn btn-round -btn-green">Iniciar session</a>
                        </div>
            </header>
            <main>
                    <img src="./img/undraw_web-shopping_m3o2.png" alt="SHOP">
            </main>
            
</body>
</html>