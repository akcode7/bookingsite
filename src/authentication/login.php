<?php
session_start();

// Check if user is already logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("location: ../../index.php"); // Redirect to index.php if already logged in
    exit();
}
?>

<?php

include '../../src/config/db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM user WHERE email='$email'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);

  if ($num == 1) {
      while ($row = mysqli_fetch_assoc($result)) {
          if ($row['password'] === md5($password)) {
              session_start();
              $_SESSION['loggedin'] = true;
              $_SESSION['email'] = $email;
              $_SESSION['user_role'] = $row['user_role'];
              $_SESSION['user_id'] = $row['user_id'];
             

              if ($row['user_role'] !== "administrator") {
                  header("location: ../userdashboard/userprofile.php");
              } else {
                  header("location: ../admin/addlisting.php");
              }
          } else {
              echo 'error';
          }
      }
  } else {
      echo "multiply username";
  }
}

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
                    Sign in to your account
                  </h1>
                  <form class="space-y-4 md:space-y-6" action="" method="POST">
                    <div>
                      <label
                        for="email"
                        class="block mb-2 text-sm font-medium text-gray-900"
                        >Your email</label
                      >
                      <input
                        type="email"
                        name="email"
                        id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-[#FF3726] focus:border-[#FF3726] block w-full p-2.5"
                        placeholder="name@company.com"
                        required=""
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
                    <div class="flex items-center justify-between">
                      <div class="flex items-start">
                        <div class="flex items-center h-5">
                          <input
                            id="remember"
                            aria-describedby="remember"
                            type="checkbox"
                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-[#ff3726] focus:border-[#ff3726]"
                            required=""
                          />
                        </div>
                        <div class="ml-3 text-sm">
                          <label for="remember" class="text-gray-600"
                            >Remember me</label
                          >
                        </div>
                      </div>
                      <a
                        href="#"
                        class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500"
                        >Forgot password?</a
                      >
                    </div>
                    <button
                      type="submit"
                      class="w-64 text-white bg-[#FF3726] font-medium rounded-lg text-sm px-4 py-2 text-center my-6 md:my-4"
                    >
                      Sign In
                    </button>
                    <p class="text-sm font-light text-gray-600">
                      Don’t have an account yet?
                      <a
                        href="signup.php"
                        class="font-medium text-primary-600 hover:underline text-[#FF3726]"
                        >Sign up</a
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
