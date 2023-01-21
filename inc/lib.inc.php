<?php
  function drawMenu($menu, $vertical=true) {
    if ($vertical) {
    foreach ($menu as $menuItem)  { 
      echo isset($menuItem['href']) ? "<li><a href=".$menuItem['href'].">".$menuItem['link']."</a></li>" : '';
      } 
    } else {
      foreach ($menu as $menuItem) {
        echo isset($menuItem['href']) ? "<a href=".$menuItem['href'].">".$menuItem['link']." </a>" : '';
      }
    }  
  };