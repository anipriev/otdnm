<?php defined('OTDNM') or die('Access denied'); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link href="<?= TEMPLATE ?>libs/bootstrap/bootstrap.css" rel="stylesheet"/>
        <link rel="stylesheet" href="<?= TEMPLATE ?>fonts/awesome/css/font-awesome.min.css"/>
        <link href="<?= TEMPLATE ?>css/main.css" rel="stylesheet"/>
        <link href="<?= TEMPLATE ?>css/media.css" rel="stylesheet"/>

        <title>Отдых на море</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="header row">
                <?php require_once 'tmpl/header.php'; ?>
            </div>
            <div class="wrapper">
                <ul>
                    <li><a href="\">Гавная</a></li>
                    <li><a href="about">О нас</a></li>
                    <li><a href="contacts">Контакты</a></li>
                    <li><a href="news">Новости</a></li>
                </ul>
                <?php require_once "tmpl/{$view}.php"; ?>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="<?= TEMPLATE ?>libs/bootstrap/bootstrap.js"></script>
    </body>
</html>
