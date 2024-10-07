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

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Usando MD5 para coincidir con la contraseña almacenada

    // Consulta para verificar el usuario y la contraseña
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login exitoso
        echo "Bienvenido, " . $username . "! Has iniciado sesión correctamente.";
        // Aquí podrías redirigir a otra página o iniciar una sesión
    } else {
        // Login fallido
        echo "Error: Usuario o contraseña incorrectos.";
    }
}

$conn->close();
?>
