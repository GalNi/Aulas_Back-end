let form = document.getElementById("form-colaborador");
let btn = document.getElementById("gerar");
let relatorio = document.getElementById("relatorio");


//Vetores no js são os Arrays
let nomes = [];
let cargos = [];
let salarios = [];

form.addEventListener('submit', function (event) {
    event.preventDefault(); //evita que a página recarregue no preenchimento

    //push - adionar novos dados dentro de um vetor-array

    nomes.push(form.nome_completo.value);
    cargos.push(form.cargo.value);
    salarios.push(Number(form.salario.value));

    console.log(nomes);
    console.log(cargos);
    console.log(salarios);

})

btn.addEventListener('click', function (event) {
    event.preventDefault();
    
    let descVt = 0;
    let descVr = 0;
    let salarioLiquido = 0;
    mostrarRel = "";
    
    for (let posicao = 0; posicao < nomes.length; posicao++) {
        descVr = salarios[posicao] * 0.09;
        descVt = salarios[posicao] * 0.06;
        salarioLiquido = salarios[posicao] - descVr - descVt
        
        mostrarRel += `<p>Nome ${nomes[posicao]} | Cargo ${cargos[posicao]} | Salário Bruto ${salarios[posicao]} | Salário líquido ${salarioLiquido}</p>`

        relatorio.innerHTML = "";
        relatorio.innerHTML = mostrarRel;

    }
    
})