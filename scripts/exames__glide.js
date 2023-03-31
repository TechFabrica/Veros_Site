var $sliders = document.querySelectorAll('.glide');

for (var i = 0; i < $sliders.length; i++) {
  new Glide($sliders[i],{
    type: 'carousel',
    perView: 3,
    focusAt: 'center',
    breakpoints: {
        1023: {
          perView: 1
        }
      }
  }).mount();
}