<?php

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
  };