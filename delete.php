<?php

$utoken = $_GET['utoken'];

include 'conn.php';

$sql = "DELETE FROM auth WHERE token = '$utoken'";

if ($conn->query($sql) === TRUE) {
    header("Location: consulta.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
