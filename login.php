<?php

@include 'connection.php';

session_start();

if(isset($_POST['submit'])){

 
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   
   $user_type = $_POST['type'];

   $select = " SELECT * FROM users WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['type'] == 'admin'){

         $_SESSION['adminname'] = $row['name'];
         header('location:indexx.php');

      }elseif($row['type'] == 'user'){

         $_SESSION['username'] = $row['name'];
         header('location:index.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

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
           <h3>login now</h3>
           <?php
           if(isset($error)){
              foreach($error as $error){
                 echo '<span class="error-msg">'.$error.'</span>';
              };
           };
           ?>
             <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" required placeholder="enter your email" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
             <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">mote de passe</label>
                <input  type="password" name="password" required placeholder="enter your password" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
           <input type="submit" name="submit" value="login now" class="form-btn">
           <p>don't have an account? <a href="register_form.php">register now</a></p>
        </form>
     
     </div>

 </center>  

</body>
</html>