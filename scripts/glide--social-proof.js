new Glide('.glide',{
    type: 'carousel',
    perView: 3,
    focusAt: 'center',
    breakpoints: {
        1023: {
          perView: 1
        }
      }
}).mount();