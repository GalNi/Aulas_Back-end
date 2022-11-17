let soma = 0;
let media = 0;
for (let contador = 1; contador <= 5; contador++) {
    let valor = prompt(`Valor do produto ${contador}: `)
    let qtd = prompt(`Quantidade do produto ${contador}: `)
    soma = Number((valor)*qtd) + soma;
}
alert(`O valor total de sua compra é de: R$${soma}`)