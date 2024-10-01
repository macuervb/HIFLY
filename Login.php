<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_system";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
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
