<?php
    include('db.php');

    $USUARIO=$_POST['usuario'];
    $PASSWORD=$_POST['password'];
    $consulta="SELECT* FROM personal WHERE usuario='$USUARIO' and password='$PASSWORD'";
    $resultado=mysqli_query($conexion,$consulta);

    $filas=mysqli_num_rows($resultado);

    if($filas){
        header("location:home.html");

    }else{
        include("index.html");
        ?>
            <h1>error de autentificacion</h1>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>