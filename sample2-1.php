<?php 
  $price = 5;
  $off = 0.79;

  printf('Price : $%.2f', $price - $off);

  echo "<br>";

  echo ucwords(strtoupper('sato ichiro')); //全て大文字で表示される
  echo "<br>";
  echo ucwords(strtolower('SATO ICHIRO')); //頭の文字のみ大文字それ以外は小文字で表示される
  echo "<br>";
  echo strtoupper(ucwords('sato ichiro')); //全て大文字で表示される
  echo "<br>";
  echo strtolower(ucwords('SATO ICHIRO')); //全て小文字で表示される

  echo "<br>";

  $number = 0;

  $number +=1;
  $number +=2;
  $number +=3;
  $number +=4;
  $number +=5;

  echo 'number : '. $number;
?>