Algoritmo "ConverterD�lar"
// Disciplina  : [Linguagem e L�gica de Programa��o]
// Professor   : Anderson
// Descri��o   : Converter um valor de reais para d�lar.
// Autor(a)    : Gabriel Oliveira Sampaio
// Data atual  : 13/03/2021
Var
// Se��o de Declara��es das vari�veis 
valor_real, valor_dolar, cotacao: real

Inicio
//Entrada
escreval("----------------------------------------------")
escreva("     Digite o valor em reais do produto: ")
leia(valor_real)
escreval("----------------------------------------------")
escreva("     Digite a cota��o do d�lar atualmente: ")
leia(cotacao)
limpatela

//Processamento
valor_dolar <- valor_real/cotacao

//Sa�da
escreval("----------------------------------------------")
escreval("     O valor em d�lares do produto �: ",valor_dolar)
escreval("----------------------------------------------")

Fimalgoritmo