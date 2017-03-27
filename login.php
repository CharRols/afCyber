<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Cyber Training Hub</title>
        <meta charset="utf-8">
        <meta name = "description" content="Air Force Cyber training hub">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">    
        <link rel="stylesheet" href="css/login.css">   
        <?php require_once 'PHP/login.php';?>
        <script
          src="https://code.jquery.com/jquery-3.1.1.min.js"
          integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
          crossorigin="anonymous"></script>

        <script src="scripts/main.js"></script>  
    </head>
    <header>
     <?php connect("localhost", "root", "");?>     
     <h1>Cyber Training Hub</h1>
     
     <nav>
       <ul>
         <li><a href="index.php">| Home |</a></li>
         <li><a href="login.php" id = "login">| Log in |</a></li>
        <li><a href = "courses.html">| Courses |</a></li>
         <li><a href="search.php">| Search |</a></li>
         <li><a href="about.html">| About |</a></li>
       </ul>
     </nav>
     
   </header>
 
   <main>  
     <h2>Log into your account</h2>
     <form action="" method = "post"><!-------------------------------------------------------------THIS NEEDS DONE------------------------------------->
     <p>
 			<label for="uname" id="name">Username</label>
 			<input type="text" name="uname" required><br><br>
 			<label for="pass" id="passw">Password</label>
 			<input type="password" name="pass" required><br>
 		</p>
     <input type = "Button" value = "Create New Account"><!------------------------------ADD ACTION------------------------------------->
     <input type="submit" value="Submit" name = "login">
 </form>
   </main>
   
   <footer>
    <img src = "images/home.png" alt="Home">
   </footer>
 
   </body>
</html>
