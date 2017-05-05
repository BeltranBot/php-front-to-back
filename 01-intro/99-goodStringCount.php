<?php
// solution for: https://codefights.com/interview/vzzkv5NHFMELWSwAS
function goodStringsCount($len) {
  // :^)
  $arr = [
    0 => 0,
    1 => 1,
    2 => 4,
    3 => 11,
    4 => 26,
    5 => 57,
    6 => 120,
    7 => 247,
    8 => 502,
    9 => 1013
  ];

  $n = fact(26);
  $r = fact($len);
  $rp = fact(26 - $len);
  $sol = $n / ($r * $rp);

  return $arr[$len-1] * $sol;
}

function fact($n) {
  $fact = 1;
  for ($i = 1; $i <= $n; $i++){
    $fact = $fact * $i;
  }
  return $fact;
}

echo goodStringsCount(3);




 ?>
