<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<style>
    /* ----- Variables ----- */
    :root {
    --color-primary: #4c4c4c;
    --color-secondary: #a6a6a6;
    --color-highlight: #ff3f40;
    }

    /* ----- Global ----- */

    .main{
	display: grid;
	grid-template-rows: 1fr;
	font-family: "Raleway", sans-serif;
	
    }


    td{
    /* color:red; */
    font-size:25px;
    }

    img {
    max-width: 100%;
    /* filter: drop-shadow(1px 1px 3px var(--color-secondary)); */
    }

    /* ----- Product Section ----- */
    .product {
    display: grid;
    grid-template-columns: 0.9fr 1fr;
    margin: auto;
    padding: 2.5em 0;
    min-width: 800px;
    background-color: white;
    border-radius: 5px;
    background: rgb(0,0,0);
    background-color: rgb(250, 248, 248);

    width:50% ;
    animation: fadeIn 1s ease-in-out;

    }

    /* ----- Photo Section ----- */
    .product__photo {
    position: relative;
    /* width:40%; */
    height:600%;
    animation: fadeIn 1s ease-in-out;
    display: flex;
    }

    .photo-container {
    position: absolute;
    left: 2em;
    display: grid;
    
    grid-template-rows: 1fr;
    width: 80%;
    /* height: 80%; */
    border-radius: 6px;
    box-shadow: 4px 4px 25px -2px rgba(0, 0, 0, 0.3);
   
    }


/* my */

/* .nsmallimages{
    width: 70%;
    height:30%;
   margin-top: 70%; 
    
    background-color: black;
} */


.smallimage{
    position: absolute;
    height: 10%;
    width: 30%;
        display: flex;
 /* justify-content: space-around; */
   margin-top: 500px; 
   img{
    height: 3.5rem;
    width: 3.5rem;
    cursor: pointer;
    object-fit: cover;
    

    /* box-shadow: 0.5rem 1rem rgba(51, 51, 51, .2); */
    border: 5px solid #e3dfdf;
    &:hover{
    transform: scale(.9);
        }
        }
    }

    .photo-main {
    border-radius: 6px 6px 0 0;
    /* background-color: #9be010; */
    /* background: radial-gradient(#e5f89e, #96e001); */
    background-color: lightgrey;


    }



    .photo-main img {
    position: absolute;
    left: -3.5em;
    top: 2em;
    max-width: 110%;
    filter: saturate(150%) contrast(120%) hue-rotate(10deg) drop-shadow(1px 20px 10px rgba(0, 0, 0, 0.3));
    }

    /* ----- Informations Section ----- */
    .product__info {
    padding: 0.8em 0;
    animation: fadeIn 1s ease-in-out;
    }

    .title h1 {
    margin-bottom: 0.1em;
    color: white;
    font-size: 30px;
    font-weight: 100;
    

    width: 80%;
    
    border-radius: 5px;
    background-color: darkgrey;

    }

    .title span {
    font-size: 0.7em;
    color: var(--color-secondary);
font-family:Courier, monospace;

    
    }

    .price {
    margin: 1.5em 0;
    color: var(--color-highlight);
    font-size: 1.2em;
    animation: slideInUp 1s ease-in-out;
    }

    .price span {
    padding-left: 0.15em;
    font-size: 2.9em;
    }

    .description {
    clear: left;
    margin: 1.7em 0;
    }

    .description h3 {
    margin-bottom: 1em;
    }



    .buy--btn {
    padding: 1.5em 3.1em;
    border: none;
    border-radius: 7px;
    font-size: 0.8em;
    font-weight: 700;
    letter-spacing: 1.3px;
    color: #fff;
    background-color: grey;
    box-shadow: 2px 2px 25px -7px var(--color-primary);
    cursor: pointer;
    animation: fadeIn 1s ease-in-out;
    }
    /* .buy--btn:active {
    transform: scale(0.97);
    } */
    @keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
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



    @media only screen and (max-width: 600px) {
        .product {
            /* grid-template-columns: 1fr;
            margin: 0 1.5em; */
            min-width: 300px;
        }
td{
font-size: 15px;
}
        .product__photo {
            flex-direction: column; /* Change direction to column on smaller screens */
        }

        .product__info {
            text-align: center; /* Center-align product info on smaller screens */
        }

        .title h1 {
            width: 100%; /* Full width for title on smaller screens */
font-size:20px;
        }

 .price {
 margin: 1em 0;
    font-size: 0.9em;

    }
    .price span {
  
    font-size: 2.4em;
    }

        .photo-main img {
            left: 0;
            transform: none;
        }
    .product__info {
    padding: 0.6em 0;
}
    .photo-container {
    left: -2em;
}
        .smallimage {
            position: static;
margin-top:300px;
            flex-wrap: wrap;
            justify-content: center;
            padding: 1em 0;
        }

        .smallimage img {
            height: 40px;
            margin: 5px;
        }
    }

</style>

</head>
<body>

    
<?php 


require 'navbar.html.php';
require 'config.php';



$id = $_GET['id'];
// $host = "localhost";
// $user = "root";
// $pass = "";
// $db = "website";

// $conn=mysqli_connect($host,$user, $pass,$db);





$sql ="SELECT * FROM `products`WHERE id = $id; ";

$result=mysqli_query($conn,$sql);
 $row= mysqli_fetch_array($result);


if(isset($_REQUEST['cartbtn'])){
//     $proname = $_POST['proname'];
//     $proprice = $_POST['proprice'];
//    $proimg = $_POST['proimage'];
$proname = $row['name'];
$proprice = $row['description'];
$proimg = $row['image'];


    $sqll="INSERT INTO `cart`( `image`, `name`, `description`) VALUES ('$proimg','$proname','$proprice' )";
    $resultt=mysqli_query($conn,$sqll);
    echo"<script>window.location.replace('http://localhost/ushna/p-box.php');</script>";
    
    }

//  if(isset($_POST['cartbtn'])){
//     $id = $_GET['id'];
//     $proname = $_POST['name'];
//     $proprice = $_POST['price'];
//     $proimg = $_POST['image'];

//     $sqll = "INSERT INTO `$table_name`( `name`, `description`, `image`) VALUES ('$proname','$proprice','$proimg')";
//     mysqli_query($conn,$sqll);
//  }
// if(isset($_POST['cart-btn'])){
//     $name=$row['name'];
//     $price=$row['description'];

//     if(isset($_SESSION['cart'])){
//         $myitems=array_column($_SESSION['cart'],'productname');

//        if(in_array($name,$myitems)){
//             echo "<script>alert('Item already added');
//             window.location.href='p-box.php';
//             </script>";
//         }
//         else{

       
//         $count=count($_SESSION['cart']);
//         $_SESSION['cart'][$count]=array('productname'=>$name,'price'=>$price);
//         echo "<script>alert('Item added');
//         window.location.href='p-box.php';
//         </script>";
//     }
//     }
//     else{
//         $_SESSION['cart'][0]=array('productname'=>$name,'price'=>$price);
//         echo "<script>alert('Item added');
//         window.location.href='p-box.php';
//         </script>";
//     }
    // $proid=$_POST['proid'];
    // $username="SELECT * FROM `signup` where id = $id";
    // $table_name = mysqli_real_escape_string($conn,$username);


   
// }







?>
<div class="main">

    <section class="product">
        <div class="product__photo">
            <div class="photo-container">
                
 
                    <img src="<?php echo $row['image']; ?>" alt="">
                
                
            </div>
            
  
        </div>
        <div class="product__info">
            <div class="title">
                                <h2><span style="color:#4c4c4c; font-size:35px; font-weight: 500;"> Name:</span><?php echo  $row['name'] ; ?></h2>

             
            </div>
            <div class="price">
                 RATE:<span><?php echo $row['description'] . "/=" ;?></span>
            </div>
            
            <div class="description">
            
                <table cellpadding="5" cellspacing="5"  class="tab">
                <tr><td class="details"> <b> Name:</b> </td> <td><?php echo $row['name']; ?></td></tr>
             
            
                  </td> 
                  </tr>
</table>
            </div>
            <h3>Price:</h3>
            <p class="buy--btn"><?php echo $row['description'] . "/=" ;?></p>

            <form  method="POST">
                <!-- <input type="number" id="quantity" name="quantity" value="1"> -->
                <input type="hidden" name="proid" value="<?php echo $row['id']; ?>">
                <input type="hidden" name="proname" value="<?php echo $row['name']; ?>">
                <input type="hidden" name="proprice" value="<?php echo $row['description']; ?>">
                <input type="hidden" name="proimg" value="<?php echo $row['image']; ?>">
                


            <input  id="cartbtn" name="cartbtn" style='background-color: #5cb85c; color: #fff;  padding: 5px; padding-left:40px;padding-right:40px;  border-radius: 0.25em;' type="submit" value="Add To Cart">
            

            <input name="buy-btn" style='background-color: #5cb85c; color: #fff;  padding: 5px; padding-left:40px;padding-right:40px; margin-left:20%;  border-radius: 0.25em;' type="submit" value="Buy Now">
            </form>
        </div>
    </section>
</div>

<script>

$(document).ready(function(){
    $('.smallimage img').click(function(){
        var image = $(this).attr('src');
        $('.photo-container img').attr('src', image);
    });
});


let cart = document.getElementById("cartbtn");
cart.addEventListener("click",()=>{
     alert("item added");
    
})
 

</script>

</body>
</html>
<?php


if(isset($_POST['buy-btn'])){
    $empty="DELETE FROM `cart`";
    echo "<script>alert('Your Order Is Confirmed.');</script>";
    $del=mysqli_query($conn,$empty);
    echo"<script>window.location.replace('http://localhost/ushna/home.html.php');</script>";
}





?>