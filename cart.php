<!doctype html>
<html class="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/dist/output.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
  <script src="jquery-3.6.3.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
</script>
</head>


<body class="bg-white dark:bg-gray-900"> 
  <!-- Navbabr -->
  <nav class=" border-gray-200 bg-gray-200  dark:bg-gray-700 dark:border-gray-700">
    <div class="max-w-screen-xl flex flex-wrap items-center  p-4">
      <a href="#" class="flex items-center">
        <ul class=" flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
          <li>
          <a href=""><img  src="images/cart-img.png" class="mb-2 h-8 mr-6" alt="cart Logo" /></a>
          </li>
      </a>
      </ul>
      <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-solid-bg" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
      <div class="mt-4 hidden w-full md:block md:w-auto" id="navbar-solid-bg">
        <ul class=" flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
          
        <li>
            <a href="index.php" class="block py-2 pl-3 pr-4 mb-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Home</a>
          </li>
          <li>
            <a href="admin/index.php" class="block py-2 pl-3 pr-4 mb-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
               Admin
            </a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 mb-4 text-gray-100 bg-gray-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Cart</a>
          </li>
         
        </ul>
        
      </div>
      <button id="theme-toggle" type="button" class="pl-4 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
          </button>
    
  </nav>

  <!-- 2nd navbar -->


    <nav class="border-gray-200 bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="#" class="flex items-center">
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Your Cart</span>
      </a>
    </div>
  </nav>


<!-- Body -->


<div class="p-8 ...">  


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-m text-left text-gray-500 dark:text-gray-400">
        <thead class="text-m text-gray-900 uppercase bg-gray-400 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    S/N
              </th>
                <th scope="col" class="px-6 py-3">
                   Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Unit Cost
                </th>
                <th scope="col" class="px-6 py-3">
                    Qty
                </th>
                <th scope="col" class="px-6 py-3">
                    Amount
                </th>
                <th scope="col" class="px-6 py-3">
                    Remove
                </th>
            </tr>
        </thead>
        <tbody>
<?php
include('./includes/connect.php');
$select_cart= "Select * from  `cart`  ";
$result_query=mysqli_query($con,$select_cart);
$number=0;
$orderprice=0;
while ($row=mysqli_fetch_assoc($result_query)) {
  $product_id=$row['product_id'];
  $select_product="SELECT * FROM `product` where product_id = $product_id";
  $product_quantity=$row['quantity'];
  $quantity_price=$row['quantity_price'];
  $result_product=mysqli_query($con, $select_product);



  while($row_products=mysqli_fetch_array($result_product)){
  $product_name=$row_products['product_name'];
  $product_price=$row_products['product_price'];
  $product_discription=$row_products['product_discription'];
  $number++;

  $orderprice += $quantity_price;

  echo " 
  <tr class='bg-gray-200 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600'>
                <td class='w-32 p-4'>
                $number
                </td>
                <td class='px-6 py-4 font-semibold text-gray-900 dark:text-white'>
                $product_name
                </td>
                <td id='item_price' class='px-6 py-4 font-semibold text-gray-600 dark:text-white'>
                $product_price 
                </td>
                <td id='item_price' class='px-6 py-4 font-semibold text-gray-600 dark:text-white'>
                $product_quantity 
                </td>
                  <td class='px-6 py-4 font-semibold text-gray-600 dark:text-white'>
                  <span><span id='priceDisplay'>$quantity_price</span></span>
                </td>
                <td class='px-6 py-4'>
" ?>
                  <a href='remove_item.php?id=<?php echo $product_id ?>'>
                    <button name='edit_product' type='button'  data-modal-hide='editModal'> 
                    <svg class='w-6 h-6 block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 18 20'>
                        <path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z'/>
                    </svg>
                    <span class='sr-only'>Close modal</span>
                    </button>
                  </a>
<?php echo "
            </td>
               
            </tr>
          ";
      }
  }
?>
            
        </tbody>
    </table>
    
</div>
<?php
    echo "<p class='text-right mr-8 mt-8 text-2xl font-semibold whitespace-nowrap dark:text-white'>Total Amount: Rs. $orderprice</p>";
?>
<div data-dial-init class="fixed right-6 ">
<button type="button" class=" my-8 text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Order</button>
</div>
</div>

  <!-- footer -->
  <footer class="my-4 bg-gray-200 rounded-lg shadow sm:flex sm:items-center sm:justify-between p-4 sm:p-6 xl:p-8 dark:bg-gray-800">
  <p class="mb-4 pl-8 text-sm text-center text-gray-500 dark:text-gray-400 sm:mb-0">
  &copy; 2023 <a href="" class="hover:underline" target="_blank">Designed by Ahmad Raza</a>. All rights reserved.
      
    </p>

  
  </footer>


<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

  <script>
        const decreaseBtn = document.getElementById('decreaseBtn');
        const increaseBtn = document.getElementById('increaseBtn');
        const quantityInput = document.getElementById('quantityInput');
        const priceDisplay = document.getElementById('priceDisplay');

        let value = 0;
        let price = parseInt(document.getElementById('item_price').textContent);
        let quantity = 0;

        // Function to update the display
        const updateDisplay = () => {
        quantityInput.textContent = value;
        const totalPrice = price * quantity;
        priceDisplay.textContent = totalPrice;
        };

        // Event listener for decrease button
        decreaseBtn.addEventListener('click', () => {
        value--;
        quantityInput.value = quantity;
        updateDisplay();
        });

        // Event listener for increase button
        increaseBtn.addEventListener('click', () => {
        value++;
        quantityInput.value = quantity;
        updateDisplay();
      });

        // Event listener for quantity input change
        quantityInput.addEventListener('change', () => {
        quantity = parseInt(quantityInput.value) || 0;
        updateDisplay();
      
        });
        updateDisplay();


  </script>




<script>
// js for dark/light mode

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

</body>
