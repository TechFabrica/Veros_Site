var $pet_types = document.querySelectorAll('.hero__pet-type');
var $slot = document.querySelector('.hero__pet-type-js-slot');
var pet_type_index = 0;
var pet_type_speed = 3000;

$slot.classList.add('hero__pet-type-js-slot--visible');
$slot.innerHTML = "&nbsp;" + $pet_types[pet_type_index].textContent + "</span>.";
pet_type_index++;
setTimeout(function(){
    $slot.classList.remove('hero__pet-type-js-slot--visible');
}, pet_type_speed-500);

var change_pet_types = setInterval(function(){
    $slot.classList.add('hero__pet-type-js-slot--visible');
    
    $slot.innerHTML = "&nbsp;" + $pet_types[pet_type_index].textContent + "</span>.";
    
    if(pet_type_index == $pet_types.length-1){
        pet_type_index = 0;
    } else {
        pet_type_index++;
    }
    
    setTimeout(function(){
        $slot.classList.remove('hero__pet-type-js-slot--visible');
    }, pet_type_speed-500);
}, pet_type_speed);