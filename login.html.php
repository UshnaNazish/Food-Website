<?php 
require 'navbar2.php';
require 'config.php';


if(isset($_POST['login'])){
  // echo"<script>window.location.replace('http://localhost/ushna/home.html.php');</script>";
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="SELECT * FROM `signup` where email = '$email' and password = '$password'";


    $result=mysqli_query($conn,$sql);
    if($result){
      if(mysqli_num_rows($result) > 0){
        echo"<script>window.location.replace('http://localhost/ushna/home.html.php');</script>";
    } 
    else{
      echo"<script>alert('Something went wrong');</script>";
      echo"<script>window.location.replace('http://localhost/ushna/login.html.php');</script>";
  }
       
    }
}
?>
<style>
  form{
    width:30%;
    margin:0 auto;
  }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
  <!-- Email input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input name="email" type="email" id="form2Example1" class="form-control" />
    <label class="form-label" for="form2Example1">Email address</label>
  </div>

  <!-- Password input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input name="password" type="password" id="form2Example2" class="form-control" />
    <label class="form-label" for="form2Example2">Password</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Forgot password?</a>
    </div>
  </div>

  <!-- Submit button -->
  <button type="submit" name="login" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Login</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="signup.html.php">Register</a></p>
    <p>or sign up with:</p>
    <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
      <i class="fab fa-facebook-f"></i>
    </button>

    <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
      <i class="fab fa-google"></i>
    </button>

    <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
      <i class="fab fa-twitter"></i>
    </button>

    <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
      <i class="fab fa-github"></i>
    </button>
  </div>
</form>
</body>
</html>