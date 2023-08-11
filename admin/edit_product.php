<?php
//Get Data from database 
  include('../includes/connect.php');
  $id=$_GET['id'];
  $select_query= "SELECT * from `product` where `product_id`=$id";
  $result_query=mysqli_query($con,$select_query);
  while ($row=mysqli_fetch_assoc($result_query)) {
      $product_id=$row['product_id'];
      $product_name=$row['product_name'];
      $product_keywords=$row['product_keywords'];
      $product_price=$row['product_price'];
      $product_discription=$row['product_discription'];
    }
?>
<?php
// Update Data
include('../includes/connect.php');
if (isset($_POST['add_product'])) {
  $product_name=$_POST['product_name'];
  $product_discription=$_POST['product_discription'];
  $product_keywords=$_POST['product_keywords'];
  $product_price=$_POST['product_price'];
  $product_status='true';
  if ($product_name=='' or $product_discription=='' or $product_keywords=='' or $product_price=='') {
    echo "<script>alert('Please fill all the fields')</script>";
  }
  else {
    // move_uploaded_file($temp_image,"var/www/html/project/admin/product_images/$temp_image");

    $insert_products="UPDATE `product` SET `product_name` = '$product_name' ,`product_price` ='$product_price',
    `product_keywords`='$product_keywords', `product_discription`='$product_discription',date= NOW(),
    status='$product_status' where `product_id`='$id' ";

    $result_query=mysqli_query($con,$insert_products);

    if($result_query){
        echo '<script>';
        echo 'alert("Product Updated Successfully!");';
        echo 'window.location.href = "index.php";';  
        echo '</script>';    }
  }
}
?>


<!doctype html>
<html class="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/dist/output.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
  <script src="jquery-3.6.3.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
</script>
</head>


<body class="bg-white dark:bg-gray-900"> 
 

  

  <div id="page-content" class="backdrop-blur-sm">
  
</div>
<div id="modal-overlay" class="fixed inset-0 bg-gray-400 dark:bg-900 opacity-50 z-40"></div>
<!-- Large Modal -->

   <div id="large-modal" tabindex="-1" class="fixed inset-0 flex items-center justify-center z-50 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Edit Product 
                </h3>
                <a href="index.php"><button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="AddProduct">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button></a>
            </div>
            <!-- Modal body -->
            <form method="post", enctype="multipart/form-data">
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="product_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" name="product_name" id="product_name" value="<?php echo $product_name; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">                    
                    </div>
                    <div>
                        <label for="product_keywords" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keywords</label>
                        <input type="text" name="product_keywords" id="myInput" value="<?php echo $product_keywords; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">                    
                    </div>
                    <div>
                        <label for="product_price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                        <input type="number" name="product_price" id="myInput" value="<?php echo $product_price; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">                    
                    </div>
                    <div>                      
                       <!-- <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Add Image</label> -->
                        <!-- <input name="product_image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file"> -->
                    </div>
                    <div class="sm:col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <input type="text" name="product_discription" id="myInput" rows="4"  value="<?php echo $product_discription; ?>"class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">                    
                    </div>
                </div>
                <!-- <a href="index.php"><button type="button" name="add_product" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="AddProduct">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button></a> -->
                    <button type="submit" name="add_product" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        Update Product
                    </span>
                    </button>
                <!-- <input type="submit" name="add_product" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" value="Update Product"> -->
            </form>
        </div>
    </div>
</div>
<div id="modal-overlay" class="fixed inset-0 bg-gray-900 opacity-50"></div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Get the modal element
  var modal = document.getElementById('large-modal');

  // Get the close button
  var closeModalBtn = document.getElementById('closeModalBtn');

  // Display the modal on page load
  modal.classList.remove('hidden');

  // Close the modal when the close button is clicked
  closeModalBtn.addEventListener('click', function() {
    modal.classList.add('hidden');
  });
});
</script>


      






            <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
<script>
    var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

    // Change the icons inside the button based on previous settings
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        themeToggleLightIcon.classList.remove('hidden');
    } else {
        themeToggleDarkIcon.classList.remove('hidden');
    }

    var themeToggleBtn = document.getElementById('theme-toggle');

    themeToggleBtn.addEventListener('click', function() {

        // toggle icons inside button
        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');

        // if set via local storage previously
        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }

        // if NOT set via local storage previously
        } else {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }
        
    });



    
    document.addEventListener('DOMContentLoaded', function() {
  // Get the modal element
  var modal = document.getElementById('large-modal');

  // Get the close button
  var closeModalBtn = document.getElementById('closeModalBtn');
  // Display the modal on page load
  modal.classList.remove('hidden');

  // Close the modal when the close button is clicked
  closeModalBtn.addEventListener('click', function() {
    modal.classList.add('hidden');
  });
});

  </script>