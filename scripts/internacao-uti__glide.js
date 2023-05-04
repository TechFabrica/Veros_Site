document.querySelector('.glide__track').style.width = document.querySelector('.main__title').offsetWidth + 'px';

new Glide('.glide',{
    type: 'carousel',
    perView: 1,
    focusAt: 'center',
    gap: 24
}).mount();