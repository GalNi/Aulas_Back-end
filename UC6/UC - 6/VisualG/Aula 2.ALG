Algoritmo "Exerc�cio - 2"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi 
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 18/10/2022
Var
// Se��o de Declara��es das vari�veis
func: caracter
sal: real
n_sal: real

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
Escreva("Digite seu nome: ")
Leia(func)
Escreva("Digite seu sal�rio: R$")
Leia(sal)

se (sal > 3641.03) entao
n_sal <- (sal*1.1)

Escreval("Funcion�rio: ",func)
Escreval("Seu sal�rio bruto � de: R$",n_sal)
Escreval("Seu desconto de vale alimenta��o � de: R$",(n_sal*0.12))
Escreval("Seu desconto de vale transporte � de: R$",(n_sal*0.06))
Escreval("Seu desconto de INSS � de: R$",(n_sal*0.14))
Escreval("Seu sal�rio l�quido � de: R$",(n_sal-((n_sal*0.06)+(n_sal*0.12)+(n_sal*0.14))))

senao
se   (sal >= 2427.36) e (sal < 3641.03) entao
n_sal <- (sal*1.1)
Escreval("Funcion�rio: ",func)
Escreval("Seu sal�rio bruto � de: R$",n_sal)
Escreval("Seu desconto de vale alimenta��o � de: R$",(n_sal*0.12))
Escreval("Seu desconto de vale transporte � de: R$",(n_sal*0.06))
Escreval("Seu desconto de INSS � de: R$",(n_sal*0.12))
Escreval("Seu sal�rio l�quido � de: R$",(n_sal-((n_sal*0.06)+(n_sal*0.12)+(n_sal*0.12))))

senao
se   (sal >= 1500) e (sal < 2427.35) entao
n_sal <- (sal*1.1)
Escreval("Funcion�rio: ",func)
Escreval("Seu sal�rio bruto � de: R$",n_sal)
Escreval("Seu desconto de vale alimenta��o � de: R$",(n_sal*0.12))
Escreval("Seu desconto de vale transporte � de: R$",(n_sal*0.06))
Escreval("Seu desconto de INSS � de: R$",(n_sal*0.09))
Escreval("Seu sal�rio l�quido � de: R$",(n_sal-((n_sal*0.06)+(n_sal*0.12)+(n_sal*0.09))))

senao
se   (sal >= 1212) e (sal < 1500) entao
n_sal <- (sal+50)
Escreval("Funcion�rio: ",func)
Escreval("Seu sal�rio bruto � de: R$",n_sal)
Escreval("Seu desconto de vale alimenta��o � de: R$",(n_sal*0.12))
Escreval("Seu desconto de vale transporte � de: R$",(n_sal*0.06))
Escreval("Seu desconto de INSS � de: R$",(n_sal*0.09))
Escreval("Seu sal�rio l�quido � de: R$",(n_sal-((n_sal*0.06)+(n_sal*0.12)+(n_sal*0.09))))

senao
n_sal <- (sal+50)
Escreval("Funcion�rio: ",func)
Escreval("Seu sal�rio bruto � de: R$",n_sal)
Escreval("Seu desconto de vale alimenta��o � de: R$",(n_sal*0.12))
Escreval("Seu desconto de vale transporte � de: R$",(n_sal*0.06))
Escreval("Seu desconto de INSS � de: R$",(n_sal*0.075))
Escreval("Seu sal�rio l�quido � de: R$",(n_sal-((n_sal*0.06)+(n_sal*0.12)+(n_sal*0.075))))

fimse
fimse
fimse
fimse

Fimalgoritmo
