<section class="faq container">
    <div class="faq-container box-column-5">
        <header class="header-home">
            <h2>perguntas frequentes</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </header>
        <?php if (!empty($faq)) : ?>
        <?php foreach ($faq as $question) : ?>
        <article class="faq-content">
            <header>
                <h2><?= $question->question ?></h2>
                <span class="span-down icon-angle-down"></span>
                <span class="span-up icon-angle-up"></span>
            </header>
            <div class="faq-content-box">
                <p><?= $question->response ?></p>
            </div>
        </article>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div class="faq-bg box-column-7">
        <img src="<?= theme("assets/img/faq.webp"); ?>" alt="">
    </div>
</section>