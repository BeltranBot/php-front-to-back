<?php
/*
  if (isset($_GET['name'])) {
    $name = htmlentities($_GET['name']);
    echo $name;
  }

  if (isset($_POST['name'])) {
    $name = htmlentities($_POST['name']);
    echo $name;
  }
*/

if(isset($_REQUEST['name'])) {
  $name = htmlentities($_REQUEST['name']);
  echo $name;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My website</title>
</head>
<body>
  <form action="08-get_post.php" method="POST">
    <div>
      <label for="name">Name</label><br>
      <input type="text" name="name">
    </div>
    <div>
      <label for="email">Email</label><br>
      <input type="text" name="email">
    </div>
    <input type="submit" value="submit">
  </form>

</body>
</html>
