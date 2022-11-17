Algoritmo "Exercício - 2"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 18/10/2022
Var
// Seção de Declarações das variáveis
func: caracter
sal: real
n_sal: real

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
Escreva("Digite seu nome: ")
Leia(func)
Escreva("Digite seu salário: R$")
Leia(sal)

se (sal > 3641.03) entao
n_sal <- (sal*1.1)

Escreval("Funcionário: ",func)
Escreval("Seu salário bruto é de: R$",n_sal)
Escreval("Seu desconto de vale alimentação é de: R$",(n_sal*0.12))
Escreval("Seu desconto de vale transporte é de: R$",(n_sal*0.06))
Escreval("Seu desconto de INSS é de: R$",(n_sal*0.14))
Escreval("Seu salário líquido é de: R$",(n_sal-((n_sal*0.06)+(n_sal*0.12)+(n_sal*0.14))))

senao
se   (sal >= 2427.36) e (sal < 3641.03) entao
n_sal <- (sal*1.1)
Escreval("Funcionário: ",func)
Escreval("Seu salário bruto é de: R$",n_sal)
Escreval("Seu desconto de vale alimentação é de: R$",(n_sal*0.12))
Escreval("Seu desconto de vale transporte é de: R$",(n_sal*0.06))
Escreval("Seu desconto de INSS é de: R$",(n_sal*0.12))
Escreval("Seu salário líquido é de: R$",(n_sal-((n_sal*0.06)+(n_sal*0.12)+(n_sal*0.12))))

senao
se   (sal >= 1500) e (sal < 2427.35) entao
n_sal <- (sal*1.1)
Escreval("Funcionário: ",func)
Escreval("Seu salário bruto é de: R$",n_sal)
Escreval("Seu desconto de vale alimentação é de: R$",(n_sal*0.12))
Escreval("Seu desconto de vale transporte é de: R$",(n_sal*0.06))
Escreval("Seu desconto de INSS é de: R$",(n_sal*0.09))
Escreval("Seu salário líquido é de: R$",(n_sal-((n_sal*0.06)+(n_sal*0.12)+(n_sal*0.09))))

senao
se   (sal >= 1212) e (sal < 1500) entao
n_sal <- (sal+50)
Escreval("Funcionário: ",func)
Escreval("Seu salário bruto é de: R$",n_sal)
Escreval("Seu desconto de vale alimentação é de: R$",(n_sal*0.12))
Escreval("Seu desconto de vale transporte é de: R$",(n_sal*0.06))
Escreval("Seu desconto de INSS é de: R$",(n_sal*0.09))
Escreval("Seu salário líquido é de: R$",(n_sal-((n_sal*0.06)+(n_sal*0.12)+(n_sal*0.09))))

senao
n_sal <- (sal+50)
Escreval("Funcionário: ",func)
Escreval("Seu salário bruto é de: R$",n_sal)
Escreval("Seu desconto de vale alimentação é de: R$",(n_sal*0.12))
Escreval("Seu desconto de vale transporte é de: R$",(n_sal*0.06))
Escreval("Seu desconto de INSS é de: R$",(n_sal*0.075))
Escreval("Seu salário líquido é de: R$",(n_sal-((n_sal*0.06)+(n_sal*0.12)+(n_sal*0.075))))

fimse
fimse
fimse
fimse

Fimalgoritmo
