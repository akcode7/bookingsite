<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hero Section with Image Slide</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="src/css/output.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.3/dist/flowbite.min.css" /> -->
 
</head>
<body class="bg-[#EEF4FD]">

    <!-- header starts php -->
<header class="text-gray-500 body-font hidden lg:block bg-white">
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
<div class="lg:hidden bg-white">

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
  <img src="assets/../images/LinQ_whitetxt.png" class="w-7/12 mt-5" alt="">
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
<section class=" px-8 md:px-8 2xl:px-36 py-7 bg-[#FF3726] mx-auto">
  <form action="">
<section class="md:flex  mx-auto justify-center items-center">
<div class="mx-auto">
<label for="trip" class="block font-medium pb-3 text-md text-white  text-sm  ">Trip Type</label>
<select id="triptype" class="bg-white font-semibold border  text-gray-900 text-sm rounded-lg  block w-52 px-4 py-2 ">
  <option selected>One way trip</option>
  <option value="Roundtrip">Round Trip</option>
</select>
  </div>

  <div class=" mx-auto">
    <h1 class="font-medium pb-3 text-md text-white">PickUp Location</h1>
    <input class="px-4 py-1.5  w-52 rounded-lg" type="text">
  </div>

  <div class=" mx-auto">
    <h1 class="font-medium pb-3 text-md text-white">Drop Off Location</h1>
    <input class="px-4 py-1.5  w-52 rounded-lg" type="text">
  </div>

  <div class=" mx-auto">
    <h1 class="font-medium pb-3 text-md text-white">Pick Up date</h1>
    
    <div >
     
      <input type="date" class="bg-white border  text-gray-900 sm:text-sm rounded-lg  block w-52 pl-10 px-4 py-2  datepicker-input" placeholder="Select date">
    </div>
  </div>

  

  <div class=" mx-auto ">
    <h1 class="font-medium pb-2 text-md text-white">Update</h1>
    <button type="submit" class="bg-white text-[#FF3726] font-medium rounded-lg text-sm px-12 py-2 text-center  ">Search</button>
  </div>
</section>
</form>
</section>

<!-- booking detail card 1 starts -->

<section class="mx-auto my-7">

<?php
include 'src/config/db_connect.php';

$query = "SELECT * FROM `carlist`";
$result = mysqli_query($conn, $query); // Assuming you have a database connection stored in $your_db_connection

while ($row = mysqli_fetch_assoc($result)) {

?>

  <section class="mx-auto w-11/12 md:w-3/5 md:grid shadow-lg grid-cols-10 bg-white border border-gray-400 rounded-lg py-5 px-2">
      <div class="col-span-2">
          <img src="src/icon/suvcar.png" class="p-3" alt="">
      </div>

      <div class="col-span-5 p-6">
        <h1 class="text-xl font-bold">
          <?php echo $row['car_name']?>
        </h1>
        <div class="pl-5">
        <ul class="list-disc md:flex gap-8 pt-2 pl-4 md:pl-0">
          <li>
            <?php echo $row['car_ac']?> 
          </li>

          <li>
            <?php echo $row['car_seat']?>&nbsp; Seats
          </li> 
        </ul>
        </div>

        <h1 class="text-md font-semibold pt-2">
          <?php echo $row['car_pickup']?> <i class="fa fa-arrow-right" aria-hidden="true"></i> <?php echo $row['car_dropoff']?>
        </h1>
        <span>
          <?php echo $row['car_trtime']?>
        </span>
      
        <ul class="pt-2 border-dashed border-b-2 border-gray-400">
        
          <li class="flex items-center">
            <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
            </svg>
            <?php echo $row['car_trdistance']?> kms included. After that <?php echo $row['car_extcharges']?>Rs/km
        </li>

      <li class="flex items-center pb-2">
        <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
        </svg>
        Cancellation Free till <?php echo $row['car_cancletime']?> hours of departure
    </li>
        </ul>
        <span class="flex py-2">
          <img src="src/icon/discounticon.png"/>
          <h1 class="font-bold text-[#FF3726] py-2 pl-2">Cheapest Price Garanteed</h1>
        
    </span>

      </div>

      <div class=" col-span-3 mx-auto p-3">
        <h1 class="font-bold text-4xl pb-3">Rs <?php echo $row['car_amount']?></h1>
        <button type="submit" class="text-white bg-[#FF3726] font-medium rounded-lg text-sm px-8 py-2 text-center  ">Book Now</button>
      </div>
    
      </div>
  </section>
  <?php
  }
  ?>

  </section>

<!-- booking detail card 1 ends -->

<!-- booking detail card 2 starts -->
  
  </section>
<!-- booking detail card 2 ends -->


<!-- <=======footer starts======>
    <========================> -->

    <footer class="mx-auto">
        <section class="bg-[#292930] pt-24 pb-20">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-6">
            <div class="p-0 md:p-6 md:col-span-2">
                <img src="../icon/logo.png" alt="Logo" class="w-52">
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
    