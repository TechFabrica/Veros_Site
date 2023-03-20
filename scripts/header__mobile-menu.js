var isMobile = window.matchMedia("only screen and (max-width: 1023px)").matches;

if(isMobile){
    var $menu = document.querySelector('.header__nav');
    var $open_button = document.querySelector('.header__open-menu-button');
    
    $menu.classList.add('header__nav--hidden');
    
    $open_button.addEventListener('click', toggleMenuVisibility);
    
    function toggleMenuVisibility(){
        $menu.classList.toggle('header__nav--hidden');
    }
}
