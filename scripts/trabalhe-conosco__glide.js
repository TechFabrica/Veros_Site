new Glide('.main-glide',{
  type: 'carousel',
  gap: 24,
  perView: 3,
  breakpoints: {
      1023: {
        perView: 1
      }
    },
  classes: {
    swipeable: 'main-glide--swipeable',
    dragging: 'main-glide--dragging',
    direction: {
      ltr: 'main-glide--ltr',
      rtl: 'main-glide--rtl'
    },
    type: {
      slider: 'main-glide--slider',
      carousel: 'main-glide--carousel'
    },
    slide: {
      clone: 'main-glide__slide--clone',
      active: 'main-glide__slide--active'
    },
    arrow: {
      disabled: 'main-glide__arrow--disabled'
    },
    nav: {
      active: 'main-glide__bullet--active'
    }
  }
}).mount();