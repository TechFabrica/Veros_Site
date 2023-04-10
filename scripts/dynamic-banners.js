var $banners = document.querySelectorAll('.hero__banner');
var $banners_desktop = document.querySelectorAll('.hero__banner--desktop');
var $banner_wrapper = document.querySelector('.hero__right-wrapper');
var banner_index = 0;
var banner_speed = 3000;

$banner_wrapper.classList.add('hero__right-wrapper--visible');
setTimeout(function(){
    $banner_wrapper.classList.remove('hero__right-wrapper--visible');
}, banner_speed-500);

var change_banners = setInterval(function(){
    $banners[banner_index].classList.add('hero__banner--hidden');
    $banners_desktop[banner_index].classList.add('hero__banner--desktop-hidden');
    
    if(banner_index == $banners.length-1){
        banner_index = 0;
    } else {
        banner_index++;
    }
    
    $banners[banner_index].classList.remove('hero__banner--hidden');
    $banners_desktop[banner_index].classList.remove('hero__banner--desktop-hidden');
    
    $banner_wrapper.classList.add('hero__right-wrapper--visible');

    setTimeout(function(){
        $banner_wrapper.classList.remove('hero__right-wrapper--visible');
    }, banner_speed-500);
}, banner_speed);