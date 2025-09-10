<?php
session_start();


if (!isset($_SESSION['username'])) {

  $_SESSION['username'] = "Bob";
}
$username = $_SESSION['username'];

$profile = [
  "name"   => "Bob",
  "email"  => "bob@aiub.edu",
  "gender" => "Male",
  "dob"    => "19/09/1998",
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>View Profile</title>
  <style>
  
    * { box-sizing: border-box; }
    body{
      margin:0;
      font-family:"Times New Roman", Times, serif;
      color:#222;
      background:#fff;
    }

    .frame{
      max-width: 980px;
      margin: 36px auto;
      border: 3px solid #777;
      background:#fff;
    }

    
    .topbar{
      display:flex;
      align-items:center;
      justify-content:space-between;
      padding:18px 20px;
      border-bottom:3px solid #777;
    }
    .brand{ display:flex; align-items:center; gap:10px; }
    .logo{ width:52px; height:26px; display:block; }
    .brand-text{ font-size:28px; font-weight:700; }
    .brand-text .x{ color:#2bb34a; }
    .nav a{ color:#4b3c8e; text-decoration:underline; }
    .sep{ margin:0 8px; color:#4b3c8e; }


    .body{
      display:flex;
      min-height: 360px;
      border-bottom:3px solid #777;
    }

   
    .sidebar{
      width:270px;
      border-right:1px solid #000;
      padding:16px 16px 20px;
    }
    .sidebar h3{
      margin:0 0 8px;
      font-size:20px;
    }
    .hairline{
      border:0; border-top:1px solid #cfcfcf; margin:8px 0 10px;
    }
    .sidebar ul{
      list-style: disc;
      padding-left:22px;
      margin:0;
    }
    .sidebar ul li a{
      color:#4b3c8e; text-decoration:underline;
    }

 
    .profile-wrap{ flex:1; padding:16px; }
    .profile-card{
      border:2px solid #9a9a9a;
      padding:14px 16px 16px;
    }
    .profile-card legend{
      font-weight:700; font-size:20px; padding:0 6px;
    }
    .row{
      display:grid;
      grid-template-columns: 160px 16px 1fr 140px; 
      align-items:center;
      gap:8px;
      padding:8px 0;
      border-bottom:1px solid #dedede;
    }
    .row:last-of-type{ border-bottom:none; }

    .label{ font-weight:700; }
    .colon{ text-align:center; color:#444; }
    .value{ }
    .change { text-align:right; }
    .change a{ color:#4b3c8e; text-decoration:underline; }

    .avatar{
      width:120px; height:120px;
      margin-left:auto;
      background:
        radial-gradient(circle at 50% 38%, #000 0 22px, transparent 22px),
        radial-gradient(circle at 50% 82%, #000 0 38px, transparent 38px),
        repeating-linear-gradient( -45deg, #f3f3f3 0 6px, #e9e9e9 6px 12px );
      border-radius:8px;
      outline:1px solid #d0d0d0;
    }

 
    .edit-link{
      display:inline-block;
      margin-top:10px;
      color:#4b3c8e;
      text-decoration:underline;
      font-weight:700;
    }


    .footer{
      text-align:center;
      padding:16px;
    }

    
    @media (max-width: 720px){
      .body{ flex-direction:column; }
      .sidebar{ width:100%; border-right:0; border-bottom:1px solid #000; }
      .row{ grid-template-columns: 140px 14px 1fr; }
      .avatar{ display:none; }
    }
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
      Logged in as
      <a href="profile.php"><?php echo htmlspecialchars($username); ?></a>
      <span class="sep">|</span>
      <a href="logout.php">Logout</a>
    </nav>
  </header>


  <section class="body">

    <aside class="sidebar">
      <h3>Account</h3>
      <hr class="hairline">
      <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="view_profile.php">View Profile</a></li>
        <li><a href="edit_profile.php">Edit Profile</a></li>
        <li><a href="change_picture.php">Change Profile Picture</a></li>
        <li><a href="change_password.php">Change Password</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </aside>

   
    <div class="profile-wrap">
      <fieldset class="profile-card">
        <legend>PROFILE</legend>

        <div class="row">
          <div class="label">Name</div>
          <div class="colon">:</div>
          <div class="value"><?php echo htmlspecialchars($profile['name']); ?></div>
          <div class="photo">
            <div class="avatar" aria-hidden="true"></div>
          </div>
        </div>

        <div class="row">
          <div class="label">Email</div>
          <div class="colon">:</div>
          <div class="value"><?php echo htmlspecialchars($profile['email']); ?></div>
        </div>

        <div class="row">
          <div class="label">Gender</div>
          <div class="colon">:</div>
          <div class="value"><?php echo htmlspecialchars($profile['gender']); ?></div>
        </div>

        <div class="row">
          <div class="label">Date of Birth</div>
          <div class="colon">:</div>
          <div class="value"><?php echo htmlspecialchars($profile['dob']); ?></div>
          <div class="change"><a href="change_picture.php">Change</a></div>
        </div>

        <hr class="hairline">

        <a class="edit-link" href="edit_profile.php">Edit Profile</a>
      </fieldset>
    </div>
  </section>


  <footer class="footer">
    Copyright &copy; 2017
  </footer>
</main>

</body>
</html>