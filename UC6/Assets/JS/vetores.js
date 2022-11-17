//VETORES CONSTANTES
const frutas = ["Banana", "Abacaxi", "Maça", "Uva"];
const frutas = "Goiaba";

//VETORES
let nomes = [];

for (let posicao = 0; posicao < frutas.length; posicao++) {
    console.log(frutas[posicao]);
}

frutas.map(item => {
    console.log(item)
})

frutas.forEach(item => {
    console.log(item);
})