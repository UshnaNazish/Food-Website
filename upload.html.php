<?php
require 'config.php';

if(isset($_POST['submit'])){
  
   

    $file_name = $_FILES['uploadfile']['name'];
    $file_tmp = $_FILES['uploadfile']['tmp_name'];
    $folder = "product-img/" . $file_name;
   
      $sql ="INSERT INTO `products`(`image`) VALUES ('$file_name')";


      if($file_name == ""){
        echo "<script>alert('alerttt');</script>";
      }
      else{
        $result = mysqli_query($conn,$sql);
        move_uploaded_file($file_tmp,$folder);
        echo "success";   

      }

    }
            
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<style>
    *{
        margin:0;
        
    }
</style>
<body>
    <div class="container py-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2> upload file</h2>
                <form action="upload.html.php" enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                        <label for="">upload file</label>
                        <input type="file" class="form-control" id="uploadfile" name="uploadfile" required>
                    </div>
                    

                    <button type="submit" name="submit" class="btn btn-default btn-primary">submit</button>
                </form>
            </div>
        </div>
    </div>

    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</body>
</html>