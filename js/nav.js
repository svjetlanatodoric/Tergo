var burgerMenu = document.getElementById('burger-menu');

var overlay = document.getElementById('menu');

burgerMenu.addEventListener('click', function() {
  this.classList.toggle("close");
  overlay.classList.toggle("menu-overlay");
});
overlay.addEventListener('click', () => {
    if(burgerMenu.classList.contains("close") && overlay.classList.contains("menu-overlay") ){
         burgerMenu.classList.remove("close");
         overlay.classList.remove("menu-overlay");

    }
});