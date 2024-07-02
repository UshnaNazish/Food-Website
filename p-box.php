<?php require 'navbar.html.php'?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
/* Global Styles */
body {
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
    font-family: "Raleway", sans-serif;
}

/* Table Styles */
table {
    margin: auto;
    width: 100%; /* Adjusted width for responsiveness */
    border-collapse: collapse;
    animation: fadeIn 1s ease-in-out;
}

/* Table Header Styles */
th {
    background-color: #4c4c4c;
    color: #fff;
    font-size: 1.2em;
    padding: 10px;
    text-align: center;
}

/* Table Data Styles */
td {
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1); /* Increased shadow effect */
    background-color: #e0e0e0; /* Light gray background color */
    width: 100%; /* Adjusted width for responsiveness */
    margin-bottom: 20px; /* Added margin bottom for spacing between rows */
    border-radius: 15px; /* Rounded corners */
    overflow: hidden; /* Hide any content that exceeds the rounded corners */
    transition: transform 0.3s ease; /* Smooth transition on hover */
}

/* Hover Effect for Table Data */
td:hover {
    transform: scale(1.05); /* Scale the box on hover */
}

/* Product Image Styles */
img {
    max-width: 100%; /* Ensure images don't exceed their container width */
    height: auto; /* Maintain aspect ratio */
}

/* Product Information Styles */
h2 {
    margin-top: 10px;
    font-size: 1.5em;
    color: #4c4c4c;
}

/* Status Label Styles */
label {
    background-color: #5cb85c;
    color: #fff;
    padding: 5px;
    border-radius: 0.25em;
}

/* View Button Styles */
input[type="submit"] {
    background-color: #5cb85c;
    color: #fff;
    padding: 5px;
    padding-left: 40px;
    padding-right: 40px;
    border-radius: 0.25em;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

/* Hover Effect for View Button */
input[type="submit"]:hover {
    background-color: #4c4c4c;
}

/* Keyframe Animations */
@keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

/* Media Queries for Responsive Design */
@media only screen and (max-width: 768px) {
    /* Adjustments for smaller screens */
    table {
        width: 100%;
    }
    td {
        width: 90%; /* Adjusted width for smaller screens */
    }
}
</style>
</head>
<body>





<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "website";


$conn=mysqli_connect($host,$user, $pass,$db);



$sql="SELECT `id`, `name`, `description`, `image` FROM `products`";
$done=mysqli_query($conn,$sql);
?>

<table  cellpadding="5" cellspacing="5">

<?php


while($row = mysqli_fetch_array($done)) {
$id = $row['id'];




?>
    
    <tr style="float: inline-start;margin-left: 5%;height: 350px;">


        <td style="text-align: center;box-shadow: 7px 7px grey;background-color: lightgrey;width: 250px;">  
            <img style="height: 200px;width: 250px;"  src="<?php echo $row['image'];?>" alt=" " > 

            <h2> <?php echo $row['name']; ?> </h2> 
            <h6> <?php echo $row['description'] . "/="; ?> </h6> 
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2%;">
  
   
      <form method="GET" action="p-view.php">
        <input type="hidden" name="id" value="<?php echo $id ; ?>">
        <input name="cart-btn" style='background-color: #5cb85c; color: #fff;  padding: 5px; padding-left:40px;padding-right:40px; margin-left:50%;  border-radius: 0.25em;' type="submit" value="View">
    </form>

</div>

        </td> 
   
   </tr>
<?php   
} 
?>
</table>
</body>
</html>