Algoritmo "Exerc�cio 10"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi 
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 25/10/2022
Var
// Se��o de Declara��es das vari�veis 
nome: caracter
disciplina: caracter
bimestre: inteiro
media: real
soma: inteiro
contador: inteiro

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 

Escreva("Nome do aluno: ")
Leia(nome)

Escreva("Disciplina: ")
Leia(disciplina)

contador<- 1
repita
Escreva("Digite a nota do Bim",contador,": ")
Leia(bimestre)
soma<- bimestre + soma
contador<- contador +1
ate contador >= 5
media<- soma/(contador-1)
Escreva("Sua m�dia � de: ",media)


Fimalgoritmo