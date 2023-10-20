<?php
require('../_partials/_helpers.php');
require('../_partials/_header.php');
require('test_table.php');
ensureLogIn();
global $dev_score;
global $test_score;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/Normalize%20copy.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Commissioner&display=swap" rel="stylesheet">
    <title>Хом</title>
</head>
<body>
<div class="option-window">
    <div class="photo">
        <img src="../../image/Male_User-1024.webp" alt="Ваше фото" height="162px" width="162px">
    </div>
    <div class="account">
        <button href="<?= url('account/acc_form') ?>" class="account-text" type="submit">Личный кабинет</button>
    </div>
    <div class="account" type="reset">
        <button href="<?= url('account/subscription/sub_form') ?>" class="account-text" type="button">Подписка</button>
    </div>
    <div class="account">
        <button href="<?= url('account/api_form') ?>" class="account-text" type="button">Страница счета</button>
    </div>
    <div class="account">
        <button href="<?= url('account/api_form') ?>" class="account-text" type="button">Настройки Redmine</button>
    </div>
    <div class="account">
        <button href="<?= url('auth/_sign-in_form') ?>" class="account-text" type="button">Выход</button>
    </div>
</div>
<div class="window-account">
    <img src="../../image/Male_User-1024.webp" alt="ваше фото" width="100px" height="100px" class="image-home">
    <p class="home-name">Валентин</p>
    <p class="home-surname">Сушков</p>
    <p class="home-organisation">Shellpea</p>
    <p class="home-status">Project manager</p>
</div>
</body>
</html>
