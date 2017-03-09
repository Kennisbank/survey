<?php

$servername = "rdbms.strato.de";
$username = "U2882885";
$password = "KYGV85gbj9";

// Connectie met database
$conn = new mysqli($servername, $username, $password);

// Connectie met database testen
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>