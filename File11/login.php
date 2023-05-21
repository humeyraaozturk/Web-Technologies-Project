
<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $password = $_POST["password"];

  if($email == "B211210014@Sakarya.Edu.Tr" && $password == "B211210014"){
    $_SESSION["email"] = $email;
    header("Location: home.html");
    exit();
  }

  else{
    header("Location: index.html");
    exit();
  }
}
?>
