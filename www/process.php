<?php
session_start();
$name = htmlspecialchars($_POST['user_name'] ?? '');
$count = htmlspecialchars($_POST['pass_count'] ?? '');

$_SESSION['user_name'] = $name;
$_SESSION['pass_count'] = $count;

header("Location: index.php");
exit();
