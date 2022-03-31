 <?php include_once "partials/header.php"; ?>
  <body>
    <div class="wrapper">
      <section class="form login">
        <header>Realtime Chat App</header>
        <form action="#">
          <div class="error-txt">This is an error message</div>

          <div class="field input">
            <label for="">Email Address</label>
            <input type="text" name="email" placeholder="Enter your email" />
          </div>
          <div class="field input">
            <label for="">Password</label>
            <input type="password" name="password" placeholder="Enter your password" />
            <i class="fas fa-eye"></i>
          </div>
          <div class="field button">
            <input type="submit" value="Continue to Chat" />
          </div>
        </form>
        <div class="link">Not yet signed up?<a href="../index.php">Signup now</a></div>
      </section>
    </div>
    <script src="../script/pass-show-hide.js"></script>
    <script src="../script/login.js"></script>
  </body>
</html>
