<?php

// Start session
session_start();
// Include backend
include "functions/login-secure.php";
include "functions/comment-secure.php";

?>
<!DOCTYPE html>
<html lang="cs">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Website for demonstration Apache HTTP Server vulnerabilities.">
  <title>Apache (Secure)</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.min.css" />
</head>

<body>
  <div class="login-form">
    <div class="logo">
      <a href="/"><i class="fas fa-shield-alt"></i> BPC-AKR</a>
      <button class="navbar-toggler btn btn-primary hidden visible-xs" type="button" data-toggle="collapse" data-target="#loginCollapse" aria-expanded="false" aria-controls="loginCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="collapse not-collapse-sm" id="loginCollapse">
      <?php if ($_SESSION['loggedin']) : ?>
        <form method="post">
          <div class="login-header">Logged in: <?= $_SESSION['username'] ?></div>
          <button type="submit" name="logout" class="btn btn-primary">
            Sign out
          </button>
        </form>
      <?php else : ?>
        <div class="login-header">Login</div>
        <form action="" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" id="username" />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" />
          </div>
          <div class="error">
            <?= $form_error ?>
          </div>
          <button type="submit" name="login" class="btn btn-primary">
            Sign in
          </button>
        </form>
      <?php endif; ?>
    </div>
  </div>
  <div class="content">
    <div class="header">
      <h1>Website security vulnerabilities</h1>
      <div class="status">
        <img src="img/secure.svg" alt="Secure">
        <span class="text-success">Secure</span>
      </div>
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
                <a href="/functions/delete.php?id=<?= $row['id'] ?>" class="close" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </a>
              <?php endif; ?>
            </div>
            <div class="date"><?= date('d.m.Y H:i', strtotime($row['date'])) ?></div>
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
      <form action="" method="post">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <label for="nickname">Nickame</label>
            <input type="text" class="form-control" id="nickname" name="nickname" />
          </div>
          <div class="col-md-6 col-sm-12">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" />
          </div>
        </div>
        <div class="form-group mt-2">
          <label for="comment">Message</label>
          <textarea class="form-control" id="message" name="message" rows="3"></textarea>
        </div>
        <div class="text-danger error">
          <?= $comment_form_error ?>
        </div>
        <div class="form-group">
          <button type="submit" name="comment" class="btn btn-primary">Send comment</button>
        </div>
      </form>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>