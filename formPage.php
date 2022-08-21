<?php

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
  echo $gender;
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Form Page</title>
</head>
<body>
    <div class="container">
        <div class="title">Applying</div>
        <div class="content">
          <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="user-details">
              <div class="input-box">
                <span class="details">Full Name</span>
                <input type="text" placeholder="Enter your name" name="fullname" required>
              </div>

              <div class="input-box">
                <span class="details">Username</span>
                <input type="text" placeholder="Enter your username" name="username" required>
              </div>

              <div class="input-box">
                <span class="details">Email</span>
                <input type="text" placeholder="Enter your email" name="email" required>
              </div>

              <div class="input-box">
                <span class="details">Phone Number</span>
                <input type="text" placeholder="Enter your number" name="phone" required>
              </div>

              <div class="input-box">
                <span class="details">Address</span>
                <input type="text" placeholder="Enter your address" name="address" required>
              </div>

              <div class="input-box">
                <span class="details">Date</span>
                <input type="date" required>
              </div>

            </div>

            <div class="gender-details">

              <input type="radio" name="gender" value="male" id="dot-1">
              <input type="radio" name="gender" value="female" id="dot-2">
              <input type="radio" name="gender" value="prefer not to say" id="dot-3">

              <span class="gender-title">Gender</span>
              <div class="category">
                <label for="dot-1">
                <span class="dot one"></span>
                <span class="gender">Male</span>
              </label>

              <label for="dot-2">
                <span class="dot two"></span>
                <span class="gender">Female</span>
              </label>

              <label for="dot-3">
                <span class="dot three"></span>
                <span class="gender">Prefer not to say</span>
                </label>

              </div>

            </div>

            <div class="button">
              <input type="submit" value="Apply"> 
              <!-- here you can add your next page by clicking on this buttom -->
            </div>

          </form>
        </div>
      </div>
</body>
</html>