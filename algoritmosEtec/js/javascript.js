//EXEMPLO DE FUNÇÕES (4 TIPOS)

//1 - FUNÇÃO SEM PARÂMETROS E SEM RETORNO

function teste1(){
    console.log('Bom dia');
}

//2 - FUNÇÃO SEM PARÂMETROS E CON RETORNO

function teste2(){
    var frase = 'Boa noite';
    return frase;
}

var resultado = teste2();

//3 - FUNÇÃO COM PARÂMETROS E SEM RETORNO

function muda_texto(resultado){
    document.getElementById("retorno_teste2").innerHTML = resultado;
}

//4 - FUNÇÃO COM PARÂMETROS E COM RETORNO

var num1 = 10;
var num2 = 20;

function soma(num1,num2){
    var soma = num1 + num2;
    return soma;
}

var total = soma(num1,num2)
console.log('A soma é: ' + total)