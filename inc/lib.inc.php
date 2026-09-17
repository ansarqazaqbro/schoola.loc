<?php
// Функция отрисовки таблицы умножения
function drawTable(int $cols, int $rows, string $color): void {
  echo '<table border="1" width="200">';

  // Внешний цикл - строки таблицы
  for ($row = 1; $row <= $rows; $row++) {
    echo '<tr>';

    // Внутренний цикл - столбцы таблицы
    for ($col = 1; $col <= $cols; $col++) {
      $value = $row * $col;

      // Проверяем, находится ли ячейка в первой строке или первом столбце
      if ($row === 1 || $col === 1) {
        echo '<td style="font-weight: bold; text-align: center; background-color: ' . $color . ';">' . $value . '</td>';
      } else {
        echo '<td>' . $value . '</td>';
      }
    }

    echo '</tr>';
  }

  echo '</table>';
}

// Функция отрисовки меню навигации
function drawMenu(array $menu, bool $vertical = true): void {
  if ($vertical) {
    // Вертикальное меню - обычный список
    echo '<ul>';
    foreach ($menu as $item) {
      echo '<li><a href="' . $item['href'] . '">' . $item['link'] . '</a></li>';
    }
    echo '</ul>';
  } else {
    // Горизонтальное меню - пункты выстраиваются в строку
    echo '<ul style="list-style: none; padding: 0; margin: 0;">';
    foreach ($menu as $item) {
      echo '<li style="display: inline-block; margin-right: 15px;"><a href="' . $item['href'] . '">' . $item['link'] . '</a></li>';
    }
    echo '</ul>';
  }
}