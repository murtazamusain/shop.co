<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Shop.Co</title>
   <!-- font awesome cdn -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="assets/css/output.css">
</head>

<body>
   <!-- header section -->
<section class="header_section">
   <div class="header_top bg-black min-h-9.5 place-content-center text-center">
      <div class="container place-content-center text-center relative">
         <span class="t_h_text">Sign up and get 20% off to your first order. <span
               class="font-Satoshi-Bold underline ">Sign Up Now</span></span>
         <a href="" class="block"><img src=" https://i.postimg.cc/9Qrkbpms/cross-icon.png"
               class="absolute inset-0 my-auto ml-auto mr-0  hidden md:block" alt=""></a>

      </div>
   </div>
   <nav class="container min-h-[96px] flex items-center px-4 md:px-0 ">
      <!-- logo -->
      <div class="flex min-h-7 items-center">
         <img class="inline-block lg:hidden" src="https://i.postimg.cc/CM76VtdW/hamburger.png" alt="">
         <span class="text-black uppercase logo mb-2 ml-4 md:ml-0 cursor-pointer"><a class="cursor-pointer"
               href="index.php">SHOP.CO</a></span>
      </div>
      <!-- Nav Menu -->
      <div class="hidden lg:block nav-menu md:min-w-[340px] ml-[40px]">
         <ul>
            <li><a href="./categories.php" class=" text-black font-Satoshi-Light">Shop <img class="inline-block"
                     src="https://i.postimg.cc/Wb9K0KvM/down-arrow.png" alt=""></a></li>
            <li><a href="./cart.php" class=" ml-[23px] text-black font-Satoshi-Light">On Sale</a></li>
            <li><a href="./index.php#New_Arrivals" class="py-2 ml-[25px] text-black font-Satoshi-Light">New
                  Arrivals</a></li>
            <li><a href="./product-details.php" class=" ml-[25px] text-black font-Satoshi-Light ">Brands</a>
            </li>
         </ul>
      </div>
      <!-- Search Bar -->
      <div class="relative hidden lg:block ml-[19px] nav-search">
         <a href=""> <img src="https://i.postimg.cc/FHMTZXnJ/search-1.png" alt=""
               class="inline-block absolute inset-0 my-auto ml-[12px] z-1 p-1.5 cursor-pointer"></a>

         <input class=" bg-secondary pl-[55px]  py-3.5 rounded-3xl md:min-w-[575px] " type="text"
            placeholder="Search for products...">

      </div>
      <!-- eCommerce Icon -->
      <div class="inline-flex ml-[44px]">
         <a class="md:hidden" href=""><img class="size-[24px]" src="https://i.postimg.cc/zGbdKGpr/search.png"
               alt=""></a>
         <a class="" href="./cart.php"><img class="size-[24px]" src="https://i.postimg.cc/rswjmVz7/shop-con.png"
               alt=""></a>
         <a class="ml-[14px]" href=""><img class="size-[24px]" src="https://i.postimg.cc/dQRcZ43B/account-icon.png"
               alt=""></a>
      </div>
   </nav>
</section>