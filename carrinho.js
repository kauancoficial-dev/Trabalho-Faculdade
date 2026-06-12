let carrinho = [];

function adicionarProduto(nome, preco) {
    const existente = carrinho.find(p => p.nome === nome);
    if (existente) {
        existente.quantidade++;
    } else {
        carrinho.push({ nome, preco, quantidade: 1 });
    }
    atualizarCarrinho();
    abrirCarrinho();
}

function removerProduto(nome) {
    carrinho = carrinho.filter(p => p.nome !== nome);
    atualizarCarrinho();
}

function atualizarCarrinho() {
    const lista = document.getElementById("carrinho-lista");
    const totalEl = document.getElementById("carrinho-total");
    const contador = document.getElementById("carrinho-contador");

    lista.innerHTML = "";
    let total = 0;
    let qtdTotal = 0;

    if (carrinho.length === 0) {
        lista.innerHTML = `<li id="carrinho-vazio" style="color:#aaa; text-align:center; margin-top:40px; font-size:15px; border:none;">Seu carrinho está vazio</li>`;
    } else {
        carrinho.forEach(produto => {
            qtdTotal += produto.quantidade;
            total += produto.preco * produto.quantidade;

            const item = document.createElement("li");
            item.innerHTML = `
                <span>${produto.nome} (x${produto.quantidade})</span>
                <span>R$ ${(produto.preco * produto.quantidade).toFixed(2).replace('.', ',')}</span>
                <button onclick="removerProduto('${produto.nome}')">✕</button>
            `;
            lista.appendChild(item);
        });
    }

    totalEl.textContent = total.toFixed(2).replace('.', ',');
    contador.textContent = qtdTotal;
    contador.style.display = qtdTotal > 0 ? "flex" : "none";
}

function abrirCarrinho() {
    document.getElementById("painel-carrinho").style.right = "0";
    document.getElementById("overlay-carrinho").style.display = "block";
}

function fecharCarrinho() {
    document.getElementById("painel-carrinho").style.right = "-400px";
    document.getElementById("overlay-carrinho").style.display = "none";
}

function finalizarCompra() {
    if (carrinho.length === 0) {
        alert("Seu carrinho está vazio! Adicione itens antes de finalizar.");
        return;
    }
    alert(`Compra de R$ ${document.getElementById("carrinho-total").textContent} finalizada com sucesso!\nObrigado por escolher o Coffee & Bread.`);
    carrinho = [];
    atualizarCarrinho();
    fecharCarrinho();
}