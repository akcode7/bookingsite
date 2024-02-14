   <!-- header starts php -->
   <header  class="text-gray-500 body-font hidden  lg:flex justify-between items-center">
    <div class="container mx-auto ">
      <a href="index.php" class="flex title-font font-medium items-center text-gray-900 mb-4 ml-5 md:mb-0 align-middle">
        <img src="src/icon/logo.png"  class="w-56 z-10" alt="" srcset="">
      </a>
    </div>
    <div>
        <a href="src/authentication/login.php">
         <button class=" mr-5 inline-flex items-center text-white font-bold bg-[#FF3726] border-0 py-2 px-8 focus:outline-none hover:bg-gray-700 rounded-xl text-base md:mt-0 z-10">login</button>
         </a>
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

