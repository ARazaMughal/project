<?php
  include('../includes/connect.php');
  $id=$_GET['id'];
  $delete_query= "DELETE from `product` where `product_id`=$id";
  $result=mysqli_query($con,$delete_query);
 if ($result) {
    echo '<script>';
    echo 'alert("Product Deleted Successfully!");';
    echo 'window.location.href = "index.php";';  
    echo '</script>';
 }
?>
<?php