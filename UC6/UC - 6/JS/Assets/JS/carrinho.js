let formMercado = document.getElementById("form-carrinho");
let divCupomFiscal = document.getElementById("cupom");
let imagemProduto = document.getElementById("produto-imagem");
let divTotalAPagar = document.getElementById("total-pagar");
let codigoProduto = document.getElementById("codigo_produto");
let compraLista = document.getElementById("listaCompras");

//formMercado.addEventListener('keyup', function(){})
// Ele escuta quando se tira o botão do input

let codigos_ = []
let produtos_ = []
let qtd_ = []
let preco_ = []
let soma = 0
let valorCompra = 0

const mercadorias = [
    [001, "Arroz", 21.90, "Assets/Imagens/arroz.png"],
    [002, "Feijão", 7.90, "Assets/Imagens/feijao.jpg"],
    [003, "Biscoito", 3.89, "Assets/Imagens/biscoito.jpg"],
    [004, "Suco", 1.29, "Assets/Imagens/suco.jpg"],
    [004, "Leite", 7.99, "Assets/Imagens/leite.jpg"],
]

codigoProduto.addEventListener('keyup', function () {

    mercadorias.forEach(produtos => {
        if (codigoProduto.value == produtos[0]) {
            formMercado.nome_produto.value = produtos[1]
            formMercado.preco_produto.value = produtos[2]
            formMercado.qtd_produto.focus()
            imagemProduto.src = produtos[3]
        }
    })
})

formMercado.addEventListener('submit', function (event) {
    event.preventDefault();

    codigos_.push(formMercado.codigo_produto.value)
    produtos_.push(formMercado.nome_produto.value)
    qtd_.push(Number(formMercado.qtd_produto.value))
    preco_.push(Number(formMercado.preco_produto.value))

    let posicao = 0

    mostrarRel = ""
    soma = 0

    while (posicao < codigos_.length) {
        valorCompra = (preco_[posicao] * qtd_[posicao])
        mostrarRel += `<tr>
    <td>${codigos_[posicao]}</td>
    <td>${produtos_[posicao]}</td>
    <td>${qtd_[posicao]}</td>
    <td>R$ ${preco_[posicao].toFixed(2)}</td>
    </tr>`
        compraLista.innerHTML = ""
        compraLista.innerHTML = mostrarRel

        soma = valorCompra + soma
        extrato = `<tr>O valor total da compra: R$ ${soma.toFixed(2)}</tr>`

        divTotalAPagar.innerHTML = ""
        divTotalAPagar.innerHTML = extrato

        posicao++

    }
})