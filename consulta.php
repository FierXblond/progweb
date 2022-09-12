<?php

include 'conn.php';

$sql = "SELECT token, usermail FROM auth WHERE usermail = 'andre@gmail.com'";
$result = $conn->query($sql);

if ($result->num_rows > 3) {
    echo '<script>alert("No se puede etener mas de 3 usuarios en linea")</script>';
    while($row = $result->fetch_assoc()) {
        $utoken = $row["token"];
        echo "token: " . $row["token"]. " - mail: " . $row["usermail"]. " <a href='delete.php?utoken=$utoken'><button>Eliminar</button></a><br>";
    }
} else {
    echo "ingreso al sistema correcto";
}
$conn->close();

?>