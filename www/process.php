<?php
session_start();
$name = htmlspecialchars($_POST['user_name'] ?? '');
$count = htmlspecialchars($_POST['pass_count'] ?? '');

$_SESSION['user_name'] = $name;
$_SESSION['pass_count'] = $count;

$line = $name . ";" . $count . "\n";
file_put_contents("data.txt", $line, FILE_APPEND);

header("Location: index.php");
exit();
