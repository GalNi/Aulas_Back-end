Algoritmo "Exerc�cio 16"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi 
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 26/10/2022
Var
// Se��o de Declara��es das vari�veis 
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
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
Repita

Escreval("---- Cadastro de funcion�rios ----")
Escreval("")
Escreval("1 - Cadastro de funcion�rio")
Escreval("2 - Relat�rio de funcion�rios")
Escreval("3 - Sair")
Escreva("Digite a op��o desejada: ")
Leia(menu)
Escreval("")

Escolha menu

caso 1

Escreval("---- Cadastro de funcion�rio ----")
Escreval("")
para mat de 1 at� 5 fa�a
Escreva("Matr�cula: ",mat," - Nome do funcion�rio: ")
Leia(func[mat])
Escreva("Cargo: ")
Leia(cargo[mat])
Escreva("Sal�rio bruto: R$")
Leia(sal[mat])
Escreva("Data de admiss�o: ")
Leia(dt_ad[mat])
Escreval("")
Escreval("---- Cadastro Realizado ----")
Escreval("")
fimpara

caso 2

mat <- 1
Escreval("---- Relat�rio de funcion�rios ----")

para mat de 1 ate 5 fa�a
Escreval("Matr�cula: ",mat)
Escreval("Nome do funcion�rio: ",func[mat])
Escreval("Cargo: ",cargo[mat])
Escreval("Sal�rio bruto: R$",sal[mat])

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

Escreval("Seu sal�rio bruto � de: R$",n_sal[mat])
Escreval("Seu desconto de vale alimenta��o � de: R$",(dva[mat]))
Escreval("Seu desconto de vale transporte � de: R$",(dvt[mat]))
Escreval("Seu desconto de INSS � de: R$",(inss[mat]))
Escreval("Seu desconto de IR � de: R$",(ir[mat]))
Escreval("Seu sal�rio l�quido � de: R$",(n_sal[mat]-(dva[mat] + dvt[mat] + inss[mat] + ir[mat])))
Escreval("Data de admiss�o: ",dt_ad[mat])
Escreval("")
Escreval("---------- Fim do relat�rio do ",func[mat]," ----------")
Escreval("")
fimpara

caso 3

Escreval("Fim do cadastro")

fimescolha

ate menu = 3

fimrepita

Fimalgoritmo