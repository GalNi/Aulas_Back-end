let form = document.getElementById("form-compras")
let fim = document.getElementById("media_")
let venda = document.getElementById("fTotal")
let fPag = document.getElementById("fCompra")
let fSel = document.getElementById("pag")




let produtos = []
let quantidades = []
let valores = []

let soma = 0
let compra = 0

form.addEventListener('submit', function (event) {
    event.preventDefault()

    produtos.push(form.produto.value)
    quantidades.push(Number(form.qtd.value))
    valores.push(Number(form.valor.value))
    console.log(produtos)
    console.log(quantidades)
    console.log(valores)

    mostrarRel = ""
    soma = 0
    console.log(soma)
    for (let posicao = 0; posicao < produtos.length; posicao++) {
        compra = (valores[posicao] * quantidades[posicao])
        mostrarRel += `<tr>
        <td>${produtos[posicao]}</td>
        <td>${quantidades[posicao]}</td>
        <td>R$ ${valores[posicao]}</td>
        <td>R$ ${compra}</td>
        </tr>`

        fim.innerHTML = "";
        fim.innerHTML = mostrarRel;
        soma = compra + soma
        extrato = `<tr>O valor total da compra: R$ ${soma}</tr>`

        venda.innerHTML = ""
        venda.innerHTML = extrato

    }

})

fPag.addEventListener('click', function (event) {
    event.preventDefault();

    mostraPag = `<div><select name="pagamento" id="tipo_pagamento" onchange="">
    <option value="Selecione">Selecione</option>
    <option value="vista">Á vista com 10% de desconto</option>
    <option value="parcelado">Até 3x Sem juros</option>
</select></div><div id="Text"></div>`
    
    fSel.innerHTML = mostraPag
    
})
