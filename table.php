<!DOCTYPE html>
<?php
    $cols=10;
    $rows=10;
    $color="yellow";
    // $cols = rand(1,10);
    // $rows = rand(1,10);
    include "inc/table.inc.php";

    setcookie('cols', $cols, time()+86400);
    setcookie('rows', $rows, time()+86400);
    setcookie('color', $color, time()+86400);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $cols = abs((int) $_POST['cols']); 
      $rows = abs((int) $_POST['rows']); 
      $color = trim(strip_tags($_POST['color']));
      setcookie('cols', $cols, time()+86400);
      setcookie('rows', $rows, time()+86400);
      setcookie('color', $color, time()+86400);
      } 
      $cols = ($cols) ? $cols : 10; 
      $rows = ($rows) ? $rows : 10; 
      $color = ($color) ? $color : 'yellow'; 
?>
<html>

<head>
  <title>Таблица умножения</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

    <!-- Область основного контента -->
    <form action='' method="post">
      <label>Количество колонок: </label>
      <br />
      <input name='cols' type='text' value="<?= $cols ?>" />
      <br />
      <label>Количество строк: </label>
      <br />
      <input name='rows' type='text' value="<?= $rows ?>" />
      <br />
      <label>Цвет: </label>
      <br />
      <input name='color' type='text' value="<?= $color ?>" />
      <br />
      <br />
      <input type='submit' value='Создать' />
    </form>
    <!-- Таблица -->
    <table border='1', width='200'>
    
    <?php drawTable($cols, $rows, $color) ?>

    </table>
    <!-- Таблица -->
    <!-- Область основного контента -->
</body>

</html>