<?php
// Conexión a la base de datos
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "Tabla";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Verificar la conexión
if (!$conn) {
    die("La conexión falló: " .mysqli_connect_error());
}

$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"]

$query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$nombre."' and password = '".$pass."');
$nr = mysqli_num_rows($query);

if($nr == 1)
{
    // header ("locatio: index.html")
    echo "Bienvenido:" .$nombre
}
    else if ($nr == 0)
    {
    echo "No ingreso";
}
