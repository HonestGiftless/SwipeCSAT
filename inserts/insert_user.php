<?php

require_once '../connection/database.php';

$name = $_POST['name'];
$login = $_POST['login'];
$email = $_POST['mail'];
$password = $_POST['password'];
$birthday = $_POST['birthday'];
$phone = $_POST['phone'];
$user_type = isset($_POST['user_type']) ? 1 : 0;

$sql = "SELECT * FROM users WHERE login='$login' OR email='$email' OR phone='$phone'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    echo json_encode(["status" => "error", "message" => "Логин, почта или телефон уже занят."]);
} else {
    $password = password_hash(htmlspecialchars($password), PASSWORD_DEFAULT);
    $insert_sql = "INSERT INTO users (full_name, login, email, password, birthday, phone, user_type) VALUES ('$name', '$login', '$email', '$password', '$birthday', '$phone', $user_type)";
    $result = $connect->query($insert_sql);

    if ($result) {
        echo json_encode(["status" => "success", "message" => "Регистрация успешна."]);
    } else {
        echo json_encode(["status" => "error", "message" => "Ошибка при регистрации." . $connect->error]);
    }
}