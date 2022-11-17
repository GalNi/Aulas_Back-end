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
liq_sal: real

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
Escreva("Digite seu nome: ")
Leia(func)
Escreva("Digite seu salário: R$")
Leia(sal)

se sal >= 1500 então
n_sal<- (sal*1.1)
n_liq<- (n_sal*0.82)
senao
n_sal<- (sal+50)
n_liq<- (n_sal-150)
fimse
Escreval("Funcionário: ",func)
Escreval("Seu salário bruto é de: R$",n_sal)
Escreval("Seu salário bruto é de: R$",n_liq)

se n_sal



Fimalgoritmo
