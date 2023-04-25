var $texts = document.querySelectorAll('.estrutura__content');
var big_text = [];
var small_text = [];

var char_limit = 100;

for( var i = 0; i < $texts.length; i++ ){
    big_text[i] = $texts[i].innerHTML;
    small_text[i] = removeExcess($texts[i].textContent);
    
    $texts[i].innerHTML = small_text[i];
}

function removeExcess(text){
    
    if( text.length <= char_limit){
        return text;
    } else if( text.length > char_limit){
        return text.substring(0, char_limit) + '... <a class="estrutura__ver-mais" style="display: inline-block; color: #000; text-decoration: underline; cursor: pointer;">Ver mais.</a>';
    }
}

var $ver_mais = document.querySelectorAll('.estrutura__ver-mais');

var ver_mais_options = [];

linkVerMaisText();
addVerMaisListeners(ver_mais_options);

function linkVerMaisText(){
    for (var i = 0; i < $ver_mais.length; i++){
        option = {
            ver_mais: $ver_mais[i],
            text: $texts[i]
        }
        
        ver_mais_options.push(option);
    }
}

function addVerMaisListeners(options){
    for (var i = 0; i < options.length; i++){

        options[i].ver_mais.index = i;

        options[i].ver_mais.addEventListener('click', function(e){
            showText(e.target.index);
        });
    }
}

function showText(index){
    $texts[index].innerHTML = big_text[index];
}