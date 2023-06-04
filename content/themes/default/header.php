<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= Theme::title() ?></title>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <? Asset::render('css'); ?>
</head>

<body>
    <header class="header j-space-between">
        <a href="" class="logo"><img src="<?= \Engine\Core\Template\Theme::getUrl()?>/assets/img/logo.png" alt=""></a>
        <div class="menu">
            <ul class="d-flex">
                <?foreach (Menu::getItems() as $item):?>
                    <li><a href="<?=$item['link']?>"><?=$item['name']?></a></li>
                <?endforeach?>
            </ul>
        </div>
        <div class="end">
        </div>
    </header>
    <div style="display:none">
        <form id="form-product" method="post">
            <h2><a href='#'>Заявка</a></h2>
            <div class='form'>
                <input name="id_home" type="hidden"/>
                <input name="fio" type="text" placeholder="ФИО" />
                <input name="number" type='text' placeholder='Номер телефона' />
                <input name="mail" type='mail' placeholder='Почта' />
                <input name="btnproduct" type='submit' value='Отправить' />
                <a href="<?= \Engine\Core\Template\Theme::getUrl()?>/assets/files/dogovor.doc">Скачать договор</a>
            </div>
        </form>
    </div>