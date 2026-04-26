<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Такси</title>
</head>
<body>
    <h1>Управление заказами </h1>

    <?php if(isset($_COOKIE['last_client'])): ?>
        <p style="color: green; font-weight: bold;">
            Рады видеть вас снова, <?= htmlspecialchars($_COOKIE['last_client']) ?>!
        </p>
    <?php endif; ?> 

    <?php if(isset($_SESSION['errors'])): ?>
        <ul style="color:red;">
            <?php foreach($_SESSION['errors'] as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
        <?php unset($_SESSION['errors']); ?>
    <?php endif; ?>

    <?php if(isset($_SESSION['user_name'])): ?>
        <p>Данные последнего заказа:</p>
        <ul>
            <li>Имя: <?= $_SESSION['user_name'] ?></li>
            <li>Пассажиров: <?= $_SESSION['pass_count'] ?></li>
            <li>Тариф: <?= $_SESSION['type'] ?? 'Не указан' ?></li>
            <li>Тип авто: <?= $_SESSION['car'] ?? 'Не указан' ?></li>
            <li>Багаж: <?= $_SESSION['bag'] ?? 'Нет' ?></li>
        </ul>
    <?php else: ?>
        <p>Данных о заказах пока нет.</p>
    <?php endif; ?>

    <br>
    <a href="form.html">Заполнить форму</a> | 
    <a href="view.php">Посмотреть все данные</a>
</body>
</html>
