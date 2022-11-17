//Variáveis de informação
let cadastro = document.getElementById("formCadastro");
let sal = document.getElementById("salario");
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

    let matri = 0;
    let nSalario = [];
    let descVr = [];
    let descVt = [];
    let descIR = [];
    let descINSS = [];
    let sLiq = [];
    let posicao = 0;

    mostrarRel = "";

    while (posicao < cFuncionarios.length) {
        matri = posicao + 1
        console.log(matri)
        if (cSalarios[posicao] > 1500) {
            nSalario[posicao] = cSalarios[posicao] * 1.1
        } else {
            nSalario[posicao] = cSalarios[posicao] + 50
        }
        
        descVr[posicao] = nSalario[posicao] * 0.09;
        descVt[posicao] = nSalario[posicao] * 0.06;

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
                    } else {
                        descIR[posicao] = 869.36
                    }
                }
            }
        }

        sLiq[posicao] = cSalarios[posicao] - descVr[posicao] - descVt[posicao] - descIR[posicao] - descINSS[posicao]

        mostrarRel += `<tr>
        <td>${matri}</td>
        <td>${cFuncionarios[posicao]}</td>
        <td>R$ ${nSalario[posicao].toFixed(2)}</td>
        <td>R$ ${descVr[posicao].toFixed(2)}</td>
        <td>R$ ${descVt[posicao].toFixed(2)}</td>
        <td>R$ ${descIR[posicao].toFixed(2)}</td>
        <td>R$ ${descINSS[posicao].toFixed(2)}</td>
        <td>R$ ${sLiq[posicao].toFixed(2)}</td>
        </tr>`
        relatorio.innerHTML = "";
        relatorio.innerHTML = mostrarRel;
        posicao ++
        

    }

})
