<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommers";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Recibir datos del formulario
$email = $_POST['email'];
$password = $_POST['password'];


// Insertar datos en la base de datos
$sql = "INSERT INTO registro (email, password) VALUES ('$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Data added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>