
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