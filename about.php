<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="https://use.fontawesome.com/d1341f9b7a.js"></script>
    <link rel="stylesheet" href="abt_style.css">
    <link rel="stylesheet" href="style.css">
    <title>About WebSite</title>
  </head>
  <body>
  <nav>
      <ul>
        <li class="logo">WatchKart</li>
        <li class="items"><a href="index.php">Home</a></li>
        <li class="items"><a href="new_store.php">Shop</a></li>
        
        <?php
        if(isset($_SESSION['user']))
        {
          echo("<li class='items'><a>Hi " .$_SESSION['user']. "</a></li>");
          echo'<li class="items"><a href="logout.php?logout">Logout</a></li>';
        }

        else
        {
          echo'<li class="items"><a href="register.php">Register</a></li>';
          echo'<li class="items"><a href="login.php">Login</a></li>';
        }
        ?>
        <li class="items"><a href="about/about.html">About</a></li>
        <li class="items"><a href="contact.php">Feedback</a></li>

      </ul>
    </nav>
<div class="box">
  <img src="prof.jpg" alt="" class="box-img">
  <h1>Karthik Raja</h1>
<h5>
Web Devloper - Web Designer</h5>
<p>This is the best place to find you best watch. <br> This page is designed to update top-watch brand's <br> latest releases.  </p>
<ul>
<li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
</ul>
</div>
</body>
</html>

