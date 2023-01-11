var data = new Date();

var dia     = data.getDate();           
var mes     = data.getMonth();          
var ano4    = data.getFullYear();       
var hora    = data.getHours();          
var min     = data.getMinutes();        

var str_data = dia + '/' + (mes+1) + '/' + ano4;
var str_hora = hora + ':' + min;

document.querySelector(".data").innerText = str_data + ", " + str_hora;

var escrevendo = new Audio("/sons/ES_Scrapbook Open and Turn Pages 4 - SFX Producer.mp3");

function emitirSom() {
    escrevendo.play();
}

function feito() {
    alert('Diário Atualizado');
}
