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
                            echo '<div class="error-message"> No se ha espesificado ninguna vista</div>';
                    }

                }else{
                        header("Location: index.php?vista=home");
                }
                
            ?>
        
</body>
</html>