<div class="nav-pc">
  <div class="flex-nav-container">
    <div style="flex:100%"><a  href="Home-page.php" target="_self"><img src="weblogo.PNG" style="height:100px;"></a></div> 
    <div><a href="MySpace">My Space</a></div> 
    <div class="nav-dropdown" style="width:120px; padding-bottom:12px;"><a href="javascript:void(0)" class="nav-dropbtn" href="#discovery">Discover</a>
      <div class="nav-dropdown-content">
        <a href="#">Books</a>
        <a href="Nutrition.html" target="_self">Nutritions</a>
        <a href="#">Trainers</a>
      </div>
    </div>

    <div style="margin-right:10%;"><a href="#trainer">Trainers</a></div>
    <div><a onclick="createProfile()" style="width:auto;"><img src="profile.png" style="height:25px;"></a></div>   
  </div>
  </div>
   <!--Navigator-for-mobile-->
  <div class="nav-mobile">
    <div class="flex-nav-container-mobile">
      <button onclick="menuDropdown()" class="menu-dropbtn" href="#discovery">Menu</button>    
            <div id="menu-dropdown-content-id" class="menu-dropdown-content">
              <a href="MySpace">My Space</a>
              <a href="#trainer">Trainers</a>
              <a href="Nutrition.html" target="_self">Nutritions</a>
              <a href="#discovery">Books</a>
            </div>
            <div id="drop-dropdown-background" class="drop-dropdown-background"></div>
      <div style="margin:0px 25% 0px 25%;"><a href="Home-page.php" target="_self"><img src="weblogo.PNG" class="websode-logo"></a></div> 
      <div style="margin-top:41px;"><a onclick="createProfile()" style="width:auto;"><img src="profile.png" style="height:22px;padding-top:7px;padding-left:5px"></a></div>   
    </div>
    </div>
   <!--Navigator-background--><div class="navigator-background"></div>
   
   <div id="create-profile" class="modal">
    <div class="login-background">
    <div class="modal-content animate" action="/action_page.php" method="post" style="width:100%;margin:5px 5px 5px 5px;">
<div><img src="weblogo-removebg-preview.png" style="height:120px;"></div>
<div style="margin-top:50px;margin-bottom:15px"><button onclick="logIn()" type="buton" style="padding: 10px 75px 10px 75px;">Log in</button></div>
<div style="margin-bottom:50px;"><button onclick="singUp()" type="buton">Sign up</button></div>
    </div>
</div>
</div>
<script>
var modal = document.getElementById('create-profile');

window.onclick = function(event) {
if (event.target == modal) {
  modal.style.display = "none";
}
}
</script>
   <!--Login form-->
   <div id="Log-in-forum" class="modal">
     <div class="login-background">
     <form class="modal-content animate" action="/action_page.php" method="post" style="width:100%;margin:5px 5px 5px 5px;">
      <span onclick="document.getElementById('Log-in-forum').style.display='none'" class="close" title="Close Modal">&times;</span>
      <div><img src="weblogo-removebg-preview.png" style="height:80px;padding-top:30%;padding-left:10px;"></div>
      <h2 style="margin: 0 0 50px 0;">Login</h2>
   
     <div class="user-box">
       <input type="text" name="" required="" id="username">
         <label>Username</label>
     </div>
     <div class="user-box" style="margin-bottom:110px;">
       <input type="password" name="" required="" id="pass">
         <label>Password</label>
     </div>     
   <div class="submit">
     <button type="submit" onClick="login()">Submit</button>
     </div>
    </form>
     </div>
   </div>
<!--SING UP form-->
   <div id="Sing-up-forum" class="modal">
    <div class="login-background">
    <form class="modal-content animate" action="/action_page.php" method="post" style="width:100%;margin:5px 5px 5px 5px;">
     <span onclick="document.getElementById('Sing-up-forum').style.display='none'" class="close" title="Close Modal">&times;</span>
     <div><img src="weblogo-removebg-preview.png" style="height:80px;padding-top:30%;padding-left:10px;"></div>
     <h2>Login</h2>
  
     <div class="user-box">
      <input type="text" name="" required="" id="username">
        <label>Full name</label>
    </div>
    <div class="user-box">
      <input type="text" name="" required="" id="email">
        <label>Email</label>
    </div>
    <div class="user-box">
      <input type="text" name="" required="" id="username">
        <label>Username</label>
    </div>
    <div class="user-box" style="margin-bottom:50px">
      <input type="password" name="" required="" id="pass">
        <label>Password</label>
    </div>     
  <div class="submit">
    <button type="submit" onClick="login()">Submit</button>
    </div>
   </form>
    </div>
  </div>

 <!--Navigator JAVA SCRIPT file-link is HERE!-->
   <script src="functions-for-navigator.js"></script>