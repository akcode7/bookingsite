<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hero Section with Image Slide</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="src/css/output.css" rel="stylesheet">


</head>
<body>

    <!-- header starts php -->
<header class="text-gray-500 body-font hidden lg:block">
    <div class="container mx-auto flex flex-wrap flex-col md:flex-row items-center">
      <a href="index.php" class="flex title-font font-medium items-center text-gray-900 mb-4 ml-5 md:mb-0 align-middle">
        <img src="src/icon/logo.png"  class="w-56 z-10" alt="" srcset="">
      </a>
      <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center z-10">
        <a href="index.php" class="mr-5 font-bold">Home</a>
        <a href="about.php" class="mr-5 font-bold">About</a>
        <a href="services.php" href="services.html" class="mr-5 font-bold">Services</a>
        <a href="contact.php" class="mr-5 font-bold">Contact</a>
      </nav>
      <button class="mr-5 inline-flex items-center text-white font-bold bg-[#FF3726] border-0 py-5 px-12 focus:outline-none hover:bg-gray-700 rounded-xl text-base md:mt-0 z-10">Search A Ride!</button>
    </div>
  </header>
  <!-- mobile header -->
<div class="lg:hidden">

<!-- header menu btm starts -->
<div class="grid grid-cols-2">
<div>
  <a href="index.php">
    <img src="src/icon/logo.png"  class="w-56 " alt="" srcset="">
  </a>
</div>
<div>
  <i class="absolute right-10 top-10 fa fa-bars text-2xl mobile-menu-button z-10"></i>
</div>
</div>
<!-- header menu btn ends-->
<div class="container  right-0 top-0 z-10 bg-black h-screen hidden mobile-menu w-10/12" style="position:fixed; overflow-y: scroll;">
<div class="flex pl-10 mb-20">
  <img src="assets/src/images/LinQ_whitetxt.png" class="w-7/12 mt-5" alt="">
  <i class="fa fa-times text-white mt-10 right-10 absolute text-xl hover:text-red-500 mobile-menu-close-btn"></i>
</div>
<div class="mb-10 w-11/12 pl-6">
  <nav class="text-white w-11/12 ">
      <ul class="divide-y divide-gray-600">
          <a href="index.php"><li class="py-3 hover:text-yellow-300 text-lg font-semibold"> Home</li></a>
          <a href="about.php"><li class="py-3 hover:text-yellow-300 text-lg font-semibold">About</li></a>
          <a href="services.php"><li class="py-3 hover:text-yellow-300 text-lg font-semibold">Services</li></a>
          <a href="contact.php"> <li class="py-3 hover:text-yellow-300 text-lg font-semibold">Contact</li></a>
      </ul>
    </nav>
</div>
<div class="pl-6">
  <ul>
  <h1 class="text-yellow-300 font-bold mb-6">Contact Us</h1>
  <li class="text-white font-semibold"><i class="fa-solid fa-location-pin text-[#015A60] mb-4 mr-2"></i></i>Location</li>
  <li class="text-white font-semibold"><i class="fa-solid fa-phone text-[#015A60] mb-4 mr-2"></i></i>+1 1234567</li>
  <li class="text-white font-semibold"><i class="fa-solid fa-envelope text-[#015A60] mb-4 mr-2"></i></i>support@admin.com</li>
 </ul>
 <button class="inline-flex items-center text-white font-bold bg-[#FF3726] border-0 py-3 px-12 focus:outline-none hover:bg-gray-700 rounded-xl text-base mt-4 md:mt-0">Let’s Talk 👋
  
 </button>
</div>

</div>



</div>
<!-- mobile header ends -->
<!-- header ends -->




<div class="relative overflow-hidden">
        <!-- Image Slider -->
        <div id="imageSlider" class="w-full h-screen">
            <div class="absolute w-full h-full opacity-50  bg-black"></div>
            <img class="object-cover w-full h-full" src="src/images/herobg1.jpg" alt="Image 1">
        </div>
<section class="block md:grid md:grid-cols-2 absolute inset-0 md:justify-around items-center text-white px-4">
        <!-- Hero Content -->
            <div class="col-span-1 text-left py-5 md:pl-12">
                <p class="text-xl md:text-2xl mb-5">Book Your car now</p>
                <h1 class="text-6xl md:text-8xl font-bold mb-4">CAR RENTAL</h1>
           
            </div>
            

   <div class=" col-span-1 w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8">
       <form class="space-y-6" method="GET" action="booking.php">
        <h5 class="text-xl font-medium text-gray-900 ">Book A cab Now</h5>
        <div>
            <label  class="block mb-2 text-sm font-medium text-gray-900">Pick-up Location</label>
            <input type="text" name="pickup" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 " placeholder="pick up location " required>
        </div>
        <div>
            <label  class="block mb-2 text-sm font-medium text-gray-900 ">Drop Off Location</label>
            <input type="text" name="dropoff" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5 " placeholder="drop location" required>
        </div>
        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Pick-up date</label>
            <div class="relative">
                
                <input  type="date" class="bg-white border  text-gray-900 sm:text-sm rounded-lg  block w-full pl-10 px-4 py-2.5 datepicker-input" placeholder="Select date">
              </div>
        </div>
       
        <div>
            <button  class="w-full text-white bg-[#FF3726] font-medium rounded-lg text-sm px-5 py-2.5 text-center">Book Now</button>
        </div>
        

    </form>
</div>
</section>
       
</div>


    <div class="text-center pt-10">
        <p class="font-medium pb-2" >Find The best rental car</p>
        <h1 class="text-4xl font-bold ">Welcome to CarRental</h1>
    </div>


<!-- <=== imgbox ====> -->
<section class="md:grid grid-cols-3 justify-center py-12">

    <div class="col-span-1 text-center pt-10 px-10">
        <img class=" mx-auto" src="src/icon/caricon.png" alt="" srcset="">
        <h1 class="text-xl font-bold ">We offer lowest car price</h1>
        <p class="font-medium" >Find The best rental car We offer lowest car price</p>
    </div>

    <div class="col-span-1 text-center pt-10 px-10">
        <img class=" mx-auto" src="src/icon/caricon.png" alt="" srcset="">
        <h1 class="text-xl font-bold ">We offer lowest car price</h1>
        <p class="font-medium" >Find The best rental car We offer lowest car price</p>
    </div>

    <div class="col-span-1 text-center pt-10 px-10">
        <img class=" mx-auto" src="src/icon/caricon.png" alt="" srcset="">
        <h1 class="text-xl font-bold ">We offer lowest car price</h1>
        <p class="font-medium" >Find The best rental car We offer lowest car price</p>
    </div>

</section>

<!--===== image box ends====== -->




<div class="text-center pt-10 hidden md:block">
    <img class=" mx-auto w-1/2" src="src/images/carimg.png" alt="" srcset="">
</div>

<div class="container mx-auto py-8 px-4 md:px-24 bg-center bg-no-repeat bg-[url('/src/images/carbg2.jpg')]">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
    
      <div class="mb-4 md:mb-0">
        <img src="src/images/carimg2.png" alt="Image" class="w-9/12 h-auto">
      </div>
  
      <div>
        <h2 class="text-xl md:text-6xl font-bold mb-4">Services with a Wide Range of Cars</h2>
        <p class="text-[#FF3726] text-lg md:text-2xl font-medium  py-2">COMMITTED TO PROVIDING OUR CUSTOMERS WITH <br> EXCEPTIONAL SERVICE.</p>
        <p class="text-gray-500 text-sm md:text-lg font-normal py-2">Lorem ipsum is simply ipun txns mane so dummy text of free available in market the printing and typesetting industry has been the industry’s 
            standard dummy text ever.</p>
            <button type="submit" class="w-64 text-white bg-[#FF3726] font-medium rounded-lg text-sm px-6 py-4 text-center my-4 ">Discover More</button>
      </div>
    </div>
  </div>


  <div class="py-12">
    <p class="text-center text-xl md:text-2xl text-[#ff3726] pb-4"> Check out our new cars</p>
    <h1 class="text-2xl md:text-5xl font-bold text-center ">Cars We’re Offering<br>
        for Rentals</h1>
</div>



<!-- <======= car card ======> -->


<section class="md:grid grid-cols-3 justify-center  mx-auto py-8 px-4 md:px-24">
   
<!-- <==== card 1 ====> -->

<div class="col-span-1 w-full  mt-5 max-w-sm bg-white border border-gray-500 rounded-lg shadow">
    <a href="#">
        <img class="p-3 rounded-t-lg" src="src/images/carimg.png" alt="product image" />
    </a>
    <hr class="w-11/12 h-[1px] mx-auto my-2 bg-gray-500 border-0 rounded ">
    <div class="px-5 pb-5">
        <a href="#">
            <h5 class="text-lg font-semibold tracking-tight text-gray-900">Apple car Series 7 GPS, Aluminium Case, Starlight Sport</h5>
        </a>
        <div class="grid grid-cols-2  items-center justify-between my-1">
            <div>
            <ul class="max-w-md flex space-y-1 text-gray-500 list-inside ">
                <li class="flex items-center ">
                    <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                     </svg>
                    6 seats
                </li>
                </ul>
                </div>
                <div>
                    <ul class=" max-w-md flex space-y-1 text-gray-500 list-inside">
                <li class="flex items-center ">
                    <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                     </svg>
                 2 doors
                </li>
                
              
            </ul>
            </div>
        </div>

        <div class="grid grid-cols-2  items-center justify-between my-1">
            <div>
            <ul class="max-w-md flex space-y-1 text-gray-500 list-inside ">
                <li class="flex items-center ">
                    <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                     </svg>
                    6 seats
                </li>
                </ul>
                </div>
                <div>
                    <ul class=" max-w-md flex space-y-1 text-gray-500 list-inside">
                <li class="flex items-center ">
                    <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                     </svg>
                 2 doors
                </li>
                
              
            </ul>
            </div>
        </div>
       
        <div class="flex items-center justify-between my-4">
            <span class="text-lg font-normal text-gray-900">Color :<span class="text-orange-500"> orange</span></span>
           
        </div>

       
        <div class="flex items-center justify-between my-4">
            <span class="text-3xl font-bold text-gray-900">$599</span>
            <a href="#" class="text-white bg-[#ff3726] font-medium rounded-lg text-sm px-5 py-2.5 text-center">Book Now</a>
        </div>
    </div>
</div>

<!-- <==== card 1 ends====> -->

<!-- <==== card 2 ====> -->

<div class="col-span-1 w-full mt-5 max-w-sm bg-white border border-gray-500 rounded-lg shadow">
    <a href="#">
        <img class="p-3 rounded-t-lg" src="src/images/carimg.png" alt="product image" />
    </a>
    <hr class="w-11/12 h-[1px] mx-auto my-2 bg-gray-500 border-0 rounded ">
    <div class="px-5 pb-5">
        <a href="#">
            <h5 class="text-lg font-semibold tracking-tight text-gray-900">Apple car Series 7 GPS, Aluminium Case, Starlight Sport</h5>
        </a>
        <div class="grid grid-cols-2  items-center justify-between my-1">
            <div>
            <ul class="max-w-md flex space-y-1 text-gray-500 list-inside ">
                <li class="flex items-center ">
                    <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                     </svg>
                    6 seats
                </li>
                </ul>
                </div>
                <div>
                    <ul class=" max-w-md flex space-y-1 text-gray-500 list-inside">
                <li class="flex items-center ">
                    <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                     </svg>
                 2 doors
                </li>
                
              
            </ul>
            </div>
        </div>

        <div class="grid grid-cols-2  items-center justify-between my-1">
            <div>
            <ul class="max-w-md flex space-y-1 text-gray-500 list-inside ">
                <li class="flex items-center ">
                    <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                     </svg>
                    6 seats
                </li>
                </ul>
                </div>
                <div>
                    <ul class=" max-w-md flex space-y-1 text-gray-500 list-inside">
                <li class="flex items-center ">
                    <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                     </svg>
                 2 doors
                </li>
                
              
            </ul>
            </div>
        </div>
       
        <div class="flex items-center justify-between my-4">
            <span class="text-lg font-normal text-gray-900">Color :<span class="text-orange-500"> orange</span></span>
           
        </div>

       
        <div class="flex items-center justify-between my-4">
            <span class="text-3xl font-bold text-gray-900">$599</span>
            <a href="#" class="text-white bg-[#ff3726] font-medium rounded-lg text-sm px-5 py-2.5 text-center">Book Now</a>
        </div>
    </div>
</div>

<!-- <==== card 2 ends====> -->

<!-- <==== card 3 ====> -->

<div class="col-span-1 w-full mt-5 max-w-sm bg-white border border-gray-500 rounded-lg shadow">
    <a href="#">
        <img class="p-3 rounded-t-lg" src="src/images/carimg.png" alt="product image" />
    </a>
    <hr class="w-11/12 h-[1px] mx-auto my-2 bg-gray-500 border-0 rounded ">
    <div class="px-5 pb-5">
        <a href="#">
            <h5 class="text-lg font-semibold tracking-tight text-gray-900">Apple car Series 7 GPS, Aluminium Case, Starlight Sport</h5>
        </a>
        <div class="grid grid-cols-2  items-center justify-between my-1">
            <div>
            <ul class="max-w-md flex space-y-1 text-gray-500 list-inside ">
                <li class="flex items-center ">
                    <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                     </svg>
                    6 seats
                </li>
                </ul>
                </div>
                <div>
                    <ul class=" max-w-md flex space-y-1 text-gray-500 list-inside">
                <li class="flex items-center ">
                    <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                     </svg>
                 2 doors
                </li>
                
              
            </ul>
            </div>
        </div>

        <div class="grid grid-cols-2  items-center justify-between my-1">
            <div>
            <ul class="max-w-md flex space-y-1 text-gray-500 list-inside ">
                <li class="flex items-center ">
                    <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                     </svg>
                    6 seats
                </li>
                </ul>
                </div>
                <div>
                    <ul class=" max-w-md flex space-y-1 text-gray-500 list-inside">
                <li class="flex items-center ">
                    <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                     </svg>
                 2 doors
                </li>
                
              
            </ul>
            </div>
        </div>
       
        <div class="flex items-center justify-between my-4">
            <span class="text-lg font-normal text-gray-900">Color :<span class="text-orange-500"> orange</span></span>
           
        </div>

       
        <div class="flex items-center justify-between my-4">
            <span class="text-3xl font-bold text-gray-900">$599</span>
            <a href="#" class="text-white bg-[#ff3726] font-medium rounded-lg text-sm px-5 py-2.5 text-center">Book Now</a>
        </div>
    </div>
</div>

<!-- <==== card 3 ends====> -->
</section>

<!-- <======= car card end=====> -->

<div class="py-4">
    <p class="text-center text-2xl text-[#ff3726] pb-2"> SIMPLE 4 EASY STEPS</p>
    <h1 class="text-5xl font-bold text-center ">See How It Works</h1>
</div>

<!-- <=== imgbox ====> -->
<section class="md:grid grid-cols-4 justify-center pb-16">
    <div class="col-span-1 text-center pt-10 px-6">
        
        <h1 class="text-xl font-bold text-gray-700 hover:text-white rounded-t-lg bg-gray-200 mb-8 px-24 py-4 hover:bg-[#015A60]">Search</h1>
        <img class=" mx-auto" src="src/icon/searchicon.png" alt="" srcset="">
    </div>

    <div class="col-span-1 text-center pt-10 px-6">
        
        <h1 class="text-xl font-bold text-gray-700 hover:text-white rounded-t-lg bg-gray-200 mb-8 px-24 py-4 hover:bg-[#015A60]">Select</h1>
        <img class=" mx-auto" src="src/icon/selecticon.png" alt="" srcset="">
    </div>

    <div class="col-span-1 text-center pt-10 px-6">
        
        <h1 class="text-xl font-bold text-gray-700 hover:text-white rounded-t-lg bg-gray-200 mb-8 px-24 py-4 hover:bg-[#015A60]">Book</h1>
        <img class=" mx-auto" src="src/icon/bookicon.png" alt="" srcset="">
    </div>

    <div class="col-span-1 text-center pt-10 px-6">
        
        <h1 class="text-xl font-bold text-gray-700 hover:text-white rounded-t-lg bg-gray-200 mb-4 px-24 py-4 hover:bg-[#015A60]">Drive</h1>
        <img class=" mx-auto" src="src/icon/driveicon.png" alt="" srcset="">
    </div>

   
</section>

<!--===== image box ends====== -->



<section class="mx-auto mt-12 py-8 px-4 md:px-24  bg-left-bottom bg-no-repeat bg-[url('/src/images/carimgtest.jpg')]">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
    
      <div>
        <h2 class="text-6xl font-bold mb-4">Services with a Wide Range of Cars</h2>
        <p class="text-[#FF3726] text-2xl font-medium  py-2">COMMITTED TO PROVIDING OUR CUSTOMERS WITH <br> EXCEPTIONAL SERVICE.</p>
        <p class="text-gray-500 text-lg font-normal py-2">Lorem ipsum is simply ipun txns mane so dummy text of free available in market the printing and typesetting industry has been the industry’s 
            standard dummy text ever.</p>
            <button type="submit" class="w-64 text-white bg-[#FF3726] font-medium rounded-lg text-sm px-6 py-4 text-center my-6 md:my-4 ">Discover More</button>
      </div>

      <div class="mb-4 md:mb-0">
        <img src="src/images/carimg4.webp" alt="Image" class="w-full md:w-9/12 h-auto">
      </div>

      
    </div>
</section>

<!-- <=======footer starts======>
    <========================> -->

  <footer class="mx-auto">
    <section class="bg-[#292930] pt-24 pb-20">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-6">
        <div class="p-0 md:p-6 md:col-span-2">
            <img src="src/icon/logo.png" alt="Logo" class="w-52">
            <p class="text-gray-300 font-medium pt-4">abccarcompany offers a complete drive solutions through our Managed website</p>
            <div class="flex gap-4 pt-7 pb-6">
            <i class="fa-brands fa-instagram text-gray-400 p-4 bg-gray-800 rounded-full hover:bg-teal-500 hover:text-white transition duration-700 ease-linear"></i>
            <i class="fa-brands fa-facebook-f text-gray-400 p-4 bg-gray-800 rounded-full hover:bg-teal-500 hover:text-white transition duration-700 ease-linear"></i>
            <i class="fa-brands fa-linkedin-in text-gray-400 p-4 bg-gray-800 rounded-full hover:bg-teal-500 hover:text-white transition duration-700 ease-linear"></i>
            </div>
        </div>
        <div class="md:col-span-1">
            <h3 class="text-start text-xl font-semibold text-white tracking-wider pt-6">Useful Links</h3>
            <ul class="pt-8 text-gray-300 font-semibold">
            <li class="pb-3 hover:text-yellow-300"><a href="#">Home</a></li>
            <li class="pb-3 hover:text-yellow-300"><a href="#">About Us</a></li>
            <li class="pb-3 hover:text-yellow-300"><a href="#">Contact</a></li>
            <li class="pb-3 hover:text-yellow-300"><a href="#">Services</a></li>
            <li class="pb-3 hover:text-yellow-300"><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div class="md:col-span-1 pr-0 md:pr-2">
            <h3 class="text-start text-xl font-semibold text-white tracking-wider pt-6">Our Services</h3>
            <ul class="pt-8 text-gray-300 font-semibold">
            <li class="pb-3 hover:text-yellow-300"><a href="#">Luxery car rent</a></li>
            <li class="pb-3 hover:text-yellow-300"><a href="#">Simple Car rent</a></li>
            <li class="pb-3 hover:text-yellow-300"><a href="#">Suv car rent</a></li>
            <li class="pb-3 hover:text-yellow-300"><a href="#">Sedan car rent</a></li>
            <li class="pb-3 hover:text-yellow-300"><a href="#">Book Cab</a></li>
            </ul>
        </div>
        <div class="md:col-span-2 pl-0 md:pl-2">
            <h3 class="text-start text-xl font-semibold text-white tracking-wider pt-6">Subscribe Newsletter</h3>
            <p class="text-gray-300 font-medium pt-6">Drop your email address below to receive occasional updates.</p>
            <form>   
            <div class="relative pt-8">
                <input type="search" id="default-search" class="block w-full p-6 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-teal-500 focus:text-teal-400" placeholder="Enter your mail" required>
                <button type="submit" class="text-white absolute right-3 bottom-2.5 bg-yellow-500 hover:bg-teal-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-4 transition duration-700">Submit</button>
            </div>
            </form>
        </div>
        </div>
        <hr class="border border-gray-700">
        
    </div>
    </section>
</footer>

<!-- ====footer ends====>
======================= -->


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="public/script.js"></script>
</body>
</html>
