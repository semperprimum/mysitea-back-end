<?php 
$operator = $_POST['operator'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$result = null;
$warning = '';

switch($operator) {
  case '+';
  $result = intval($num1) + intval($num2);
  break;

  case '-';
  $result = intval($num1) - intval($num2);
  break;

  case '*';
  $result = intval($num1) * intval($num2);
  break;

  case '/';
  if ($num2 == 0) {
    $warning = 'На ноль делить нельзя!';
  } elseif ($num2 != 0) {
    $warning = '';
    $result = intval($num1) / intval($num2);
  }
  break;
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Калькулятор</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
    <!-- Область основного контента -->
    <form action='' method="post">
      <label>Число 1:</label>
      <br />
      <input name='num1' type='text' />
      <br />
      <label>Оператор: </label>
      <br />
      <input name='operator' type='text' />
      <br />
      <label>Число 2: </label>
      <br />
      <input name='num2' type='text' />
      <br />
      <br />
      <input type='submit' value='Считать'> <br>
      <h2> <?= $num1 . ' ' . $operator . ' ' . $num2 . ' = ' . $result; ?> </h2>
      <h1 style="color: red;"> <?= $warning ?></h1>
    </form>
    <!-- Область основного контента -->
</body>

</html>