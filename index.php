<?php
session_start();

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hero Section with Image Slide</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="src/css/output.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


</head>
<body>

 <?php include 'src/component/header.php'?>

<section class=" px-8 md:px-8 2xl:px-36 py-7 bg-[#FF3726] mx-auto">
  <form action="booking.php" method="GET">
<section class="md:flex  mx-auto justify-center items-center">
<div class="mx-auto">
<label for="trip" class="block font-medium pb-3 text-md text-white  text-sm  ">Trip Type</label>
<select id="triptype" name="triptype" class="bg-white cursor-pointer font-semibold border  text-gray-900 text-sm rounded-lg  block w-52 px-4 py-2 ">
  <option  value="Oneway" selected>One way</option>
  <option  value="Roundtrip">Round Trip</option>
</select>
  </div>

  <div class=" mx-auto">
    <h1 class="font-medium pb-3 text-md text-white">PickUp Location</h1>
    <input autocomplete="off" name="pickup" id="loc_search" class="px-4 py-1.5  w-52 rounded-lg relative border-none focus-none mb-1" type="text">
    <div id="search-result" class="bg-white absolute w-52 rounded-lg"></div>
  </div>
  

  <div class=" mx-auto">
    <h1 class="font-medium pb-3 text-md text-white">Drop Off Location</h1>
    <input autocomplete="off" name="dropoff" id="loc_search_d" class="px-4 py-1.5  border-none w-52 rounded-lg relative mb-1" type="text">
    <div id="search-result_d"  class="bg-white absolute w-52 rounded-lg"></div>
  </div>
 

  <div class=" mx-auto">
    <h1 class="font-medium pb-3 text-md text-white">Pick Up date</h1>
    
    <div >
     
      <input name="pickupdate" type="date" class="bg-white border  text-gray-900 sm:text-sm rounded-lg  block w-52 pl-10 px-4 py-2  datepicker-input" placeholder="Select date">
    </div>
  </div>

  

  <div class=" mx-auto ">
    <h1 class="font-medium pb-2 text-md text-white">Book Now</h1>
    <button value="Search" type="submit" class="bg-white text-[#FF3726] font-medium rounded-lg text-sm px-12 py-2 text-center">Search</button>
  </div>
</section>
</form>
</section>



<div class="container mx-auto my-14 py-8 px-4 md:px-24 bg-center bg-no-repeat bg-[url('/src/images/carbg2.jpg')]">
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
<script type="text/javascript">
 $(document).ready(function(){
      $("#loc_search").keyup(function(){
        var input = $(this).val();

        if(input != ""){
          $.ajax({
            url: "./src/admin/locationsearch.php",
            method: "POST",
            data: { location: input },
         
            success: function(data){
              $("#search-result").html(data);

              // Add click event listener to the search results
              $("#search-result li").click(function(){
                var selectedValue = $(this).text();
                $("#loc_search").val(selectedValue);
                $("#search-result").html(""); // Clear the search results
              });
            }
          });
        } else {
          $("#search-result").html(""); // Clear the search results if the input is empty
        }
      });
    });

    $(document).ready(function(){
      $("#loc_search_d").keyup(function(){
        var input = $(this).val();

        if(input != ""){
          $.ajax({
            url: "./src/admin/locationsearch.php",
            method: "POST",
            data: { location_d: input },
         
            success: function(data){
              $("#search-result_d").html(data);

              // Add click event listener to the search results
              $("#search-result_d li").click(function(){
                var selectedValue = $(this).text();
                $("#loc_search_d").val(selectedValue);
                $("#search-result_d").html(""); // Clear the search results
              });
            }
          });
        } else {
          $("#search-result_d").html(""); // Clear the search results if the input is empty
        }
      });
    });
</script>



<script src="public/script.js"></script>
</body>
</html>
