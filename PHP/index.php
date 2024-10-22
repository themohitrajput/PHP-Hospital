<!-- <!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN NGDC</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html> -->
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login </title>
  <link rel="stylesheet" href="./css/index.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  
<div class="wrapper">
    <div>Nagrath Charitable Trust, Indore</div>
    <form action="./controller/login.php" method="post">
      <h2>Login</h2>
      <div class="input-field">
        <input type="text" name="uname" autocomplete="false" id="Username" placeholder="Enter your Username" />
        <i class="fa-regular fa-envelope fa-lg emailicon" style="color: #666"></i>
      </div>
      <div class="input-field">
        <input type="password" name="password" id="password" placeholder="Enter your password" />
        <i class="fa-regular fa-eye-slash passicon" style="color: #666"></i>
        <span id="errormsg"><i class="fa-solid fa-circle-exclamation" style="color: #eb0a0a; position: static">
          </i>
          Min 7 characters</span>
      </div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember" />
          <p>Remember me</p>
        </label>
        <a href="#">Forgot password?</a>
      </div>
      <button type="submit" name="submit">Log In</button>

      <!-- <div class="register">
        <p>Don't have an account? <a href="#">Register</a></p>
      </div> -->
    </form>
  </div>

  <!------------ <Script> ------------->
  <script>
    let passicon = document.querySelector(".passicon");

    passicon.onclick = () => {
  if (password.type == "password") {
    password.setAttribute("type", "text");
    passicon.classList.replace("fa-eye-slash", "fa-eye");
  } else {
    password.setAttribute("type", "password");
    passicon.classList.replace("fa-eye", "fa-eye-slash");
  }
};

  </script>
</body>

</html>