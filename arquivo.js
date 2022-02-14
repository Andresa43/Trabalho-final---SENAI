function Teste() {
    window.alert('Testado');
}

// carrosel

window.load = ResetarCont();
var cont;

function ResetarCont() {
    cont = 1;
}

function Carrossel() {
    if (cont == 1) {
        cont = 2;
    } else {
        cont = 1
    }
    document.getElementById("carrossel").style.backgroundImage = "url('img/" + cont + ".png ')";
}