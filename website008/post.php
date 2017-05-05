<?php

require('config/config.php');
require('config/db.php');

// get id
$id = mysqli_real_escape_string($conn, $_GET['id']);

// create query
$query = 'select * from posts where id = ' . $id;

// get results
$result = mysqli_query($conn, $query);

// fetch data (as an associative array)
$post = mysqli_fetch_assoc($result);
// var_dump($posts);

// free result
mysqli_free_result($result);

// close connection
mysqli_close($conn);
?>

<?php include('inc/header.php') ?>
  <div class="container">
    <a href="<?php echo ROOT_URL ?>" class="btn btn-default">Back</a>
    <h1>Post</h1>
    <h3><?php echo $post['title'] ?></h3>
    <small>created on: <?php echo $post['created_at'] ?> by
      <?php echo $post['author'] ?>
      <p><?php echo $post['body'] ?></p>
    </small>
  </div>
<?php include('inc/footer.php') ?>
