Algoritmo "Mercadinho"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 21/10/2022
Var
// Seção de Declarações das variáveis 
cliente: caracter
produto: inteiro
quantidade: real
preco: real
soma: real
pag: caracter
valor: real

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 

Escreva("Digite seu nome: ")
Leia(cliente)

Para produto de 1 até 5 faça
Escreva("Valor do produto ",produto,": R$")
Leia(preco)
Escreva("Quantidade do produto ",produto,": ")
Leia(quantidade)

soma<- ((preco*quantidade) + soma))

fimpara

Escreval("Prestigiado cliente ",cliente," obrigado pela preferência!")
Escreval("O valor de sua compra é: R$", soma)
Escreval("Como vai ser o pagamento? 1 - Á vista 10% de desconto 2 - Cartão 2x sem juros ")
Leia(pag)

se (pag = "1") entao
valor <- (soma*0.9)
Escreva("O total a ser pago é de: R$", valor)

senao
Escreva("O total a ser pago em cada parcela é de: R$", (valor/2))

fimse

Fimalgoritmo