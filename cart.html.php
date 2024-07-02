<?php
session_start();
require 'navbar.html.php';
require 'config.php';
?>

<style>
    img{
        width:100px;
    }
.delete{
/* background-color: #5cb85c;  */
background-color:transparent;    
color: red; 
     padding: 5px;
     padding-left:40px;
    padding-right:40px; 
     border-radius: 0.25em;
     outline:none;
     border:none;
}
.delete i{
    color:white;
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




    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center bg-light mb-5">
                <h1 class="text-warning">My Cart</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-sm-12 col-md-6 col-lg-9">
                <table class="table table-bordered text-center bg-primary text-white fs-6 ">
                    <tr>
                        <th>Product</th>
                        <th>Product name</th>
                        <th>Product price</th>
                        <th>Action</th>
                        </tr>
                     
                            <?php
                            $grand_total=0;
                            $sql ="SELECT * FROM `cart` ";
                            $result=mysqli_query($conn,$sql);
                           
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                                    ?>
                                    <tr>
                                        <td><img src="<?php echo $row['image']; ?>" alt=""></td>
                                        <td><?php echo  $row['name'] ; ?></td>
                                        <td><?php echo  $row['description'] . "/=" ; ?></td>
                                        <?php $grand_total=$grand_total+ $row['description'] ; ?>

                                       
                                        <form method="POST">
                                        <td><button name="delete" class="delete" type="submit"><i class="fa-solid fa-trash"></i></button></td>
                                        <input type="hidden" name="cartid" value="<?php echo $row['id']; ?>">
                                        </form>
                                        <?php
                                }
                            }

                            ?>
                                 </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
<style>
.cout:hover{
cursor: pointer;

}
</style>
<div class="container">
<form action="checkout.html.php " method="POST">
                            <h5  class="text-primary"style="margin-left:400px; display:inline-block;">Sub Total:</h5>
                            <input class="text-primary border border-white" style=" width:60px; font-size:20px;" type="text" readonly value="<?php echo $grand_total;?>">

                            <input type="submit" name="checkout" style="margin-left:200px; padding:1%;" value="Proceed To Checkout" class=" cout bg-primary text-white border border-white">

                         </form>
                         </div>
                         <?php 
                         if(isset($_POST['checkout'])){
                            echo"<script>window.location.replace('http://localhost/ushna/checkout.html.php');</script>";
                         } ?>
<?php

if(isset($_POST['delete'])){
    $delid=$_POST['cartid'];
    $sqldel="DELETE FROM `cart` WHERE id = $delid ";
    $resultdel=mysqli_query($conn,$sqldel);
}

?>
