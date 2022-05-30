<?php

    session_start();

  
    $user['name'] = $_SESSION['user'];
    var_dump($user);

    if (!isset($_SESSION['user'])) {
        header("Location: login.php");
        exit();
      }

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/index.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,700&display=swap"
      rel="stylesheet"
    />
    <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous"
  />
    <title>Dashboard</title>
  </head>
  <header>
    <nav>
      <div class="navbar-wrapper">
        <div class="logo">
          <a href="dashboard.php"
            ><img src="assets/logo.png" alt="Logo" width="100px"
          /></a>
        </div>
        <div class="navigation">
          <ul>
            <div class="side-a-side">
              <a id="logout" href="logout.php">Deslogar</a>
            </div>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <body>
    <div class="mainMensage">
        <h2>Seja bem vindo ao sistema Ceres Cliente : <?php if(isset($user)){echo ucfirst($user['name']);}?></h2>
        <div class="infos"></div>
    </div>
    <script src="index.js"></script>
  </body>
</html>
