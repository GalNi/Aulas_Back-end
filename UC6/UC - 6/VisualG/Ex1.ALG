Algoritmo "Exercicio - 1"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 18/10/2022
Var
// Seção de Declarações das variáveis 
nome_aluno: caracter
disci: caracter
nota_1: inteiro
nota_2: inteiro
nota_3: inteiro
nota_4: inteiro
media: real
Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
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
se media >= 7 então
 Escreva(nome_aluno," parabéns você foi aprovado na ",disci,":)")
 Escreval("Nome do aluno: ",nome_aluno)
 Escreval("Nome disciplina: ",disci)
 Escreval("Nota da prova do 1ºBimestre: ",nota_1)
 Escreval("Nota da prova do 2ºBimestre: ",nota_2)
 Escreval("Nota da prova do 3ºBimestre: ",nota_3)
 Escreval("Nota da prova do 4ºBimestre: ",nota_4)
 Escreval("Média do aluno na disciplina: ",media)

senao
 Escreva(nome_aluno+" você não foi aprovado na "+disci+":(")
 Escreval("Nome do aluno: ",nome_aluno)
 Escreval("Nome disciplina: ",disci)
 Escreval("Nota da prova do 1ºBimestre: ",nota_1)
 Escreval("Nota da prova do 2ºBimestre: ",nota_2)
 Escreval("Nota da prova do 3ºBimestre: ",nota_3)
 Escreval("Nota da prova do 4ºBimestre: ",nota_4)
 Escreval("Média do aluno na disciplina: ",media)
 fimse

Fimalgoritmo