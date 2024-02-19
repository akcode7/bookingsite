<?php
session_start();

// Check if user is already logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("location: ../../index.php"); // Redirect to index.php if already logged in
    exit();
}
?>

<?php
include '../config/db_connect.php';

error_reporting(E_ALL);
ini_set('display_errors', 'On');

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input data
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $userpass = md5($_POST['password']);
    $userrole = "customer";

   

    // Use prepared statement to prevent SQL injection
    $sql = "INSERT INTO `user` (`fullname`, `email`, `password`, `user_role`) VALUES (?,?,?,?);";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("ssss", $name, $email, $userpass, $userrole);

    // Execute the statement
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
      session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['email'] = $email;
       header("location: ../../index.php");
    } else {
        echo "insert error";
    }

    $stmt->close();

    $sql = "SELECT * FROM user WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
  
    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
                session_start();
                $_SESSION['user_role'] = $row['user_role'];
                $_SESSION['user_id'] = $row['user_id'];
            }};

}

// Connection closed
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
    <link href="../css/output.css" rel="stylesheet">
  </head>
  <body>
    <section class="h-screen w-full flex flex-col">
      <div class="h-screen md:grid grid-cols-7">
        <div
          class="hidden sm:col-span-3 sm:block md:block bg-gray-200 lg:block xl:block 2xl:block"
        >
          <div class="flex items-center justify-center h-screen">
            <img class="w-11/12" src="../images/signupbg.png" alt="" />
          </div>
        </div>

        <div class="col-span-4 bg-white">
          <div class="flex items-center justify-center h-screen">
            <div
              class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0"
            >
              <div
                class="w-full bg-white rounded-lg shadow border-gray-700 md:mt-0 sm:max-w-md xl:p-0"
              >
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                  <h1
                    class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl"
                  >
                    Create an account
                  </h1>
                  <form class="space-y-4 md:space-y-6"  method="POST">
                    <div>
                      <label
                        for="text"
                        
                        class="block mb-2 text-sm font-medium text-gray-900"
                        >Full Name</label
                      >
                      <input
                        type="text"
                        name="fullname"
                        id="fullname"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#FF3726] focus:border-[#FF3726] block w-full p-2.5"
                        placeholder="Enter your full name"
                        required=""
                      />
                    </div>

                    
                    <div>
                      <label
                        for="email"
                        class="block mb-2 text-sm font-medium text-gray-900"
                        >Your email</label
                      >
                      <input
                        type="email"
                        name="email"
                        required=""
                        id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#FF3726] focus:border-[#FF3726] block w-full p-2.5"
                        placeholder="name@company.com"
                      
                      />
                    </div>

                    <div>
                      <label
                        for="password"
                        class="block mb-2 text-sm font-medium text-gray-900"
                        >Password</label
                      >
                      <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="••••••••"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                        required=""
                      />
                    </div>
                  
                    <button
                      type="submit"
                      class="w-64 text-white bg-[#FF3726] font-medium rounded-lg text-sm px-4 py-2 text-center my-6 md:my-4"
                    >
                      Sign Up
                    </button>
                    <p class="text-sm font-light text-gray-600">
                      Already have an account?
                      <a
                        href="login.php"
                        class="font-medium text-primary-600 hover:underline text-[#FF3726]"
                        >Sign in</a
                      >
                    </p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../public/script.js"></script>
  </body>
</html>
