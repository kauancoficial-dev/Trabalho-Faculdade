<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.0.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gravitas+One&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Coffee And Bread</title>
    <link rel="icon" type="image/png" href="./img/favicon.png">
</head>

<body>

    <header class="header">
        <section>
            <a href="#home" class="logo">
                <img src="./img/logo1.jpg" alt="Logo" width="90" height="60">
            </a>

            <nav class="navpub">
                <a href="#home">Home</a>
                <a href="#menu">Menu</a>
                <a href="#location">Endereço</a>
                <a href="#about">Sobre</a>
                <a href="#reviews">Avaliações</a>
            </nav>

            <div class="icons" style="position:relative;">
                <img width="30" height="30"
                    src="https://img.icons8.com/ios-filled/30/6B7A3A/search--v1.png"
                    alt="search--v1" />

                <div style="position:relative; display:inline-block; cursor:pointer;" onclick="abrirCarrinho()">
                    <img width="30" height="30"
                        src="https://img.icons8.com/ios-glyphs/30/6B7A3A/shopping-cart--v1.png"
                        alt="carrinho" />
                    <span id="carrinho-contador" style="
                        display:none;
                        position:absolute;
                        top:-6px; right:-6px;
                        background:#c0392b;
                        color:#fff;
                        border-radius:50%;
                        width:18px; height:18px;
                        font-size:11px;
                        align-items:center;
                        justify-content:center;
                        font-weight:700;">0</span>
                </div>

                <?php if (isset($_SESSION['usuario_id'])): ?>
                    <a href="logout.php" title="Sair de <?= htmlspecialchars($_SESSION['usuario_email']) ?>">
                        <img width="30" height="30"
                            src="https://img.icons8.com/ios-filled/30/6B7A3A/user-male-circle.png"
                            alt="perfil" />
                    </a>
                <?php else: ?>
                    <a href="sistemalogin.php">
                        <img width="30" height="30"
                            src="https://img.icons8.com/?size=100&id=26211&format=png&color=#6B7A3A"
                            alt="login--v1" />
                    </a>
                <?php endif; ?>
            </div>
        </section>
    </header>

    <div class="home-container">
        <section id="home">
            <div class="content">
                <h3>ESPALHANDO O AROMA DE CAFÉ E FELICIDADE EM FORMA DE PÃO</h3>
                <p>No Coffee & Bread, servimos cafés e pães artesanais em um ambiente acolhedor, proporcionando sabores únicos e momentos especiais.</p>
                <a href="#" class="btn">Venha Conhecer</a>
            </div>
        </section>
    </div>

    <section class="about" id="about">
        <h2 class="titulo">Sobre <span>Nós</span></h2>
        <div class="row">
            <div class="container-image">
                <img src="./img/sobrenos.jpg" alt="sobre-nos">
            </div>
            <div class="content">
                <h3>O que é o Coffee And Bread?</h3>
                <p>O Coffee & Bread nasceu da paixão por cafés especiais e pães artesanais. Nossa missão é oferecer produtos frescos, saborosos e preparados com dedicação para proporcionar experiências inesquecíveis.</p>
                <p>Valorizamos a qualidade dos ingredientes, o atendimento acolhedor e um ambiente confortável para que cada visita seja um momento especial.</p>
                <a href="#" class="btne">Saiba Mais</a>
            </div>
        </div>
    </section>

    <section class="menu" id="menu">
        <h2 class="titulo">Nosso <span>Menu</span></h2>
        <div class="box-container">

            <div class="box">
                <img src="./img/paofrances.jpg" alt="Pão Francês">
                <h3>Pão Francês</h3>
                <div class="preco">R$ 3,00 <span>R$ 8,00</span></div>
                <a href="#" class="btne" onclick="adicionarProduto('Pão Francês', 3.00); return false;">adicionar ao carrinho</a>
            </div>

            <div class="box">
                <img src="./img/paodeforma.jpg" alt="Pão de Forma">
                <h3>Pão de Forma</h3>
                <div class="preco">R$ 5,00 <span>R$ 8,00</span></div>
                <a href="#" class="btne" onclick="adicionarProduto('Pão de Forma', 5.00); return false;">adicionar ao carrinho</a>
            </div>

            <div class="box">
                <img src="./img/paointegral.jpg" alt="Pão Integral">
                <h3>Pão Integral</h3>
                <div class="preco">R$ 6,00 <span>R$ 9,00</span></div>
                <a href="#" class="btne" onclick="adicionarProduto('Pão Integral', 6.00); return false;">adicionar ao carrinho</a>
            </div>

            <div class="box">
                <img src="./img/cappucchino.jpg" alt="Cappuccino">
                <h3>Cappuccino</h3>
                <div class="preco">R$ 4,00 <span>R$ 6,00</span></div>
                <a href="#" class="btne" onclick="adicionarProduto('Cappuccino', 4.00); return false;">adicionar ao carrinho</a>
            </div>

            <div class="box">
                <img src="./img/expresso.jpg" alt="Expresso">
                <h3>Expresso</h3>
                <div class="preco">R$ 3,00 <span>R$ 6,00</span></div>
                <a href="#" class="btne" onclick="adicionarProduto('Expresso', 3.00); return false;">adicionar ao carrinho</a>
            </div>

            <div class="box">
                <img src="./img/latte.jpg" alt="Latte">
                <h3>Latte</h3>
                <div class="preco">R$ 4,00 <span>R$ 8,00</span></div>
                <a href="#" class="btne" onclick="adicionarProduto('Latte', 4.00); return false;">adicionar ao carrinho</a>
            </div>

        </div>
    </section>

    <section class="review" id="reviews">
        <h2 class="titulo">Avaliações <span>Dos Clientes</span></h2>
        <div class="box-container">

            <div class="box">
                <div class="quotes">
                    <img src="./img/quotes.png" alt="comentario">
                </div>
                <p>Excelente atendimento e produtos sempre frescos. O cappuccino é delicioso e os pães têm qualidade excepcional.</p>
                <img src="./img/perfil.png" alt="cliente1">
                <h3>Maria</h3>
                <div class="estrela">
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/star--v1.png" alt="star" />
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/star--v1.png" alt="star" />
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/star--v1.png" alt="star" />
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/star--v1.png" alt="star" />
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/star--v1.png" alt="star" />
                </div>
            </div>

            <div class="box">
                <div class="quotes">
                    <img src="./img/quotes.png" alt="comentario">
                </div>
                <p>Ambiente agradável, atendimento rápido e produtos muito saborosos. Uma ótima opção para tomar café e relaxar.</p>
                <img src="./img/perfil.png" alt="cliente2">
                <h3>João</h3>
                <div class="estrela">
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/star--v1.png" alt="star" />
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/star--v1.png" alt="star" />
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/star--v1.png" alt="star" />
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/star--v1.png" alt="star" />
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/star--v1.png" alt="star" />
                </div>
            </div>

            <div class="box">
                <div class="quotes">
                    <img src="./img/quotes.png" alt="comentario">
                </div>
                <p>Os cafés são excelentes e os produtos são preparados com muito cuidado. Recomendo para todos que procuram qualidade.</p>
                <img src="./img/perfil.png" alt="cliente3">
                <h3>Ana</h3>
                <div class="estrela">
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/star--v1.png" alt="star" />
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/star--v1.png" alt="star" />
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/star--v1.png" alt="star" />
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/star--v1.png" alt="star" />
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/star--v1.png" alt="star" />
                </div>
            </div>

        </div>
    </section>

    <section class="location" id="location">
        <h2 class="titulo">Nosso <span>Endereço</span></h2>
        <div class="mapa">
            <iframe
                src="https://maps.google.com/maps?q=cafeteria&t=&z=13&ie=UTF8&iwloc=&output=embed"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section class="footer">
        <div class="share">
            <img width="30" height="30" src="https://img.icons8.com/ios/30/instagram-new--v1.png" alt="instagram" />
            <img width="30" height="30" src="https://img.icons8.com/ios/30/facebook-new.png" alt="facebook" />
            <img width="30" height="30" src="https://img.icons8.com/ios/30/twitterx--v2.png" alt="twitter" />
        </div>
        <div class="credit">
            Criado por <span>Kauã Castro • Jan Lucas • Lucas • Daniel</span> |
            Todos os direitos reservados.
        </div>
    </section>

    <div id="overlay-carrinho" onclick="fecharCarrinho()"></div>

    <div id="painel-carrinho">
        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px;">
            <h2 style="font-family:'Gravitas One', serif; color:#6B7A3A; font-size:22px;">Carrinho</h2>
            <button onclick="fecharCarrinho()" style="
                background:none; border:none;
                font-size:22px; cursor:pointer; color:#555;
                line-height:1;">✕</button>
        </div>

        <ul id="carrinho-lista">
            <li id="carrinho-vazio" style="color:#aaa; text-align:center; margin-top:40px; font-size:15px; border:none;">
                Seu carrinho está vazio
            </li>
        </ul>

        <div style="border-top:1px solid #eee; padding-top:16px; margin-top:16px;">
            <p style="font-size:18px; font-weight:600; color:#333; margin-bottom:12px;">
                Total: <span style="color:#6B7A3A;">R$ <span id="carrinho-total">0,00</span></span>
            </p>
            <button onclick="finalizarCompra()" style="
                width:100%; padding:13px;
                background:#6B7A3A; color:#fff;
                border:none; border-radius:8px;
                font-size:16px; cursor:pointer;
                font-family:'Roboto', sans-serif;
                font-weight:600;
                transition:background 0.2s;">
                Finalizar Compra
            </button>
        </div>
    </div>
    <script src="carrinho.js"></script>

</body>
</html>