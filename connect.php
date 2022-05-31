<?php

$server = "localhost";
$user = "root";
$pass = "";

$db_name = "user_ceres";



/* Deploy */
/*
$server = "sql300.epizy.com";
$user = "id19017654_user";
$pass = "dsRsl1bUoFh61";

$db_name = "epiz_31848274_user";
*/

$conn = mysqli_connect($server, $user, $pass, $db_name) or ('Não foi possível conectar com o banco de dados');

?>