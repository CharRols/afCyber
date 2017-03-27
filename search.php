<!DOCTYPE html>
 <html lang="en">
 
   <head>
     <title>Cyber Training Hub</title>
     <meta charset="utf-8">
     <meta name = "description" content="Air Force Cyber training hub">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="css/normalize.css">
     <link rel="stylesheet" href="css/main.css">    
     <link rel="stylesheet" href="css/search.css">
     <?php require_once 'PHP/search.php';?>
     
     <script
       src="https://code.jquery.com/jquery-3.1.1.min.js"
       integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
       crossorigin="anonymous"></script>
       
     <script src="scripts/main.js"></script>  
   </head>
 
   <body>
   <header>
     <img src = "images/home.png" alt="Home">
     
     <h1>Cyber Training Hub</h1>
     
     <nav>
       <ul>
         <li><a href="index.html">| Home |</a></li>
         <li><a href="login.html">| Log in |</a></li>
         <li><a href="search.html" id = "search">| Search |</a></li>
         <li><a href="about.html">| About |</a></li>
       </ul>
     </nav>
     
   </header>
 
   <main>  
     <h2>Search</h2>
     <?php
        connect("localhost", "root", "");
     ?>
   </main>
   
   <footer>
     <p>Footer</p>
   </footer>
 
   </body>
 
 </html>