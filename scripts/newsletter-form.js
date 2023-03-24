var $form = document.querySelector('.newsletter__form');
var $inputs = document.querySelectorAll('.newsletter__form .form__field-input');
var $error_msg = document.querySelector('.newsletter__form .form__error-msg');
var $submit = document.querySelector('.newsletter__form .form__submit');

var server_url = 'https://fabrica.com.br/.....'; // add_data

var fields = combineFields($inputs);
var emailIndex = 1;

buttonFieldResponse($submit, fields);

$submit.addEventListener('click', function(e){
    e.preventDefault();

    var raw_data = getFieldValues(fields);

    if(raw_data.length >= fields.length){
        sendData(parseJSON(raw_data), server_url);
    } else {
        raw_data = [];
    }
});

function addMultipleListeners(elementList, event, fn){
    for( var i = 0; i < elementList.length; i++ ){
        elementList[i].addEventListener(event, fn);
    }
}

function buttonFieldResponse(btn, fields){
    
    btn.disabled = true;

    addMultipleListeners(fields, 'input', function(){
        toggleButtonStatus(btn, checkEmptyFields(fields));
    });
}

function checkEmptyFields(fields){
    var emptyInputs = fields.length;
    
    for( var i = 0; i < fields.length; i++ ){
        if(fields[i].value != ''){
            emptyInputs--;
        }
    }
    
    return emptyInputs;
}

function combineFields(inputs){
    var combined = [];
    for( var i = 0; i < inputs.length; i++ ){
        combined.push(inputs[i]);
    }
    return combined;
}

function getFieldValues(fields){
    debugger
    var raw_data = [];
    $error_msg.innerHTML = '';
    
    if( fields[phoneIndex].value.length >= 13 && validateEmail(fields[emailIndex].value)){
        for ( var i=0; i < fields.length; i++ ){
            raw_data.push(fields[i].value);
            fields[i].style.borderColor = '#0000001A' // !change_color
        }

        return raw_data;
    } else {
        $error_msg.style.color = 'red';

        if ( !(validateEmail(fields[emailIndex].value))){
            fields[emailIndex].style.borderColor = 'red'
            $error_msg.innerHTML += '<p>Favor insira um email válido, com “@” e “.”</p>'
        } else {
            fields[emailIndex].style.borderColor = '#000' // !change_color
        }

        return;
    }
}

function parseJSON(raw_data){
    raw_data = JSON.stringify(raw_data);
    raw_data = JSON.parse(raw_data);

    var parsed_data = {
        name: raw_data[0],
        email: raw_data[1]
    }
    
    return parsed_data;
}

async function sendData(data, url){
    debugger
    var xhttp = new XMLHttpRequest();
    
    xhttp.onreadystatechange = function(){
        if( xhttp.readyState == 4){
            if(xhttp.status == 200){
                updateFormStatus(true);
            } else {
                updateFormStatus(false);
            }
        }
    }
    
    xhttp.open("POST", url);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send(JSON.stringify(data));
}

function toggleButtonStatus(btn, emptyFields){
    if(emptyFields == 0){
        btn.disabled = false;
    } else {
        btn.disabled = true;
    }
}

function validateEmail(email) {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function updateFormStatus(success){

    if(success == true){
        // front-end para "envio realizado com sucesso"
        console.log('dados enviados');
    } else {
        // front-end para "falha no envio de dados"
        console.log('envio de dados falhou');
    }
}