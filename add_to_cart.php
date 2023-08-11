<?php
//Get Data from database 
  include('./includes/connect.php');
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
include('./includes/connect.php');
 if (isset($_POST['add_product'])) {
$product_name=$_POST['product_name'];
$product_price=$_POST['product_price'];
$product_quantity=$_POST['quantity'];
$total_price = $_POST['price'];

$check="SELECT product_id FROM `cart` where product_id = '$id'";
$result_query=mysqli_query($con,$check);
if (mysqli_num_rows($result_query) > 0) {
  // ID already exists in the database
  echo '<script>';
  echo 'alert("This product is already present in cart.");';
  echo 'window.location.href = "index.php";';  
  echo '</script>';
} else {
  // ID doesn't exist, proceed with the insertion
  // Assuming $your_data contains the data you want to store
  $check = "INSERT INTO `cart` (product_id,quantity,quantity_price) VALUES ('$id', '$product_quantity','$total_price')";
  mysqli_query($con, $check);
  echo '<script>';
  echo 'alert("Successfully Inserted into Cart");';
  echo 'window.location.href = "index.php";';  
  echo '</script>';
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
<div id="large-modal" tabindex="-1" class="fixed inset-0 flex items-center justify-center fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-4xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-gray-100 rounded-lg shadow dark:bg-gray-900">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Add to cart 
                </h3>
                <a href="index.php">
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="large-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                </a>
            </div>
            <!-- Modal body -->
            <form method="post", enctype="multipart/form-data">
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                        <input type="hidden" name="product_name" id="product_name" value="<?php echo $product_name; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">                    
                        <input type="hidden" name="product_keywords" id="myInput" value="<?php echo $product_keywords; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">                        
                        <input type="hidden" name="product_price" id="myInput" value="<?php echo $product_price; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">                    
                        <input type="hidden" name="product_discription" id="myInput" rows="4"  value="<?php echo $product_discription; ?>"class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">                    
                    </div>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-m text-gray-900 uppercase bg-gray-100 dark:bg-gray-900 dark:text-gray-300">
                <tr>
                   
                    <td scope="col" class="px-6 py-3">
                        Product
                    </td>
                    <td scope="col"  class="px-6 py-3 ml-4">
                        Qty
                    </td>
                    <td scope="col" class="px-6 py-3">
                        Price
                    </td>
                    <td scope="col" class="px-6 py-3">
                        Total
                    </td>
                </tr>
            </thead>
            <tbody>
            <tr class='bg-gray-200 border-b dark:bg-gray-800 dark:border-gray-700  '>
                
                <td class='px-6 py-4 text-lg font-semibold text-gray-900 dark:text-white'>
                <?php echo $product_name;?>
                </td>
                <td class='px-6 py-4'>
                    <div class='flex items-center space-x-3'>
                    <button id='decreaseBtn'></button>
                        <div>
                          <input name='quantity' id='quantityInput' type='number' class='px-4 py-2 bg-gray-100 dark:bg-gray-800 rounded-lg text-center w-16' value='0' min='1'>
                        </div>
                    <button id='increaseBtn'></button>
                    </div>
                </td>
                <td id='item_price' class='px-6 py-4 font-semibold text-gray-900 dark:text-white'>
                    <?php echo $product_price; ?>
                </td>
                <td class='px-6 py-4 font-semibold text-gray-900 dark:text-white'>
                    <input type="hidden" name="price" id="priceInput" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">                        
                    <span><span id='priceDisplay'></span></span>
                </td>
            </tr>
            </tbody>
    </table>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
            <button type="submit" name="add_product" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        Add
                    </span>
                    </button>
            </div>
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
    const decreaseBtn = document.getElementById('decreaseBtn');
    const increaseBtn = document.getElementById('increaseBtn');
    const quantityInput = document.getElementById('quantityInput');
    const priceDisplay = document.getElementById('priceDisplay');
    const priceInput = document.getElementById('priceInput');

    let value = 0;
    let price = parseInt(document.getElementById('item_price').textContent);
    let quantity = parseInt(quantityInput.value) || 0; 

    const updateDisplay = () => {
        quantityInput.value = quantity;
        const totalPrice = price * quantity;
        priceDisplay.textContent = totalPrice;
        priceInput.value = totalPrice; 
    };

    decreaseBtn.addEventListener('click', () => {
        if (quantity > 0) {
            quantity--;
        }
        updateDisplay();
    });

    increaseBtn.addEventListener('click', () => {
        quantity++;
        updateDisplay();
    });

    quantityInput.addEventListener('change', () => {
        quantity = parseInt(quantityInput.value) || 0;
        updateDisplay();
    });

    updateDisplay();



  </script>
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



  </script>

