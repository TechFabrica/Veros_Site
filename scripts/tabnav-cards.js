var $pane = document.querySelector('.tabnav__card-pane');
var $selectors = document.querySelectorAll('.tabnav__selector');
var $cards = document.querySelectorAll('.tabnav__card');
var $cards_caes = document.querySelectorAll('.tabnav__pet-type--caes');
var $cards_gatos = document.querySelectorAll('.tabnav__pet-type--gatos');
var $cards_silvestres = document.querySelectorAll('.tabnav__pet-type--silvestres');

var selectors = [];

indexSelectors();
updateSelectors(0);
addListeners(selectors);

function indexSelectors(){
    for (var i = 0; i < $selectors.length; i++){
        var selector = {
            element: $selectors[i]
        }
        
        selectors.push(selector);
    }
}

function addListeners(selectors){
    for (var i = 0; i < selectors.length; i++){

        selectors[i].element.index = i;
        
        selectors[i].element.addEventListener('click', function(e){
            updateSelectors(e.target.index);
            updateCards(e.target.index);
        });
    }
}

function updateSelectors(except){
    for (var i = 0; i < $selectors.length; i++){
        if ( i != except){
            $selectors[i].classList.add('tabnav__selector--inactive');
        } else {
            $selectors[i].classList.remove('tabnav__selector--inactive');
        }
    }
}

function updateCards(index){
    $pane.classList.add('tabnav__card-pane--hidden');

    setTimeout(function(){
        if(index == 0){
            for (var i = 0; i < $cards.length; i++){
                $cards[i].classList.remove('tabnav__card--hidden');
            }
        }
        if(index == 1){
            for (var i = 0; i < $cards.length; i++){
                $cards[i].classList.add('tabnav__card--hidden');
            }
            for (var i = 0; i < $cards_caes.length; i++){
                $cards_caes[i].classList.remove('tabnav__card--hidden');
            }
        }
        if(index == 2){
            for (var i = 0; i < $cards.length; i++){
                $cards[i].classList.add('tabnav__card--hidden');
            }
            for (var i = 0; i < $cards_gatos.length; i++){
                $cards_gatos[i].classList.remove('tabnav__card--hidden');
            }
        }
        if(index == 3){
            for (var i = 0; i < $cards.length; i++){
                $cards[i].classList.add('tabnav__card--hidden');
            }
            for (var i = 0; i < $cards_silvestres.length; i++){
                $cards_silvestres[i].classList.remove('tabnav__card--hidden');
            }
        }
    }, 300);

    setTimeout(function(){
        $pane.classList.remove('tabnav__card-pane--hidden');
    }, 300);
}