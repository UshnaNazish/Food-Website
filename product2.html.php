<?php require 'navbar.html.php';
      require 'config.php';

      $sqlf="SELECT * FROM `products`;";
      $resultf=mysqli_query($conn,$sqlf);

      if(mysqli_num_rows($resultf) > 0){
        while($row = mysqli_fetch_assoc($resultf)){


          

    
?>
<style>
    .burgers:hover{
      cursor:pointer;
    }
    .pr:hover{
        border-radius:20%;
    }
    .pr{
      
      background-color: rgba(0, 0, 0, .03);
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
<a class="cart" href="cart.html.php"><i class="fas fa-shopping-cart"></i>
      <div class="container">
        <div class="products">
<div class="pr pr-1  d-flex flex-wrap my-2 mx-2" style="width:28%; height:400px;">
<img style=" width:90%; height:250px;" class="" src="<?php echo $row['image'];?>" alt="">
<h2 class="text-black ml-5 " style="font-size:2vw; "><?php echo $row['name'];  ?></h2>
<p class="ml-5 d-inline-block mt-2" style="font-size:1vw;"><?php echo $row['description'];  ?></p>

<form action="productview.php" method="POST">

<input type="hidden" value="<?php echo $row['id']; ?>">
</form>
<button name="add-to-cart" class="btn btn-dark ml-5" style="height:50px;" type="submit">Add To Cart</button>
</div>
</body>
</html>
<?php

}
      }
      ?>