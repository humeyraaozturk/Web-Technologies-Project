<?php
ob_start();
$mail = 'B211210014@Sakarya.Edu.Tr';
$pass = 'B211210014';

if(isset($_POST['email'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  if($email == $mail && $password == $pass){
    header('location:home.html')
  }

  if(empty($email)){
      header("Location: index.html?error=E-mail alanı doldurulmalıdır.");
      exit();
  }
  else if(empty($password)){
      header("Location: index.html?error=Şifre alanı doldurulmalıdır.");
      exit();
  }
  else{
      echo "Hatalı Giriş"
  }

}
else{
    header("Location: index.html");
    exit();
}
?>
