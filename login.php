<?php
session_start();
isset($_SESSION['user']) ? session_destroy() : '';
include 'connect.php';


  
if(isset($_POST['email']) || isset($_POST['password'])){

    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);


    $passwordDB = "SELECT password FROM user where email = '$email'";

    $passwordHash = $conn->query($passwordDB) or die("Não consegui pegar a senha");


    $passwordReport = $passwordHash->fetch_assoc(); 

    var_dump(password_verify($password, $passwordReport['password']));

    if (password_verify($password, $passwordReport['password'])){
  
      $sql_code = "SELECT * FROM user WHERE email = '$email'";
      $query = $conn->query($sql_code) or die("falha na conexão com o banco de dados");

      $quant_row = $query->num_rows;
      
      if($quant_row == 1){
        $user = $query->fetch_assoc();
        

        if(!isset($_SESSION)){

            session_start();
        }
        $_SESSION['user'] = $user['name'];

        header("Location:dashboard.php");
      }
    }else{

      echo' Dados não encontrados';

    }

  }
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/index.css" />
    <link rel="stylesheet" href="style/form.css" />
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
    <title>Login</title>
  </head>
  <header>
    <nav>
      <div class="navbar-wrapper">
        <div class="logo">
          <a href="home.php"
            ><img src="assets/logo.png" alt="Logo"
          /></a>
        </div>
        <div class="navigation">
          <ul>
            <div class="side-a-side">
              <a href="home.php">Home</a>
              <a href="cad.php">Cadastro</a>
            </div>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <body>
    <main>
    <div class="admin-form-wrapper">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="admin-form">
                <h3>Login</h3>
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="exemplo@gmail.com" required>
       
                <label for="password">Senha</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="*******" required>
              <button type="submit" class="btn btn-primary">Login</button>
          </form>
        </div>
    </main>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
    <script src="scripts/index.js"></script>
  </body>
</html>
