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
liq_sal: real

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
Escreva("Digite seu nome: ")
Leia(func)
Escreva("Digite seu sal�rio: R$")
Leia(sal)

se sal >= 1500 ent�o
n_sal<- (sal*1.1)
n_liq<- (n_sal*0.82)
senao
n_sal<- (sal+50)
n_liq<- (n_sal-150)
fimse
Escreval("Funcion�rio: ",func)
Escreval("Seu sal�rio bruto � de: R$",n_sal)
Escreval("Seu sal�rio bruto � de: R$",n_liq)

se n_sal



Fimalgoritmo
