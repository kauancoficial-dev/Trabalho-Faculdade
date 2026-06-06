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
    <link
        href="https://fonts.googleapis.com/css2?family=Gravitas+One&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title>Cofé And Bread</title>
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

            <div class="icons">

                <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/6B7A3A/search--v1.png"
                    alt="search--v1" />
                <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/6B7A3A/shopping-cart--v1.png"
                    alt="shopping-cart--v1" />

                 <?php if (isset($_SESSION['usuario_id'])): ?>
                    <!-- LOGADO: ícone de perfil + logout -->
                    <a href="logout.php" title="Sair de <?= htmlspecialchars($_SESSION['usuario_email']) ?>">
                        <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/6B7A3A/user-male-circle.png" alt="perfil" />
                    </a>
                <?php else: ?>
                    <!-- NÃO LOGADO: ícone de login -->
                    <a href="sistemalogin.php">
                        <img width="30" height="30" src="https://img.icons8.com/?size=100&id=26211&format=png&color=#6B7A3A" alt="login--v1" />
                    </a>
                <?php endif; ?>
            </div>

        </section>

    </header>

      <div class="home-container">

        <section id="home">

            <div class="content">

                <h3>ESPALHANDO O AROMA DE CAFÉ E FELICIDADE EM FORMA DE PÃO</h3>
                <p>No Coffee & Bread, servimos cafés e pães artesanais em um ambiente acolhedor, proporcionando sabores únicos e momentos especiais.
                <a href="#" class="btn">Venha Conhecer</a>

            </div>

        </section>

    </div>

    <section class="about" id="about">

        <h2 class=" titulo">Sobre <span>Nós</span></h2>

        <div class="row">

            <div class="container-image">
                <img src="./img/sobrenos.jpg" alt="sobre-nos">
            </div>

            <div class="content">

                <h3>O que é o Coffe And Bread?</h3>

              <p>
O Coffee & Bread nasceu da paixão por cafés especiais e pães artesanais. Nossa missão é oferecer produtos frescos, saborosos e preparados com dedicação para proporcionar experiências inesquecíveis.
</p>

               <p>
Valorizamos a qualidade dos ingredientes, o atendimento acolhedor e um ambiente confortável para que cada visita seja um momento especial.
</p>
                <a href="#" class="btne">Saiba Mais</a>

            </div>

        </div>

    </section>

    <section class="menu" id="menu">

        <h2 class="titulo">Nosso<span>Menu</span></h2>

        <div class=" box-container">

            <div class="box">

                <img src="./img/paofrances.jpg" alt="item-1">

                <h3>Pão Frances</h3>

                <div class="preco">R$ 3,00<span>R$ 8,00</span></div>

                <a href="#" class="btne">adicionar ao carrinho</a>

            </div>

            <div class="box">

                <img src="./img/paodeforma.jpg" alt="item-1">

                <h3>Pão de Forma</h3>

                <div class="preco">R$ 5,00<span>R$ 8,00</span></div>

                <a href="#" class="btne">adicionar ao carrinho</a>

            </div>

            <div class="box">

                <img src="./img/paointegral.jpg" alt="item-1">

                <h3>Pão Integral</h3>

                <div class="preco">R$ 6,00<span>R$ 9,00</span></div>

                <a href="#" class="btne">adicionar ao carrinho</a>

            </div>

            <div class="box">

                <img src="./img/cappucchino.jpg" alt="item-1">

                <h3>Cappuccino</h3>

                <div class="preco">R$ 4,00<span>R$ 6,00</span></div>

                <a href="#" class="btne">adicionar ao carrinho</a>

            </div>

            <div class="box">

                <img src="./img/expresso.jpg" alt="item-1">

                <h3>Expresso</h3>

                <div class="preco">R$ 3,00<span>R$ 6,00</span></div>

                <a href="#" class="btne">adicionar ao carrinho</a>

            </div>

            <div class="box">

                <img src="./img/latte.jpg" alt="item-1">

                <h3>Latte</h3>

                <div class="preco">R$ 4,00<span>R$ 8,00</span></div>

                <a href="#" class="btne">adicionar ao carrinho</a>

            </div>

        </div>

    </section>

    <section class="review" id="reviews">

        <h2 class="titulo">Avaliações<span>Dos Clientes</span></h2>

        <div class="box-container">

            <div class="box">

                <div class="quotes">

                    <img src="./img/quotes.png" alt="comentario">

                </div>

                <p>Excelente atendimento e produtos sempre frescos. O cappuccino é delicioso e os pães têm qualidade excepcional.</p>

                <img src="./img/perfil.png" alt="cliente1">

                <h3>Maria</h3>

                <div class="estrela">

                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/star--v1.png"
                        alt="star--v1" />
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/star--v1.png"
                        alt="star--v1" />
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/star--v1.png"
                        alt="star--v1" />
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/star--v1.png"
                        alt="star--v1" />
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/star--v1.png"
                        alt="star--v1" />

                </div>

            </div>
            <div class="box">

                <div class="quotes">

                    <img src="./img/quotes.png" alt="comentario">

                </div>

                <p>Ambiente agradável, atendimento rápido e produtos muito saborosos. Uma ótima opção para tomar café e relaxar.</p>

                <img src="./img/perfil.png" alt="cliente1">

                <h3>Maria</h3>

                <div class="estrela">

                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/star--v1.png"
                        alt="star--v1" />
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/star--v1.png"
                        alt="star--v1" />
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/star--v1.png"
                        alt="star--v1" />
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/star--v1.png"
                        alt="star--v1" />
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/star--v1.png"
                        alt="star--v1" />

                </div>

            </div>

            <div class="box">

                <div class="quotes">

                    <img src="./img/quotes.png" alt="comentario">

                </div>

                <p>Os cafés são excelentes e os produtos são preparados com muito cuidado. Recomendo para todos que procuram qualidade.</p>

                <img src="./img/perfil.png" alt="cliente1">

                <h3>Maria</h3>

                <div class="estrela">

                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/star--v1.png"
                        alt="star--v1" />
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/star--v1.png"
                        alt="star--v1" />
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/star--v1.png"
                        alt="star--v1" />
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/star--v1.png"
                        alt="star--v1" />
                    <img width="30" height="30" src="https://img.icons8.com/ios-filled/30/star--v1.png"
                        alt="star--v1" />

                </div>

            </div>

        </div>

    </section>

    <section class="location" id="location">

        <h2 class="titulo">Nosso<span>Endereço</span></h2>

        <div class="mapa">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117050.17806155102!2d-46.76003889590777!3d-23.539045222174572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5853243284bd%3A0x3246a7cf8ea045cd!2sPadaria%20Baronesa!5e0!3m2!1spt-BR!2sbr!4v1774733364353!5m2!1spt-BR!2sbr"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>

    </section>

    <section class="footer">

        <div class="share">

            <img width="30" height="30" src="https://img.icons8.com/ios/30/instagram-new--v1.png"
                alt="instagram-new--v1" />
            <img width="30" height="30" src="https://img.icons8.com/ios/30/facebook-new.png" alt="facebook-new" />
            <img width="30" height="30" src="https://img.icons8.com/ios/30/twitterx--v2.png" alt="twitterx--v2" />

       <div class="credit">
    Criado por <span>Kauã Castro • Jan Lucas • Lucas • Daniel</span> |
    Todos os direitos reservados.
</div>

</body>

</html>
