<?php

$mydb = "homeDB";
$servername = "localhost";
$username = "username";
$password = "funmilayo007";

$conn = mysqli_connect($servername, $username, $password, $mydb);


if (!$conn) {
  die("connection failed: " . mysqli_connect_error());
}

echo "connected";



$email = $password = "";

$mailerr = $passerr = $msg = "";

if (isset($_POST['login-btn'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];









  // if (empty($email)) {
  //   echo "please enter your Email Adress";


  // }elseif (empty($password))
  // echo "Please insert your Password";



  if (empty($email)) {
    $mailerr = " Enter Your Email";
  } elseif (empty($password)) {
    $passerr = " Enter Your Password";
  } else {


    $sql = "INSERT INTO practice (email, password)
VALUES ('$email', '$password')";

    if ($conn->query($sql) === TRUE) {
      $msg = "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="animated.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <title>ANIMATED-FORM</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "poppins", sans-serif;
    }


    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: red;
    }


    .container {
      position: relative;
      width: 256px;
      height: 256px;
      display: flex;
      justify-content: center;
      align-items: center;
    }


    .btn {
      position: relative;
      display: inline-block;
      width: 100%;
      font-size: 1.5em;
      letter-spacing: .1em;
      color: #0ef;
      background: #1f293d;
      text-decoration: none;
      text-transform: uppercase;
      border-radius: 30px;
      border: 2px solid #0ef;
      padding: 5px 30px;
      z-index: 1;
      overflow: hidden;
      transition: color 1s, box-shadow 1s;
    }

    .btn:hover {
      transition-delay: 0s, 1s;
      color: #fff;
      box-shadow:
        0 0 10px #0ef,
        0 0 20px #0ef,
        0 0 40px #0ef,
        0 0 80px #0ef,
        0 0 160px #0ef;
    }


    .btn::before {
      content: "";
      position: absolute;
      top: 0;
      left: -50px;
      width: 0%;
      height: 100%;
      background: #0ef;
      transform: skewX(35deg);
      z-index: -1;
      transition: 1s;
    }



    .btn:hover::before {
      width: 100%;
    }
  </style>

</head>

<body>
  <span class="text-waning text-center"><?php echo $msg; ?></span>
  <div class="container">

    <span class="text-danger fs-3"></span>
    <div class="login-box">
      <h2>LOGIN</h2>
      <form method="POST" action="animated.php">
        <div class="input-box">
          <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>" />
          <label for="text">Email</label>
          <p class="text-white"><?php echo $mailerr; ?></p>
        </div>

        <div class="input-box">
          <input type="password" name="password" value="<?php echo htmlspecialchars($password); ?>" />
          <label for="pswd">Password</label>
          <p class="text-white"><?php echo $passerr; ?></p>
        </div>

        <div class="forget-pass">
          <a href="#">Forget your Password</a>
        </div>

        <button type="submit" name="login-btn" class="btn">Login</button>
        <br>


        <div class="signup-link">
          <a href="#">Sign Up</a>
        </div>
      </form>
    </div>

    <span style="--i:0;"></span>
    <span style="--i: 1;"></span>
    <span style="--i: 2;"></span>
    <span style="--i: 3;"></span>
    <span style="--i: 4;"></span>
    <span style="--i: 5;"></span>
    <span style="--i: 6;"></span>
    <span style="--i: 7;"></span>
    <span style="--i: 8;"></span>
    <span style="--i: 9;"></span>
    <span style="--i: 10;"></span>
    <span style="--i: 11;"></span>
    <span style="--i: 12;"></span>
    <span style="--i: 13;"></span>
    <span style="--i: 14;"></span>
    <span style="--i: 15;"></span>
    <span style="--i: 16;"></span>
    <span style="--i: 17;"></span>
    <span style="--i: 18;"></span>
    <span style="--i: 19;"></span>
    <span style="--i: 20;"></span>
    <span style="--i: 21;"></span>
    <span style="--i: 22;"></span>
    <span style="--i: 23;"></span>
    <span style="--i: 24;"></span>
    <span style="--i: 25;"></span>
    <span style="--i: 26;"></span>
    <span style="--i: 27;"></span>
    <span style="--i: 28;"></span>
    <span style="--i: 29;"></span>
    <span style="--i: 30;"></span>
    <span style="--i: 31;"></span>
    <span style="--i: 32;"></span>
    <span style="--i: 33;"></span>
    <span style="--i: 34;"></span>
    <span style="--i: 35;"></span>
    <span style="--i: 36;"></span>
    <span style="--i: 37;"></span>
    <span style="--i: 38;"></span>
    <span style="--i: 39;"></span>
    <span style="--i: 40;"></span>
    <span style="--i: 41;"></span>
    <span style="--i: 42;"></span>
    <span style="--i: 43;"></span>
    <span style="--i: 44;"></span>
    <span style="--i: 45;"></span>
    <span style="--i: 46;"></span>
    <span style="--i: 47;"></span>
    <span style="--i: 48;"></span>
    <span style="--i: 49;"></span>
  </div>

  <script src="animated.js"></script>
</body>

</html>