
<?php include 'src/config/db_connect.php';
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 'On');
$userid = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && $userid) {
    
   
    // Get input data
    $purchaseid = "CAB".rand(1111111,9999999).substr($phone_number,-4);
   
    $pickupadd =  $_POST['pickup_add']; 
    $dropoffadd =  $_POST['dropoff_add']; 
    $fullname =  $_POST['full_name'];
    $email =  $_POST['email_add'];
    $gender = $_POST['gen_der'];
    $phonenumber = $_POST['phone_number'];
    $pickupdate = isset($_GET['pickupdate']) ? $_GET['pickupdate'] : '';
    
    $formattedDate = date('Y-m-d', strtotime($pickupdate));
    $triptype = isset($_GET['triptype']) ? $_GET['triptype'] : '';
    $carname = isset($_GET['carname']) ? $_GET['carname'] : '';
    $cardistance = isset($_GET['cartrdistance']) ? $_GET['cartrdistance'] : '';
    
    $bookingamount = isset($_GET['caramount']) ? $_GET['caramount'] : '';
    $orderstatus = "pending";
    $pickuptime = isset($_GET['pickuptime']) ? $_GET['pickuptime'] : '';
   
   
   
    
  

    // Get the current Indian time
    $indianTime = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
    $currentIndianTime = $indianTime->format('Y-m-d H:i:s');


    $sql = "INSERT INTO `bookingdetail` (`purchase_id`,`pickup_add`, `dropoff_add`, `full_name`, `email_id`, `gender`, `phone_number`,`pickup_date`,`triptype`,`car_name`,`cartr_distance`,`book_amount`,`order_status`,`pickup_time`, `book_time`,`user_id`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("sssssssssssssssi", $purchaseid, $pickupadd, $dropoffadd, $fullname, $email, $gender, $phonenumber, $formattedDate,$triptype, $carname, $cardistance, $bookingamount,$orderstatus,$pickuptime, $currentIndianTime, $userid);

    $stmt->execute();

  $sql = "SELECT * FROM bookingdetail WHERE purchase_id='$purchaseid'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);

  if ($num == 1) {
      while ($row = mysqli_fetch_assoc($result)) {
        
              session_start();
              $_SESSION['purchase_id'] = $row['purchase_id'];
          
      }
  } else {
      echo "sessionpurchaseid";
  }

    if ($stmt->affected_rows > 0) {
     
      header("Location: invoice.php");
      
      exit();
    } else {
        // $errorAlert = str_replace('id="error_msg"></div>', 'id="error_msg">Post not added.</div>', $errorAlert);
        // echo $errorAlert;
        echo "error";
    }

    $stmt->close();
    

}

//connection closed
$conn->close();


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Hero Section with Image Slide</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link href="src/css/output.css" rel="stylesheet">
  </head>
  <body>

 <!-- header starts -->

<?php include 'src/component/header.php'?>
<!-- header ends -->

<section class="h-screen w-full flex flex-col ">
<div class="h-screen md:grid grid-cols-8">
<div class="flex sm:col-span-5 sm:block md:block bg-[#eaffeb] lg:block xl:block 2xl:block">
 <!-- booking detail card 1 starts -->
 <?php
include 'src/config/db_connect.php';


if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $pickup = isset($_GET['pickup']) ? $_GET['pickup'] : '';
  $dropoff = isset($_GET['dropoff']) ? $_GET['dropoff'] : '';
  $pickupdate = isset($_GET['pickupdate']) ? $_GET['pickupdate'] : '';
  $triptype = isset($_GET['triptype']) ? $_GET['triptype'] : '';
  $bookingamount = isset($_GET['caramount']) ? $_GET['caramount'] : '';
  

    // Perform a SELECT query based on the pickup and drop-off addresses
    $sql = "SELECT * FROM carlist WHERE car_pickup = '$pickup' AND car_dropoff = '$dropoff'";
    $result = $conn->query($sql);

while ($row = mysqli_fetch_assoc($result)) {

?>

<div class="mx-auto my-7 px-5">

    <div class="mx-auto w-11/12  md:grid shadow-lg grid-cols-10 bg-white border border-gray-400 rounded-lg py-5 px-2">
        <div class="col-span-2 px-2">
            <img src="src/icon/suvcar.png" class="rounded-lg w-11/12" alt="">
        </div>
    
        <div class="col-span-5 p-2">
          <h1 class="text-xl font-bold">
          <?php echo $row['car_name']?>
        
          </h1>
    
          <ul class="list-disc md:flex gap-8 pt-2 pl-4 md:pl-0">
          <li>
            <?php echo $row['car_ac']?> 
          </li>

          <li>
            <?php echo $row['car_seat']?>&nbsp; Seats
          </li> 
        </ul>
    
          <h1 class="text-xl font-bold pt-2">
          <?php echo $row['car_pickup']?> <i class="fa fa-arrow-right" aria-hidden="true"></i> <?php echo $row['car_dropoff']?>
          </h1>
          <span class="mr-0.5">
          <?php echo $row['car_trtime']?> Hours
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
        <p>Trip Type: <?php echo $triptype; ?></p>
        <p>Pickup: <?php echo $pickupdate; ?></p>
        
        
      </div>
    

<?php
  }}
  ?>
</div>
</div>
<!-- booking detail card 1 ends -->
<!-- driver detail starts -->
<div class="mx-auto my-7 px-5">
    <div class="mx-auto w-11/12 shadow-lg bg-white border border-gray-400 rounded-lg py-5 px-5">
        <h1 class="text-xl font-semibold">Driver and Taxi details</h1>
        <p class="pt-1">
            Taxi and driver information will be provided up to 30 minutes before the scheduled departure.</p>

    </div>

</div>

<!-- driver details end -->

<!-- Included and excluded  starts -->

<div class="mx-auto my-7 px-5 cursor-pointer" id="dropdownbtn2">
  <div id="butn" onclick="toggledropdown2()" class="mx-auto w-11/12 shadow-lg  bg-white border border-gray-400 rounded-lg py-5 px-5">
     <div class="text-xl font-semibold flex justify-between items-center">Included & Excluded
     <i class="fa fa-angle-down px-4 text-2xl"></i>
    </div>
  </div>



<div id="dropdown2" class="mx-auto w-11/12 bg-white border border-gray-400 rounded-lg py-5 px-6 mt-1 hidden">
  <div class="md:grid grid-cols-2">
    <div class="col-span-1">
      <h1 class="font-bold">Included in your fare</h1>
      <ul class="pt-2 ">
               
        <li class="flex items-center pb-1">
          <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
           </svg>
           138 kms included. After that ₹23.0/km
      </li>
    
    
    
    <li class="flex items-center pb-1">
      <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
       </svg>
      One pickup and One drop
    </li>
    <li class="flex items-center pb-1">
      <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
       </svg>
       Toll Charges
    </li>
    
    <li class="flex items-center pb-2">
      <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
       </svg>
       State Tax
    </li>
      </ul>
    </div>
    <div class="col-span-1">
      <h1 class="font-bold">Not included in your fare</h1>
      <ul class="pt-2 ">
               
        <li class="flex items-center pb-1">
          <svg class="w-3.5 h-3.5 me-2 flex-shrink-0 bg-red-500 rounded-full font-bold p-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 24 24" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
        
        
           <span>Fare after 138km <span> ; 23Rs/km </span></span> 
      </li>

      <li class="flex items-center pb-1">
        <svg class="w-3.5 h-3.5 me-2 flex-shrink-0 bg-red-500 rounded-full font-bold p-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 24 24" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
      </svg>
         Waiting charges 2rs/minute after 45minutes
    </li>
    
    </div>
  </div>
 
</div>

<!-- included and excluded  ends -->

</div>
<!-- Included and excluded  ends -->


<!-- pickup and dropoff address starts -->

<div class="mx-auto my-7 px-5 cursor-pointer" id="dropdownbtn">
    <div id="butn" onclick="toggledropdown()" class="mx-auto w-11/12 shadow-lg  bg-white border border-gray-400 rounded-lg py-5 px-5">
       <div class="text-xl font-semibold flex justify-between items-center">Pick-Up And Drop-Off Location 
       <i class="fa fa-angle-down px-4 text-2xl"></i>
      </div>
    </div>



  <div id="dropdown" class="mx-auto w-11/12 bg-white border border-gray-400 rounded-lg py-5 px-6 mt-1 hidden">
    <form action="" method="post">
      <div>
        <label
          for="text"
         
          class="block mb-2 text-sm font-medium text-gray-900 py-2"
          >Pick-up Address</label
        >
        <input
          type="text"
          name="pickup_add"
          id="pick_up"
          class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#FF3726] focus:border-[#FF3726] block w-full p-2.5"
          placeholder="Your exact pick-up address"
          required=""
        />
      </div>
      <div>
        <label
          for="text"
          class="block mb-2 text-sm font-medium text-gray-900 py-2"
          >Drop-off location</label
        >
        <input
          type="text"
          name="dropoff_add"
          id="drop_off"
          class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#FF3726] focus:border-[#FF3726] block w-full p-2.5"
          placeholder="Your exact drop-off location"
          required=""
        />
      </div>
   
</div>
</div>

<!-- pickup and dropoff address ends -->

<!-- enter user details -->
<div class="mx-auto my-7 px-5">
  <div class="mx-auto w-11/12 shadow-lg bg-white border border-gray-400 rounded-lg py-5 px-5">
    <h1 class="text-xl font-semibold py-2">Enter Traveller Details</h1>
    
   
      <div class="flex ">
      <div class="pb-2 mx-2">
        <label for="text" class="block  mb-2 text-sm font-medium text-gray-900" >Your Full Name</label>
        <input type="text" name="full_name" id="fullname" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#FF3726] focus:border-[#FF3726] block w-80 p-2.5"  placeholder="Enter Full Name"   required=""/>
      </div>
      <div class="pb-2 mx-2">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900" >Email Id <span class="font-normal">(Confirmation email will be sent here)</span></label> 
        <input type="email" name="email_add" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#FF3726] focus:border-[#FF3726] block w-80 p-2.5" placeholder="Enter email ID"  required="" />
      </div>
    </div>

    <div class="mx-2">
      <h1>Gender</h1>
    </div>
    <div class="flex pt-2">
      <div class="flex items-center me-4  mx-2">
        <input id="inline-radio" type="radio" value="male" name="gen_der" class="w-4 outline-none h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
        <label for="inline-radio" class="ms-2 text-sm font-medium text-gray-900 ">Male</label>
    </div>
    <div class="flex items-center me-4 mx-2">
        <input id="inline-2-radio" type="radio" value="female" name="gen_der" class="w-4 outline-none h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
        <label for="inline-2-radio" class="ms-2 text-sm font-medium text-gray-900 ">Female</label>
    </div>
    <div class="flex items-center me-4 mx-2">
        <input checked id="inline-checked-radio" type="radio" value="other" name="gen_der" class="w-4 outline-none h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
        <label for="inline-checked-radio" class="ms-2 text-sm font-medium text-gray-900 ">Other</label>
    </div>
    
    </div>

    <div class="py-5 mx-2 ">
      <label for="number"  class="block mb-2 text-sm font-medium text-gray-900" >Phone Number<span class="font-normal">(We will contact you on this number)</span></label> 
      
      <input pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==12) return false;" type="number" name="phone_number" id="phnumber" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#FF3726] focus:border-[#FF3726] block w-80 p-2.5" maxlength="12" placeholder="Enter Phone number"  required="" />
    </div>
   
  </div>

</div>

<!-- user detail forn ends -->

<!-- Additional  detail starts -->
<div class="mx-auto my-7 px-5">
  <div class="mx-auto w-11/12 shadow-lg bg-white border border-gray-400 rounded-lg py-5 px-5">
    <h2 class="mb-2 text-lg font-semibold text-gray-900">Additional Information:</h2>
    <hr class="py-2">
    <div class="md:grid grid-cols-2">
      
      <!-- column 1 -->
      <div class="col-span-1 px-2">
       
        <ul class="max-w-md space-y-1 text-gray-700 list-disc list-inside">
            <li>
                AC will be turned off in hilly areas
            </li>
            <li > A single pickup, a Single drop-off, and a Single stop for a meal are indluded.
            </li>
            <li > Information about the driver will be provided within the 30 minutes leading up to the departure.
            </li>
            <li> The car type provides room for two pieces of luggage. However, if the car runs on CNG, the available luggage space will be reduced.
            </li>
        </ul>
      </div>
      <!-- column 2 -->
      <div class="col-span-1 px-2">
      
        <ul class="max-w-md space-y-1 text-gray-700  list-disc list-inside">
            <li>
              The pickup may experience a delay of 30 minutes due to traffic or unforeseen circumstances.
            </li>
            <li> The driver will wait for a maximum of 45 minutes from the scheduled pickup time at your designated location.
            </li>
           
        </ul>
      </div>

    </div>
  </div>

</div>

<!-- Additional details end -->


</div>

<div class="col-span-3 bg-white md:fixed md:right-10 py-8">
          <div class="flex items-center justify-center h-screen">
            <div class="flex flex-col  px-6 py-8 mx-auto md:h-screen lg:py-0">
              <div class="w-full bg-white rounded-lg shadow border-gray-700 md:mt-0 sm:max-w-md xl:p-0" >
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                  <div class="grid grid-cols-2">
                    <div class="col-span-1 px-2 text-left">
                      <h1   class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl" >
                        Total Amount
                      </h1>
                      <p class="font-normal text-sm">inclusive of tolls and taxes</p>
                    </div>
                    <div class="col-span-1 px-2 text-right">
                      <h1   class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl" >
                      <?php echo $bookingamount; ?>
                      </h1>
                      <p class="font-normal text-sm text-[#ff3726]">View details</p>
                    </div>
                  </div>
                 
                  
                    <div class="justify-center flex">

                      <button
                      type="submit"
                      name="send"
                      class="w-64 text-white bg-[#FF3726] font-medium rounded-lg text-sm px-4 py-2 text-center my-6 md:my-4">
                     Pay in cash
                    </button>
                    </div>
                 
                  </form>
                </div>
              </div>
            </div>
          </div>
  </div>
  </div>
    </section>

    

 

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="public/script.js"></script>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
  </body>
</html>

<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['send'])){
  //Load Composer's autoloader
require 'src/PHPMailer/Exception.php';
require 'src/PHPMailer/PHPMailer.php';
require 'src/PHPMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'admin@gpsolarpanel.com';                     //SMTP username
    $mail->Password   = 'Admin!@#2310';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('admin@gpsolarpanel.com', 'checkout');
    $mail->addAddress('xakobe5283@ricorit.com', 'Joe User');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Thanks for booking your ride';
    $mail->Body    = "This is the '$purchaseid'";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}


?>
