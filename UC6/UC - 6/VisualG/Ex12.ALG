Algoritmo "Exerc�cio 12"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi 
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 25/10/2022
Var
// Se��o de Declara��es das vari�veis 
nome: caracter
bimestre: inteiro
media: real
soma: inteiro
contador: inteiro
menu: inteiro

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
repita
Escreval("Menu:")
Escreval("1 - Cadastro de aluno")
Escreval("2 - C�lculo de m�dia")
Escreval("3 - Sair")
Escreval("Digite a op��o desejada: ")
Leia(menu)


Escolha menu
caso 1
Escreval("Cadastro de aluno")
Escreva("Digite o nome do aluno: ")
Leia(nome)

caso 2

contador<- 1
repita
Escreva("Digite a nota do Bim",contador,": ")
Leia(bimestre)
soma<- bimestre + soma
contador<- contador +1
ate contador >= 5
media<- soma/(contador-1)
Escreval("Sua m�dia � de: ",media)
Escreval("")
se media>=6 ent�o
Escreval("Sua m�dia atingiu ",media," ent�o voc� est� aprovado")
senao
se (4 < media) e (media < 6) ent�o
Escreval("Sua m�dia atingiu ",media," ent�o voc� est� de recupera��o")
senao
Escreval("Sua m�dia atingiu ",media," ent�o voc� est� reprovado")
fimse
fimse

caso 3
Escreval("Tchau! :)")
fimescolha
ate menu = 3

Fimalgoritmo