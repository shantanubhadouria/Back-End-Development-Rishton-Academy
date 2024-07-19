<?php
function OpenCon() {
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "rishton_academy";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function CloseCon($conn) {
    $conn->close();
}
?>
