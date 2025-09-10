 
<?php
session_start();

if (!isset($_SESSION['username'])) {
   
    $_SESSION['username'] = "Bob";
}

$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <style>
   
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 900px;
      margin: 0 auto;
      border: 1px solid #000;
      background: #fff;
    }

    .header, .footer {
      border: 1px solid #000;
      padding: 10px;
    }
    .footer {
      text-align: center;
      font-size: 14px;
    }


    .brand {
      display: inline-flex;
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
      font-weight: bold;
      line-height: 1;
    }
    .brand-text .x {
      color: #2bb34a;
      font-weight: 700;
    }

    
    .user-info {
      float: right;
      margin-top: 10px;
    }
    .user-info a {
      margin-left: 5px;
      text-decoration: none;
      color: purple;
    }
    .clearfix { clear: both; }

    .content {
      display: flex;
      border-top: 1px solid #000;
      border-bottom: 1px solid #000;
      min-height: 300px;
    }
    .sidebar {
      width: 250px;
      border-right: 1px solid #000;
      padding: 15px;
    }
    .sidebar h3 { margin-top: 0; }
    .sidebar ul { list-style-type: disc; padding-left: 20px; }
    .sidebar ul li a {
      text-decoration: none;
      color: purple;
    }
    .main {
      flex: 1;
      padding: 15px;
    }
  </style>
</head>
<body>

<div class="container">

 
  <div class="header">
    <div class="brand">
   
      <svg class="logo" viewBox="0 0 64 32" aria-hidden="true">
        <path d="M4 28 L18 4 h8 L16 28 z" fill="#2bb34a"/>
        <path d="M36 4 L52 28 h-8 L28 4 z" fill="#2bb34a"/>
      </svg>
      <span class="brand-text"><span class="x">X</span>Company</span>
    </div>

    <div class="user-info">
      Logged in as <a href="profile.php"><?php echo htmlspecialchars($username); ?></a> |
      <a href="logout.php">Logout</a>
    </div>
    <div class="clearfix"></div>
  </div>


  <div class="content">
 
    <aside class="sidebar">
      <h3>Account</h3>
      <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="view_profile.php">View Profile</a></li>
        <li><a href="edit_profile.php">Edit Profile</a></li>
        <li><a href="change_picture.php">Change Profile Picture</a></li>
        <li><a href="change_password.php">Change Password</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </aside>

   
    <section class="main">
      <h3>Welcome <?php echo htmlspecialchars($username); ?></h3>
    </section>
  </div>

  <footer class="footer">
    Copyright &copy; 2017
  </footer>

</div>

</body>
</html>
