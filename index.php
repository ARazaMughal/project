
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
            <a href="#" class="block py-2 pl-3 pr-4 mb-4 text-gray-100 bg-gray-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Home</a>
          </li>
          <li>
            <a href="admin/index.php" class="block py-2 pl-3 pr-4 mb-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
               Admin
            </a>
          </li>
          <li>
            <a href="cart.php" class="block py-2 pl-3 pr-4 mb-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Cart</a>
          </li>
         
        </ul>
        
      </div>
      <button id="theme-toggle" type="button" class="pl-4  text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
          </button>
    
  </nav>

  <!-- 2nd navbar -->


    <nav class="border-gray-200 bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="#" class="flex items-center">
    
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Welcome </span>
      </a>
      <div class="mt-4 hidden w-full md:block md:w-auto" id="navbar-solid-bg">
        <ul class=" flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
          <li>
            <a href="#" data-modal-target="large-modal" data-modal-toggle="large-modal" class="block py-2 pl-3 pr-4 mb-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Login</a>
             
<!-- Login Modal -->
          <div id="large-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
              <div class="relative w-full max-w-4xl max-h-full">
                  <!-- Modal content -->
                  <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                      <!-- Modal header -->
                      <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                          <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                            Login As  
                          </h3>
                          <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="large-modal">
                              <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                              <span class="sr-only">Close modal</span>
                          </button>
                      </div>
                      <!-- Modal body -->
                      
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <button  type="button" class="mr-8 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="large-modal">
                      <img src="images/admin.png" alt="admin image">
                          <span class="sr-only">Close modal</span>
                    </button>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="large-modal">
                      <img src="images/user.png" alt="user image">
                          <span class="sr-only">Close modal</span>
                    </button>

                    </div>
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">   
                      <button type="button" class="text-gray-900 bg-white  text-sm font-medium px-5 py-2.5 dark:bg-gray-700 dark:text-gray-300">
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Admin</span>
                      </button>
                      <button  type="button" class="text-gray-900 bg-white  text-sm font-medium px-5 py-2.5 dark:bg-gray-700 dark:text-gray-300">
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">User</span>
                      </button>
                    </div>   
                  </div>
                </div>
              </div>
            </li>
          </ul>
      </div>

      
    </div>
  </nav>


<!-- Body -->


<div class="p-8 ...">  

<div class="grid grid-cols-1 gap-8 sm:grid-cols-3">

  <?php
    include('./includes/connect.php');
  $select_query= "Select * from `product`";
  $result_query=mysqli_query($con,$select_query);
  while ($row=mysqli_fetch_assoc($result_query)) {
      $product_id=$row['product_id'];
      $product_name=$row['product_name'];
      $product_price=$row['product_price'];
      $product_discription=$row['product_discription'];
      // $product_image=$row['product_image'];

      echo " 
      <div class='w-full max-w-sm bg-gray-200 border border-gray-300 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700'>
      <a href='#'>
          <img class='' src='images/blank.png' alt='product image' />
      </a>
      <div class='px-5 pb-5'>
          <a href='#'>
              <h5 class='text-3xl ml-3 font-bold text-gray-900 dark:text-white'>$product_name</h5>
          </a>
          <div class='flex items-center ml-4 mt-2.5 mb-5'>
              <svg aria-hidden='true' class='w-5 h-5 text-yellow-300' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><title>First star</title><path d='M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z'></path></svg>
              <svg aria-hidden='true' class='w-5 h-5 text-yellow-300' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><title>Second star</title><path d='M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z'></path></svg>
              <svg aria-hidden='true' class='w-5 h-5 text-yellow-300' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><title>Third star</title><path d='M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z'></path></svg>
              <svg aria-hidden='true' class='w-5 h-5 text-yellow-300' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><title>Fourth star</title><path d='M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z'></path></svg>
              <svg aria-hidden='true' class='w-5 h-5 text-yellow-300' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><title>Fifth star</title><path d='M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z'></path></svg>
              <span class='bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3'>5.0</span>
          </div>
          <h5 class='text-xl tracking-tight text-gray-900 dark:text-white'>$product_discription</h5>
          <div class='flex items-center justify-between'>
              <span class='text-2xl font-bold tracking-tight text-gray-900 dark:text-white'>Rs. $product_price</span>"?>
              <a href='add_to_cart.php?id=<?php echo $product_id ?> '>
              <button class='mt-4 relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800'>
              <span class='relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0'>
                  Add to Cart
              </span>
          </button>
          </a>
          <?php echo"
          </div>
      </div>
  </div>
  ";
}
  ?>
 
</div>




  




  <!-- footer -->
  <footer class="mt-4 bg-gray-200 rounded-lg shadow sm:flex sm:items-center sm:justify-between p-4 sm:p-6 xl:p-8 dark:bg-gray-800">
  <p class="mb-4 pl-8 text-sm text-center text-gray-500 dark:text-gray-400 sm:mb-0">
      &copy; 2023 <a href="" class="hover:underline" target="_blank">Designed by Ahmad Raza</a>. All rights reserved.
      
    </p>

  
  </footer>





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
  </script>



</body>