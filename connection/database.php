<?php

$hostname = "127.0.0.1";
$username = "root";
$password = "";
$database = "swipe_csat";

$connect = new mysqli($hostname, $username, $password, $database);

if ($connect->connect_error) {
    die("Ошибка при подключении: ". $connect->connect_error);
}