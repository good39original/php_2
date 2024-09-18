<?php 
  $price = 5;
  $off = 0.79;

  printf('Price : $%.2f', $price - $off);

  echo "<br>";

  echo ucwords(strtoupper('sato ichiro'));
  echo "<br>";
  echo ucwords(strtolower('SATO ICHIRO'));
  echo "<br>";
  echo strtoupper(ucwords('sato ichiro'));
  echo "<br>";
  echo strtolower(ucwords('SATO ICHIRO'));
?>