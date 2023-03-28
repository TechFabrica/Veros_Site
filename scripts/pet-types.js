var $pet_types = document.querySelectorAll('.hero__pet-type');
var $slot = document.querySelector('.hero__pet-type-js-slot');
var index = 0;
var speed = 3000;

$slot.classList.add('hero__pet-type-js-slot--visible');
$slot.innerHTML = "&nbsp;" + $pet_types[index].textContent + "</span>.";
index++;
setTimeout(function(){
    $slot.classList.remove('hero__pet-type-js-slot--visible');
}, speed-500);

var change_pet_types = setInterval(function(){
    $slot.classList.add('hero__pet-type-js-slot--visible');
    
    $slot.innerHTML = "&nbsp;" + $pet_types[index].textContent + "</span>.";
    
    if(index == $pet_types.length-1){
        index = 0;
    } else {
        index++;
    }
    
    setTimeout(function(){
        $slot.classList.remove('hero__pet-type-js-slot--visible');
    }, speed-500);
}, speed);