<?php 
      $leftMenu = [ 
        ['link'=>'Домой', 'href'=>'index.php'], 
        ['link'=>'О нас', 'href'=>'index.php?id=about.php'], 
        ['link'=>'Контакты', 'href'=>'index.php?id=contact.php'],
        ['link'=>'Таблица умножения', 'href'=>'index.php?id=table.php'], 
        ['link'=>'Калькулятор', 'href'=>'index.php?id=calc.php'] 
        ];
  
        date_default_timezone_set('Asia/Almaty');
  
        $day = date('j');
        $mon = date('F');
        $year = date('Y');
  
        $hour = date('H');
  
        if ($hour > 0 && $hour < 6) {
          $welcome = 'Доброй ночи';
        } elseif ($hour >= 6 && $hour < 12) {
          $welcome = 'Доброе утро';
        } elseif ($hour >= 12 && $hour < 18) {
          $welcome = 'Добрый день';
        } elseif ($hour >= 18 && $hour <= 23) {
          $welcome = 'Добрый вечер';
        } else {
          $welcome = 'Доброй ночи';
        }  
?>