Algoritmo "Mercadinho"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi 
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 21/10/2022
Var
// Se��o de Declara��es das vari�veis 
cliente: caracter
produto: inteiro
quantidade: real
preco: real
soma: real
pag: caracter
valor: real

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 

Escreva("Digite seu nome: ")
Leia(cliente)

Para produto de 1 at� 5 fa�a
Escreva("Valor do produto ",produto,": R$")
Leia(preco)
Escreva("Quantidade do produto ",produto,": ")
Leia(quantidade)

soma<- ((preco*quantidade) + soma))

fimpara

Escreval("Prestigiado cliente ",cliente," obrigado pela prefer�ncia!")
Escreval("O valor de sua compra �: R$", soma)
Escreval("Como vai ser o pagamento? 1 - � vista 10% de desconto 2 - Cart�o 2x sem juros ")
Leia(pag)

se (pag = "1") entao
valor <- (soma*0.9)
Escreva("O total a ser pago � de: R$", valor)

senao
Escreva("O total a ser pago em cada parcela � de: R$", (valor/2))

fimse

Fimalgoritmo