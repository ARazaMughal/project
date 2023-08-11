<?php
  include('./includes/connect.php');
  $id=$_GET['id'];
  $delete_query= "DELETE from `cart` where `product_id`=$id";
  $result=mysqli_query($con,$delete_query);
 if ($result) {
    echo '<script>';
    echo 'window.location.href = "cart.php";';  
    echo '</script>';
 }
?>
<?php