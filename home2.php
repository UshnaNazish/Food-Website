<?php require 'navbar2.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

<style>
    .home{
        background-color: rgb(215, 226, 226);
        height:520px;
        margin-top:-3%;
    }
    .img{
        display: inline-block;
        height:400px;
        animation: slideInUp 1s ease-in-out;
    }
    
    @keyframes slideInUp {
    0% {
        transform: translateY(20px);
        opacity: 0;
    }
    100% {
        transform: translateY(0);
        opacity: 1;
    }
    }
 .heading{
    font-family: "Amatic SC", sans-serif;
    animation: slideInUp 1s ease-in-out;
 }
</style>
<body>
    <div class="container-fluid ">
        <div class="row justify-content-center home mb-3">
            <div class="home-head d-flex">
                <h2 class="heading" style="font-size:4vw;  margin-top:14%;" >Enjoy Your Healthy
                    <br>
                    Delicious Food.
                </h2>
              
                <div class="img-home img-fluid">
                  <div class="img d-flex justify-content-start">  <img class="d-flex p-2  mt-5" style="height:400px;     " src="homeback.png" alt=""></div>
                </div>
                
            </div>
        </div>

 




        
    
    </div>
</body>
</html>

