Algoritmo "Exercício - 3"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 21/10/2022
Var
// Seção de Declarações das variáveis 
nome: caracter
contador: inteiro
bim: real
soma: real
media: real

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
Escreva("Digite seu nome: ")
Leia(nome)

Para contador de 1 até 4 faça
Escreva("Digite a nota do BIM ", contador,": ")
Leia(bim)

soma<- (bim + soma)
media<- (soma / contador)

fimpara

Escreval("Aluno(a): ",nome)
Escreval("Sua média é: ", media)

se (media > 6) entao
Escreval("Aprovado")

senao
se (media <6) e (media > 4) entao
Escreval("Recuperação")

senao
Escreval("Reprovado")

fimse
fimse


Fimalgoritmo