// MOBILE MENU

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

var $header_bar = document.querySelector('.header');
var $fake_header_bar = document.querySelector('.fake-header');

$fake_header_bar.style.height = getStyle($header_bar, 'height');
$fake_header_bar.style.marginTop = getStyle($header_bar, 'padding-top');

var $whatsapp_cta = document.querySelector('.header__cta-wpp');
var initial_position = getStyle($whatsapp_cta, 'bottom');

window.addEventListener('scroll', function(){
  // SCROLLING HEADER
  $header_bar.classList.toggle('header--sticky', window.scrollY > 34);
  
  // WHATSAPP ICON CHANGE POSITION AT END OF SCROLL
  if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight - 30) {
      $whatsapp_cta.style.bottom = 'auto';
      $whatsapp_cta.style.top = initial_position;
  } else {
      $whatsapp_cta.style.bottom = initial_position;
      $whatsapp_cta.style.top = 'auto';
  }
});

function getStyle(el, styleProp) {
    var value, defaultView = el.ownerDocument.defaultView;
    // W3C standard way:
    if (defaultView && defaultView.getComputedStyle) {
      // sanitize property name to css notation (hypen separated words eg. font-Size)
      styleProp = styleProp.replace(/([A-Z])/g, "-$1").toLowerCase();
      return defaultView.getComputedStyle(el, null).getPropertyValue(styleProp);
    } else if (el.currentStyle) { // IE
      // sanitize property name to camelCase
      styleProp = styleProp.replace(/\-(\w)/g, function(str, letter) {
        return letter.toUpperCase();
      });
      value = el.currentStyle[styleProp];
      // convert other units to pixels on IE
      if (/^\d+(em|pt|%|ex)?$/i.test(value)) { 
        return (function(value) {
          var oldLeft = el.style.left, oldRsLeft = el.runtimeStyle.left;
          el.runtimeStyle.left = el.currentStyle.left;
          el.style.left = value || 0;
          value = el.style.pixelLeft + "px";
          el.style.left = oldLeft;
          el.runtimeStyle.left = oldRsLeft;
          return value;
        })(value);
      }
      return value;
    }
  }