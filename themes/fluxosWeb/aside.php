<aside class="aside box-column-3">
    <form name="search" class="blog-form-search" action="<?= url("/blog/buscar"); ?>" method="post"
        enctype="multipart/form-data">
        <label>
            <input type="text" name="s" placeholder="Encontre um artigo:" required />
            <button class="btn btn_js">pesquisar</button>
        </label>
    </form>
    <ul class="blog-category box-column-12">
        <h3>categorias</h3>
        <?php if (!$categories) : ?>
        <li><a href="">Ainda não existem categorias cadastradas em seu blog</a></li>
        <?php else : ?>
        <?php foreach ($categories as $category) : ?>
        <li>
            <a href="<?= url("/blog/em/{$category->uri}"); ?>" title="Artigos em <?= $category->title; ?>">
                <?= $category->title; ?>
                [ <b><?= $category->posts()->count(); ?></b> ]
            </a>
        </li>
        <?php endforeach; ?>
        <?php endif; ?>
    </ul>
    <div class="blog-news box-column-12">
        <h3>newsletter</h3>
        <form action="" class="form blog-form-news">
            <p> <input type="text" name="" id="" placeholder="seu nome"></p>
            <p><input type="text" name="" id="" placeholder="@seumelhoremail.com"></p>
            <button class="btn btn_js">
                enviar</button>
        </form>
    </div>
    <ul class="blog-key box-column-12">
        <h3>palavras chaves</h3>
        <p>encontre-nos através</p>
        <li>JS Agência de marketing</li>
        <li>Branding</li>
        <li>Email marketing</li>
        <li>Marketing Digital</li>
        <li>SEO</li>
        <li>inbound marketing</li>
    </ul>
</aside>