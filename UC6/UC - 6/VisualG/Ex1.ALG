Algoritmo "Exercicio - 1"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi 
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 18/10/2022
Var
// Se��o de Declara��es das vari�veis 
nome_aluno: caracter
disci: caracter
nota_1: inteiro
nota_2: inteiro
nota_3: inteiro
nota_4: inteiro
media: real
Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
Escreva("Digite seu nome: ")
Leia(nome_aluno)
Escreva("Digite a disciplina: ")
Leia(disci)
Escreva("Digite a nota da prova 1: ")
Leia(nota_1)
Escreva("Digite a nota da prova 2: ")
Leia(nota_2)
Escreva("Digite a nota da prova 3: ")
Leia(nota_3)
Escreva("Digite a nota da prova 4: ")
Leia(nota_4)
media<- (nota_1+nota_2+nota_3+nota_4) / 4
se media >= 7 ent�o
 Escreva(nome_aluno," parab�ns voc� foi aprovado na ",disci,":)")
 Escreval("Nome do aluno: ",nome_aluno)
 Escreval("Nome disciplina: ",disci)
 Escreval("Nota da prova do 1�Bimestre: ",nota_1)
 Escreval("Nota da prova do 2�Bimestre: ",nota_2)
 Escreval("Nota da prova do 3�Bimestre: ",nota_3)
 Escreval("Nota da prova do 4�Bimestre: ",nota_4)
 Escreval("M�dia do aluno na disciplina: ",media)

senao
 Escreva(nome_aluno+" voc� n�o foi aprovado na "+disci+":(")
 Escreval("Nome do aluno: ",nome_aluno)
 Escreval("Nome disciplina: ",disci)
 Escreval("Nota da prova do 1�Bimestre: ",nota_1)
 Escreval("Nota da prova do 2�Bimestre: ",nota_2)
 Escreval("Nota da prova do 3�Bimestre: ",nota_3)
 Escreval("Nota da prova do 4�Bimestre: ",nota_4)
 Escreval("M�dia do aluno na disciplina: ",media)
 fimse

Fimalgoritmo