Algoritmo "Exerc�cio - 3"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi 
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 20/10/2022
Var
// Se��o de Declara��es das vari�veis
func: caracter
sal: real
n_sal: real
dvt: real
dva: real
inss: real
ir: real

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc...
Escreva("Digite seu nome: ")
Leia(func)
Escreva("Digite seu sal�rio: R$")
Leia(sal)

se  (sal >= 1500) entao
n_sal <- (sal*1.1)

senao
n_sal <- (sal+50)

fimse

//---------------- VT e VA

dvt <- (n_sal*0.06)
dva <- (n_sal*0.12)

//---------------- INSS

se (n_sal > 3641.03) entao
inss <- (n_sal*0.14)

senao
se   (n_sal >= 2427.36) e (n_sal < 2427.35) entao
inss <- (n_sal*0.09)

senao
inss <- (n_sal*0.12)

fimse
fimse

//---------------- IR

se (n_sal <= 1903.98) entao
ir <- (0)

senao
se   (n_sal > 1903.98) e (sal < 2826.65) entao
ir <- (142.80)

senao
se   (n_sal > 2826.65) e (sal < 3751.05) entao
ir <- (354.80)

senao
se   (n_sal > 3751.05) e (sal < 4664.68) entao
ir <- (636.13)

senao
ir <- (869.36)

fimse
fimse
fimse
fimse

Escreval("Funcion�rio: ",func)
Escreval("Seu sal�rio bruto � de: R$",n_sal)
Escreval("Seu desconto de vale alimenta��o � de: R$",(dva))
Escreval("Seu desconto de vale transporte � de: R$",(dvt))
Escreval("Seu desconto de INSS � de: R$",(inss))
Escreval("Seu desconto de IR � de: R$",(ir))
Escreval("Seu sal�rio l�quido � de: R$",(n_sal-(dva + dvt + inss + ir)))


Fimalgoritmo