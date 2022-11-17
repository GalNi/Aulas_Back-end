Algoritmo "Exercício 15"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 26/10/2022
Var
// Seção de Declarações das variáveis 
aluno: caracter
nota: inteiro
bim: vetor [1..4] de real
media: real
menu: inteiro
disc: caracter
conta: real

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
repita
Escreval("Menu:")
Escreval("1 - Cadastro de aluno e matéria")
Escreval("2 - Adicionar notas bimestrais")
Escreval("3 - Visualizar média")
Escreval("4 - Sair")
Escreva("Digite a opção desejada: ")
Leia(menu)

Escolha menu

caso 1

Escreva("Nome do aluno: ")
Leia(aluno)
Escreva("Escreva as disciplinas: ")
Leia(disc)

caso 2

para nota de 1 ate 4 faça
Escreva("Coloque a nota do ",nota,"º Bimestre: ")
Leia(bim[nota])
conta <- bim[nota] + conta
fimpara

caso 3

media<- conta/4

se media>=6 então
Escreval("Sua média atingiu ",media," então você está aprovado")
senao
se (4 < media) e (media < 6) então
Escreval("Sua média atingiu ",media," então você está de recuperação")
senao
Escreval("Sua média atingiu ",media," então você está reprovado")
fimse
fimse


caso 4

Escreval("Tchau! :)")

fimescolha

ate menu = 4
fimrepita


Fimalgoritmo