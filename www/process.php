<?php
session_start();

$name = htmlspecialchars($_POST['user_name'] ?? '');
$count = htmlspecialchars($_POST['pass_count'] ?? '');
$type = $_POST['type'] ?? '';
$car = $_POST['car'] ?? '';
$bag = isset($_POST['bag']) ? 'Да' : 'Нет';

$errors = [];
if (empty($name)) {
    $errors[] = "Ошибка: Имя не может быть пустым!";
}
if ($count < 1 || $count > 8) {
    $errors[] = "Ошибка: Количество пассажиров должно быть от 1 до 8!";
}

if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header("Location: index.php");
    exit();
}

$_SESSION['user_name'] = $name;
$_SESSION['pass_count'] = $count;

$line = "$name; $count; $type; $car; $bag\n";
file_put_contents("data.txt", $line, FILE_APPEND);

header("Location: index.php");
exit();
