Algoritmo "Exercício 12"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 25/10/2022
Var
// Seção de Declarações das variáveis 
nome: caracter
bimestre: inteiro
media: real
soma: inteiro
contador: inteiro
menu: inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
repita
Escreval("Menu:")
Escreval("1 - Cadastro de aluno")
Escreval("2 - Cálculo de média")
Escreval("3 - Sair")
Escreval("Digite a opção desejada: ")
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
Escreval("Sua média é de: ",media)
Escreval("")
se media>=6 então
Escreval("Sua média atingiu ",media," então você está aprovado")
senao
se (4 < media) e (media < 6) então
Escreval("Sua média atingiu ",media," então você está de recuperação")
senao
Escreval("Sua média atingiu ",media," então você está reprovado")
fimse
fimse

caso 3
Escreval("Tchau! :)")
fimescolha
ate menu = 3

Fimalgoritmo