<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Taxi Main</title></head>
<body>
    <h1>Система заказов такси</h1>
    <?php if(isset($_SESSION['user_name'])): ?>
        <p>Последний заказ: <?= $_SESSION['user_name'] ?> (<?= $_SESSION['pass_count'] ?> чел.)</p>
    <?php endif; ?>
    <a href="form.html">Сделать заказ</a>
</body>
</html>
