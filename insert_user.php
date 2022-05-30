<?php


require_once 'connect.php';


if(isset( $_POST ) || !empty( $_POST ) ) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $cell = $_POST['cell'];
    $password = $_POST['password'];
    $CPF = $_POST['CPF'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $CEP= $_POST['CEP'];


    $passHash = password_hash($password,PASSWORD_DEFAULT,array('cost'=> 10));
    
    print_r($passHash);


    $sql = "INSERT INTO `user`
            (`name`, `email`, `cell`, `password`, `CPF`, `city`, `state`, `CEP`) 
            VALUES ('$name','$email','$cell','$passHash','$CPF','$city','$state','$CEP')";

   

    if($conn->query($sql))header('Location:sucess.php');



}else{

   header('Location:.php');

 }




?>