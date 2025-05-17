<?php
    include_once("inc/header.php");
?>
    <!-- Page Indicator-->
    <div class="container px-5 pt-[23px] md:px-0 flex items-center border-t border-gray-400">
        <h6>Home</h6>
        <img class="size-[16px] ml-[4px] " src="https://i.postimg.cc/RVXTYGcS/right-arrow.png" alt="">
        <h6 class="ml-[12px]">Casual</h6>
        
    </div>
<!-- Main Container -->
<section>
    <div class="max-w-[1242px] mx-auto md:flex items-start gap-5 mt-[24px] pb-[39px]">
        <!-- Left filter Container -->
        <div class="filter_container px-[24px] mb-5 md:mb-0 border border-gray-300 rounded-[20px] py-[20px] md:w-[297px]">
            <div class="flex justify-between items-center mb-[22px]">
                <h4 class="text-black text-[20px]! font-Satoshi-Bold!">Filters</h4>
                <img class="w-5 h-5 hidden md:block" src="https://i.postimg.cc/9fGGDWzJ/setting-icon.png" alt="">
                <img class="w-5 h-5 block md:hidden" src="https://i.postimg.cc/Qxh449Gk/cross-icon-gray.png" alt="">
            </div>

            <hr class="w-11.5/12 h-[1px] text-gray-300 mx-auto my-5">
            <div>
                <ul>
                    <li class="flex justify-between items-center mb-[15px]">
                        <h6>T-shirts</h6> <img src="https://i.postimg.cc/RVXTYGcS/right-arrow.png" alt="">
                    </li>
                    <li class="flex justify-between items-center mb-[14px]">
                        <h6>Shorts</h6> <img src="https://i.postimg.cc/RVXTYGcS/right-arrow.png" alt="">
                    </li>
                    <li class="flex justify-between items-center mb-[14px]">
                        <h6>Shirts</h6> <img src="https://i.postimg.cc/RVXTYGcS/right-arrow.png" alt="">
                    </li>
                    <li class="flex justify-between items-center mb-[14px]">
                        <h6>Hoodie</h6> <img src="https://i.postimg.cc/RVXTYGcS/right-arrow.png" alt="">
                    </li>
                    <li class="flex justify-between items-center">
                        <h6>Jeans</h6> <img src="https://i.postimg.cc/RVXTYGcS/right-arrow.png" alt="">
                    </li>
                </ul>
            </div>
            <hr class="w-11.5/12 h-[1px] text-gray-300 mx-auto mt-[20px] mb-[24px]">
            <div class="flex justify-between items-center ">
                <h4 class="text-black text-[20px]! font-Satoshi-Bold!">Price</h4>
                <img class="w-5 h-5 -rotate-90 " src="https://i.postimg.cc/RVXTYGcS/right-arrow.png" alt="">
            </div>
            <div class="mb-[45px]">
                <label for="default-range" class="block  text-sm font-medium text-gray-900 dark:text-white">Default
                    range</label>
                <input id="default-range" type="range" value="50"
                    class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
            </div>
            <hr class="w-11.5/12 h-[1px] text-gray-300 mx-auto mt-[20px] mb-[24px]">
            <div class="flex justify-between items-center mb-4">
                <h4 class="text-black text-[20px]! font-Satoshi-Bold!">Colors</h4>
                <img class="w-5 h-5 -rotate-90 " src="https://i.postimg.cc/RVXTYGcS/right-arrow.png" alt="">
            </div>
            <div class="grid grid-cols-5  gap-5 justify-items-center  mb-[22px] mt-[17px]">
                <input type="checkbox" id="option1" name="option"
                    class="appearance-none bg-[#00C12B] size-[37px] rounded-full relative custom_ceck ">
                <input type="checkbox" id="option1" name="option"
                    class="appearance-none bg-[#F50606] size-[37px] rounded-full relative custom_ceck ">
                <input type="checkbox" id="option1" name="option"
                    class="appearance-none bg-[#F5DD06] size-[37px] rounded-full relative custom_ceck ">
                <input type="checkbox" id="option1" name="option"
                    class="appearance-none bg-[#F57906] size-[37px] rounded-full relative custom_ceck ">
                <input type="checkbox" id="option1" name="option"
                    class="appearance-none bg-[#06CAF5] size-[37px] rounded-full relative custom_ceck ">
                <input type="checkbox" id="option1" name="option"
                    class="appearance-none bg-[#063AF5] size-[37px] rounded-full relative custom_ceck ">
                <input type="checkbox" id="option1" name="option"
                    class="appearance-none bg-[#7D06F5] size-[37px] rounded-full relative custom_ceck ">
                <input type="checkbox" id="option1" name="option"
                    class="appearance-none bg-[#F506A4] size-[37px] rounded-full relative custom_ceck ">
                <input type="checkbox" id="option1" name="option"
                    class="appearance-none bg-[#fff] size-[37px] border border-gray-300 rounded-full relative custom_ceck ">
                <input type="checkbox" id="option1" name="option"
                    class="appearance-none bg-[#000] size-[37px] rounded-full relative custom_ceck ">
            </div>

            <hr class="w-11.5/12 h-[1px] text-gray-300 mx-auto mt-[20px] mb-[24px]">
            <div class="flex justify-between items-center mb-4">
                <h4 class="text-black text-[20px]! font-Satoshi-Bold!">Size</h4>
                <img class="w-5 h-5 -rotate-90 " src="https://i.postimg.cc/RVXTYGcS/right-arrow.png" alt="">
            </div>
            <div class="flex flex-wrap gap-[8px] mb-5 mt-[18px]">
                <input type="checkbox" name="option" id=""
                    class="appearance-none bg-secondary w-24 h-10 rounded-primary  transition-all relative before:absolute before:content-['XX-Small'] before:text-black before:inset-0 before:m-auto before:w-20 before:h-10 before:place-content-center  before:text-center checked:bg-black checked:before:text-white cursor-pointer">
                <input type="checkbox" name="option" id=""
                    class="appearance-none bg-secondary w-24 h-10 rounded-primary  transition-all relative before:absolute before:content-['X-Small'] before:text-black before:inset-0 before:m-auto before:w-20 before:h-20 before:place-content-center  before:text-center checked:bg-black checked:before:text-white cursor-pointer">
                <input type="checkbox" name="option" id=""
                    class="appearance-none bg-secondary w-24 h-10 rounded-primary  transition-all relative before:absolute before:content-['Small'] before:text-black before:inset-0 before:m-auto before:w-20 before:h-20 before:place-content-center  before:text-center checked:bg-black checked:before:text-white cursor-pointer">
                <input type="checkbox" name="option" id=""
                    class="appearance-none bg-secondary w-24 h-10 rounded-primary  transition-all relative before:absolute before:content-['Medium'] before:text-black before:inset-0 before:m-auto before:w-20 before:h-20 before:place-content-center  before:text-center checked:bg-black checked:before:text-white cursor-pointer">
                <input type="checkbox" name="option" id=""
                    class="appearance-none bg-secondary w-24 h-10 rounded-primary  transition-all relative before:absolute before:content-['Large'] before:text-black before:inset-0 before:m-auto before:w-20 before:h-20 before:place-content-center  before:text-center checked:bg-black checked:before:text-white cursor-pointer">
                <input type="checkbox" name="option" id=""
                    class="appearance-none bg-secondary w-24 h-10 rounded-primary  transition-all relative before:absolute before:content-['X-Lage'] before:text-black before:inset-0 before:m-auto before:w-20 before:h-20 before:place-content-center  before:text-center checked:bg-black checked:before:text-white cursor-pointer">
                <input type="checkbox" name="option" id=""
                    class="appearance-none bg-secondary w-24 h-10 rounded-primary  transition-all relative before:absolute before:content-['XX-Large'] before:text-black before:inset-0 before:m-auto before:w-20 before:h-20 before:place-content-center  before:text-center checked:bg-black checked:before:text-white cursor-pointer">
                <input type="checkbox" name="option" id=""
                    class="appearance-none bg-secondary w-24 h-10 rounded-primary  transition-all relative before:absolute before:content-['3X-Large'] before:text-black before:inset-0 before:m-auto before:w-20 before:h-20 before:place-content-center  before:text-center checked:bg-black checked:before:text-white cursor-pointer">
                <input type="checkbox" name="option" id=""
                    class="appearance-none bg-secondary w-24 h-10 rounded-primary  transition-all relative before:absolute before:content-['4X-Large'] before:text-black before:inset-0 before:m-auto before:w-20 before:h-20 before:place-content-center  before:text-center checked:bg-black checked:before:text-white cursor-pointer">
            </div>
            <hr class="w-11.5/12 h-[1px] text-gray-300 mx-auto mt-[20px] mb-[24px]">
            <div class="flex justify-between items-center mb-4">
                <h4 class="text-black text-[20px]! font-Satoshi-Bold!">Dress Style</h4>
                <img class="w-5 h-5 -rotate-90 " src="https://i.postimg.cc/RVXTYGcS/right-arrow.png" alt="">
            </div>
            <div>
                <ul>
                    <li class="flex justify-between items-center mb-[15px]">
                        <h6>Casual</h6> <img src="https://i.postimg.cc/RVXTYGcS/right-arrow.png" alt="">
                    </li>
                    <li class="flex justify-between items-center mb-[14px]">
                        <h6>Formal</h6> <img src="https://i.postimg.cc/RVXTYGcS/right-arrow.png" alt="">
                    </li>
                    <li class="flex justify-between items-center mb-[14px]">
                        <h6>Party</h6> <img src="https://i.postimg.cc/RVXTYGcS/right-arrow.png" alt="">
                    </li>
                    <li class="flex justify-between items-center">
                        <h6>Gym</h6> <img src="https://i.postimg.cc/RVXTYGcS/right-arrow.png" alt="">
                    </li>
                </ul>
            </div>
            <button class="bg-black py-[13px] px-[86px] mt-[22px]  text-white rounded-primary text-sm! font-Satoshi-Medium!"> Apply Filter</button>
        </div>
        <!-- Right Product Container -->
        <div class="md:w-[925px]  px-5 md:px-0">
            <div class="flex justify-between items-center mb-4">
                <h4 class="text-black text-[32px]! font-Satoshi-Bold!">Casual</h4>
                <img class="w-8 h-8 block md:hidden bg-secondary p-2 rounded-full"
                    src="https://i.postimg.cc/9fGGDWzJ/setting-icon.png" alt="">
                <span class="hidden md:block text-base! mt-[7px]">Showing 1-10 of 100 Products <span class="ml-[7px]">Sort by:</span> <h6 class=" inline-block font-Satoshi-Medium! text-black!">Most
                        Popular
                        <img class="w-4 h-4 inline-block" src="https://i.postimg.cc/Wb9K0KvM/down-arrow.png" alt="">
                    </h6>
                </span>
            </div>
            <!-- Product  -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-x-[20px] gap-y-[37px] mb-[33px] justify-between md:w-full">
            <!-- Product-1 -->
            <div class="">
            <a class="block" href="">
               <div class="rounded-[20px] bg-bg-1 min-h-[298px] min-w-[295px]">
                  <img class="p_img" src="https://i.postimg.cc/Zng4TcZH/Frame-33-2.png" alt="">
               </div>
               <h4 class="p_title ">Gradient Graphic T-shirt</h4>
               <!-- rating -->
               <div class="inline-flex gap-[5.31px] mt-[8px]">
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                     <path
                        d="M9.24494 0.255005L11.8641 5.89491L18.0374 6.6431L13.4829 10.8769L14.679 16.9793L9.24494 13.956L3.8109 16.9793L5.00697 10.8769L0.452479 6.6431L6.62573 5.89491L9.24494 0.255005Z"
                        fill="#FFC633" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                     <path
                        d="M9.24494 0.255005L11.8641 5.89491L18.0374 6.6431L13.4829 10.8769L14.679 16.9793L9.24494 13.956L3.8109 16.9793L5.00697 10.8769L0.452479 6.6431L6.62573 5.89491L9.24494 0.255005Z"
                        fill="#FFC633" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                     <path
                        d="M9.24494 0.255005L11.8641 5.89491L18.0374 6.6431L13.4829 10.8769L14.679 16.9793L9.24494 13.956L3.8109 16.9793L5.00697 10.8769L0.452479 6.6431L6.62573 5.89491L9.24494 0.255005Z"
                        fill="#FFC633" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17" fill="none">
                     <path
                        d="M3.56595 16.9793L8.99999 13.956V0.255005L6.38079 5.89491L0.207535 6.6431L4.76203 10.8769L3.56595 16.9793Z"
                        fill="#FFC633" />
                  </svg>
                  <span class="text-black">3.5/<span class="text-gray-500">5</span></span>
               </div>
               <!-- Price -->
               <div class="flex items-center mt-1">
                  <h4 class="p_price text-black">$145</h4>
                  <h4 class="p_price_off ml-2"></h4>
                  <h6 class="p_price_less bg-secondary px-4 py-1 rounded-3xl ml-3"></h6>
               </div>
            </a>
            </div>
            <!-- Product-2 -->
            <div class="">
            <a class="block" href="">
               <div class="rounded-[20px] bg-bg-1 min-h-[298px] min-w-[295px]">
                  <img class="p_img" src="https://i.postimg.cc/2y3CRJp3/Frame-34-2.png" alt="">
               </div>
               <h4 class="p_title ">Polo with Tipping Details</h4>
               <!-- rating -->
               <div class="inline-flex gap-[5.31px] mt-[8px]">
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                     <path
                        d="M9.24494 0.255005L11.8641 5.89491L18.0374 6.6431L13.4829 10.8769L14.679 16.9793L9.24494 13.956L3.8109 16.9793L5.00697 10.8769L0.452479 6.6431L6.62573 5.89491L9.24494 0.255005Z"
                        fill="#FFC633" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                     <path
                        d="M9.24494 0.255005L11.8641 5.89491L18.0374 6.6431L13.4829 10.8769L14.679 16.9793L9.24494 13.956L3.8109 16.9793L5.00697 10.8769L0.452479 6.6431L6.62573 5.89491L9.24494 0.255005Z"
                        fill="#FFC633" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                     <path
                        d="M9.24494 0.255005L11.8641 5.89491L18.0374 6.6431L13.4829 10.8769L14.679 16.9793L9.24494 13.956L3.8109 16.9793L5.00697 10.8769L0.452479 6.6431L6.62573 5.89491L9.24494 0.255005Z"
                        fill="#FFC633" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17" fill="none">
                     <path
                        d="M3.56595 16.9793L8.99999 13.956V0.255005L6.38079 5.89491L0.207535 6.6431L4.76203 10.8769L3.56595 16.9793Z"
                        fill="#FFC633" />
                  </svg>
                  <span class="text-black">3.5/<span class="text-gray-500">5</span></span>
               </div>
               <!-- Price -->
               <div class="flex items-center mt-1">
                  <h4 class="p_price text-black">$180</h4>
                  <h4 class="p_price_off ml-2"></h4>
                  <h6 class="p_price_less bg-secondary px-4 py-1 rounded-3xl ml-3"></h6>
               </div>
            </a>
            </div>
            <!-- Product-3 -->
            <div class="">
            <a class="block" href="">
               <div class="rounded-[20px] bg-bg-1 min-h-[298px] min-w-[295px]">
                  <img class="p_img" src="https://i.postimg.cc/C1cw20QW/Frame-38-2.png" alt="">
               </div>
               <h4 class="p_title ">Black Striped T-shirt</h4>
               <!-- rating -->
               <div class="inline-flex gap-[5.31px] mt-[8px]">
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                     <path
                        d="M9.24494 0.255005L11.8641 5.89491L18.0374 6.6431L13.4829 10.8769L14.679 16.9793L9.24494 13.956L3.8109 16.9793L5.00697 10.8769L0.452479 6.6431L6.62573 5.89491L9.24494 0.255005Z"
                        fill="#FFC633" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                     <path
                        d="M9.24494 0.255005L11.8641 5.89491L18.0374 6.6431L13.4829 10.8769L14.679 16.9793L9.24494 13.956L3.8109 16.9793L5.00697 10.8769L0.452479 6.6431L6.62573 5.89491L9.24494 0.255005Z"
                        fill="#FFC633" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                     <path
                        d="M9.24494 0.255005L11.8641 5.89491L18.0374 6.6431L13.4829 10.8769L14.679 16.9793L9.24494 13.956L3.8109 16.9793L5.00697 10.8769L0.452479 6.6431L6.62573 5.89491L9.24494 0.255005Z"
                        fill="#FFC633" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17" fill="none">
                     <path
                        d="M3.56595 16.9793L8.99999 13.956V0.255005L6.38079 5.89491L0.207535 6.6431L4.76203 10.8769L3.56595 16.9793Z"
                        fill="#FFC633" />
                  </svg>
                  <span class="text-black">3.5/<span class="text-gray-500">5</span></span>
               </div>
               <!-- Price -->
               <div class="flex items-center mt-1">
                  <h4 class="p_price text-black">$120</h4>
                  <h4 class="p_price_off ml-2">150</h4>
                  <h6 class="p_price_less bg-secondary px-4 py-1 rounded-primary ml-3"> -30%</h6>
               </div>
            </a>
            </div>
            <!-- Product-4 -->
            <div class="">
            <a class="block" href="">
               <div class="rounded-[20px] bg-bg-1 min-h-[298px] min-w-[295px]">
                  <img class="p_img" src="https://i.postimg.cc/15X0Bgrs/Frame-71.png" alt="">
               </div>
               <h4 class="p_title ">SKINNY FIT JEANS</h4>
               <!-- rating -->
               <div class="inline-flex gap-[5.31px] mt-[8px]">
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                     <path
                        d="M9.24494 0.255005L11.8641 5.89491L18.0374 6.6431L13.4829 10.8769L14.679 16.9793L9.24494 13.956L3.8109 16.9793L5.00697 10.8769L0.452479 6.6431L6.62573 5.89491L9.24494 0.255005Z"
                        fill="#FFC633" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                     <path
                        d="M9.24494 0.255005L11.8641 5.89491L18.0374 6.6431L13.4829 10.8769L14.679 16.9793L9.24494 13.956L3.8109 16.9793L5.00697 10.8769L0.452479 6.6431L6.62573 5.89491L9.24494 0.255005Z"
                        fill="#FFC633" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                     <path
                        d="M9.24494 0.255005L11.8641 5.89491L18.0374 6.6431L13.4829 10.8769L14.679 16.9793L9.24494 13.956L3.8109 16.9793L5.00697 10.8769L0.452479 6.6431L6.62573 5.89491L9.24494 0.255005Z"
                        fill="#FFC633" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17" fill="none">
                     <path
                        d="M3.56595 16.9793L8.99999 13.956V0.255005L6.38079 5.89491L0.207535 6.6431L4.76203 10.8769L3.56595 16.9793Z"
                        fill="#FFC633" />
                  </svg>
                  <span class="text-black">3.5/<span class="text-gray-500">5</span></span>
               </div>
               <!-- Price -->
               <div class="flex items-center mt-1">
                  <h4 class="p_price text-black">$240</h4>
                  <h4 class="p_price_off ml-2">260</h4>
                  <h6 class="p_price_less bg-secondary px-4 py-1 rounded-primary ml-3">-20%</h6>
               </div>
            </a>
            </div>
            <!-- Product-5 -->
            <div class="">
            <a class="block" href="">
               <div class="rounded-[20px] bg-bg-1 min-h-[298px] min-w-[295px]">
                  <img class="p_img" src="https://i.postimg.cc/44BbpvtW/Frame-72.png" alt="">
               </div>
               <h4 class="p_title ">Checkered Shirt</h4>
               <!-- rating -->
               <div class="inline-flex gap-[5.31px] mt-[8px]">
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                     <path
                        d="M9.24494 0.255005L11.8641 5.89491L18.0374 6.6431L13.4829 10.8769L14.679 16.9793L9.24494 13.956L3.8109 16.9793L5.00697 10.8769L0.452479 6.6431L6.62573 5.89491L9.24494 0.255005Z"
                        fill="#FFC633" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                     <path
                        d="M9.24494 0.255005L11.8641 5.89491L18.0374 6.6431L13.4829 10.8769L14.679 16.9793L9.24494 13.956L3.8109 16.9793L5.00697 10.8769L0.452479 6.6431L6.62573 5.89491L9.24494 0.255005Z"
                        fill="#FFC633" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                     <path
                        d="M9.24494 0.255005L11.8641 5.89491L18.0374 6.6431L13.4829 10.8769L14.679 16.9793L9.24494 13.956L3.8109 16.9793L5.00697 10.8769L0.452479 6.6431L6.62573 5.89491L9.24494 0.255005Z"
                        fill="#FFC633" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17" fill="none">
                     <path
                        d="M3.56595 16.9793L8.99999 13.956V0.255005L6.38079 5.89491L0.207535 6.6431L4.76203 10.8769L3.56595 16.9793Z"
                        fill="#FFC633" />
                  </svg>
                  <span class="text-black">3.5/<span class="text-gray-500">5</span></span>
               </div>
               <!-- Price -->
               <div class="flex items-center mt-1">
                  <h4 class="p_price text-black">$180</h4>
                  <h4 class="p_price_off ml-2"></h4>
                  <h6 class="p_price_less bg-secondary px-4 py-1 rounded-3xl ml-3"></h6>
               </div>
            </a>
            </div>
            <!-- Product-6 -->
            <div class="">
            <a class="block" href="">
               <div class="rounded-[20px] bg-bg-1 min-h-[298px] min-w-[295px]">
                  <img class="p_img" src="https://i.postimg.cc/d3H2vvvb/Frame-73.png" alt="">
               </div>
               <h4 class="p_title ">Sleeve Striped T-shirt</h4>
               <!-- rating -->
               <div class="inline-flex gap-[5.31px] mt-[8px]">
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                     <path
                        d="M9.24494 0.255005L11.8641 5.89491L18.0374 6.6431L13.4829 10.8769L14.679 16.9793L9.24494 13.956L3.8109 16.9793L5.00697 10.8769L0.452479 6.6431L6.62573 5.89491L9.24494 0.255005Z"
                        fill="#FFC633" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                     <path
                        d="M9.24494 0.255005L11.8641 5.89491L18.0374 6.6431L13.4829 10.8769L14.679 16.9793L9.24494 13.956L3.8109 16.9793L5.00697 10.8769L0.452479 6.6431L6.62573 5.89491L9.24494 0.255005Z"
                        fill="#FFC633" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                     <path
                        d="M9.24494 0.255005L11.8641 5.89491L18.0374 6.6431L13.4829 10.8769L14.679 16.9793L9.24494 13.956L3.8109 16.9793L5.00697 10.8769L0.452479 6.6431L6.62573 5.89491L9.24494 0.255005Z"
                        fill="#FFC633" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17" fill="none">
                     <path
                        d="M3.56595 16.9793L8.99999 13.956V0.255005L6.38079 5.89491L0.207535 6.6431L4.76203 10.8769L3.56595 16.9793Z"
                        fill="#FFC633" />
                  </svg>
                  <span class="text-black">3.5/<span class="text-gray-500">5</span></span>
               </div>
               <!-- Price -->
               <div class="flex items-center mt-1">
                  <h4 class="p_price text-black">$130</h4>
                  <h4 class="p_price_off ml-2">160</h4>
                  <h6 class="p_price_less bg-secondary px-4 py-1 rounded-3xl ml-3">-30%</h6>
               </div>
            </a>
            </div>
            <!-- Product-7 -->
            <div class="">
            <a class="block" href="">
               <div class="rounded-[20px] bg-bg-1 min-h-[298px] min-w-[295px]">
                  <img class="p_img" src="https://i.postimg.cc/J04N9tw3/Frame-32-3.png" alt="">
               </div>
               <h4 class="p_title ">Vertical Stiped Shirt</h4>
               <!-- rating -->
               <div class="inline-flex gap-[5.31px] mt-[8px]">
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                     <path
                        d="M9.24494 0.255005L11.8641 5.89491L18.0374 6.6431L13.4829 10.8769L14.679 16.9793L9.24494 13.956L3.8109 16.9793L5.00697 10.8769L0.452479 6.6431L6.62573 5.89491L9.24494 0.255005Z"
                        fill="#FFC633" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                     <path
                        d="M9.24494 0.255005L11.8641 5.89491L18.0374 6.6431L13.4829 10.8769L14.679 16.9793L9.24494 13.956L3.8109 16.9793L5.00697 10.8769L0.452479 6.6431L6.62573 5.89491L9.24494 0.255005Z"
                        fill="#FFC633" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                     <path
                        d="M9.24494 0.255005L11.8641 5.89491L18.0374 6.6431L13.4829 10.8769L14.679 16.9793L9.24494 13.956L3.8109 16.9793L5.00697 10.8769L0.452479 6.6431L6.62573 5.89491L9.24494 0.255005Z"
                        fill="#FFC633" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17" fill="none">
                     <path
                        d="M3.56595 16.9793L8.99999 13.956V0.255005L6.38079 5.89491L0.207535 6.6431L4.76203 10.8769L3.56595 16.9793Z"
                        fill="#FFC633" />
                  </svg>
                  <span class="text-black">3.5/<span class="text-gray-500">5</span></span>
               </div>
               <!-- Price -->
               <div class="flex items-center mt-1">
                  <h4 class="p_price text-black">$212</h4>
                  <h4 class="p_price_off ml-2">$232</h4>
                  <h6 class="p_price_less bg-secondary px-4 py-1 rounded-primary ml-3">-20%</h6>
               </div>
            </a>
            </div>
            <!-- Product-8 -->
            <div class="">
            <a class="block" href="">
               <div class="rounded-[20px] bg-bg-1 min-h-[298px] min-w-[295px]">
                  <img class="p_img" src="https://i.postimg.cc/zBkwtKQX/Frame-70.png" alt="">
               </div>
               <h4 class="p_title ">Courage Graphic T-shirt</h4>
               <!-- rating -->
               <div class="inline-flex gap-[5.31px] mt-[8px]">
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                     <path
                        d="M9.24494 0.255005L11.8641 5.89491L18.0374 6.6431L13.4829 10.8769L14.679 16.9793L9.24494 13.956L3.8109 16.9793L5.00697 10.8769L0.452479 6.6431L6.62573 5.89491L9.24494 0.255005Z"
                        fill="#FFC633" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                     <path
                        d="M9.24494 0.255005L11.8641 5.89491L18.0374 6.6431L13.4829 10.8769L14.679 16.9793L9.24494 13.956L3.8109 16.9793L5.00697 10.8769L0.452479 6.6431L6.62573 5.89491L9.24494 0.255005Z"
                        fill="#FFC633" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                     <path
                        d="M9.24494 0.255005L11.8641 5.89491L18.0374 6.6431L13.4829 10.8769L14.679 16.9793L9.24494 13.956L3.8109 16.9793L5.00697 10.8769L0.452479 6.6431L6.62573 5.89491L9.24494 0.255005Z"
                        fill="#FFC633" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17" fill="none">
                     <path
                        d="M3.56595 16.9793L8.99999 13.956V0.255005L6.38079 5.89491L0.207535 6.6431L4.76203 10.8769L3.56595 16.9793Z"
                        fill="#FFC633" />
                  </svg>
                  <span class="text-black">3.5/<span class="text-gray-500">5</span></span>
               </div>
               <!-- Price -->
               <div class="flex items-center mt-1">
                  <h4 class="p_price text-black">$145</h4>
                  <h4 class="p_price_off ml-2"></h4>
                  <h6 class="p_price_less bg-secondary px-4 py-1 rounded-3xl ml-3"></h6>
               </div>
            </a>
            </div>
            <!-- Product-9 -->
            <div class="">
            <a class="block" href="">
               <div class="rounded-[20px] bg-bg-1 min-h-[298px] min-w-[295px]">
                  <img class="p_img" src="https://i.postimg.cc/C5Lv6s25/Frame_34_(1).png" alt="">
               </div>
               <h4 class="p_title ">Loose Fit Bermuda Shorts</h4>
               <!-- rating -->
               <div class="inline-flex gap-[5.31px] mt-[8px]">
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                     <path
                        d="M9.24494 0.255005L11.8641 5.89491L18.0374 6.6431L13.4829 10.8769L14.679 16.9793L9.24494 13.956L3.8109 16.9793L5.00697 10.8769L0.452479 6.6431L6.62573 5.89491L9.24494 0.255005Z"
                        fill="#FFC633" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                     <path
                        d="M9.24494 0.255005L11.8641 5.89491L18.0374 6.6431L13.4829 10.8769L14.679 16.9793L9.24494 13.956L3.8109 16.9793L5.00697 10.8769L0.452479 6.6431L6.62573 5.89491L9.24494 0.255005Z"
                        fill="#FFC633" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17" fill="none">
                     <path
                        d="M9.24494 0.255005L11.8641 5.89491L18.0374 6.6431L13.4829 10.8769L14.679 16.9793L9.24494 13.956L3.8109 16.9793L5.00697 10.8769L0.452479 6.6431L6.62573 5.89491L9.24494 0.255005Z"
                        fill="#FFC633" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17" fill="none">
                     <path
                        d="M3.56595 16.9793L8.99999 13.956V0.255005L6.38079 5.89491L0.207535 6.6431L4.76203 10.8769L3.56595 16.9793Z"
                        fill="#FFC633" />
                  </svg>
                  <span class="text-black">3.5/<span class="text-gray-500">5</span></span>
               </div>
               <!-- Price -->
               <div class="flex items-center mt-1">
                  <h4 class="p_price text-black">$80</h4>
                  <h4 class="p_price_off ml-2"></h4>
                  <h6 class="p_price_less bg-secondary px-4 py-1 rounded-3xl ml-3"></h6>
               </div>
            </a>
            </div>
        </div>
            <hr class="w-11.5/12 h-[1px] text-gray-300 mx-auto my-5">
            <!-- Pagination -->
            <div class="flex justify-between items-center gap-4 ">
                <a href="#" class="min-h-8 min-w-20 bg-secondary rounded py-2 px-4"> <img
                        class="h-3 w-3 inline-block mr-3" src="https://i.postimg.cc/T1HpsDyt/left-arrow-button-slim.png"
                        alt="">Previous</a>
                <div> <button>
                        <ul class="flex ml-[2px]">
                            <li><a href="#"
                                    class="w-[42px] h-[37px] block place-content-center text-center rounded bg-secondary hover:bg-secondary active:bg-secondary">1</a>
                            </li>
                            <li><a href="#" class="w-[42px] h-[37px] block place-content-center text-center rounded hover:bg-secondary active:bg-secondary">2</a>
                            </li>
                            <li class="hidden md:block"><a href="#"
                                    class="w-[42px] h-[37px] block place-content-center text-center rounded hover:bg-secondary active:bg-secondary">3</a>
                            </li>
                            <li><a href="#" class="w-[42px] h-[37px]  block place-content-center text-center rounded hover:bg-secondary active:bg-secondary">...</a>
                            </li>
                            <li class="hidden md:block"><a href="#"
                                    class="w-[42px] h-[37px] block place-content-center text-center rounded hover:bg-secondary active:bg-secondary">8</a>
                            </li>
                            <li><a href="#" class="w-[42px] h-[37px] block place-content-center text-center rounded hover:bg-secondary active:bg-secondary">9</a>
                            </li>
                            <li><a href="#" class="w-[42px] h-[37px] block place-content-center text-center rounded hover:bg-secondary active:bg-secondary">10</a>
                            </li>
                        </ul>
                </div>
                <a href="#" class="min-h-8 min-w-20 bg-secondary rounded py-2 px-4 mr-[9px]"> Next<img
                        class="h-3 w-3 inline-block ml-3 rotate-180"
                        src="https://i.postimg.cc/T1HpsDyt/left-arrow-button-slim.png" alt=""></a>
            </div>

        </div>
    </div>
</section>
<?php
    include_once("inc/footer.php");
?>