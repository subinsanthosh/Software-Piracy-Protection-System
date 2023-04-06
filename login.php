<?php include('server.php')
?>
<!DOCTYPE html>
<html>
<head>
	<title>Software Piracy Protection</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/styler.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
 <form action="login.php" method="post">
   <?php include('errors.php'); ?>
   <div class="cont">
    <div class="form sign-in">
      <h2>Sign In</h2>
      <label>
        <span>Username</span>
        <input type="text" name="username" required>
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password" required>
      </label>
      <button type="submit" class="submit" name="login_user" >Sign In</button>
      <a style="padding-left:230px;  color: green" href="admin.php" class="">Forgot Password?</a>

    
    </div>
  </form>
  <form action="login.php" method="post">
    <?php include('errors.php');  ?>
    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Then Sign up! </p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already have an account, just sign in...</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <div class="form sign-up">
        <h2>Sign Up</h2>
        <label>
          <span>Username</span>
          <input type="text" name="username" value="<?php echo $username; ?>" required>
        </label>
        <label>
          <span>Email</span>
          <input type="email" name="email" value="<?php echo $email; ?>" required>
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="password_1" required>
        </label>
        <label>
          <span>Confirm Password</span>
          <input type="password" name="password_2" required>
        </label>
        <button type="submit" class="submit" name="reg_user">Sign Up Now</button>
      </div>
    </div>
   </div>
 </form>
<!-- <script type="text/javascript" src="script.js"> -->
<script>
  document.querySelector('.img-btn').addEventListener('click', function()
	{
		document.querySelector('.cont').classList.toggle('s-signup')
	}
);

</script>

</body>
</html>