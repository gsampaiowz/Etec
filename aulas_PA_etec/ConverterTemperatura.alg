Algoritmo "ConverterTemperatura"
// Disciplina  : [Linguagem e L�gica de Programa��o]
// Professor   : Anderson
// Descri��o   : Converte uma temperatura de fahrenheit para celsius.
// Autor(a)    : Gabriel Sampaio
// Data atual  : 13/03/2021
Var
// Se��o de Declara��es das vari�veis 
temp_celsius, temp_fahre: real

Inicio
//Entrada
escreval("---------------------------------------------------")
escreva("   Digite a temperatura em graus fahrenheit: ")
leia(temp_fahre)
limpatela

//Processamento
temp_celsius <- (5 * (temp_fahre-32) / 9)

//Saida
escreval("-----------------------------------------------------------")
escreval("   A temperatura em graus celsius �: ",temp_celsius)
escreval("-----------------------------------------------------------")

Fimalgoritmo