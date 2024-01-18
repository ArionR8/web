
// sign scrolling effect
document.addEventListener("scroll", function () {
    var divs = document.querySelectorAll('div[id^="div"]');
    var navLinks = document.querySelectorAll('.sign a');

    var currentDiv = '';
    divs.forEach(function (div) {
        var divTop = div.offsetTop - 70;
        var divBottom = divTop + div.clientHeight;
        if (window.scrollY >= divTop && window.scrollY < divBottom) {
            currentDiv = div.id;
        }
    });

    navLinks.forEach(function (link) {
        link.classList.remove('active');
        if (link.getAttribute('href').slice(1) === currentDiv) {
            link.classList.add('active');
        }
    });
});