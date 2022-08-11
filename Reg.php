<?php

@include 'config.php';


   $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
   $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
   $phonenumber = mysqli_real_escape_string($conn, $_POST['phonenumber']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = $_POST['password'];
   $repassword =$_POST['repassword'];

   $select = " SELECT * FROM reg_details WHERE email = '$email' && password = '$password' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user already exist!';

   }else{

      if($password != $repassword ){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO reg_details(firstname,lastname,phonenumber, email, password) VALUES('$firstname','$lastname','$phonenumber','$email','$password ')";
         mysqli_query($conn, $insert);
         header('location:Login.php');
      }
   }


?>