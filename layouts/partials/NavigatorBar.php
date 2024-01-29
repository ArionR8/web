<?php
  session_start();
  ini_set('session.gc_maxlifetime', 3600); // Set the session timeout to 1 hour

  $assets = '/web/assets'; 
?>

<div class="nav-pc" id="navigator">
  <div class="flex-nav-container">
    <div style="flex:100%"><a  href="Home-page.php" target="_self"><img src="<?= $assets ; ?>/images-home-library/weblogo.PNG" style="height:100px;"></a></div> 
    <div><a href="MySpace">My Space</a></div> 
    <div class="nav-dropdown" style="width:120px; padding-bottom:12px;"><a href="javascript:void(0)" class="nav-dropbtn" href="#discovery">Discover</a>
      <div class="nav-dropdown-content">
        <a href="/web/layouts/pages/Library.php" target="_self">Books</a>
        <a href="/web/layouts/pages/Nutrition.php" target="_self">Nutritions</a>
        <a href="#">Trainers</a>
      </div>
    </div>

    <div style="margin-right:10%;"><a href="#trainer">Trainers</a></div>
    <div><a onclick="createProfile()" style="width:auto;"><img src="<?= $assets ; ?>/images-home-library/profile.png" style="height:25px;"></a></div>   
  </div>
  </div>    
   <!--Navigator-for-mobile-->
  <div class="nav-mobile" id="navigator">
    <div class="flex-nav-container-mobile">
      <button onclick="menuDropdown()" class="menu-dropbtn" href="#discovery">Menu</button>    
            <div id="menu-dropdown-content-id" class="menu-dropdown-content">
              <a href="MySpace">My Space</a>
              <a href="#trainer">Trainers</a>
              <a href="/web/layouts/pages/Nutrition.php" target="_self">Nutritions</a>
              <a href="/web/layouts/pages/Library.php" target="_self">Books</a>
            </div>
            <div id="drop-dropdown-background" class="drop-dropdown-background"></div>
      <div style="margin:0px 25% 0px 25%;"><a href="Home-page.php" target="_self"><img src="<?= $assets ; ?>/images-home-library/weblogo.PNG" class="websode-logo"></a></div> 
      <div style="margin-top:41px;"><a onclick="createProfile()" style="width:auto;"><img src="<?= $assets ; ?>/images-home-library/profile.png" style="height:22px;padding-top:7px;padding-left:5px"></a></div>   
    </div>
    </div>
   <!--Navigator-background--><div class="navigator-background"></div>
   
   <div id="create-profile" class="modal">
    <div class="login-background">
      <div class="modal-content animate" action="/action_page.php" method="post" style="width:100%;margin:5px 5px 5px 5px;">
      <div><img src="<?= $assets ; ?>/images-home-library/weblogo-removebg-preview.png" class="creatform-logo"></div>

      <?php if(isset($_SESSION['username'])){ ?>
        <div style="margin-top:50px;margin-bottom:15px">
          <form class="modal-content animate" action="/web/layouts/pages/auth/logout.php" method="post" style="width:100%;margin:5px 5px 5px 5px;">
            <button type="submit">Log out</button>
          </form>
        </div>
      <?php }else{ ?>
        <div style="margin-top:50px;margin-bottom:15px">
          <button onclick="logIn()" type="buton" style="padding: 10px 75px 10px 75px;">Log in</button>
        </div>
        <div style="margin-bottom:50px;">
          <button onclick="singUp()" type="buton">Sign up</button>
        </div>
      <?php } ?>

      <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){ ?>
        <div style="margin-bottom:50px;">
          <a href="admin/Admin-page.php">Admin Dashboard</a>
        </div>
      <?php } ?>
      
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
     <form class="modal-content animate" action="/web/layouts/pages/auth/login.php" method="post" style="width:100%;margin:5px 5px 5px 5px;">
      <span onclick="document.getElementById('Log-in-forum').style.display='none'" class="close" title="Close Modal">&times;</span>
      <div><img src="<?= $assets ; ?>/images-home-library/weblogo-removebg-preview.png" class="loginform-logo"></div>
      <h2 style="margin: 0 0 50px 0;">Login</h2>
   
     <div class="user-box">
       <input type="text" name="username" required="" id="username">
         <label>Username</label>
     </div>
     <div class="user-box" style="margin-bottom:110px;">
       <input type="password" name="password" required="" id="pass">
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
    <form class="modal-content animate" action="/web/layouts/pages/auth/singup.php" method="post" style="width:100%;margin:5px 5px 5px 5px;">
     <span onclick="document.getElementById('Sing-up-forum').style.display='none'" class="close" title="Close Modal">&times;</span>
     <div><img src="<?= $assets ; ?>/images-home-library/weblogo-removebg-preview.png" class="loginform-logo"></div>
     <h2>Login</h2>
  
     <div class="user-box">
      <input type="text" name="fullname" required="" id="username">
        <label>Full name</label>
    </div>
    <div class="user-box">
      <input type="text" name="email" required="" id="email">
        <label>Email</label>
    </div>
    <div class="user-box">
      <input type="text" name="username" required="" id="username">
        <label>Username</label>
    </div>
    <div class="user-box" style="margin-bottom:50px">
      <input type="password" name="password" required="" id="pass">
        <label>Password</label>
    </div>     
  <div class="submit">
    <button type="submit">Submit</button>
    </div>
   </form>
    </div>
  </div>

 <!--Navigator JAVA SCRIPT file-link is HERE!-->
   <script   src="<?= $assets ; ?>/javascript/functions-for-navigator.js?v=<?php echo time(); ?>"></script>