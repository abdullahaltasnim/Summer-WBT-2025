<?php

$email = "";
$email_err = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter your email.";
    } elseif (!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
        $email_err = "Invalid email format.";
    } else {
        $email = trim($_POST["email"]);
        echo "<p style='color: green; text-align:center;'>Password reset link sent!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Forgot Password</title>
</head>
<body style="font-family: Arial, sans-serif; text-align: center;">

  <div style="width: 80%; margin: 0 auto; border: 1px solid #ccc; padding: 20px;">

   
   <div style="text-align: left;">
 
  <svg class="logo" viewBox="0 0 64 32" aria-hidden="true" style="height:24px; vertical-align:middle;">
    <path d="M4 28 L18 4 h8 L16 28 z" fill="#2bb34a"/>
    <path d="M36 4 L52 28 h-8 L28 4 z" fill="#2bb34a"/>
  </svg>
  <span style="font-size:22px; font-weight:700;">
    <span style="color:#2bb34a;">X</span>Company
  </span>

  <div style="float: right;">
    <a href="home.php" style="color: purple;">Home</a> |
    <a href="login.php" style="color: purple;">Login</a> |
    <a href="registration.php" style="color: purple;">Registration</a>
  </div>
</div>
    <hr>

 
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
          style="width: 50%; margin: 0 auto; text-align: left;">

      <fieldset>
        <legend>FORGOT PASSWORD</legend>


        Enter Email:<br>
        <input type="email" name="email" value="<?php echo $email; ?>" style="width: 100%;"><br>
        <p style="color: red;"><?php echo $email_err; ?></p>

        
        <input type="submit" value="Submit" style="margin-top: 10px;">
      </fieldset>
    </form>

    <hr>

    <div style="text-align: center; margin-top: 20px;">
      Copyright © 2017
    </div>
  </div>

</body>
</html>