<?php session_start(); ?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
      <title>Login</title>
      <link rel="stylesheet" href="fontawesome-free-5.12.0-web/css/all.css" />
      <link rel="stylesheet" href="styles.css" />
      <link
        href="https://fonts.googleapis.com/css?family=Montserrat&display=swap"
        rel="stylesheet"
      />
      <link rel="icon" href="./images/FireStreamLogo.png">
    </head>

    <body class="index">
      <img
        src="./images/FireStreamLogo.png"
        width="200px"
        height="200px"
        alt="FireStream Logo"
      />
      <form action="connect.php" method="post">
        <div class="form">
          <h1>Login</h1>
          <div class="input-box">
            <i class="fa fa-user"></i>
              <input class="login-field" type="username" name="username" id="" placeholder="Username" />
          </div>
          <div class="input-box">
            <i class="fa fa-key"></i>
              <input class="login-field" type="Password" name="password" id="" placeholder="Password" />
          </div>
          <input class="login-btn" type="Submit" name="submit" value="LOGIN" />
        </div>
      </form>
      <div id="errorMssg">
        <?php if(!empty($_SESSION['errorMssg'])) {echo $_SESSION['errorMssg']; } ?>
      </div>
      <?php unset($_SESSION['errorMssg']); ?>
    </body>
  </html>
