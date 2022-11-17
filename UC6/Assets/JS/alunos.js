let form = document.getElementById("form-matricula")
let btn = document.getElementById("gerar")
let media = document.getElementById("media_")

let nomes = []
let disciplina = []
let bim1 = []
let bim2 = []
let bim3 = []
let bim4 = []

form.addEventListener('submit', function (event) {
    event.preventDefault()

    nomes.push(form.nome_completo.value)
    disciplina.push(form.materia.value)
    bim1.push(Number(form.nota1.value))
    bim2.push(Number(form.nota2.value))
    bim3.push(Number(form.nota3.value))
    bim4.push(Number(form.nota4.value))

})

btn.addEventListener('click', function (event) {
    event.preventDefault();

    mostrarRel = ""

    for (let posicao = 0; posicao < nomes.length; posicao++) {
        let conta = (bim1[posicao] + bim2[posicao] + bim3[posicao] + bim4[posicao]) / 4

        mostrarRel += `<tr>
        <td>${nomes[posicao]}</td>
        <td>${disciplina[posicao]}</td>
        <td>${bim1[posicao]}</td>
        <td>${bim2[posicao]}</td>
        <td>${bim3[posicao]}</td>
        <td>${bim4[posicao]}</td>
        <td>${conta}</td>
        </tr>`

        media.innerHTML = "";
        media.innerHTML = mostrarRel;

    }


})