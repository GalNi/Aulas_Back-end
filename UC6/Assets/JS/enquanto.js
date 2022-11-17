//Variáveis de informação
let cadastro = document.getElementById("formCadastro")
let matri = document.getElementById("matricula")
let sal = document.getElementById("salario")
let btn = document.getElementById("gerar");
let relatorio = document.getElementById("relatorio");

//Variáveis para cálculo
let cFuncionarios = [];
let cSalarios = [];


cadastro.addEventListener('submit', function (event) {
    event.preventDefault();
    //evita que a página recarregue no preenchimento
    //push - adionar novos dados dentro de um vetor-array

    cFuncionarios.push(cadastro.nomeFunc.value);
    cSalarios.push(Number(cadastro.salario.value));

    console.log(cFuncionarios);
    console.log(cSalarios);

})

btn.addEventListener('click', function (event) {
    event.preventDefault();

    let nSalario = 0;
    let descVr = 0;
    let descVt = 0;
    let descIR = 0;
    let descINSS = 0;
    let sLiq = 0;
    let posicao = 0;

    mostrarRel = "";

    while (posicao < cFuncionarios.length) {
        if (sal > 1500) {
            nSalario = sal * 1.1
        } else {
            nSalario = sal + 50
        }
        descVr = nSalario[posicao] * 0.09;
        descVt = nSalario[posicao] * 0.06;

        if (nSalario[posicao] > 3641.03) {
            descINSS[posicao] = (nSalario[posicao] * 0.14)
        }
        else {
            if (nSalario[posicao] >= 2427.36 && nSalario[posicao] < 2427.35) {
                descINSS[posicao] = (nSalario[posicao] * 0.09)
            }
            else {
                descINSS[posicao] = (nSalario[posicao] * 0.12)
            }
        }
        //---------------- IR
        if (nSalario[posicao] <= 1903.98) {
            descIR[posicao] = 0
        }
        else {
            if (nSalario[posicao] > 1903.98 && nSalario[posicao] < 2826.65) {
                descIR[posicao] = 142.80
            }
            else {
                if (nSalario[posicao] > 2826.65 && nSalario[posicao] < 3751.05) {
                    descIR[posicao] = 354.80
                } else {
                    if (nSalario[posicao] > 3751.05 && nSalario[posicao] < 4664.68) {
                        descIR[posicao] = 636.13
                    }else{
                        descIR[posicao] = 869.36
                    }
                }
            }
        }

        sLiq = salarios[posicao] - descVr - descVt - descIR - descINSS

        mostrarRel += `<tr>
        <td>${cFuncionarios[posicao]}</td>
        <td>${sal[posicao]}</td>
        <td>R$ ${valores[posicao]}</td>
        <td>R$ ${compra}</td>
        </tr>`
        let nSalario = 0;
        let descVr = 0;
        let descVt = 0;
        let descIR = 0;
        let descINSS = 0;
        let sLiq = 0;
        let posicao = 0;
        relatorio.innerHTML = "";
        relatorio.innerHTML = mostrarRel;

    }

})
