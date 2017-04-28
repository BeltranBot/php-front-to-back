<?php
print_r($_POST);
if (isset($_POST['submit'])) {
  $username = htmlentities($_POST['username']);
  echo "hello world";
  setcookie('username', $username, time()+36000);
  // 1 hour
  echo "hello mundo";
  header("Location: page2.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="page1.php" method="POST">
    <input type="text" name="username" placeholder="Enter Username">
    <br>
    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>
