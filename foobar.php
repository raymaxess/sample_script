<?php

$min = 1;
$max = 100;
$out = '';

for ($x = $min; $x <= $max; $x++) {
  if ($x % 3 == 0 && $x % 5 == 0) {
    $out =  $out . 'foobar, ';
  }
  elseif ($x % 3 == 0) {
    $out =  $out . 'foo, ';
  }
  elseif ($x % 5 == 0) {
    $out =  $out . 'bar, ';
  }
  else {
    $out =  $out . $x . ', ';
  }
}

print rtrim($out, ', ');

?>