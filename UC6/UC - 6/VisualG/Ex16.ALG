Algoritmo "Exercício 16"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 26/10/2022
Var
// Seção de Declarações das variáveis 
func: vetor [1..5] de caracter
cargo: vetor [1..5] de caracter
sal: vetor [1..5] de real
dt_ad: vetor [1..5] de caracter
menu: inteiro
mat: inteiro
n_sal:vetor [1..5] de real
dvt: vetor [1..5] de real
dva: vetor [1..5] de real
inss: vetor [1..5] de real
ir: vetor [1..5] de real


Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
Repita

Escreval("---- Cadastro de funcionários ----")
Escreval("")
Escreval("1 - Cadastro de funcionário")
Escreval("2 - Relatório de funcionários")
Escreval("3 - Sair")
Escreva("Digite a opção desejada: ")
Leia(menu)
Escreval("")

Escolha menu

caso 1

Escreval("---- Cadastro de funcionário ----")
Escreval("")
para mat de 1 até 5 faça
Escreva("Matrícula: ",mat," - Nome do funcionário: ")
Leia(func[mat])
Escreva("Cargo: ")
Leia(cargo[mat])
Escreva("Salário bruto: R$")
Leia(sal[mat])
Escreva("Data de admissão: ")
Leia(dt_ad[mat])
Escreval("")
Escreval("---- Cadastro Realizado ----")
Escreval("")
fimpara

caso 2

mat <- 1
Escreval("---- Relatório de funcionários ----")

para mat de 1 ate 5 faça
Escreval("Matrícula: ",mat)
Escreval("Nome do funcionário: ",func[mat])
Escreval("Cargo: ",cargo[mat])
Escreval("Salário bruto: R$",sal[mat])

se  (sal[mat] >= 1500) entao
n_sal[mat] <- sal[mat]*1.1
senao
n_sal[mat] <- (sal+50)
fimse

//---------------- VT e VA
dvt[mat] <- n_sal[mat]*0.06
dva[mat] <- n_sal[mat]*0.12
//---------------- INSS
se (n_sal[mat] > 3641.03) entao
inss[mat] <- (n_sal[mat]*0.14)
senao
se   (n_sal[mat] >= 2427.36) e (n_sal[mat] < 2427.35) entao
inss[mat] <- (n_sal[mat]*0.09)
senao
inss[mat] <- n_sal[mat]*0.12
fimse
fimse
//---------------- IR
se n_sal[mat] <= 1903.98 entao
ir[mat] <- (0)
senao
se   (n_sal[mat] > 1903.98) e (n_sal[mat] < 2826.65) entao
ir[mat] <- (142.80)
senao
se   (n_sal[mat] > 2826.65) e (n_sal[mat] < 3751.05) entao
ir[mat] <- (354.80)
senao
se   (n_sal[mat] > 3751.05) e (n_sal[mat] < 4664.68) entao
ir[mat] <- (636.13)
senao
ir[mat] <- (869.36)
fimse
fimse
fimse
fimse

Escreval("Seu salário bruto é de: R$",n_sal[mat])
Escreval("Seu desconto de vale alimentação é de: R$",(dva[mat]))
Escreval("Seu desconto de vale transporte é de: R$",(dvt[mat]))
Escreval("Seu desconto de INSS é de: R$",(inss[mat]))
Escreval("Seu desconto de IR é de: R$",(ir[mat]))
Escreval("Seu salário líquido é de: R$",(n_sal[mat]-(dva[mat] + dvt[mat] + inss[mat] + ir[mat])))
Escreval("Data de admissão: ",dt_ad[mat])
Escreval("")
Escreval("---------- Fim do relatório do ",func[mat]," ----------")
Escreval("")
fimpara

caso 3

Escreval("Fim do cadastro")

fimescolha

ate menu = 3

fimrepita

Fimalgoritmo