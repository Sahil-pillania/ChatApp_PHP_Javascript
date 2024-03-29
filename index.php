<?php
session_start();
if(isset($_SESSION['unique_id'])){// if user is logged in 
  header("location: files/users.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Realtime Chat App</title>
    <link rel="stylesheet" href="style/style.css" />
    <script src="script/script.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="wrapper">
      <section class="form signup">
        <header>Realtime Chat App</header>
        <form action="#" enctype="multipart/form-data">
          <div class="error-txt"></div>
          <div class="name-details">
            <div class="field input">
              <label for="">first Name</label>
              <input type="text" name="fname" placeholder="First Name" required/>
            </div>
            <div class="field input">
              <label for="">Last Name</label>
              <input type="text" name="lname" placeholder="Last Name" required/>
            </div>
          </div>
          <div class="field input">
            <label for="">Email Address</label>
            <input type="text" name="email" placeholder="Enter your email" required/>
          </div>
          <div class="field input">
            <label for="">Password</label>
            <input type="password" name="password" placeholder="Enter new password" required/>
            <i class="fas fa-eye"></i>
          </div>
          <div class="field image">
            <label for="">Select Image</label>
            <input type="file" name="image" required />
          </div>
          <div class="field button">
            <input type="submit" value="Continue to Chat" />
          </div>
        </form>
        <div class="link">Already signed up?<a href="files/login.php">Login now</a></div>
      </section>
    </div>

    <script src="script/pass-show-hide.js"></script>
    <script src="script/signup.js"></script>
  </body>
</html>
