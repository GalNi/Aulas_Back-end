Algoritmo "Exerc�cio 15"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi 
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 26/10/2022
Var
// Se��o de Declara��es das vari�veis 
aluno: caracter
nota: inteiro
bim: vetor [1..4] de real
media: real
menu: inteiro
disc: caracter
conta: real

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
repita
Escreval("Menu:")
Escreval("1 - Cadastro de aluno e mat�ria")
Escreval("2 - Adicionar notas bimestrais")
Escreval("3 - Visualizar m�dia")
Escreval("4 - Sair")
Escreva("Digite a op��o desejada: ")
Leia(menu)

Escolha menu

caso 1

Escreva("Nome do aluno: ")
Leia(aluno)
Escreva("Escreva as disciplinas: ")
Leia(disc)

caso 2

para nota de 1 ate 4 fa�a
Escreva("Coloque a nota do ",nota,"� Bimestre: ")
Leia(bim[nota])
conta <- bim[nota] + conta
fimpara

caso 3

media<- conta/4

se media>=6 ent�o
Escreval("Sua m�dia atingiu ",media," ent�o voc� est� aprovado")
senao
se (4 < media) e (media < 6) ent�o
Escreval("Sua m�dia atingiu ",media," ent�o voc� est� de recupera��o")
senao
Escreval("Sua m�dia atingiu ",media," ent�o voc� est� reprovado")
fimse
fimse


caso 4

Escreval("Tchau! :)")

fimescolha

ate menu = 4
fimrepita


Fimalgoritmo