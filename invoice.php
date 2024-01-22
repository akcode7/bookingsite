<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="src/css/output.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  


</head>
<body>
    <section id="pdfcontent" class="p-12 mx-auto flex justify-center item-center">
        
        <div class="border border-black h-screen w-1/2 p-6 ">    
        <div class="flex justify-between items-center content-center">
            <img src="../../icon/logo.png" class="w-40 h-20" alt="" srcset="">
            <h1 class="py-1 font-bold text-lg text-center ">Electronic Booking slip</h1>
        </div>
        <hr class="bg-black h-[1.5px] ">
        <div class="grid grid-cols-2 py-3">
            <div class="col-span-1">
                <span class="text-gray-700 font-medium pl-3">Traveler Name: <span class="pl-1 font-semibold text-black">Ankit</span></span>
                <h1 class="text-gray-700 font-medium pl-3">Phone Number: <span class="pl-1 font-semibold text-black">812345544</span></h1>
                <h1 class="text-gray-700 font-medium pl-3">Email: <span class="pl-1 font-semibold text-black">123@gmail.com</span></h1>
            </div>
            <div class="col-span-1">
               
                <h1 class="text-gray-700 font-medium pl-3">Booking Date: <span class="pl-1 font-semibold text-black">22 jan 2024</span></h1>
                <h1 class="text-gray-700 font-medium pl-3">Pick-up Date: <span class="pl-1 font-semibold text-black">25 jan 2024</span></h1>
            </div>
        </div>
  
   
        <hr class="bg-black h-[1.5px] ">

        <div class="grid grid-cols-2  gap-3 py-3">
            <div class="col-span-1 px-3 ">
                <h1 class="py-1 text-left font-bold text-lg  ">Pick-up Address</h1>
                <p class="font-normal">123/b23 shivani vihar kalyanpur lucknow</p>
            </div>
            <div class="col-span-1 px-3">
                <h1 class="py-1 font-bold text-lg text-left ">Drop-off Address</h1>
                <p class="font-normal">123/b23 shivani vihar kalyanpur lucknow</p>
            </div>

        </div>

        <hr class="bg-black h-[1.5px] ">
    </div>

    </section>



<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>


<script src="../public/script.js"></script>
</body>
</html>