<?php
    include_once("inc/header.php");
?>
    <!-- Page Indicator-->
    <div class="container px-5 pt-[23px] md:px-0 flex items-center border-t border-gray-400">
        <h6>Home</h6>
        <img class="size-[16px] ml-[4px] " src="https://i.postimg.cc/RVXTYGcS/right-arrow.png" alt="">
        <h6 class="ml-[12px]">Casual</h6>
        <img class="size-[16px] ml-[4px]" src="https://i.postimg.cc/RVXTYGcS/right-arrow.png" alt="">
        <h6 class="ml-[12px]">Men</h6>
        <img class="size-[16px] ml-[4px]" src="https://i.postimg.cc/RVXTYGcS/right-arrow.png" alt="">
        <h6 class="text-black ml-[12px]">T-shirts</h6>
    </div>
    <!-- Single Product Section -->
    <section class="s_p_section">
        <div class="md:max-w-[1270px] mx-auto   ">
            <div class="mt-[36px]  px-5 md:px-0 md:flex mb-[84px]">
                <div class="flex flex-col md:flex-row gap-[16px] md:w-6/12  ">
                    <!-- Product Gallery -->
                    <div class="flex md:flex-col gap-[14px] justify-center items-center order-2 md:order-1 ml-[15px] ">
                        <div class="bg-secondary w-[152px] h-[167px] rounded-[20px] overflow-hidden border active:border active:border-black"><img
                                class="object-cover object-center" src="https://i.postimg.cc/Jn5Ygm5N/image-2.png"
                                alt="">
                        </div>
                        <div class="bg-secondary w-[152px] h-[167px] rounded-[20px] overflow-hidden border-transparent active:border active:border-black "><img
                                class="object-cover object-center" src="https://i.postimg.cc/mZd8FmXg/image-5.png"
                                alt="">
                        </div>
                        <div class="bg-secondary w-[152px] h-[167px] rounded-[20px] overflow-hidden border-transparent active:border active:border-black "><img
                                class="object-cover object-center" src="https://i.postimg.cc/c4rT7f2M/image-6.png"
                                alt="">
                        </div>
                    </div>
                    <!-- Produc Image -->
                    <div class=" place-content-center place-items-center order-1 md:order-2">
                        <img class="max-w-111 max-h-132 " src="https://i.postimg.cc/XJBVR2ZT/t-shirt-single.png" alt="">
                    </div>
                </div>
                <div class=" md:w-6/12 ml-[40px] -mt-[4px]">
                    <h4 class="h_title text-[40px]! text-black "> One Life Graphic T-shirt </h4>
                    <!-- rating -->
                    <div class="flex mt-[7px]">
                        <div class=" inline-flex gap-[8px]">
                            <svg class="size-[24px]" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 25 23" fill="none">
                                <path d="M12.3562 0L15.8569 7.53796L24.1077 8.53794L18.0204 14.1966L19.619 22.3526L12.3562 18.3119L5.09341 22.3526L6.69201 14.1966L0.604756 8.53794L8.85555 7.53796L12.3562 0Z" fill="#FFC633"/>
                            </svg>
                            <svg class="size-[24px]" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 25 23" fill="none">
                                <path d="M12.3562 0L15.8569 7.53796L24.1077 8.53794L18.0204 14.1966L19.619 22.3526L12.3562 18.3119L5.09341 22.3526L6.69201 14.1966L0.604756 8.53794L8.85555 7.53796L12.3562 0Z" fill="#FFC633"/>
                            </svg>
                            <svg class="size-[24px]" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 25 23" fill="none">
                                <path d="M12.3562 0L15.8569 7.53796L24.1077 8.53794L18.0204 14.1966L19.619 22.3526L12.3562 18.3119L5.09341 22.3526L6.69201 14.1966L0.604756 8.53794L8.85555 7.53796L12.3562 0Z" fill="#FFC633"/>
                            </svg>
                            <svg class="size-[24px]" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 25 23" fill="none">
                                <path d="M12.3562 0L15.8569 7.53796L24.1077 8.53794L18.0204 14.1966L19.619 22.3526L12.3562 18.3119L5.09341 22.3526L6.69201 14.1966L0.604756 8.53794L8.85555 7.53796L12.3562 0Z" fill="#FFC633"/>
                            </svg>
                            <svg class="size-[24px] -ml-[7px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 23" fill="none">
                                <path d="M4.73719 22.3526L12 18.3119V0L8.49932 7.53796L0.248535 8.53793L6.33579 14.1966L4.73719 22.3526Z" fill="#FFC633"/>
                            </svg>
                        </div>
                        <div class="ml-[10px] text-base text-black mt-[1px] ">4.5/<span class="text-gray-400">5</span></div>
                    </div>
                    <!-- Price -->
                    <div class="flex items-center mt-[16px]">
                        <h4 class="text-[32px]! font-Satoshi-Bold! text-black">$260</h4>
                        <h4 class="text-[32px]! font-Satoshi-Bold! line-through text-gray-400 ml-[12px]">$300</h4>
                        <h6 class="p_price_less text-base! font-Satoshi-Medium bg-secondary px-4 py-1 rounded-3xl ml-[10px] -mt-[4px]"> -40%</h6>
                    </div>
                    <p class="mt-[13px] md:w-[590px] text-base! leading-[22px]!">This graphic t-shirt which is perfect for any occasion. Crafted from a soft and breathable
                        fabric, it offers superior comfort and style.</p>
                    <hr class="mt-[18px] mb-[18px] text-gray-300">
                    <h6 class="tracking-[0.05px]">Select Colors</h6>
                    <div class="flex gap-3 md:gap-[16px] mb-5 mt-2.5">
                        <input type="radio" id="option1" name="option"
                            class="appearance-none bg-[#4F4631] size-[37px] rounded-full relative custom_ceck ">
                        <input type="radio" id="option1" name="option"
                            class="appearance-none bg-[#314F4A] size-[37px] rounded-full relative custom_ceck ">
                        <input type="radio" id="option1" name="option"
                            class="appearance-none bg-[#31344F] size-[37px] rounded-full relative custom_ceck ">
                    </div>
                    <hr class="mt-[24px] mb-[18px] text-gray-300">
                    <h6 class="tracking-[0.01px]">Choose Size</h6>
                    <div class="flex gap-[12px] mb-5 mt-2.5">
                        <input type="radio" name="option" id=""
                            class="appearance-none bg-bg-2 py-[23px] px-[43px] rounded-[62px] duration-400 transition-all relative before:absolute before:content-['Small'] before:text-black before:inset-0 before:m-auto before:w-20 before:h-10 before:place-content-center  before:text-center checked:bg-black checked:before:text-white cursor-pointer">
                        <input type="radio" name="option" id=""
                            class="appearance-none bg-bg-2 py-[23px] px-[53px] rounded-[62px] duration-400  transition-all relative before:absolute before:content-['Medium'] before:text-black before:inset-0 before:m-auto before:w-20 before:h-20 before:place-content-center  before:text-center checked:bg-black checked:before:text-white cursor-pointer">
                        <input type="radio" name="option" id=""
                            class="appearance-none bg-bg-2 py-[23px] px-[44px] rounded-[62px] duration-400  transition-all relative before:absolute before:content-['Larg'] before:text-black before:inset-0 before:m-auto before:w-20 before:h-20 before:place-content-center  before:text-center checked:bg-black checked:before:text-white cursor-pointer">
                        <input type="radio" name="option" id=""
                            class="appearance-none bg-bg-2 py-[23px] px-[52px] rounded-[62px] duration-400  transition-all relative before:absolute before:content-['X-Lage'] before:text-black before:inset-0 before:m-auto before:w-20 before:h-20 before:place-content-center  before:text-center checked:bg-black checked:before:text-white cursor-pointer">
                    </div>
                    <hr class="mt-[24px] mb-[24px] text-gray-300">
                    <div class=" flex gap-[20px]">
                        <div class="flex gap-[43px] bg-secondary justify-center items-center w-42.5 h-13 rounded-[62px] px-2"> <img
                                class="h-0.5 w-3.5" src="https://i.postimg.cc/QMwfJWCJ/minus-icon.png" alt="">
                            <span class="text-black text-[1.2rem] ">1</span> <img class="w-3.5 h-3.5"
                                src="https://i.postimg.cc/XJ5QH7yS/plus-icon.png" alt="">
                        </div>
                        <button class="w-[400px] 2 h-[52px] bg-black text-white rounded-[62px]">Add to Cart</button>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- Rating,Review & Details Section -->
    <section>
        <div class="flex justify-between mb-[18px] items-center md:w-[918px] mx-auto -mt-[8px] relative">
            <h6 class="text-[20px]/[22px]! -ml-[21px] tracking-[0.01px]">Product Details</h6>
            <h6 class="text-[20px]/[22px]! -ml-[45px] font-Satoshi-Medium active_width" >Rating & Reviews</h6>
            <h6 class="text-[20px]/[22px]! mr-[21px] ">FAQs</h6>
        </div>
        <div class="container px-5 md:px-0  place-items-center">
            
            <hr class="py-2 text-gray-300 block active_width relative w-full">
        <div class="flex justify-between items-center w-full mt-[8px]">
                <div>
                    <h4 class="text-black font-Satoshi-Bold! text-[24px]! ">All Reviews <span class="text-gray-400 font-Satoshi-Regular! text-base/[22px]!">(451)</span></h4>
                </div>
                <div class="flex justify-center items-center gap-[10px] ">
                    <img class="p-[12px] bg-secondary rounded-full size-[50px]"
                        src="https://i.postimg.cc/9fGGDWzJ/setting-icon.png" alt="">
                    <div class="hidden md:block">
                        <button
                            class="flex gap-[25px] py-[12px] px-[20px] items-center rounded-primary justify-center bg-bg-1 ">Latest
                            <img
                                class="size-[16px]" src="https://i.postimg.cc/Wb9K0KvM/down-arrow.png"
                                alt="">
                            </button>
                            </div>
                    <button class="px-[32px] py-[12px] bg-black text-white rounded-primary font-Satoshi-Medium!">White a Review</button>
                </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-[20px] mt-[23px]">
            <!-- testimonil items 1 -->
            <div class="py-[28px] h-[241.58px] md:w-[610px] px-[32px] border border-gray-300 rounded-[20px]">
                    <div class="flex justify-between items-center">
                        <div class="inline-flex mb-[15px]">
                            <svg class="size-[22.57px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 21" fill="none">
                                <path d="M11.2895 0L14.4879 6.8872L22.0264 7.80085L16.4647 12.971L17.9253 20.4229L11.2895 16.731L4.6537 20.4229L6.11428 12.971L0.552547 7.80085L8.09104 6.8872L11.2895 0Z" fill="#FFC633"/>
                            </svg>
                            <svg class="size-[22.57px] ml-[6px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 21" fill="none">
                                <path d="M11.2895 0L14.4879 6.8872L22.0264 7.80085L16.4647 12.971L17.9253 20.4229L11.2895 16.731L4.6537 20.4229L6.11428 12.971L0.552547 7.80085L8.09104 6.8872L11.2895 0Z" fill="#FFC633"/>
                            </svg>
                            <svg class="size-[22.57px] ml-[6px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 21" fill="none">
                                <path d="M11.2895 0L14.4879 6.8872L22.0264 7.80085L16.4647 12.971L17.9253 20.4229L11.2895 16.731L4.6537 20.4229L6.11428 12.971L0.552547 7.80085L8.09104 6.8872L11.2895 0Z" fill="#FFC633"/>
                            </svg>
                            <svg class="size-[22.57px] ml-[6px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 21" fill="none">
                                <path d="M11.2895 0L14.4879 6.8872L22.0264 7.80085L16.4647 12.971L17.9253 20.4229L11.2895 16.731L4.6537 20.4229L6.11428 12.971L0.552547 7.80085L8.09104 6.8872L11.2895 0Z" fill="#FFC633"/>
                            </svg>
                            <svg class="size-[22.57px] ml-[1px]" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 11 21" fill="none">
                                <path d="M4.36433 20.4229L11.0001 16.731V0L7.80167 6.8872L0.263184 7.80085L5.82492 12.971L4.36433 20.4229Z" fill="#FFC633"/>
                            </svg>
                        </div>
                        <svg class="-mt-[15px]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M14.625 12C14.625 12.5192 14.471 13.0267 14.1826 13.4584C13.8942 13.8901 13.4842 14.2265 13.0045 14.4252C12.5249 14.6239 11.9971 14.6758 11.4879 14.5746C10.9787 14.4733 10.511 14.2233 10.1438 13.8562C9.77673 13.489 9.52673 13.0213 9.42544 12.5121C9.32415 12.0029 9.37614 11.4751 9.57482 10.9955C9.7735 10.5158 10.11 10.1058 10.5416 9.81739C10.9733 9.52895 11.4808 9.375 12 9.375C12.6962 9.375 13.3639 9.65156 13.8562 10.1438C14.3484 10.6361 14.625 11.3038 14.625 12ZM4.5 9.375C3.98083 9.375 3.47331 9.52895 3.04163 9.81739C2.60995 10.1058 2.2735 10.5158 2.07482 10.9955C1.87614 11.4751 1.82415 12.0029 1.92544 12.5121C2.02673 13.0213 2.27673 13.489 2.64385 13.8562C3.01096 14.2233 3.47869 14.4733 3.98789 14.5746C4.49709 14.6758 5.02489 14.6239 5.50455 14.4252C5.9842 14.2265 6.39417 13.8901 6.68261 13.4584C6.97105 13.0267 7.125 12.5192 7.125 12C7.125 11.3038 6.84844 10.6361 6.35616 10.1438C5.86387 9.65156 5.19619 9.375 4.5 9.375ZM19.5 9.375C18.9808 9.375 18.4733 9.52895 18.0416 9.81739C17.61 10.1058 17.2735 10.5158 17.0748 10.9955C16.8761 11.4751 16.8242 12.0029 16.9254 12.5121C17.0267 13.0213 17.2767 13.489 17.6438 13.8562C18.011 14.2233 18.4787 14.4733 18.9879 14.5746C19.4971 14.6758 20.0249 14.6239 20.5045 14.4252C20.9842 14.2265 21.3942 13.8901 21.6826 13.4584C21.971 13.0267 22.125 12.5192 22.125 12C22.125 11.6553 22.0571 11.3139 21.9252 10.9955C21.7933 10.677 21.5999 10.3876 21.3562 10.1438C21.1124 9.90009 20.823 9.70673 20.5045 9.57482C20.1861 9.4429 19.8447 9.375 19.5 9.375Z" fill="black" fill-opacity="0.4"/>
                        </svg>
                    </div>

                    <div class="flex">
                        <h6 class=" text-black text-[20px]/[22px]! font-Satoshi-Bold!">Samantha D.</h6> 
                        <svg class="size-[24px] -mt-[2px] ml-[2px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2.82898C10.0716 2.82898 8.18657 3.40081 6.58319 4.47215C4.97982 5.54349 3.73013 7.06624 2.99218 8.84782C2.25422 10.6294 2.06114 12.5898 2.43735 14.4811C2.81355 16.3724 3.74215 18.1097 5.10571 19.4733C6.46928 20.8368 8.20656 21.7654 10.0979 22.1416C11.9892 22.5178 13.9496 22.3248 15.7312 21.5868C17.5127 20.8489 19.0355 19.5992 20.1068 17.9958C21.1782 16.3924 21.75 14.5073 21.75 12.579C21.7473 9.99396 20.7192 7.51559 18.8913 5.6877C17.0634 3.85982 14.585 2.83171 12 2.82898ZM16.2806 10.8596L11.0306 16.1096C10.961 16.1793 10.8783 16.2347 10.7872 16.2724C10.6962 16.3101 10.5986 16.3296 10.5 16.3296C10.4014 16.3296 10.3038 16.3101 10.2128 16.2724C10.1218 16.2347 10.039 16.1793 9.96938 16.1096L7.71938 13.8596C7.57865 13.7189 7.49959 13.528 7.49959 13.329C7.49959 13.13 7.57865 12.9391 7.71938 12.7984C7.86011 12.6576 8.05098 12.5786 8.25 12.5786C8.44903 12.5786 8.6399 12.6576 8.78063 12.7984L10.5 14.5187L15.2194 9.79835C15.2891 9.72867 15.3718 9.6734 15.4628 9.63568C15.5539 9.59797 15.6515 9.57856 15.75 9.57856C15.8486 9.57856 15.9461 9.59797 16.0372 9.63568C16.1282 9.6734 16.2109 9.72867 16.2806 9.79835C16.3503 9.86804 16.4056 9.95076 16.4433 10.0418C16.481 10.1329 16.5004 10.2304 16.5004 10.329C16.5004 10.4275 16.481 10.5251 16.4433 10.6162C16.4056 10.7072 16.3503 10.7899 16.2806 10.8596Z" fill="#01AB31"/>
                        </svg>
                    </div>
                    <p class="mt-[13px] mb-[24px] t_paragraph md:w-[522px]">"I absolutely love this t-shirt! The design is unique and the fabric feels so comfortable. As a fellow designer, I appreciate the attention to detail. It's become my favorite go-to shirt."</p>

                    <p class="text-gray-900 font-Satoshi-Medium! text-base/[22px]! tracking-[0.01px]">Posted on August 14, 2023</p>
            </div>
             <!-- testimonil items 2 -->
            <div class="py-[28px] h-[241.58px] md:w-[610px] px-[32px] border border-gray-300 rounded-[20px]">
                    <div class="flex justify-between items-center">
                        <div class="inline-flex mb-[15px]">
                            <svg class="size-[22.57px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 21" fill="none">
                                <path d="M11.2895 0L14.4879 6.8872L22.0264 7.80085L16.4647 12.971L17.9253 20.4229L11.2895 16.731L4.6537 20.4229L6.11428 12.971L0.552547 7.80085L8.09104 6.8872L11.2895 0Z" fill="#FFC633"/>
                            </svg>
                            <svg class="size-[22.57px] ml-[6px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 21" fill="none">
                                <path d="M11.2895 0L14.4879 6.8872L22.0264 7.80085L16.4647 12.971L17.9253 20.4229L11.2895 16.731L4.6537 20.4229L6.11428 12.971L0.552547 7.80085L8.09104 6.8872L11.2895 0Z" fill="#FFC633"/>
                            </svg>
                            <svg class="size-[22.57px] ml-[6px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 21" fill="none">
                                <path d="M11.2895 0L14.4879 6.8872L22.0264 7.80085L16.4647 12.971L17.9253 20.4229L11.2895 16.731L4.6537 20.4229L6.11428 12.971L0.552547 7.80085L8.09104 6.8872L11.2895 0Z" fill="#FFC633"/>
                            </svg>
                            <svg class="size-[22.57px] ml-[6px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 21" fill="none">
                                <path d="M11.2895 0L14.4879 6.8872L22.0264 7.80085L16.4647 12.971L17.9253 20.4229L11.2895 16.731L4.6537 20.4229L6.11428 12.971L0.552547 7.80085L8.09104 6.8872L11.2895 0Z" fill="#FFC633"/>
                            </svg>
                            <svg class="size-[22.57px] ml-[6px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 21" fill="none">
                                <path d="M11.2895 0L14.4879 6.8872L22.0264 7.80085L16.4647 12.971L17.9253 20.4229L11.2895 16.731L4.6537 20.4229L6.11428 12.971L0.552547 7.80085L8.09104 6.8872L11.2895 0Z" fill="#FFC633"/>
                            </svg>
                            
                        </div>
                        
                    </div>

                    <div class="flex">
                        <h6 class=" text-black text-[20px]/[22px]! font-Satoshi-Bold!">Alex M.</h6> 
                        <svg class="size-[24px] -mt-[2px] ml-[2px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2.82898C10.0716 2.82898 8.18657 3.40081 6.58319 4.47215C4.97982 5.54349 3.73013 7.06624 2.99218 8.84782C2.25422 10.6294 2.06114 12.5898 2.43735 14.4811C2.81355 16.3724 3.74215 18.1097 5.10571 19.4733C6.46928 20.8368 8.20656 21.7654 10.0979 22.1416C11.9892 22.5178 13.9496 22.3248 15.7312 21.5868C17.5127 20.8489 19.0355 19.5992 20.1068 17.9958C21.1782 16.3924 21.75 14.5073 21.75 12.579C21.7473 9.99396 20.7192 7.51559 18.8913 5.6877C17.0634 3.85982 14.585 2.83171 12 2.82898ZM16.2806 10.8596L11.0306 16.1096C10.961 16.1793 10.8783 16.2347 10.7872 16.2724C10.6962 16.3101 10.5986 16.3296 10.5 16.3296C10.4014 16.3296 10.3038 16.3101 10.2128 16.2724C10.1218 16.2347 10.039 16.1793 9.96938 16.1096L7.71938 13.8596C7.57865 13.7189 7.49959 13.528 7.49959 13.329C7.49959 13.13 7.57865 12.9391 7.71938 12.7984C7.86011 12.6576 8.05098 12.5786 8.25 12.5786C8.44903 12.5786 8.6399 12.6576 8.78063 12.7984L10.5 14.5187L15.2194 9.79835C15.2891 9.72867 15.3718 9.6734 15.4628 9.63568C15.5539 9.59797 15.6515 9.57856 15.75 9.57856C15.8486 9.57856 15.9461 9.59797 16.0372 9.63568C16.1282 9.6734 16.2109 9.72867 16.2806 9.79835C16.3503 9.86804 16.4056 9.95076 16.4433 10.0418C16.481 10.1329 16.5004 10.2304 16.5004 10.329C16.5004 10.4275 16.481 10.5251 16.4433 10.6162C16.4056 10.7072 16.3503 10.7899 16.2806 10.8596Z" fill="#01AB31"/>
                        </svg>
                    </div>
                    <p class="mt-[13px] mb-[24px] t_paragraph md:w-[522px]">"The t-shirt exceeded my expectations! The colors are vibrant and the print quality is top-notch. Being a UI/UX designer myself, I'm quite picky about aesthetics, and this t-shirt definitely gets a thumbs up from me."</p>

                    <p class="text-gray-900 font-Satoshi-Medium! text-base/[22px]! tracking-[0.01px]">Posted on August 15, 2023</p>
            </div>
             <!-- testimonil items 3 -->
            <div class="py-[28px] h-[241.58px] md:w-[610px] px-[32px] border border-gray-300 rounded-[20px]">
                    <div class="flex justify-between items-center">
                        <div class="inline-flex mb-[15px]">
                            <svg class="size-[22.57px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 21" fill="none">
                                <path d="M11.2895 0L14.4879 6.8872L22.0264 7.80085L16.4647 12.971L17.9253 20.4229L11.2895 16.731L4.6537 20.4229L6.11428 12.971L0.552547 7.80085L8.09104 6.8872L11.2895 0Z" fill="#FFC633"/>
                            </svg>
                            <svg class="size-[22.57px] ml-[6px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 21" fill="none">
                                <path d="M11.2895 0L14.4879 6.8872L22.0264 7.80085L16.4647 12.971L17.9253 20.4229L11.2895 16.731L4.6537 20.4229L6.11428 12.971L0.552547 7.80085L8.09104 6.8872L11.2895 0Z" fill="#FFC633"/>
                            </svg>
                            <svg class="size-[22.57px] ml-[6px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 21" fill="none">
                                <path d="M11.2895 0L14.4879 6.8872L22.0264 7.80085L16.4647 12.971L17.9253 20.4229L11.2895 16.731L4.6537 20.4229L6.11428 12.971L0.552547 7.80085L8.09104 6.8872L11.2895 0Z" fill="#FFC633"/>
                            </svg>
                            <svg class="size-[22.57px] ml-[6px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 21" fill="none">
                                <path d="M11.2895 0L14.4879 6.8872L22.0264 7.80085L16.4647 12.971L17.9253 20.4229L11.2895 16.731L4.6537 20.4229L6.11428 12.971L0.552547 7.80085L8.09104 6.8872L11.2895 0Z" fill="#FFC633"/>
                            </svg>
                            <svg class="size-[22.57px] ml-[1px]" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 11 21" fill="none">
                                <path d="M4.36433 20.4229L11.0001 16.731V0L7.80167 6.8872L0.263184 7.80085L5.82492 12.971L4.36433 20.4229Z" fill="#FFC633"/>
                            </svg>
                        </div>
                        <svg class="-mt-[15px]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M14.625 12C14.625 12.5192 14.471 13.0267 14.1826 13.4584C13.8942 13.8901 13.4842 14.2265 13.0045 14.4252C12.5249 14.6239 11.9971 14.6758 11.4879 14.5746C10.9787 14.4733 10.511 14.2233 10.1438 13.8562C9.77673 13.489 9.52673 13.0213 9.42544 12.5121C9.32415 12.0029 9.37614 11.4751 9.57482 10.9955C9.7735 10.5158 10.11 10.1058 10.5416 9.81739C10.9733 9.52895 11.4808 9.375 12 9.375C12.6962 9.375 13.3639 9.65156 13.8562 10.1438C14.3484 10.6361 14.625 11.3038 14.625 12ZM4.5 9.375C3.98083 9.375 3.47331 9.52895 3.04163 9.81739C2.60995 10.1058 2.2735 10.5158 2.07482 10.9955C1.87614 11.4751 1.82415 12.0029 1.92544 12.5121C2.02673 13.0213 2.27673 13.489 2.64385 13.8562C3.01096 14.2233 3.47869 14.4733 3.98789 14.5746C4.49709 14.6758 5.02489 14.6239 5.50455 14.4252C5.9842 14.2265 6.39417 13.8901 6.68261 13.4584C6.97105 13.0267 7.125 12.5192 7.125 12C7.125 11.3038 6.84844 10.6361 6.35616 10.1438C5.86387 9.65156 5.19619 9.375 4.5 9.375ZM19.5 9.375C18.9808 9.375 18.4733 9.52895 18.0416 9.81739C17.61 10.1058 17.2735 10.5158 17.0748 10.9955C16.8761 11.4751 16.8242 12.0029 16.9254 12.5121C17.0267 13.0213 17.2767 13.489 17.6438 13.8562C18.011 14.2233 18.4787 14.4733 18.9879 14.5746C19.4971 14.6758 20.0249 14.6239 20.5045 14.4252C20.9842 14.2265 21.3942 13.8901 21.6826 13.4584C21.971 13.0267 22.125 12.5192 22.125 12C22.125 11.6553 22.0571 11.3139 21.9252 10.9955C21.7933 10.677 21.5999 10.3876 21.3562 10.1438C21.1124 9.90009 20.823 9.70673 20.5045 9.57482C20.1861 9.4429 19.8447 9.375 19.5 9.375Z" fill="black" fill-opacity="0.4"/>
                        </svg>
                    </div>

                    <div class="flex">
                        <h6 class=" text-black text-[20px]/[22px]! font-Satoshi-Bold!">Ethan R.</h6> 
                        <svg class="size-[24px] -mt-[1px] ml-[3px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2.82898C10.0716 2.82898 8.18657 3.40081 6.58319 4.47215C4.97982 5.54349 3.73013 7.06624 2.99218 8.84782C2.25422 10.6294 2.06114 12.5898 2.43735 14.4811C2.81355 16.3724 3.74215 18.1097 5.10571 19.4733C6.46928 20.8368 8.20656 21.7654 10.0979 22.1416C11.9892 22.5178 13.9496 22.3248 15.7312 21.5868C17.5127 20.8489 19.0355 19.5992 20.1068 17.9958C21.1782 16.3924 21.75 14.5073 21.75 12.579C21.7473 9.99396 20.7192 7.51559 18.8913 5.6877C17.0634 3.85982 14.585 2.83171 12 2.82898ZM16.2806 10.8596L11.0306 16.1096C10.961 16.1793 10.8783 16.2347 10.7872 16.2724C10.6962 16.3101 10.5986 16.3296 10.5 16.3296C10.4014 16.3296 10.3038 16.3101 10.2128 16.2724C10.1218 16.2347 10.039 16.1793 9.96938 16.1096L7.71938 13.8596C7.57865 13.7189 7.49959 13.528 7.49959 13.329C7.49959 13.13 7.57865 12.9391 7.71938 12.7984C7.86011 12.6576 8.05098 12.5786 8.25 12.5786C8.44903 12.5786 8.6399 12.6576 8.78063 12.7984L10.5 14.5187L15.2194 9.79835C15.2891 9.72867 15.3718 9.6734 15.4628 9.63568C15.5539 9.59797 15.6515 9.57856 15.75 9.57856C15.8486 9.57856 15.9461 9.59797 16.0372 9.63568C16.1282 9.6734 16.2109 9.72867 16.2806 9.79835C16.3503 9.86804 16.4056 9.95076 16.4433 10.0418C16.481 10.1329 16.5004 10.2304 16.5004 10.329C16.5004 10.4275 16.481 10.5251 16.4433 10.6162C16.4056 10.7072 16.3503 10.7899 16.2806 10.8596Z" fill="#01AB31"/>
                        </svg>
                    </div>
                    <p class="mt-[13px] mb-[24px] t_paragraph md:w-[522px]">"The t-shirt exceeded my expectations! The colors are vibrant and the print quality is top-notch. Being a UI/UX designer myself, I'm quite picky about aesthetics, and this t-shirt definitely gets a thumbs up from me."</p>

                    <p class="text-gray-900 font-Satoshi-Medium! text-base/[22px]! tracking-[0.01px]">Posted on August 16, 2023</p>
            </div>
             <!-- testimonil items 4 -->
            <div class="py-[28px] h-[241.58px] md:w-[610px] px-[32px] border border-gray-300 rounded-[20px]">
                    <div class="flex justify-between items-center">
                        <div class="inline-flex mb-[15px]">
                            <svg class="size-[22.57px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 21" fill="none">
                                <path d="M11.2895 0L14.4879 6.8872L22.0264 7.80085L16.4647 12.971L17.9253 20.4229L11.2895 16.731L4.6537 20.4229L6.11428 12.971L0.552547 7.80085L8.09104 6.8872L11.2895 0Z" fill="#FFC633"/>
                            </svg>
                            <svg class="size-[22.57px] ml-[6px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 21" fill="none">
                                <path d="M11.2895 0L14.4879 6.8872L22.0264 7.80085L16.4647 12.971L17.9253 20.4229L11.2895 16.731L4.6537 20.4229L6.11428 12.971L0.552547 7.80085L8.09104 6.8872L11.2895 0Z" fill="#FFC633"/>
                            </svg>
                            <svg class="size-[22.57px] ml-[6px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 21" fill="none">
                                <path d="M11.2895 0L14.4879 6.8872L22.0264 7.80085L16.4647 12.971L17.9253 20.4229L11.2895 16.731L4.6537 20.4229L6.11428 12.971L0.552547 7.80085L8.09104 6.8872L11.2895 0Z" fill="#FFC633"/>
                            </svg>
                            <svg class="size-[22.57px] ml-[6px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 21" fill="none">
                                <path d="M11.2895 0L14.4879 6.8872L22.0264 7.80085L16.4647 12.971L17.9253 20.4229L11.2895 16.731L4.6537 20.4229L6.11428 12.971L0.552547 7.80085L8.09104 6.8872L11.2895 0Z" fill="#FFC633"/>
                            </svg>
                            <svg class="size-[22.57px] ml-[6px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 21" fill="none">
                                <path d="M11.2895 0L14.4879 6.8872L22.0264 7.80085L16.4647 12.971L17.9253 20.4229L11.2895 16.731L4.6537 20.4229L6.11428 12.971L0.552547 7.80085L8.09104 6.8872L11.2895 0Z" fill="#FFC633"/>
                            </svg>
                        </div>
                        <svg class="-mt-[15px]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M14.625 12C14.625 12.5192 14.471 13.0267 14.1826 13.4584C13.8942 13.8901 13.4842 14.2265 13.0045 14.4252C12.5249 14.6239 11.9971 14.6758 11.4879 14.5746C10.9787 14.4733 10.511 14.2233 10.1438 13.8562C9.77673 13.489 9.52673 13.0213 9.42544 12.5121C9.32415 12.0029 9.37614 11.4751 9.57482 10.9955C9.7735 10.5158 10.11 10.1058 10.5416 9.81739C10.9733 9.52895 11.4808 9.375 12 9.375C12.6962 9.375 13.3639 9.65156 13.8562 10.1438C14.3484 10.6361 14.625 11.3038 14.625 12ZM4.5 9.375C3.98083 9.375 3.47331 9.52895 3.04163 9.81739C2.60995 10.1058 2.2735 10.5158 2.07482 10.9955C1.87614 11.4751 1.82415 12.0029 1.92544 12.5121C2.02673 13.0213 2.27673 13.489 2.64385 13.8562C3.01096 14.2233 3.47869 14.4733 3.98789 14.5746C4.49709 14.6758 5.02489 14.6239 5.50455 14.4252C5.9842 14.2265 6.39417 13.8901 6.68261 13.4584C6.97105 13.0267 7.125 12.5192 7.125 12C7.125 11.3038 6.84844 10.6361 6.35616 10.1438C5.86387 9.65156 5.19619 9.375 4.5 9.375ZM19.5 9.375C18.9808 9.375 18.4733 9.52895 18.0416 9.81739C17.61 10.1058 17.2735 10.5158 17.0748 10.9955C16.8761 11.4751 16.8242 12.0029 16.9254 12.5121C17.0267 13.0213 17.2767 13.489 17.6438 13.8562C18.011 14.2233 18.4787 14.4733 18.9879 14.5746C19.4971 14.6758 20.0249 14.6239 20.5045 14.4252C20.9842 14.2265 21.3942 13.8901 21.6826 13.4584C21.971 13.0267 22.125 12.5192 22.125 12C22.125 11.6553 22.0571 11.3139 21.9252 10.9955C21.7933 10.677 21.5999 10.3876 21.3562 10.1438C21.1124 9.90009 20.823 9.70673 20.5045 9.57482C20.1861 9.4429 19.8447 9.375 19.5 9.375Z" fill="black" fill-opacity="0.4"/>
                        </svg>
                    </div>

                    <div class="flex">
                        <h6 class=" text-black text-[20px]/[22px]! font-Satoshi-Bold!">Olivia P.</h6> 
                        <svg class="size-[24px] -mt-[2px] ml-[2px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2.82898C10.0716 2.82898 8.18657 3.40081 6.58319 4.47215C4.97982 5.54349 3.73013 7.06624 2.99218 8.84782C2.25422 10.6294 2.06114 12.5898 2.43735 14.4811C2.81355 16.3724 3.74215 18.1097 5.10571 19.4733C6.46928 20.8368 8.20656 21.7654 10.0979 22.1416C11.9892 22.5178 13.9496 22.3248 15.7312 21.5868C17.5127 20.8489 19.0355 19.5992 20.1068 17.9958C21.1782 16.3924 21.75 14.5073 21.75 12.579C21.7473 9.99396 20.7192 7.51559 18.8913 5.6877C17.0634 3.85982 14.585 2.83171 12 2.82898ZM16.2806 10.8596L11.0306 16.1096C10.961 16.1793 10.8783 16.2347 10.7872 16.2724C10.6962 16.3101 10.5986 16.3296 10.5 16.3296C10.4014 16.3296 10.3038 16.3101 10.2128 16.2724C10.1218 16.2347 10.039 16.1793 9.96938 16.1096L7.71938 13.8596C7.57865 13.7189 7.49959 13.528 7.49959 13.329C7.49959 13.13 7.57865 12.9391 7.71938 12.7984C7.86011 12.6576 8.05098 12.5786 8.25 12.5786C8.44903 12.5786 8.6399 12.6576 8.78063 12.7984L10.5 14.5187L15.2194 9.79835C15.2891 9.72867 15.3718 9.6734 15.4628 9.63568C15.5539 9.59797 15.6515 9.57856 15.75 9.57856C15.8486 9.57856 15.9461 9.59797 16.0372 9.63568C16.1282 9.6734 16.2109 9.72867 16.2806 9.79835C16.3503 9.86804 16.4056 9.95076 16.4433 10.0418C16.481 10.1329 16.5004 10.2304 16.5004 10.329C16.5004 10.4275 16.481 10.5251 16.4433 10.6162C16.4056 10.7072 16.3503 10.7899 16.2806 10.8596Z" fill="#01AB31"/>
                        </svg>
                    </div>
                    <p class="mt-[13px] mb-[24px] t_paragraph md:w-[522px]">"As a UI/UX enthusiast, I value simplicity and functionality. This t-shirt not only represents those principles but also feels great to wear. It's evident that the designer poured their creativity into making this t-shirt stand out."</p>

                    <p class="text-gray-900 font-Satoshi-Medium! text-base/[22px]! tracking-[0.01px]">Posted on August 17, 2023</p>
            </div>
             <!-- testimonil items 5 -->
            <div class="py-[28px] h-[241.58px] md:w-[610px] px-[32px] border border-gray-300 rounded-[20px]">
                    <div class="flex justify-between items-center">
                        <div class="inline-flex mb-[15px]">
                            <svg class="size-[22.57px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 21" fill="none">
                                <path d="M11.2895 0L14.4879 6.8872L22.0264 7.80085L16.4647 12.971L17.9253 20.4229L11.2895 16.731L4.6537 20.4229L6.11428 12.971L0.552547 7.80085L8.09104 6.8872L11.2895 0Z" fill="#FFC633"/>
                            </svg>
                            <svg class="size-[22.57px] ml-[6px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 21" fill="none">
                                <path d="M11.2895 0L14.4879 6.8872L22.0264 7.80085L16.4647 12.971L17.9253 20.4229L11.2895 16.731L4.6537 20.4229L6.11428 12.971L0.552547 7.80085L8.09104 6.8872L11.2895 0Z" fill="#FFC633"/>
                            </svg>
                            <svg class="size-[22.57px] ml-[6px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 21" fill="none">
                                <path d="M11.2895 0L14.4879 6.8872L22.0264 7.80085L16.4647 12.971L17.9253 20.4229L11.2895 16.731L4.6537 20.4229L6.11428 12.971L0.552547 7.80085L8.09104 6.8872L11.2895 0Z" fill="#FFC633"/>
                            </svg>
                            <svg class="size-[22.57px] ml-[6px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 21" fill="none">
                                <path d="M11.2895 0L14.4879 6.8872L22.0264 7.80085L16.4647 12.971L17.9253 20.4229L11.2895 16.731L4.6537 20.4229L6.11428 12.971L0.552547 7.80085L8.09104 6.8872L11.2895 0Z" fill="#FFC633"/>
                            </svg>
                            <svg class="size-[22.57px] ml-[6px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 21" fill="none">
                                <path d="M11.2895 0L14.4879 6.8872L22.0264 7.80085L16.4647 12.971L17.9253 20.4229L11.2895 16.731L4.6537 20.4229L6.11428 12.971L0.552547 7.80085L8.09104 6.8872L11.2895 0Z" fill="#FFC633"/>
                            </svg>
                        </div>
                        <svg class="-mt-[15px]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M14.625 12C14.625 12.5192 14.471 13.0267 14.1826 13.4584C13.8942 13.8901 13.4842 14.2265 13.0045 14.4252C12.5249 14.6239 11.9971 14.6758 11.4879 14.5746C10.9787 14.4733 10.511 14.2233 10.1438 13.8562C9.77673 13.489 9.52673 13.0213 9.42544 12.5121C9.32415 12.0029 9.37614 11.4751 9.57482 10.9955C9.7735 10.5158 10.11 10.1058 10.5416 9.81739C10.9733 9.52895 11.4808 9.375 12 9.375C12.6962 9.375 13.3639 9.65156 13.8562 10.1438C14.3484 10.6361 14.625 11.3038 14.625 12ZM4.5 9.375C3.98083 9.375 3.47331 9.52895 3.04163 9.81739C2.60995 10.1058 2.2735 10.5158 2.07482 10.9955C1.87614 11.4751 1.82415 12.0029 1.92544 12.5121C2.02673 13.0213 2.27673 13.489 2.64385 13.8562C3.01096 14.2233 3.47869 14.4733 3.98789 14.5746C4.49709 14.6758 5.02489 14.6239 5.50455 14.4252C5.9842 14.2265 6.39417 13.8901 6.68261 13.4584C6.97105 13.0267 7.125 12.5192 7.125 12C7.125 11.3038 6.84844 10.6361 6.35616 10.1438C5.86387 9.65156 5.19619 9.375 4.5 9.375ZM19.5 9.375C18.9808 9.375 18.4733 9.52895 18.0416 9.81739C17.61 10.1058 17.2735 10.5158 17.0748 10.9955C16.8761 11.4751 16.8242 12.0029 16.9254 12.5121C17.0267 13.0213 17.2767 13.489 17.6438 13.8562C18.011 14.2233 18.4787 14.4733 18.9879 14.5746C19.4971 14.6758 20.0249 14.6239 20.5045 14.4252C20.9842 14.2265 21.3942 13.8901 21.6826 13.4584C21.971 13.0267 22.125 12.5192 22.125 12C22.125 11.6553 22.0571 11.3139 21.9252 10.9955C21.7933 10.677 21.5999 10.3876 21.3562 10.1438C21.1124 9.90009 20.823 9.70673 20.5045 9.57482C20.1861 9.4429 19.8447 9.375 19.5 9.375Z" fill="black" fill-opacity="0.4"/>
                        </svg>
                    </div>

                    <div class="flex">
                        <h6 class=" text-black text-[20px]/[22px]! font-Satoshi-Bold!">Liam K.</h6> 
                        <svg class="size-[24px] -mt-[1px] ml-[4px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2.82898C10.0716 2.82898 8.18657 3.40081 6.58319 4.47215C4.97982 5.54349 3.73013 7.06624 2.99218 8.84782C2.25422 10.6294 2.06114 12.5898 2.43735 14.4811C2.81355 16.3724 3.74215 18.1097 5.10571 19.4733C6.46928 20.8368 8.20656 21.7654 10.0979 22.1416C11.9892 22.5178 13.9496 22.3248 15.7312 21.5868C17.5127 20.8489 19.0355 19.5992 20.1068 17.9958C21.1782 16.3924 21.75 14.5073 21.75 12.579C21.7473 9.99396 20.7192 7.51559 18.8913 5.6877C17.0634 3.85982 14.585 2.83171 12 2.82898ZM16.2806 10.8596L11.0306 16.1096C10.961 16.1793 10.8783 16.2347 10.7872 16.2724C10.6962 16.3101 10.5986 16.3296 10.5 16.3296C10.4014 16.3296 10.3038 16.3101 10.2128 16.2724C10.1218 16.2347 10.039 16.1793 9.96938 16.1096L7.71938 13.8596C7.57865 13.7189 7.49959 13.528 7.49959 13.329C7.49959 13.13 7.57865 12.9391 7.71938 12.7984C7.86011 12.6576 8.05098 12.5786 8.25 12.5786C8.44903 12.5786 8.6399 12.6576 8.78063 12.7984L10.5 14.5187L15.2194 9.79835C15.2891 9.72867 15.3718 9.6734 15.4628 9.63568C15.5539 9.59797 15.6515 9.57856 15.75 9.57856C15.8486 9.57856 15.9461 9.59797 16.0372 9.63568C16.1282 9.6734 16.2109 9.72867 16.2806 9.79835C16.3503 9.86804 16.4056 9.95076 16.4433 10.0418C16.481 10.1329 16.5004 10.2304 16.5004 10.329C16.5004 10.4275 16.481 10.5251 16.4433 10.6162C16.4056 10.7072 16.3503 10.7899 16.2806 10.8596Z" fill="#01AB31"/>
                        </svg>
                    </div>
                    <p class="mt-[13px] mb-[24px] t_paragraph md:w-[522px]">"This t-shirt is a fusion of comfort and creativity. The fabric is soft, and the design speaks volumes about the designer's skill. It's like wearing a piece of art that reflects my passion for both design and fashion."</p>

                    <p class="text-gray-900 font-Satoshi-Medium! text-base/[22px]! tracking-[0.01px]">Posted on August 18, 2023</p>
            </div>
             <!-- testimonil items 6 -->
            <div class="py-[28px] h-[241.58px] md:w-[610px] px-[32px] border border-gray-300 rounded-[20px]">
                    <div class="flex justify-between items-center">
                        <div class="inline-flex mb-[15px]">
                            <svg class="size-[22.57px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 21" fill="none">
                                <path d="M11.2895 0L14.4879 6.8872L22.0264 7.80085L16.4647 12.971L17.9253 20.4229L11.2895 16.731L4.6537 20.4229L6.11428 12.971L0.552547 7.80085L8.09104 6.8872L11.2895 0Z" fill="#FFC633"/>
                            </svg>
                            <svg class="size-[22.57px] ml-[6px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 21" fill="none">
                                <path d="M11.2895 0L14.4879 6.8872L22.0264 7.80085L16.4647 12.971L17.9253 20.4229L11.2895 16.731L4.6537 20.4229L6.11428 12.971L0.552547 7.80085L8.09104 6.8872L11.2895 0Z" fill="#FFC633"/>
                            </svg>
                            <svg class="size-[22.57px] ml-[6px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 21" fill="none">
                                <path d="M11.2895 0L14.4879 6.8872L22.0264 7.80085L16.4647 12.971L17.9253 20.4229L11.2895 16.731L4.6537 20.4229L6.11428 12.971L0.552547 7.80085L8.09104 6.8872L11.2895 0Z" fill="#FFC633"/>
                            </svg>
                            <svg class="size-[22.57px] ml-[6px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 21" fill="none">
                                <path d="M11.2895 0L14.4879 6.8872L22.0264 7.80085L16.4647 12.971L17.9253 20.4229L11.2895 16.731L4.6537 20.4229L6.11428 12.971L0.552547 7.80085L8.09104 6.8872L11.2895 0Z" fill="#FFC633"/>
                            </svg>
                            <svg class="size-[22.57px] ml-[1px]" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 11 21" fill="none">
                                <path d="M4.36433 20.4229L11.0001 16.731V0L7.80167 6.8872L0.263184 7.80085L5.82492 12.971L4.36433 20.4229Z" fill="#FFC633"/>
                            </svg>
                        </div>
                        <svg class="-mt-[15px]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M14.625 12C14.625 12.5192 14.471 13.0267 14.1826 13.4584C13.8942 13.8901 13.4842 14.2265 13.0045 14.4252C12.5249 14.6239 11.9971 14.6758 11.4879 14.5746C10.9787 14.4733 10.511 14.2233 10.1438 13.8562C9.77673 13.489 9.52673 13.0213 9.42544 12.5121C9.32415 12.0029 9.37614 11.4751 9.57482 10.9955C9.7735 10.5158 10.11 10.1058 10.5416 9.81739C10.9733 9.52895 11.4808 9.375 12 9.375C12.6962 9.375 13.3639 9.65156 13.8562 10.1438C14.3484 10.6361 14.625 11.3038 14.625 12ZM4.5 9.375C3.98083 9.375 3.47331 9.52895 3.04163 9.81739C2.60995 10.1058 2.2735 10.5158 2.07482 10.9955C1.87614 11.4751 1.82415 12.0029 1.92544 12.5121C2.02673 13.0213 2.27673 13.489 2.64385 13.8562C3.01096 14.2233 3.47869 14.4733 3.98789 14.5746C4.49709 14.6758 5.02489 14.6239 5.50455 14.4252C5.9842 14.2265 6.39417 13.8901 6.68261 13.4584C6.97105 13.0267 7.125 12.5192 7.125 12C7.125 11.3038 6.84844 10.6361 6.35616 10.1438C5.86387 9.65156 5.19619 9.375 4.5 9.375ZM19.5 9.375C18.9808 9.375 18.4733 9.52895 18.0416 9.81739C17.61 10.1058 17.2735 10.5158 17.0748 10.9955C16.8761 11.4751 16.8242 12.0029 16.9254 12.5121C17.0267 13.0213 17.2767 13.489 17.6438 13.8562C18.011 14.2233 18.4787 14.4733 18.9879 14.5746C19.4971 14.6758 20.0249 14.6239 20.5045 14.4252C20.9842 14.2265 21.3942 13.8901 21.6826 13.4584C21.971 13.0267 22.125 12.5192 22.125 12C22.125 11.6553 22.0571 11.3139 21.9252 10.9955C21.7933 10.677 21.5999 10.3876 21.3562 10.1438C21.1124 9.90009 20.823 9.70673 20.5045 9.57482C20.1861 9.4429 19.8447 9.375 19.5 9.375Z" fill="black" fill-opacity="0.4"/>
                        </svg>
                    </div>

                    <div class="flex">
                        <h6 class=" text-black text-[20px]/[22px]! font-Satoshi-Bold!">Ava H.</h6> 
                        <svg class="size-[24px] -mt-[1px] ml-[4px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2.82898C10.0716 2.82898 8.18657 3.40081 6.58319 4.47215C4.97982 5.54349 3.73013 7.06624 2.99218 8.84782C2.25422 10.6294 2.06114 12.5898 2.43735 14.4811C2.81355 16.3724 3.74215 18.1097 5.10571 19.4733C6.46928 20.8368 8.20656 21.7654 10.0979 22.1416C11.9892 22.5178 13.9496 22.3248 15.7312 21.5868C17.5127 20.8489 19.0355 19.5992 20.1068 17.9958C21.1782 16.3924 21.75 14.5073 21.75 12.579C21.7473 9.99396 20.7192 7.51559 18.8913 5.6877C17.0634 3.85982 14.585 2.83171 12 2.82898ZM16.2806 10.8596L11.0306 16.1096C10.961 16.1793 10.8783 16.2347 10.7872 16.2724C10.6962 16.3101 10.5986 16.3296 10.5 16.3296C10.4014 16.3296 10.3038 16.3101 10.2128 16.2724C10.1218 16.2347 10.039 16.1793 9.96938 16.1096L7.71938 13.8596C7.57865 13.7189 7.49959 13.528 7.49959 13.329C7.49959 13.13 7.57865 12.9391 7.71938 12.7984C7.86011 12.6576 8.05098 12.5786 8.25 12.5786C8.44903 12.5786 8.6399 12.6576 8.78063 12.7984L10.5 14.5187L15.2194 9.79835C15.2891 9.72867 15.3718 9.6734 15.4628 9.63568C15.5539 9.59797 15.6515 9.57856 15.75 9.57856C15.8486 9.57856 15.9461 9.59797 16.0372 9.63568C16.1282 9.6734 16.2109 9.72867 16.2806 9.79835C16.3503 9.86804 16.4056 9.95076 16.4433 10.0418C16.481 10.1329 16.5004 10.2304 16.5004 10.329C16.5004 10.4275 16.481 10.5251 16.4433 10.6162C16.4056 10.7072 16.3503 10.7899 16.2806 10.8596Z" fill="#01AB31"/>
                        </svg>
                    </div>
                    <p class="mt-[13px] mb-[24px] t_paragraph md:w-[522px]">"I'm not just wearing a t-shirt; I'm wearing a piece of design philosophy. The intricate details and thoughtful layout of the design make this shirt a conversation starter."</p>

                    <p class="text-gray-900 font-Satoshi-Medium! text-base/[22px]! tracking-[0.01px]">Posted on August 19, 2023</p>
            </div>
        </div>
        <button class="secondary_button mx-auto md:mt-[37px] px-[42px]!">Load More Reviews</button>

    </section>
    <!-- Relativer Product -->
    <section class="top_selling">
        <div class="container place-items-center">
      <h2 class="h_title mt-[64px] mb-[55px]">You might also like</h2>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-5  justify-between md:w-full mt-[55px] pb-[33px]">
         <!-- Product-1 -->
         <div class="">
            <a class="block" href="">
               <div class="rounded-[20px] bg-bg-1 min-h-[298px] min-w-[295px]">
                  <img class="p_img" src="https://i.postimg.cc/J7d1c1JX/Frame-32-2.png" alt="">
               </div>
               <h4 class="p_title ">Polo with Contrast Trims</h4>
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
               </div>
               <!-- Price -->
               <div class="flex items-center mt-1">
                  <h4 class="p_price text-black">$212</h4>
                  <h4 class="p_price_off ml-[10px] mt-[2px]">$242</h4>
                  <h6 class="p_price_less bg-secondary px-4 py-1 rounded-3xl ml-[9px]"> -20%</h6>
               </div>
            </a>
         </div>
         <!-- Product-2 -->
         <div>
            <div class=""><img class="p_img" src="https://i.postimg.cc/Zng4TcZH/Frame-33-2.png" alt=""></div>
            <h4 class="p_title">Gradient Graphic T-shirt</h4>
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
            </div>
            <!-- Price -->
            <div class="flex items-center mt-1">
               <h4 class="p_price text-black">$145</h4>
               <h4 class="p_price_off ml-[10px] mt-[2px]"></h4>
               <h6 class="p_price_less bg-secondary px-4 py-1 rounded-3xl ml-[7px]"></h6>
            </div>
         </div>
         <!-- Product-3 -->
         <div>
            <div class=""><img class="p_img" src="https://i.postimg.cc/2y3CRJp3/Frame-34-2.png" alt=""></div>
            <h4 class="p_title">Polo with Tipping Details</h4>
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
            </div>
            <!-- Price -->
            <div class="flex items-center mt-1">
               <h4 class="p_price text-black">$180</h4>
               <h4 class="p_price_off ml-2"></h4>
               <h6 class="p_price_less bg-secondary px-4 py-1 rounded-3xl ml-3"></h6>
            </div>
         </div>
         <!-- Product-4 -->
         <div>
            <div class=""><img class="p_img" src="https://i.postimg.cc/C1cw20QW/Frame-38-2.png" alt=""></div>
            <h4 class="p_title">Black Striped T-shirt</h4>
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
            </div>
            <!-- Price -->
            <div class="flex items-center mt-1">
               <h4 class="p_price text-black">$120</h4>
               <h4 class="p_price_off ml-[10px] mt-[2px]">150</h4>
               <h6 class="p_price_less bg-secondary px-4 py-1 rounded-3xl ml-[6px]"> -30%</h6>
            </div>
         </div>
      </div>
        </div>
    </section>
    <?php
        include_once("inc/footer.php");
    ?>