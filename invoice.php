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
    
<?php
  include 'src/config/db_connect.php';
  session_start();

// Check if the user is logged in
if (isset($_SESSION['user_id']) && isset($_SESSION['purchase_id'])) {
    // Get the user ID from the session
    $sessionUserId = $_SESSION['user_id'];
    $sessionpurchaseID = $_SESSION['purchase_id'];
   
    
    
    

    // Query to select user data based on user_id from the session
    $query = "SELECT * FROM `bookingdetail` WHERE user_id = $sessionUserId AND purchase_id = '$sessionpurchaseID'";
    $result = mysqli_query($conn, $query); // Assuming you have a database connection stored in $conn

    // Check if there are any rows returned from the query
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
      
?>


    <section id="pdfcontent" class="p-12 mx-auto flex justify-center item-center">
        
        <div class="border border-black h-screen w-1/2 p-6 ">    
        <div class="flex justify-between items-center content-center">
            <img src="./src/icon/logo.png" class="w-40 h-20" alt="" srcset="">
            <h1 class="py-1 font-bold text-lg text-center ">Electronic Booking slip</h1>
        </div>
        <hr class="bg-black h-[1.5px] ">
        <div class="grid grid-cols-2 py-3">
            <div class="col-span-1">
                <span class="text-gray-700 font-medium pl-3">Traveler Name: <span class="pl-1 font-semibold text-black"><?php echo $row['full_name']?></span></span>
                <h1 class="text-gray-700 font-medium pl-3">Phone Number: <span class="pl-1 font-semibold text-black"><?php echo $row['phone_number']?></span></h1>
                <h1 class="text-gray-700 font-medium pl-3">Email: <span class="pl-1 font-semibold text-black"><?php echo $row['email_id']?></span></h1>
            </div>
            <div class="col-span-1">
               
                <h1 class="text-gray-700 font-medium pl-3">Booking Date: <span class="pl-1 font-semibold text-black">
                    <?php 
                    $booking_date = $row['book_time'];
                    $formatbookdate = new DateTime($booking_date);
                    $formattedbookDate = $formatbookdate->format('d-m-Y H:i:s');
                    echo $formattedbookDate;?>
                    </span></h1>
                <h1 class="text-gray-700 font-medium pl-3">Pick-up Date: <span class="pl-1 font-semibold text-black"><?php 
                    $pick_update = $row['pickup_date']; 
                    $formattedDate = date('d-m-Y', strtotime($pick_update));
                    echo $formattedDate;?></span></h1>
            </div>
        </div>
  
   
        <hr class="bg-black h-[1.5px] ">

        <div class="grid grid-cols-2  gap-3 py-3">
            <div class="col-span-1 px-3 ">
                <h1 class="py-1 text-left font-bold text-lg  ">Pick-up Address</h1>
                <p class="font-normal"><?php echo $row['pickup_add']?></p>
                <p class="font-normal"><?php echo $row['purchase_id']?></p>
            </div>
            <div class="col-span-1 px-3">
                <h1 class="py-1 font-bold text-lg text-left ">Drop-off Address</h1>
                <p class="font-normal"><?php echo $row['dropoff_add']?></p>
            </div>

        </div>

        <hr class="bg-black h-[1.5px] ">
        <button id="btn">Generate</button>
    </div>
    
    </section>
    

   
    <?php
  }}}
  ?>




<script type="module" src="./invoicepdf.js"></script>

</body>
</html>