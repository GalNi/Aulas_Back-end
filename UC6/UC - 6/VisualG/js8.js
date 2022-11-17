//--------------------------Aula. for---------------------------
let soma = 0;
let media = 0;
for (let contador = 1; contador <= 4; contador++) {
    let bimestre = prompt(`Digite a nota do BIM${contador}`)

    soma = Number(bimestre) + soma;
}
media = soma / 4

console.log(media)

if (media >= 6) {
    console.log("Aprovado")
} else if (meida < 6 && media >= 4) {
    console.log("Recuperação")
} else {
    console.log("Reprovado")
}

