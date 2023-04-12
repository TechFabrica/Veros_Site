new Glide('.glide',{
    type: 'carousel',
    gap: 24,
    perView: 3,
    breakpoints: {
        1023: {
          perView: 1
        }
      }
}).mount();