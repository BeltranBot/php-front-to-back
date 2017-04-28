<?php
// check for submit
if (filter_has_var(INPUT_POST, 'submit')) {
  // get form data
  print_r($_POST);
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  // check required fields

  if (!empty($email) && !empty($name) && !empty($message)) {
    // passed
    // check email
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      $msg = 'Please use a valid email';
      $msgClass = 'alert-danger';
    } else {
      // passed
      // recipient email
      $toEmail = 'canti89@gmail.com';
      $subject = 'contact request from '. $name;
      $body = '<h2>Contact request</h2>
        <h4>name</h4><p>.$name.</p>
        <h4>email</h4><p>.$email.</p>
        <h4>message</h4><p>.$message.</p>';
      // Email headers
      $headers = 'MIME-Version: 1.0'.'\r\n';
      $headers .= 'Content-Type:text/html;charset-UTF-8'.'\r\n';

      // Additional Headers
      $headers .= 'From: '.$name."<".$email.">".'\r\n';

      if (mail($toEmail, $subject, $body, $headers)) {
        // Email sent
        $msg = 'your email has been sent';
        $msgClass = 'alert-success';
      } else {
        // failed
        $msg = 'your email was not sent.';
        $msgClass = 'alert-danger';
      }

    }
  } else {
    // failed
    $msg = 'Please fill in all fileds';
    $msgClass = "alert-danger";

  }
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
  <title>Contact us</title>
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <a href="index.php" class="navbar-brand">My website</a>
      </div>
    </div>
  </nav>
  <div class="container">
    <?php if (isset($msg)) : ?>
      <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    <?php endif; ?>
    <form action="index.php" method="post">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control"
        value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control"
        value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
      </div>
      <div class="form-group">
        <label for="mesasge">Message</label>
        <textarea type="text" name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>
