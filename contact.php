<!DOCTYPE html>
<html>

<head>
  <title>Контакты</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
    <!-- Область основного контента -->
    <?php
    $postMaxSize = ini_get("post_max_size");
    $sizeUnit = trim($postMaxSize[strlen($postMaxSize)-1]);
    $sizeValue = (int)$postMaxSize;
    switch ($sizeUnit) {
        case 'G':
            $sizeValue *= 1024;
        case 'M':
            $sizeValue *= 1024;
        case 'K':
            $sizeValue *= 1024;
    }
    $size = $sizeValue;
    ?>
    <h3>Адрес</h3>
    <p>123456 Москва, Малый Американский переулок 21</p>
    <h3>Задайте вопрос</h3>
    <form action='' method='post'>
      <label>Тема письма: </label>
      <br />
      <input name='subject' type='text' size="50" />
      <br />
      <label>Содержание: </label>
      <br />
      <textarea name='body' cols="50" rows="10"></textarea>
      <br />
      <br />
      <input type='submit' value='Отправить' />
    </form>
    <p>Максимальный размер отправляемых данных <?= $size ?> байт.</p> 
    <!-- Область основного контента -->
</body>

</html>