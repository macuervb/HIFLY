<?php

// Mostrar errores en PHP para facilitar la depuración
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Datos de conexión a la base de datos
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_system";

// Crear conexión
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Verificar la conexión
if (!$conn) {
    die("La conexión falló: " . mysqli_connect_error());
}

// Obtener datos del formulario
$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

// Preparar la consulta para evitar inyecciones SQL
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $nombre, $pass);

// Ejecutar la consulta
$stmt->execute();
$result = $stmt->get_result();
$nr = $result->num_rows;

// Verificar los resultados
if ($nr == 1) {
     header("Location: Adminview.html");
    exit();
} else {
    echo "No ingreso";
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
