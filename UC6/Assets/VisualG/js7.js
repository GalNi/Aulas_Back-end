//--------------------------Exercício---------------------------

/*
function calcular() {
    var alunos_ = document.querySelector('#nome').value
    var nota1_ = Number(document.querySelector('#bim1').value)
    var nota2_ = Number(document.querySelector('#bim2').value)
    var nota3_ = Number(document.querySelector('#bim3').value)
    var nota4_ = Number(document.querySelector('#bim4').value)
    var media = (nota1_+nota2_+nota3_+nota4_) / 4
    var res = document.querySelector('#resultado')
    res.innerHTML = `${media}`
}
*/

//--------------------------Aula.if else---------------------------

let formBimestre = document.getElementById("form-bimestre");

formBimestre.addEventListener('submit', function (event) {
    event.preventDefault();

    //console.log(formBimestre.name.value)
    let bim1_ = Number(formBimestre.nota1.value);
    let bim2_ = Number(formBimestre.nota2.value);
    let bim3_ = Number(formBimestre.nota3.value);
    let bim4_ = Number(formBimestre.nota4.value);
    let media = (bim1_ + bim2_ + bim3_ + bim4_) / 4;

    console.log(media)

    if (media >= 6) {
        console.log("Aprovado")
    } else {
        if (meida < 6 && media >= 4) {
            console.log("Recuperação")
        }
        else {
            console.log("Reprovado")
        }
    }
});

