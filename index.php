<?php

// Start session
session_start();
// Include backend
include "functions/login.php";
include "functions/comment.php";

?>
<!DOCTYPE html>
<html lang="cs">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Apache</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.min.css" />
</head>

<body>
  <div class="login-form">
    <div class="logo"><a href="/"><i class="fas fa-shield-alt"></i> BPC-AKR</a></div>
    <?php if ($_SESSION['loggedin']) : ?>
      <form method="post">
        <div class="login-header">Logged in: <?= $_SESSION['username'] ?></div>
        <button type="submit" name="logout" class="btn btn-primary">
          Sign out
        </button>
      </form>
    <?php else : ?>
      <div class="login-header">Login</div>
      <form method="post">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control" id="username" />
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" id="password" />
        </div>
        <div class="error">
          <?= $formError ?>
        </div>
        <button type="submit" name="login" class="btn btn-primary">
          Sign in
        </button>
      </form>
    <?php endif; ?>
  </div>
  <div class="content">
    <div class="header">
      <h1>Website security vulnerabilities</h1>
    </div>
    <div class="content-container">
      <h2>Discussion</h2>
      <?php
      if ($result->num_rows > 0) :
        while ($row = $result->fetch_assoc()) :
      ?>
          <div class="comment">
            <div class="sep">
              <h3><?= $row['nickname'] ?></h3>
              <?php if ($_SESSION['loggedin']) : ?>
                <a href="/functions/delete.php?id=<?= $row['id'] ?>"><i class="fas fa-times"></i></a>
              <?php endif; ?>
            </div>
            <div class="date"><?= date('d.m.Y H:i:s', strtotime($row['date'])) ?></div>
            <p>
              <?= $row['message'] ?>
            </p>
          </div>
        <?php
        endwhile;
      else :
        ?>
      <?php endif; ?>
      <hr />
      <form method="post">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <label for="nickname">Nickame</label>
            <input type="text" class="form-control" id="nickname" name="nickname" />
          </div>
          <div class="col-md-6 col-sm-12">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" />
          </div>
        </div>
        <div class="form-group mt-2">
          <label for="comment">Message</label>
          <textarea class="form-control" id="message" name="message" rows="3"></textarea>
        </div>
        <div class="text-danger error">
          <?= $commentFormError ?>
        </div>
        <div class="form-group">
          <button type="submit" name="comment" class="btn btn-primary">Send comment</button>
        </div>
      </form>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" integrity="sha512-F5QTlBqZlvuBEs9LQPqc1iZv2UMxcVXezbHzomzS6Df4MZMClge/8+gXrKw2fl5ysdk4rWjR0vKS7NNkfymaBQ==" crossorigin="anonymous"></script>
</body>

</html>