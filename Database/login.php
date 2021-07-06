<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION["user_id"])) {
  header("Location: index.php");
}

if (isset($_POST["signup"])) {
  $full_name = mysqli_real_escape_string($conn, $_POST["signup_full_name"]);
  $email = mysqli_real_escape_string($conn, $_POST["signup_email"]);
  $password = mysqli_real_escape_string($conn, md5($_POST["signup_password"]));
  $cpassword = mysqli_real_escape_string($conn, md5($_POST["signup_cpassword"]));

  $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT email FROM users WHERE email='$email'"));

  if ($password !== $cpassword) {
    echo "<script>alert('Password did not match.');</script>";
  } elseif ($check_email > 0) {
    echo "<script>alert('Email already exists in out database.');</script>";
  } else {
    $sql = "INSERT INTO users (full_name, email, password) VALUES ('$full_name', '$email', '$password')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $_POST["signup_full_name"] = "";
      $_POST["signup_email"] = "";
      $_POST["signup_password"] = "";
      $_POST["signup_cpassword"] = "";
      echo "<script>alert('User registration Successful.');</script>";
    } else {
      echo "<script>alert('User registration failed.');</script>";
    }
  }
}

if (isset($_POST["signin"])) {
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $password = mysqli_real_escape_string($conn, md5($_POST["password"]));

  $check_email = mysqli_query($conn, "SELECT id FROM users WHERE email='$email' AND password='$password'");

  if (mysqli_num_rows($check_email) > 0) {
    $row = mysqli_fetch_assoc($check_email);
    $_SESSION["user_id"] = $row['id'];
    header("Location: index.php");
  } else {
    echo "<script>alert('Login details is incorrect. Please try again.');</script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/nstyle.css" />

  <style>
    
    .image {
  transition: transform 1.1s ease-in-out;
  transition-delay: 0.4s;
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 65%;
  height: auto;
}
.container:before {
  content: "";
  position: absolute;
  height: 2000px;
  width: 2000px;
  top: -10%;
  right: 48%;
  transform: translateY(-50%);
  background-image: linear-gradient(-45deg, #4b5364b7 0%, #767a88 100%);
  transition: 1.8s ease-in-out;
  border-radius: 50%;
  z-index: 6;
}
.btn:hover {
  background-color: #727473;
}

.btn.transparent:hover {
  background-color: white;
  color: #212222;
}

.container {
  position: relative;
  width: 100%;
  background-color: rgb(187, 189, 195);
  min-height: 100vh;
  overflow: hidden;
}

.btn {
  width: 380px;
  background-color: #545557;
  border: none;
  outline: none;
  height: 49px;
  border-radius: .3rem;
  /* display: block; */
  color: rgb(255, 255, 255);
  text-transform: uppercase;
  font-weight: 600;
  margin: 10px 0;
  cursor: pointer;
  transition: 0.5s;
}

pre {
  font-family: "Poppins", sans-serif;
}

.social-icon:hover {
  background: #424244;
  border-color: #97979b;
  color: white;
}


</style>
  <title>Sign in & Sign up Form</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">



      <!--Sign in form-->
        <form action="" method="post" class="sign-in-form">

          <h2 class="title">Sign in</h2>

          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email Address" name="email" value="<?php echo $_POST['email']; ?>" required />
          </div>

          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required />
          </div>

          <input type="submit" value="Login" name="signin" class="btn solid" />

        </form>





        <!--Sign Up form-->
        <form action="" class="sign-up-form" method="post">
          <h2 class="title">Sign up</h2>

          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Full Name" name="signup_full_name" value="<?php echo $_POST["signup_full_name"]; ?>" required />
          </div>

          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email Address" name="signup_email" value="<?php echo $_POST["signup_email"]; ?>" required />
          </div>

          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="signup_password" value="<?php echo $_POST["signup_password"]; ?>" required />
          </div>

          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Confirm Password" name="signup_cpassword" value="<?php echo $_POST["signup_cpassword"]; ?>" required />
          </div>

          <input type="submit" class="btn" name="signup" value="Sign up" />

        </form>



      </div>
    </div>

    <div class="panels-container">
      
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <pre>

            Please SIGN UP here to be a part of us. Thank you :)          
           </pre>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>

        </div>

        <img src="image/academic4.png" class="image" alt="" />

      </div>


      <div class="panel right-panel">

        <div class="content">

          <h3>One of us ?</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
            laboriosam ad deleniti.
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>

        </div>

        <img src="image/register.svg" class="image" alt="" />

      </div>


    </div>
  </div>

  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <script src="app.js"></script>
</body>

</html>