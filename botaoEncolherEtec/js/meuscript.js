var conteudo = document.getElementById('conteudo');
var botao = document.getElementById('mostre-mais');

// criar evento do click do botão utilizando uma função anônima
botao.onclick = function(){

    if(conteudo.className == "open"){
        //encurtar caixa
        conteudo.className = ""; //muda a classe da div para " "
        botao.innerHTML = "Mostrar Mais"; //muda o texto do botão para Mostrar Mais
    }

    else{
        //expandir caixa
        conteudo.className = "open"; //muda a classe da div conteudo para open
        botao.innerHTML = "Mostrar Menos"; //muda o texto do botão para Mostrar Menos
    }
};