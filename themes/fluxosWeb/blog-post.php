<?php $this->layout("_theme", ["head" => $head]); ?>
<section class="blog">
    <article class="banner-blog">
        <header class="blog-header-post container">
            <h1><?= ($title ?? $post->title) ?></h1>
        </header>
    </article>
</section>
<section class="post-article container">
    <?php if (!empty($blog) && empty($search)) : ?>
    <!--EMPTY CONTENT-->
    <div class="emptyContent box-column-12">
        <div class="empty_content">
            <h3 class="empty_content_title">Sua pesquisa não retornou resultados :/</h3>
            <p class="empty_content_desc">Você pesquisou por <strong>teste</strong>. Tente outros termos. :)</p>
            <a class="btn btn_js" href="<?= url("/blog"); ?>" title="Blog">
                ...ou Voltar ao blog
            </a>
        </div>
    </div>
    <?php elseif (!empty($blog)) : ?>
    <div class="emptyContent box-column-12">
        <div class="empty_content">
            <h3 class="empty_content_title">Ainda estamos trabalhando aqui!</h3>
            <p class="empty_content_desc">Nosso editores estão preparando um conteúdo para você. :)</p>
        </div>
    </div>
    <?php else : ?>
    <article class="post-container">
        <header>
            <figure>
                <img alt="<?= $post->title; ?>" title="<?= $post->title; ?>" src="<?= image($post->cover, 1280); ?>">
            </figure>
            <p class="autor"><span>Autor:</span>
                <?= "{$post->author()->first_name} {$post->author()->last_name}"; ?></p>
            <p class="category">
                <a title="Artigos em <?= $post->category()->title; ?>"
                    href="<?= url("/blog/em/{$post->category()->uri}"); ?>"><span>Categoria:</span>
                    <?= $post->category()->title; ?></a>
            </p>
            <h2><?= $post->subtitle ?></h2>
        </header>
        <div class="post-content">
            <?= html_entity_decode($post->content) ?>
        </div>
        <div class="social_share">
            <span class="icon-share-alt"></span>
            <ul class="ul-social-share">
                <li data-href="<?= url("/blog/{$post->uri}"); ?>" data-layout="button_count" data-size="large"
                    data-mobile-iframe="true"><a
                        href="https://www.instagram.com/sharer/sharer.php?u=<?= urlencode(url("/blog/{$post->uri}")); ?>"
                        target="_blank" class="icon-instagram " alt="Nos ajude a compartilhar no seu Instagram"></a>
                </li>

                <li data-href="<?= url("/blog/{$post->uri}"); ?>" data-layout="button_count" data-size="large"
                    data-mobile-iframe="true">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode(url("/blog/{$post->uri}")); ?>"
                        target="_blank" class="icon-facebook-square" alt="Nos ajude a compartilhar no seu facebook"></a>
                </li>
                <li data-href="<?= url("/blog/{$post->uri}"); ?>" data-layout="button_count" data-size="large"
                    data-mobile-iframe="true">
                    <a href="https://www.linkedin.com/sharer/sharer.php?u=<?= urlencode(url("/blog/{$post->uri}")); ?>"
                        target="_blank" class="icon-linkedin" alt="Nos ajude a compartilhar no seu Linkedin"></a>
                </li>
            </ul>
        </div>
    </article>
    <?php $this->insert("aside", ["categories" => $categories]); ?>
    <?php if (!empty($related)) : ?>
    <div class="blog-home">
        <header class="header-home">
            <h3>artigos relacionados</h3>
        </header>
        <?php foreach ($related as $more) : ?>
        <?php $this->insert("article", ["post" => $more]); ?>
        <?php endforeach ?>
    </div>
    <?php endif ?>
    <?php endif; ?>

</section>

<?php $this->start("scripts"); ?>
<div id="fb-root"></div>
<script>
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src =
        'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.1&appId=267654637306249&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<?php $this->end(); ?>