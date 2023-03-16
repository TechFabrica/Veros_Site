var $selectors = document.querySelectorAll('.tabnav__selector');
var $panes = document.querySelectorAll('.tabnav__pane');

var options = [];

linkSelectorsPanes();
hidePanes(0);
addListeners(options);

function linkSelectorsPanes(){
    for (var i = 0; i < $panes.length; i++){
        option = {
            selector: $selectors[i],
            pane: $panes[i]
        }
    
        options.push(option);
    }
}

function addListeners(options){
    for (var i = 0; i < options.length; i++){
        window.addEventListener('click', function(){
            updatePanes(i);
        });
    }
}

function hidePanes(except){
    for (var i = 0; i < options.length; i++){
        if ( i != except){
            options[i].selector.classList.add('tabnav__selector--inactive');
            options[i].pane.classList.add('tabnav__pane--hidden');
        }
    }
}

function updatePanes(active){
    debugger
    options[active].selector.classList.remove('tabnav__selector--inactive');
    options[active].pane.classList.remove('tabnav__pane--hidden');

    hidePanes(active);
}