<?php

include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare('INSERT INTO `register` (email, password)
    VALUES (?, ?)');
    $stmt->execute([$email, $password]);

    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <h1>Регистрация</h1>
    <form method="post" class="login">
        <div class="form_inner">
            <label>Электронная почта: </label>
            <input type="text" name="email" required><br>
            <label>Пароль: </label>
            <input type="text" name="password"><br>
            <label>Подтвердите пароль: </label>
            <input type="text" name="re-password"><br>
            <input type="submit" value="Добавить">
            <a href="index.php">Назад</a>
        </div>
        
    </form>
    
</body>
</html>