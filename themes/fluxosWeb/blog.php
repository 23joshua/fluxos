<?php $this->layout("_theme", ["head" => $head]); ?>
<section class="blog">
    <article class="banner-blog">
        <header class="blog-header container">
            <h1><?= ($title ?? "BLOG") ?></h1>
            <p><?= ($search ?? $desc ?? "Confira nossas dicas para fazer ótimas estratégias de Marketing para a sua empresa/negócio") ?>
            </p>
            <form name="search" class="blog-form-search" action="<?= url("/blog/buscar"); ?>" method="post"
                enctype="multipart/form-data">
                <label>
                    <input type="text" name="s" placeholder="Encontre um artigo:" required />
                    <button class="btn btn_js">pesquisar</button>
                </label>
            </form>
        </header>
    </article>
</section>
<section class="article container">
    <?php if (empty($blog) && !empty($search)) : ?>
    <!--EMPTY CONTENT-->
    <div class="emptyContent box-column-12">
        <div class="empty_content">
            <h3 class="empty_content_title">Sua pesquisa não retornou resultados :/</h3>
            <p class="empty_content_desc">Você pesquisou por <b><?= $search ?></b>. Tente outros termos. :)</p>
            <a class="btn btn_js" href="<?= url("/blog"); ?>" title="Blog">
                ...ou Voltar ao blog
            </a>
        </div>
    </div>
    <?php elseif (empty($blog)) : ?>
    <div class="emptyContent box-column-12">
        <div class="empty_content">
            <h3 class="empty_content_title">Ainda estamos trabalhando aqui!</h3>
            <p class="empty_content_desc">Nosso editores estão preparando um conteúdo para você. :)</p>
        </div>
    </div>
    <?php else : ?>
    <div class="blog-article box-column-9">
        <?php foreach ($blog as $post) : ?>
        <?php $this->insert("article", ["post" => $post]); ?>
        <?php endforeach; ?>
        <?= $paginator; ?>
    </div>
    <?php $this->insert("aside", ["categories" => $categories]); ?>
    <?php endif; ?>
</section>