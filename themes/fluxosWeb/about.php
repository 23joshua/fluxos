<?php $this->layout("_theme", ["head" => $head]); ?>
<?php $this->insert("banner") ?>
<section class="about container">
    <article class="about-box"><span class="icon-rocket"></span></article>
    <article class="about-box"><span class="icon-cogs"></span></article>
    <article class="about-box"><span class="icon-film"></span></article>
    <article class="about-box">
        <h3>visão</h3>
        <p>Ser a agência de referência no pais, reconhecida pela qualidade dos seus produtos e serviços, ser a primeira
            opção na escolha dos nossos clientes.</p>
    </article>
    <article class="about-box"><span class="icon-coffee"></span></article>
    <article class="about-box"><span class="icon-picture-o"></span></article>
    <article class="about-box">
        <h3>O que podemos fazer por você</h3>
        <ul>
            <li>Inbound Marketing</li>
            <li>Marketing Digital</li>
            <li>Consultoria em SEO</li>
            <li>fluxo de nutrição</li>
            <li>Criação de Sites</li>
            <li>Uma MARCA IMPACTANTE</li>
            <li>e muito mais...</li>
        </ul>
    </article>
    <article class="about-box"><span class="icon-headphone"></span></article>
    <article class="about-box">
        <h3>nós acreditamos em experiência digitais</h3>
        <p>Entendemos que uma boa experiência tem um alto impacto positivo para o consumidor. Por isso cada detalhe é
            cuidadosamente planejado para oferecer uma experiência incrível desde o primeiro contacto.</p>
    </article>
    <article class="about-box"><span class="icon-bullhorn"></span></article>
    <article class="about-box">
        <h3>valores</h3>
        <ul>
            <li>Inovação</li>
            <li>Honestidade</li>
            <li>Comprometimento</li>
            <li>Satisfação do Cliente</li>
            <li>Foco nas necessidades do público</li>
        </ul>
    </article>
    <article class="about-box">
        <h3>Acreditamos nos seus sonhos</h3>
        <p>Nós acreditamos que os sonham é são os que transformam o mundo. Queremos te ajudar a realizar os seus sonhos.
        </p>
        <p class="citacao">
            “Um sonho é uma imagem inspiradora do futuro que energiza sua mente, a sua vontade e as suas emoções,
            dando-lhe forças para fazer todo o esfoço possível a fim de alcança-lo.”
        </p>
        <strong>Johon C. Maxwell</strong>
    </article>
    <article class="about-box">
        <h3>missão</h3>
        <p>Produzir e desenvolver estratégias inovadoras de marketing digital que façam as marcas ter mais valor no
            mercado que atuam e gerar mais vendas para as mesmas.</p>
    </article>
    <article class="about-box"><span class="icon-trophy"></span></article>
    <article class="about-box"><span class="icon-shopping-cart"></span></article>
    <article class="about-box"><span class="icon-map-signs"></span></article>
    <article class="about-box">
        <h3>saiba o que podemos fazer por você</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quibusdam incidunt excepturi sunt mollitia fugiat
            harum, alias aliquam doloremque labore.</p>
    </article>
    <article class="about-box"><span class="icon-slack"></span></article>
    <article class="about-box"><span class="icon-puzzle-piece"></span></article>
    <article class="about-box">
        <h3>saiba o que podemos fazer por você</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quibusdam incidunt excepturi sunt mollitia fugiat
            harum, alias aliquam doloremque labore.</p>
    </article>
    <article class="about-box"><span class="icon-lightbulb-o"></span></article>
    <article class="about-box"><span class="icon-camera"></span></article>
    <article class="about-box">
        <h3>saiba o que podemos fazer por você</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quibusdam incidunt excepturi sunt mollitia fugiat
            harum, alias aliquam doloremque labore.</p>
    </article>
    <article class="about-box"><span class="icon-share-alt"></span></article>
    <article class="about-box"><span class="icon-pie-chart"></span></article>
</section>

<?php $this->insert("collaborators") ?>

<article class="quotations">
    <div class="box-quotations container">
        <q><span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt porro laudantium quis, libero magnam
                adipisci
                consequuntur sit facere velit, eaque tempore ea. Enim modi hic sint cumque quis error amet?</span></q>
        <p><span>autor</span><br> joshua Shony</p>
    </div>
</article>

<?php require __DIR__ . "/gallery.php"; ?>

<?php $this->insert("faq", ["faq" => $faq]) ?>