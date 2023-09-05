<?php
$email = $_REQUEST['email'];
$pass = $_REQUEST['pass'];


$my_pass = "mypassword12345";
$my_email = "shovom677@gmail.com";

$email_chack=strpos($email,"@");


if($email_chack==true){
    if($email==$my_email){
      if($pass ==$my_pass){
        echo "Yes you are log-in";

      }else{
        echo " Your password is incorrect";
      }

    }
    


}else{
    echo "Your Email is Invalid";
}




?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container-fluid m-0 p-0">
        <div class="col-md-6 bg-primary">
            <form class="form-control bg-primary" action="email-pass.php" method="post">
                <input name="email" type="email" placeholder="Enter your email">
                <input name="pass" class="mt-2 mb-2" type="password" placeholder="Enter your pass"><br>
                <input type="submit">
            </form>
        </div>
    </div>

  





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>