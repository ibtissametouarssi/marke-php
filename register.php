<?php

@include 'connection.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM users WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO users(username, email, password, type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
         rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
          crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
    <center>

        <div class="form-container">
        
           <form action="" method="post">
              <h3>register now</h3>
              <?php
              if(isset($error)){
                 foreach($error as $error){
                    echo '<span class="error-msg"  style="color: red;">'.$error.'</span>';
                 };
              };
              ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nom</label>
                    <input type="text" name="name" required placeholder="enter your name" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input  type="email" name="email" required placeholder="enter your email" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mot de passe</label>
                    <input  type="password" name="password" required placeholder="enter your password" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Confirm Mot de passe</label>
                    <input type="password" name="cpassword" required placeholder="confirm your password" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
              <select name="user_type">
                 <option value="user">user</option>
                 <option value="admin">admin</option>
              </select>
              <br> <br>
              <input type="submit" name="submit" value="register now" class="form-btn">
              <p>already have an account? <a href="login_form.php">login now</a></p>
           </form>
        
        </div>
    </center>

</body>
</html>