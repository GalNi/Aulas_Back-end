Algoritmo "Aula 8 - Vetores"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 26/10/2022
Var
// Seção de Declarações das variáveis 
posicao: inteiro
nome: vetor [1..3] de caracter
preco: vetor [1..3] de real
total_compra: real
qtd: vetor [1..3] de inteiro
pag_cartao: inteiro
menu: inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
para posicao de 1 ate 3 faça
Escreva("NOME PRODUTO: ")
Leia(nome[posicao])
Escreva("QUANTIDADE: ")
Leia(qtd[posicao])
Escreva("VALOR: R$")
Leia(preco[posicao])
fimpara
Escreval("---------------------- Extrato ----------------------")
Escreval("")

para posicao de 1 ate 3 faça
total_compra<- preco[posicao]*qtd[posicao] + total_compra
Escreval(nome[posicao],"---------","x",qtd[posicao],"---------","R$ ",(preco[posicao]*qtd[posicao]))
fimpara

Escreval("TOTAL: R$",total_compra)


Escreval("---------------------- Forma de pagamento ----------------------")
Escreval("1 - Á vista")
Escreval("2 - Cartão Débito")
Escreval("3 - Cartão crédito até 3x sem juros")
Escreval("Digite a opção desejada: ")
Leia(menu)


Escolha menu
caso 1

Escreval("TOTAL A PAGAR Á VISTA: R$",total_compra)

caso 2

Escreval("TOTAL A PAGAR DÉBITO: R$",total_compra)

caso 3
Escreval("------------------ Pagamento em até 3x sem juros  ------------------")
Escreval("1 - 1x - ",total_compra)
Escreval("2 - 2x - ",(total_compra/2))
Escreval("3 - 3x - ",(total_compra/3))
Escreval("Digite a opção desejada: ")
Leia(pag_cartao)

Leia(pag)

Escolha pag_cartao

caso 1

Escreval("TOTAL A PAGAR EM 1X NO CARTÃO: R$",total_compra)
Escreval("------------------ Fim da compra  ------------------")

caso 2

Escreval("TOTAL A PAGAR EM 2X NO CARTÃO: R$",total_compra/2)
Escreval("------------------ Fim da compra  ------------------")

caso 3

Escreval("TOTAL A PAGAR EM 3X NO CARTÃO: R$",total_compra/3)
Escreval("------------------ Fim da compra  ------------------")
fimescolha
fimescolha

Fimalgoritmo