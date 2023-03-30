new Glide('.glide',{
    type: 'carousel',
    gap: 24,
    perView: 4,
    breakpoints: {
        1023: {
          perView: 1.5
        }
      }
}).mount();