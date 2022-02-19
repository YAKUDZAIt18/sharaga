<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script scr="js/main.js" defer></script>
    <title>Document</title>
</head>

<body>
    <?php
    include 'nav.php';
    nav(2);
    ?>
    <div class="register">
        <!-- Указываем в каком файле будет обрабатываться регистрация -->
        <form action="regisraction.php" class="form" method="POST">
            <!-- рисуем поля -->
            <input type="text" placeholder="ФИО" name="fio" required id="fio">
            <input type="text" placeholder="Логин" name="login" required>
            <input type="email" placeholder="Эл.почта" name="email" required>
            <input type="password" placeholder="Пароль" name="password" required>
            <input type="password" placeholder="Повтор пароля" required>
            <label><input type="checkbox">Согласие на обработку перс.данных</label>
            <button>Зарегистрировать</button>
            <p id="error" class="error"></p>
        </form>
    </div>
</body>

</html>