<?php
include 'conn.php';
session_start();
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $_SESSION['username'] = $username;
        header('location:home.php');
    }else{
        echo "Invalid username or password";
    }
}
?>
