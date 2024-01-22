<!DOCTYPE html>
<html>
<head>
  <title>HappyMindset</title>
  <link rel="icon" type="image/x-icon" href="logo.PNG">

  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="style-for-naviator.css">
<link rel="stylesheet" href="style-for-homepage-body.css">
<link rel="stylesheet" href="style-for-footer.css">
<style>
</style>
</head>
<body>    

<?php
  include("NavigatorBar.php");
?>

  <div class="slideshow-container">
    <div class="mySlides fade">
        <div class="flex-txt"><h1 style="width:50%;"><br>
        <span class="carusel-txt">Immerse</span> <span class="carusel-txt">yourself</span>
        <span class="carusel-txt">in a journey</span> <span class="carusel-txt">of exploration</span>
        <span class="carusel-txt">and</span> <span class="carusel-txt">let</span>
        <span class="carusel-txt">the transformative</span> <span class="carusel-txt"> magic </span>
        <span class="carusel-txt">of literature</span><span class="carusel-txt">nurture</span>
        <span class="carusel-txt">your mental</span> <span class="carusel-txt">well-being. </span><br><br><br>
        <span class="carusel-txt" style="text-shadow: 0px 0px 0px ;"><a href="Library.php" target="_self" style="font-size:3vw;color:white;background-color:rgb(57, 160, 245);border-radius:5px; padding:5px 15px 5px 15px;">Dive into our guides</a></span>
      </h1></div>
  <img src="books.jpg" style="width:100%;">
    </div>
    <div class="mySlides fade">
      <div class="flex-txt"><h1 style="width:50%;"><br>
      <span class="carusel-txt">Our</span> <span class="carusel-txt">digital</span>
      <span class="carusel-txt">haven</span> <span class="carusel-txt">offers </span>
      <span class="carusel-txt">knowledge </span><span class="carusel-txt">on food </span>
      <span class="carusel-txt">nutrition,</span> <span class="carusel-txt"> innovative </span>
      <span class="carusel-txt">dishes, </span><span class="carusel-txt"> and </span>
      <span class="carusel-txt">their </span> <span class="carusel-txt">recipes.</span><br><br><br><br>
      <span class="carusel-txt" style="text-shadow: 0px 0px 0px ;"><a href="Nutrition.html" target="_self" style="font-size:3vw;color:white;background-color:rgb(57, 160, 245);border-radius:5px; padding:5px 15px 5px 15px;">Dive into our guides</a></span>
    </h1></div>
  <img src="food.jpg" style="width:100%;">
    </div>
      <div class="mySlides fade">
        <div class="flex-txt"><h1 style="width:50%;"><br>
          <span class="carusel-txt">Embark</span> <span class="carusel-txt">on a</span>
          <span class="carusel-txt">fitness</span> <span class="carusel-txt">journey </span>
          <span class="carusel-txt">that emphasizes</span><span class="carusel-txt">the importance</span>
          <span class="carusel-txt">of training,</span> <span class="carusel-txt">offering</span>
          <span class="carusel-txt">diverse workout</span><span class="carusel-txt">routines for both</span>
          <span class="carusel-txt">indoor</span> <span class="carusel-txt">and</span> <span class="carusel-txt">outdoor</span><br><br><br>
          <span class="carusel-txt" style="text-shadow: 0px 0px 0px ;"><a href="#div" style="font-size:3vw;color:white;background-color:rgb(57, 160, 245);border-radius:5px; padding:5px 15px 5px 15px;">Dive into our guides</a></span>
        </h1></div>
        <img src="traing.jpg" style="width:100%;">
    </div>
  </div>
  <div style="text-align:center">
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
  </div>

 

  	<div class="flex-badge-container">
      <div class='badge' style="background-image: url(placebobook.PNG);">
        <div class='badgetext'><img src="logo-removebg-preview.png" class="badge-logo-image"> Books</div>
        </div>
        <div class='badge' style="margin-left:30px;background-image: url(frenchtost.PNG);">
        <div class='badgetext'><img src="logo-removebg-preview.png" class="badge-logo-image"> Meals</div>
        </div>
      </div>
      <div class="flex-badge-container" style="margin-bottom:20px;">
        <div class='badge' style="background-image: url(running.PNG);background-size: 145%;">
        <div class='badgetext'><img src="logo-removebg-preview.png" class="badge-logo-image"> Running</div>
        </div>
        <div class='badge' style="margin-left:30px; background-image: url(deadlift.PNG);background-size: 145%;">
        <div class='badgetext'><img src="logo-removebg-preview.png" class="badge-logo-image"> Deadlift</div>
        </div>
      </div>
      
  <?php
    include("Footer.php");
  ?>  
  
  <!--Home-page JAVA SCRIPT file-link is HERE!-->
  <script src="functions-for-home-page.js"></script>
</body>
</html>