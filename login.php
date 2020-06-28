<?php

    $correo = $_REQUEST ['email'];
    $contrasena = $_REQUEST ['contra'];
    $contrasena = md5 ($contrasena);
     
    echo $correo;
    echo $contrasena;
   
    $query = "SELECT * FROM usuario WHERE Correo = '".$correo."' AND Contrasena = '".$contrasena."'";
    $array = $resultado->fetch_array(MYSQLI_NUM);
    $row = $resultado->num_rows;

    if($row > 0)
    {
        echo '1-'.$array[0];
    }
    else{
        $queryArt = "SELECT * FROM artista WHERE Correo = '".$correo."' AND Contrasena = '".$contrasena."'";
        $resultadoArt = $conn->query($queryArt);
        $arrayArt = $resultadoArt->fetch_array(MYSQLI_NUM);
        $rowArt = $resultadoArt->num_rows;
        if($rowArt > 0){
        echo '2-'.$arrayArt[0];
    }
}
  mysqli_close($conn);
 

?>