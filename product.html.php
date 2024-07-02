<?php require 'navbar.html.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
<body>
  <a class="cart" href="cart.html.php"><i class="fas fa-shopping-cart"></i>
      <div class="container">
        <div class="products">

        <!-- <div class="pr pr-1-cart border border-secondary d-flex flex-wrap my-2 mx-2" style="width:28%; height:400px;">
     
<h2 class="text-black ml-5 " style="font-size:2vw; ">Beef-burger</h2>
<p class="ml-5 d-inline-block mt-2" style="font-size:1vw;">Rs.1350</p>
<button class="btn btn-dark ml-5" style="height:30px; border-radius:40%;" type="submit">-</button>
<input type="number" name="amount" style="height:30px; width:40%; margin-left:30%;" >
        <button class="btn btn-dark ml-5" style="height:30px;border-radius:40%;" type="submit">+</button>
<button class="btn btn-dark ml-5" style="height:50px;" type="submit">Add To Cart</button>
</div> -->


     <h2 class="fs-2 fw-bolder">Burgers</h2>
<div class="burgers  d-flex" style=" height:500px;;">


  <div class="pr pr-1  d-flex flex-wrap my-2 mx-2" style="width:28%; height:400px;">
<img style=" width:90%; height:250px;" class="" src="beef-burger.png" alt="">
<h2 class="text-black ml-5 " style="font-size:2vw; ">Beef-burger</h2>
<p class="ml-5 d-inline-block mt-2" style="font-size:1vw;">Rs.1350</p>
<button name="add-to-cart" class="btn btn-dark ml-5" style="height:50px;" type="submit">Add To Cart</button>
</div>

<div class="pr pr-2  d-flex flex-wrap my-2 mx-2" style="width:28%; height:400px; ">
<img style=" width:100%; height:250px;" class="" src="zinger-burger.png" alt="">
<h2 class="text-black ml-5 " style="font-size:2vw; ">Zinger-burger</h2>
<p class="ml-5 d-inline-block mt-2" style="font-size:1vw;">Rs.750</p>
<button name="add-to-cart" class="btn btn-dark ml-5" style="height:50px;" type="submit">Add To Cart</button>
</div>

<div class="pr pr-3  d-flex flex-wrap my-2 mx-2" style="width:28%; height:400px; ">
<img style=" width:80%; height:250px;" class="ml-4" src="special-loaded-burger.png" alt="">
<h2 class="text-black ml-4 " style="font-size:2vw; ">Special-burger</h2>
<p class="ml-4 d-inline-block mt-2" style="font-size:1vw;">Rs.1550</p>
<button name="add-to-cart" class="btn btn-dark ml-5" style="height:50px;" type="submit">Add To Cart</button>
</div>
            </div>

<!-- PIZZA-PART -->



            <h2 class="fs-2 fw-bolder">Pizza</h2>
<div class="pizzas  d-flex" style=" height:500px;;">


  <div class="pr pr-4  d-flex flex-wrap my-2 mx-2" style="width:28%; height:400px;">
<img style=" width:90%; height:250px;" class="" src="pizza2.png" alt="">
<h2 class="text-black ml-5 " style="font-size:2vw; ">Pan-Pizza</h2>
<p class="ml-5 d-inline-block mt-2" style="font-size:1vw;">Rs.550</p>
<button name="add-to-cart" class="btn btn-dark ml-5" style="height:50px;" type="submit">Add To Cart</button>
</div>

<div class="pr pr-5  d-flex flex-wrap my-2 mx-2" style="width:28%; height:400px; ">
<img style=" width:100%; height:250px;" class="" src="pizza.png" alt="">
<h2 class="text-black ml-5 " style="font-size:2vw; ">Md-pizza</h2>
<p class="ml-5 d-inline-block mt-2" style="font-size:1vw;">Rs.950</p>
<button name="add-to-cart" class="btn btn-dark ml-5" style="height:50px;" type="submit">Add To Cart</button>
</div>

<div class="pr pr-6  d-flex flex-wrap my-2 mx-2" style="width:28%; height:400px; ">
<img style=" width:80%; height:250px;" class="ml-4" src="pizza1.png" alt="">
<h2 class="text-black ml-5 " style="font-size:2vw; ">Lrg-pizza</h2>
<p class="ml-5 d-inline-block mt-2" style="font-size:1vw;">Rs.1550</p>
<button name="add-to-cart" class="btn btn-dark ml-5" style="height:50px;" type="submit">Add To Cart</button>
</div>
            </div>
<!-- 
CHINESE_PART -->


<h2 class="fs-2 fw-bolder">Chinese</h2>
<div class="chinese  d-flex" style=" height:500px;;">


  <div class="pr pr-7  d-flex flex-wrap my-2 mx-2" style="width:28%; height:400px;">
<img style=" width:90%; height:250px;" class="" src="chowmein.png" alt="">
<h2 class="text-black ml-5 " style="font-size:2vw; ">Chowmein</h2>
<p class="ml-5 d-inline-block mt-2" style="font-size:1vw;">Rs.700</p>
<button name="add-to-cart" class="btn btn-dark ml-5" style="height:50px;" type="submit">Add To Cart</button>
</div>

<div class="pr pr-8  d-flex flex-wrap my-2 mx-2" style="width:28%; height:400px; ">
<img style=" width:100%; height:280px; margin-top:-7%;" class="" src="dumplings.png" alt="">
<h2 class="text-black ml-5 " style="font-size:2vw; ">Dumplings</h2>
<p class="ml-5 d-inline-block mt-2" style="font-size:1vw;">Rs.650</p>
<button name="add-to-cart" class="btn btn-dark ml-5" style="height:50px;" type="submit">Add To Cart</button>
</div>

<div class="pr pr-9  d-flex flex-wrap my-2 mx-2" style="width:28%; height:400px; ">
<img style=" width:100%; height:250px;" class="ml-2" src="c-rice.png" alt="">
<h2 class="text-black ml-5 " style="font-size:2vw; ">Chinese-rice</h2>
<p class="ml-5 d-inline-block mt-2" style="font-size:1vw;">Rs.1450</p>
<button name="add-to-cart" class="btn btn-dark ml-5" style="height:50px;" type="submit">Add To Cart</button>
</div>
            </div>




            <!-- ------ -->
        </div>
    </div>
    <
</body>
</html>