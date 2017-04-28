<?php

$loggedIn = true;

if ($loggedIn) {
  echo 'You are logged in';
} else {
  echo 'You are not logged in';
}

echo "<br>";

echo ($loggedIn) ? 'You are logged in' : 'You are not logged in';

echo "<br>";

$isRegistered = ($loggedIn == true) ? true : false;

echo $isRegistered;

echo "<br>";

$age = 20;
$score = 15;

echo 'Your score is: '.($score > 10 ? ($age > 10 ? 'average': 'exceptional'): ($age > 10 ? 'Horrible':'Average'));
?>

<div>
  <?php if($loggedIn) { ?>
    <h1>Welcome user</h1>
  <?php } else { ?>
    <h1>Welcome guess</h1>
  <?php } ?>
</div>

<div>
  <?php if ($loggedIn) : ?>
    <h1>Welcome user</h1>
  <?php else : ?>
    <h1>Welcome guess</h1>
  <?php endif; ?>
</div>
