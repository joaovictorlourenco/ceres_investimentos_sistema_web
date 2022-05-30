<?php

require 'connect.php';



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
    <title>Cadastro</title>
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
              <a href="#"> Voltar</a>
            </div>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <body>
    <main>
      <div class="container">
        <form method="post" action="insert_user.php">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputName">Nome</label>
              <input
                type="text"
                class="form-control"
                id="inputName"
                name= "name"
                placeholder="Nome"
                required
              />
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail">Email</label>
              <input
                type="email"
                class="form-control"
                id="inputEmail"
                name="email"
                placeholder="Email"
                required
              />
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCell">Telefone</label>
              <input
                type="text"
                class="form-control"
                id="inputCell"
                placeholder="34 9 9972-9839"
                name="cell"
                required
                maxlength="14"
                
              />
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword">Senha</label>
              <input
                type="password"
                class="form-control"
                id="inputPassword"
                placeholder="Senha"
                name="password"
                required
              />
            </div>
          </div>
          <div class="form-group">
            <label for="inputCPF">CPF</label>
            <input
              type="text"
              class="form-control"
              id="inputCPF"
              placeholder="000.000.000-00"
              name="CPF"
              required
              onkeyup="mascara('###.###.###-##',this,event,true)"
              maxlength="14"
            />
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">Cidade</label>
              <input
                type="text"
                class="form-control"
                id="inputCity"
                placeholder="Uberaba"
                name="city"
                required
              />
            </div>

            <div class="form-group col-md-4">
              <label for="inputEstado">Estado</label>
              <select id="inputEstado" class="form-control" name="state" required>
                <option selected>Opção</option>
                <option value="Acre">Acre - AC</option>
                <option value="Alagoas">Alagoas - AL</option>
                <option value="Amapá">Amapá - AP</option>
                <option value="Amazonas">Amazonas - AM</option>
                <option value="Bahia">Bahia - BA</option>
                <option value="Ceará">Ceará - CE</option>
                <option value="Distrito Federal">Distrito Federal - DF</option>
                <option value="Espírito Santo">Espírito Santo - ES</option>
                <option value="Goiás">Goiás - GO</option>
                <option value="Maranhão">Maranhão - MA</option>
                <option value="Mato Grosso">Mato Grosso - MT</option>
                <option value="Mato Grosso do Sul">
                  Mato Grosso do Sul - MS
                </option>
                <option value="Minas Gerais">Minas Gerais - MG</option>
                <option value="Pará">Pará - PA</option>
                <option value="Paraíba">Paraíba - PB</option>
                <option value="Paraná">Paraná - PR</option>
                <option value="Pernambuco">Pernambuco - PE</option>
                <option value="Piauí">Piauí - PI</option>
                <option value="Rio de Janeiro">Rio de Janeiro - RJ</option>
                <option value="Rio Grande do Norte">
                  Rio Grande do Norte - RN
                </option>
                <option value="Rio Grande do Sul">
                  Rio Grande do Sul - RS
                </option>
                <option value="Rondônia">Rondônia - RO</option>
                <option value="Roraima">Roraima - RR</option>
                <option value="Santa Catarina">Santa Catarina - SC</option>
                <option value="São Paulo">São Paulo - SP</option>
                <option value="Sergipe">Sergipe - SE</option>
                <option value="Tocantins">Tocantins- TO</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="inputCEP">CEP</label>
              <input
                type="text"
                class="form-control"
                id="inputCEP"
                placeholder="38022-190"
                name="CEP"
                required
                onkeyup="mascara('#####-###',this,event,true)"
                maxlength="9"
              />
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
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
    <script src="scripts/mask.js"></script>
  </body>
</html>
