<?php 
include "inc/lib.inc.php";
include "inc/data.inc.php";

// Инициализация заголовков страницы 
$title = 'Сайт нашей школы'; 
$header = "$welcome, Гость!"; 
$id = isset($_GET['id']) ? strtolower(strip_tags(trim($_GET['id']))) : ''; 
switch($id){ 
case 'about.php': 
$title = 'О сайте'; 
$header = 'О нашем сайте'; 
break; 
case 'contact.php': 
$title = 'Контакты'; 
$header = 'Обратная связь'; 
break; 
case 'table.php': 
$title = 'Таблица умножения'; 
$header = 'Таблица умножения'; 
break; 
case 'calc.php': 
$title = 'Он-лайн калькулятор'; 
$header = 'Калькулятор'; 
break; 
} 
?> 

<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title?> </title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
    <?php include "inc/top.inc.php"; ?>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1><?php echo $header?> </h1>

    <!-- Заголовок -->
    <!-- Область основного контента -->
    <?php 
switch($id){ 
case 'about.php': 
include 'about.php'; 
break; 
case 'contact.php': 
include 'contact.php'; 
break; 
case 'table.php': 
include 'table.php'; 
break; 
case 'calc.php': 
include 'calc.php'; 
break; 
default: 
include 'inc/index.inc.php'; 
} 
?> 
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <!-- Навигация -->
  <?php include "inc/menu.inc.php" ?>
    <!-- Навигация -->
</div>
    <div id="footer">
      <!-- Нижняя часть страницы -->
      <?php include "inc/bottom.inc.php" ?>
      <!-- Нижняя часть страницы -->
    </div>
  </body>
  
  </html>
