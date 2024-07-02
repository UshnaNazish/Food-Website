<?php
session_start();

require 'navbar.html.php';
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="col-lg-3" style="margin-left:450px;">
        <div class="border bg-light rounded p-4">

            <br>
            <form method="POST">
                <div class=" div form-check">

                    <div>
                        <h5 class="text-primary">Products:</h5>
                    <?php
                        $grand_total = 0;
                        $sql = "SELECT * FROM `cart` ";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                        ?>
                                <td><?php echo  $row['name'] . "&nbsp" . "|"; ?></td>
                                <td><?php echo "&nbsp" . "&nbsp" . "Pkr " . $row['description']; ?></td><br>
                        <?php
                            }
                        } ?>
                        <h5 class="text-primary">Sub Total:</h5>
                                <?php
                        $grand_total = 0;
                        $sql = "SELECT * FROM `cart` ";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                $grand_total = $grand_total + $row['description'];
                                // echo $row['description'] . "/="."<br>";
                            }
                            echo $grand_total . "/="."<br>";
                        }
                            ?>

                    </div>
                            <br>
                            <form method="POST">

                                <input type="hidden" name="cartid" value="<?php echo $row['id']; ?>">
                        
                            <hr>
                            <input type="radio" name="flexRadioDefault" id="flexRadioDefault2" class="form-check-input" checked>
                            <label for="flexRadioDefault2" class="form-check-label">Cash On Delivery<i class="fa-solid fa-sack-dollar"></i></label><br>
                            <div class="cod">
                                <label for="">Your Name</label>
                                <input type="text" name="uname" class="uname" placeholder=" Enter Your Name"> <br>
                                <label for="">Contact No.</label>
                                <input type="text" name="num" class="uname" placeholder="03123456789"> <br> 
                                <label for="">City</label>
                                <input type="text" name="city" class="uname" placeholder="Karachi"> <br> 
                                <label for="">Address</label>
                                <input type="text" name="address" class="uname"placeholder=" Enter Your Address"> <br> <br>
                            </div>
                            <input type="radio" name="flexRadioDefault" id="flexRadioDefault2" class="form-check-input">
                            <label for="flexRadioDefault2" class="form-check-label">Easypaisa<i class="fa-solid fa-wallet"></i></label>
                            <div class="epaisa">
                                <label for="">Account No.</label>
                                <input type="text" name="uname" class="uname" value="03123456789" readonly> <br>
                            </div>
                </div>
                <br>
                <button name="purchase-btn" class="btn btn-primary btn-block">Make Purchase</button>
                </form>
            </form>
        </div>
    </div>


</body>

</html>
<?php
if(isset($_POST['purchase-btn'])){
    $empty="DELETE FROM `cart`";
    echo "<script>alert('Your Order Is Confirmed.');</script>";
    $del=mysqli_query($conn,$empty);
    echo"<script>window.location.replace('http://localhost/ushna/home.html.php');</script>";
}
?>