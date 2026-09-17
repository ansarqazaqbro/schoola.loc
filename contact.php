<?php
  $size = ini_get('post_max_size');
  $unit = strtoupper(substr($size, -1));
  $number = (int) $size;

  switch ($unit) {
    case 'G':
      $size = $number * 1024 * 1024 * 1024;
      break;
    case 'M':
      $size = $number * 1024 * 1024;
      break;
    case 'K':
      $size = $number * 1024;
      break;
    default:
      $size = $number;
      break;
  }
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