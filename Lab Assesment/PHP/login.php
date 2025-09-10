<?php
session_start();


$username = $password = "";
$username_err = $password_err = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter your username.";
    } else {
        $username = trim($_POST["username"]);
    }

    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    if (empty($username_err) && empty($password_err)) {
        if ($username === "admin" && $password === "123456") {
            $_SESSION["username"] = $username;
            echo "<p style='color:green; text-align:center;'>Login successful! Welcome, $username.</p>";
        } else {
            echo "<p style='color:red; text-align:center;'>Invalid username or password.</p>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>

  <style>
    * { box-sizing: border-box; }
    body {
      margin: 0;
      font-family: "Times New Roman", Times, serif;
      color: #222;
      background: #fff;
    }

    .frame {
      max-width: 980px;
      margin: 36px auto;
      border: 3px solid #777;
    }

    .topbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 18px 20px;
      border-bottom: 3px solid #777;
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logo {
      width: 52px;
      height: 26px;
      display: block;
    }

    .brand-text {
      font-size: 28px;
      font-weight: 700;
    }
    .brand-text .x { color: #2bb34a; }

    .nav a {
      color: #3b2f7a;
      text-decoration: underline;
      font-size: 20px;
    }
    .nav .sep { margin: 0 8px; color: #3b2f7a; }

    .content {
      min-height: 260px;
      padding: 40px 28px;
      border-bottom: 3px solid #777;
    }

    .footer {
      text-align: center;
      padding: 18px;
    }

   
    .login-card {
      width: 60%;
      margin: 0 auto;
      border: 2px solid #9a9a9a;
      background: #fff;
      padding: 16px 18px 18px;
    }

    .login-card .title {
      text-align: left;
      font-size: 20px;
      font-weight: 700;
      margin: 0 0 8px;
      padding-bottom: 4px;
      border-bottom: 2px solid #9a9a9a;
      width: max-content;
    }

    .login-form .row {
      display: grid;
      grid-template-columns: 160px 16px 1fr;
      align-items: center;
      padding: 8px 0;
    }
    .login-form label { font-weight: 700; }
    .login-form .colon { text-align: center; color: #444; }

    .input {
      width: 100%;
      height: 28px;
      border: 1px solid #bcbcbc;
      background: #fff;
      padding: 2px 6px;
    }
    .input:focus { outline: 1px dotted #777; }

    .thin {
      border: 0;
      border-top: 1px solid #cfcfcf;
      margin: 10px 0 8px;
    }

    .remember {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      margin: 4px 0 10px;
      font-weight: 700;
    }

    .btnbar {
      display: flex;
      align-items: center;
      gap: 14px;
    }
    .btnbar button {
      border: 1px solid #777;
      background: #e6e6e6;
      padding: 6px 14px;
      font-weight: 700;
      cursor: pointer;
    }
    .btnbar .forgot {
      color: #4b3c8e;
      text-decoration: underline;
    }

    @media (max-width: 640px) {
      .login-card { width: 92%; }
      .login-form .row { grid-template-columns: 140px 16px 1fr; }
    }

    .error { color: red; font-size: 14px; margin: 4px 0; }
  </style>
</head>
<body>
  <main class="frame">
    
    <header class="topbar">
      <div class="brand">
        <svg class="logo" viewBox="0 0 64 32" aria-hidden="true">
          <path d="M4 28 L18 4 h8 L16 28 z" fill="#2bb34a"/>
          <path d="M36 4 L52 28 h-8 L28 4 z" fill="#2bb34a"/>
        </svg>
        <span class="brand-text"><span class="x">X</span>Company</span>
      </div>
      <nav class="nav">
        <a href="home.php">Home</a><span class="sep">|</span>
        <a href="login.php">Login</a><span class="sep">|</span>
        <a href="registration.php">Registration</a>
      </nav>
    </header>


    <section class="content">
      <div class="login-card">
        <h2 class="title">LOGIN</h2>

        <form class="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
     
          <div class="row">
            <label for="uname">User Name</label>
            <div class="colon">:</div>
            <input class="input" id="uname" name="username" type="text" value="<?php echo $username; ?>">
          </div>
          <p class="error"><?php echo $username_err; ?></p>

        
          <div class="row">
            <label for="pass">Password</label>
            <div class="colon">:</div>
            <input class="input" id="pass" name="password" type="password">
          </div>
          <p class="error"><?php echo $password_err; ?></p>

          <hr class="thin">

       
          <label class="remember">
            <input type="checkbox" name="remember"> Remember Me
          </label>

         
          <div class="btnbar">
            <button type="submit">Submit</button>
            <a class="forgot" href="#">Forgot Password?</a>
          </div>
        </form>
      </div>
    </section>


    <footer class="footer">
      Copyright &copy; 2017
    </footer>
  </main>
</body>
</html>