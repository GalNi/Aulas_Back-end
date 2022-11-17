Algoritmo "Exercício 10"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 25/10/2022
Var
// Seção de Declarações das variáveis 
nome: caracter
disciplina: caracter
bimestre: inteiro
media: real
soma: inteiro
contador: inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 

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
Escreva("Sua média é de: ",media)


Fimalgoritmo