Algoritmo "semnome"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi 
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 21/10/2022
Var
// Se��o de Declara��es das vari�veis 
nome: caracter
contador: inteiro
bim: real
soma: real
media: real

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
Escreva("Digite seu nome: ")
Leia(nome)

Para contador de 1 at� 4 fa�a
Escreva("Digite a nota do BIM ", contador,": ")
Leia(bim)

soma<- (bim + soma)
media<- (soma / contador)

fimpara

Escreval("Aluno(a): ",nome)
Escreval("Sua m�dia �: ", media)

se (media > 6) entao
Escreval("Aprovado")

senao
se (media <6) e (media > 4) entao
Escreval("Recupera��o")

senao
Escreval("Reprovado")

fimse
fimse


Fimalgoritmo