<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $head; ?>
    <link rel="shortcut icon" href="<?= theme("/assets/img/logo-js.webp
"); ?>" type="image/png">
    <link rel="stylesheet" href="<?= theme("/assets/css/styles.css"); ?>">
    <link rel="stylesheet" href="<?= theme("/assets/css/style.css"); ?>">
    <?php $this->section("styles"); ?>
    <title>fluxus</title>
</head>

<body>
    <div style="display: none" class="ajax_load">
        <div class="ajax_load_box">
            <div class="ajax_load_box_circle"></div>
            <p class="ajax_load_box_title">Aguarde, carregando...</p>
        </div>
    </div>
    <header class="header">
        <div class="header-container container">
            <div class="header-logo">
                <a href="<?= url(); ?>">
                    <img src="<?= theme("assets/img/"); ?>" class="" alt="JS Brilliant Mind">
                    fluxus
                </a>
            </div>

            <nav class="nav">
                <a href="<?= url("/sobre"); ?>" class="nav-link" title="home" class="a-nav">quem somos</a>
                <a href="<?= url("/blog"); ?>" class="nav-link" title="blog" class="a-nav">blog</a>
                <a href="<?= url("/empresas"); ?>" class="nav-link" title="sobre nós" class="a-nav">empresas</a>
                <a href="<?= url("/contacto"); ?>" class="nav-link" title="contactos" class="a-nav">contactos</a>
                <a href="<?= url("/contacto"); ?>" title="contactos" class="btn btn_fluxus btn_header">entrar</a>
            </nav>

            <div class="bars-toggle">
                <span class="toggle icon-bars"></span>
            </div>
        </div>
    </header>

    <!-- Main -->
    <main class=" main">
        <?= $this->section("content"); ?>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container container">
            <header class="header-home">
                <h2>contactos</h2>
            </header>
            <ul class="ul-footer">
                <li>info@fluxus.co.mz</li>
                <li>+258 80 00 00 000</li>
                <li>av. rua, bairro, nº000</li>
            </ul>
            <div class="footer-copyRight">
                <p class="copy">todos direitos reservado || <span>&copy fluxus</span> <?= date("Y") ?></p>
            </div>
        </div>
    </footer>


    <script async src="https://www.googletagmanager.com/gtag/js?id=G-N7M1MK8JLL"></script>
    <script src="<?= theme("/assets/scripts.js"); ?>">
    </script>
    <?= $this->section("scripts"); ?>

</body>

</html>