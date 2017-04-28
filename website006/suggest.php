<?php
$people = [];
$people[] = "steve";
$people[] = "john";
$people[] = "kathy";
$people[] = "evan";
$people[] = "anthony";
$people[] = "tome";
$people[] = "rhonda";
$people[] = "hal";
$people[] = "ernie";
$people[] = "johanna";
$people[] = "farrah";
$people[] = "linda";
$people[] = "shawn";
$people[] = "olivia";
$people[] = "derek";
$people[] = "amanda";
$people[] = "rachel";
$people[] = "katie";
$people[] = "jillian";
$people[] = "jose";
$people[] = "malcom";
$people[] = "greg";
$people[] = "mary";
$people[] = "brad";
$people[] = "mike";

// get query string
$q = $_REQUEST['q'];

$suggestion = "";

if ($q !== "") {
  $q = strtolower($q);
  $len = strlen($q);

  foreach($people as $person) {
    if (stristr($q, substr($person, 0, $len))) {
      if ($suggestion === "") {
        $suggestion = $person;
      } else {
        $suggestion .= ", " . $person;
      }
    }
  }
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;
 ?>
