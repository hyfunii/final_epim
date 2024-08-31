<?php
include "db.php";
include "session.php";

$error = "";
$user = $_POST['user']; 
$email = $_POST['email'];
$password = $_POST['password'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userRegister = "SELECT*FROM user where id = ?";
    $stmt = $conn->prepare($userRegister);
    $stmt -> bind_param('i', $user_id);
    $stmt -> execute();
    $result = $stmt->get_result();

    if (empty($email) || empty($password) ||empty($nama)) {
        $error="Please fill the column";
    }else{
        $hashpassword = password_verify($password, $user['password'] -> PASSWORD_DEFAULT);
        $queryRegister = "INSERT INTO user('nama','email','password') VALUE (?,?,?)";
        $stmt = $conn->prepare($queryRegister);
        $stmt -> bind_param('sss', $user );
        $stmt -> execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $nama = $_SESSION['nama'];
            $password = $_SESSION['password'];
            header('Location: login.php');
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>

    </style>
</head>
<body>
    <h2>Register</h2>
    <label for="nama">Name: </label>
    <input type="text" id="name" class="name" required>

    <label for="email">Email: </label>
    <input type="email" name="email" id="email" required>

    <label for="password">Password: </label>
    <input type="password" name="password" class="password" required>

    <button type="submit">Simpan</button>
</body>
</html>
