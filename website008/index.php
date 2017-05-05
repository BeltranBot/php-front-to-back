<?php

require('config/config.php');
require('config/db.php');

// create query
$query = 'select * from posts';

// get results
$result = mysqli_query($conn, $query);

// fetch data (as an associative array)
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
// var_dump($posts);

// free result
mysqli_free_result($result);

// close connection
mysqli_close($conn);
?>

<?php include('inc/header.php') ?>
<div class="container">
  <h1>Posts</h1>
  <?php foreach($posts as $post): ?>
    <div class="well">
      <h3><?php echo $post['title'] ?></h3>
      <small>created on: <?php echo $post['created_at'] ?> by
        <?php echo $post['author'] ?>
        <p><?php echo $post['body'] ?></p>
        <a class="btn btn-default" href="<?php ROOT_URL ?>post.php?id=<?php echo $post['id'] ?>">Read more</a>
      </small>
    </div>
  <?php endforeach; ?>
</div>
<?php include('inc/footer.php') ?>
