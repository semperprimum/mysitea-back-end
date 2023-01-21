<!DOCTYPE html>
<?php
    // $cols = rand(1,10);
    // $rows = rand(1,10);

    function drawTable($rows, $cols, $color) {
      $firstR = true;
      $firstC = true;
    for ($r = 1; $r <= $rows; $r++) {
      if ($firstR) {
        echo "<tr class='first', style='background-color: $color;'>";
        $firstR = false;
      } else {
        echo "<tr>";
        $firstC = true;
      }
      for ($c = 1; $c <= $cols; $c++) {
        $cellValue = $c * $r;
        if ($firstC) {
          echo "<td class='first', style='background-color: $color;'>$cellValue</td>";
          $firstC = false;
        } else {
          echo "<td>$cellValue</td>";
        }
      }
    }
  }
?>
<html>

<head>
  <title>Таблица умножения</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1>Таблица умножения</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <form action=''>
      <label>Количество колонок: </label>
      <br />
      <input name='cols' type='text' value="" />
      <br />
      <label>Количество строк: </label>
      <br />
      <input name='rows' type='text' value="" />
      <br />
      <label>Цвет: </label>
      <br />
      <input name='color' type='text' value="" />
      <br />
      <br />
      <input type='submit' value='Создать' />
    </form>
    <!-- Таблица -->
    <table border='1', width='200'>
    
    <?php drawTable(5, 5, 'blue') ?>

    </table>
    <!-- Таблица -->
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <h2>Навигация по сайту</h2>
    <!-- Меню -->
    <ul>
      <li><a href='index.php'>Домой</a>
      </li>
      <li><a href='about.php'>О нас</a>
      </li>
      <li><a href='contact.php'>Контакты</a>
      </li>
      <li><a href='table.php'>Таблица умножения</a>
      </li>
      <li><a href='calc.php'>Калькулятор</a>
      </li>
    </ul>
    <!-- Меню -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    &copy; Супер Мега Веб-мастер, 2000 &ndash; 2021
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>