//dropdown-menu-for-mobile-nav-START
function menuDropdown() {
    var dropdownContent = document.getElementById("menu-dropdown-content-id");
    var background = document.getElementById("drop-dropdown-background");
    
    dropdownContent.style.display = 'block';
    background.style.display = 'block';
  }


  document.getElementById("drop-dropdown-background").addEventListener("click", function() {
    var dropdownContent = document.getElementById("menu-dropdown-content-id");
    var background = document.getElementById("drop-dropdown-background");
    
    dropdownContent.style.display = 'none';
    background.style.display = 'none';
  });

  
//Login-display-form-START
    function createProfile() {
        var block = document.getElementById('create-profile');
        block.style.display = 'block';
        
      
        var additionalBlock = document.getElementById("Log-in-forum");
        additionalBlock.style.display = 'none';
    }

    
function logIn() {
    var additionalBlock = document.getElementById('Log-in-forum');
    additionalBlock.style.display = 'block';

    var block = document.getElementById('create-profile');
    block.style.display = 'none';
}

    function singUp(){
    var block=document.getElementById("Sing-up-forum");
    block.style.display = 'block';

    var block = document.getElementById('create-profile');
    block.style.display = 'none';
}   
function AdminLogin() {
    window.location.href = '/web/layouts/pages/admin/Admin-page.php';
}