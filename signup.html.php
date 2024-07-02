<?php
session_start();
require 'navbar2.php';
require 'config.php';

if(isset($_POST['signup'])){
    $username=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    $sql="INSERT INTO signup(username, email, password) VALUES ('$username','$email','$password')";
    $result=mysqli_query($conn,$sql);
    if($result){
      echo "<script>alert('Your Account Has Been Registered!');</script>";
      echo"<script>window.location.replace('http://localhost/ushna/login.html.php');</script>";
           }
  
           else{
               echo "<script>alert('Something went wrong');</script>";
         }

    // $table_name = mysqli_real_escape_string($conn,$username);
    // $result = mysqli_query($conn , "SHOW TABLES LIKE '".$table_name."'");
    // if($result -> num_rows == 1){
    //   echo "<script>alert('Table Exists, please enter another username');</script>";
    // }
    // else{
    //   $table5=" CREATE TABLE $table_name (id INT(250) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,  productid INT(200))";
      
    //   $res5=mysqli_query($conn,$table5);
    //   if($password == $cpassword){

    //     if($res5){
    //         echo "New record created successfully";
    //     }

    //     else{
    //         echo "<script>alert('Something went wrong');</script>";
    //     }
    // }

    // }




}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

            <form action="" method="POST">

                <div data-mdb-input-init class="form-outline mb-4">
                  <input name="name" type="text" id="form3Example1cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input name="email" type="email" id="form3Example3cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input name="password" type="password" id="form3Example4cg" class="form-control form-control-lg" />
                  <label  class="form-label" for="form3Example4cg">Password</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input name="cpassword" type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                </div>

             

                <div class="d-flex justify-content-center">
                  <button type="submit" name="signup"
                    data-mdb-button-init data-mdb-ripple-init class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">SignUp</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.html.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>