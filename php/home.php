<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Public Home</title>

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
    .content h1 {
      margin: 0;
      font-size: 36px;
      font-weight: 700;
    }

    .footer {
      text-align: center;
      padding: 18px;
    }

    @media (max-width: 640px) {
      .brand-text { font-size: 22px; }
      .nav a { font-size: 18px; }
      .content { min-height: 180px; padding: 28px 20px; }
    }
  </style>
</head>
<body>

  <main class="frame">

    <header class="topbar">
      <div class="bran
        <svg class="logo" viewBox="0 0 64 32" aria-hidden="true">
          <path d="M4 28 L18 4 h8 L16 28 z" fill="#2bb34a"/>
          <path d="M36 4 L52 28 h-8 L28 4 z" fill="#2bb34a"/>
        </svg> 
        <span class="brand-text"><span class="x">X</span>Company</span>
      </div>

  
      <nav class="nav">
        <a href="home.php">Home</a>
        <span class="sep">|</span>
        <a href="login.php">Login</a>
        <span class="sep">|</span>
        <a href="registration.php">Registration</a>
      </nav>
    </header>

    <section class="content">
      <h1>Welcome to xCompany</h1>
    </section>


    <footer class="footer">
      <p>Copyright &copy; 2017</p>
    </footer>
  </main>

</body>
</html>