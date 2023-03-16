var $selectors = document.querySelectorAll('.tabnav__selector');
var $panes = document.querySelectorAll('.tabnav__pane');

var options = [];

linkSelectorsPanes();
updatePanes(0);
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
    debugger
    for (var i = 0; i < options.length; i++){

        options[i].selector.index = i;

        options[i].selector.addEventListener('click', function(e){
            debugger
            updatePanes(e.target.index);
        });
    }
}

function updatePanes(except){
    for (var i = 0; i < options.length; i++){
        if ( i != except){
            options[i].selector.classList.add('tabnav__selector--inactive');
            options[i].pane.classList.add('tabnav__pane--hidden');
        } else {
            options[i].selector.classList.remove('tabnav__selector--inactive');
            options[i].pane.classList.remove('tabnav__pane--hidden');
        }
    }
}