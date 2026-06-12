let carrinho = [];

function adicionarProduto(id, nome, preco) {
    carrinho.push({
        id,
        nome,
        preco
    });

    atualizarCarrinho();
}

function atualizarCarrinho() {
    const lista = document.getElementById("carrinho");
    lista.innerHTML = "";

    let total = 0;

    carrinho.forEach(produto => {
        const item = document.createElement("li");

        item.textContent =
            ${produto.nome} - R$ ${produto.preco.toFixed(2)};

        lista.appendChild(item);

        total += produto.preco;
    });

    document.getElementById("total").textContent =
        total.toFixed(2);
}

async function finalizarCompra() {

    const resposta = await fetch("/criar-pagamento", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({ carrinho })
    });

    const dados = await resposta.json();

    window.location.href = dados.checkoutUrl;
}
