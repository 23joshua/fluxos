<?php $this->layout("_theme", ["head" => $head]); ?>

<!-- Banner Home -->
<article class="banner-home">
    <div class="banner-container container">
        <header class="banner-header">
            <h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur minus mollitia accusantium eligendi in
                corrupti.
            </h1>
            <a href="<?= url("/blog"); ?>" class="btn btn_fluxus">
                veja o nosso blog
            </a>
        </header>
    </div>
</article>

<!-- category Home -->
<section class="category">
    <div class="category-container container">
        <article class="category-content">
            <header>
                <figure>
                    <img src="" alt="">
                </figure>
                <h3>Lorem ipsum dolor sit</h3>
            </header>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto distinctio qui explicabo alias eos ipsam
                omnis quasi ipsum esse officiis asperiores, vel corrupti quae impedit consectetur nemo. Fugiat, totam
                reiciendis?</p>
        </article>
        <article class="category-content">
            <header>
                <figure>
                    <img src="" alt="">
                </figure>
                <h3>Lorem ipsum dolor sit</h3>
            </header>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto distinctio qui explicabo alias eos ipsam
                omnis quasi ipsum esse officiis asperiores, vel corrupti quae impedit consectetur nemo. Fugiat, totam
                reiciendis?</p>
        </article>
        <article class="category-content">
            <header>
                <figure>
                    <img src="" alt="">
                </figure>
                <h3>Lorem ipsum dolor sit</h3>
            </header>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex assumenda enim minus tempore sit eaque iure?
                Ab ea perspiciatis earum quam, quae ex! Est consequuntur molestiae ipsa nostrum perspiciatis vitae.</p>
        </article>
        <article class="category-content">
            <header>
                <figure>
                    <img src="" alt="">
                </figure>
                <h3>Lorem ipsum dolor sit</h3>
            </header>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto distinctio qui explicabo alias eos ipsam
                omnis quasi ipsum esse officiis asperiores, vel corrupti quae impedit consectetur nemo. Fugiat, totam
                reiciendis?</p>
        </article>
        <article class="category-content">
            <header>
                <figure>
                    <img src="" alt="">
                </figure>
                <h3>Lorem ipsum dolor sit</h3>
            </header>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto distinctio qui explicabo alias eos ipsam
                omnis quasi ipsum esse officiis asperiores, vel corrupti quae impedit consectetur nemo. Fugiat, totam
                reiciendis?</p>
        </article>
        <article class="category-content">
            <header>
                <figure>
                    <img src="" alt="">
                </figure>
                <h3>Lorem ipsum dolor sit</h3>
            </header>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga ex culpa vero beatae, sit incidunt unde,
                sapiente molestias mollitia expedita, optio minus eveniet praesentium vel at dicta quibusdam aliquam id.
            </p>
        </article>
    </div>
</section>

<!-- Service Home -->
<section class="service">
    <div class="service-container container">
        <header class="header-home">
            <h2>empresas e sues produtos/serviços</h2>
        </header>
        <article class="service-content">
            <figure><img src="<?= theme("assets/img/m.webp"); ?>" alt=""></figure>
            <header>
                <figure><img src="<?= theme("assets/img/s.webp"); ?>" alt=""></figure>
                <h5>nome da empresa</h5>
                <p>descrição da empresa</p>
            </header>
        </article>
        <article class="service-content">
            <figure><img src="<?= theme("assets/img/m.webp"); ?>" alt=""></figure>
            <header>
                <figure><img src="<?= theme("assets/img/s.webp"); ?>" alt=""></figure>
                <h5>nome da empresa</h5>
                <p>descrição da empresa</p>
            </header>
        </article>
        <article class="service-content">
            <figure><img src="<?= theme("assets/img/m.webp"); ?>" alt=""></figure>
            <header>
                <figure><img src="<?= theme("assets/img/s.webp"); ?>" alt=""></figure>
                <h5>nome da empresa</h5>
                <p>descrição da empresa</p>
            </header>
        </article>
        <article class="service-content">
            <figure><img src="<?= theme("assets/img/m.webp"); ?>" alt=""></figure>
            <header>
                <figure><img src="<?= theme("assets/img/s.webp"); ?>" alt=""></figure>
                <h5>nome da empresa</h5>
                <p>descrição da empresa</p>
            </header>
        </article>
        <ul class="ul-service">
            <li><a href="">construção11</a></li>
            <li><a href="">construção21</a></li>
            <li><a href="">construção31</a></li>
            <li><a href="">construção41</a></li>
        </ul>
    </div>
</section>
<?php if (!empty($blogViews)) : ?>
    <section class="blog-top-views">
        <div class="blog-top-views-container container">
            <?php foreach ($blogViews as $post) : ?>
                <article class="blog-post">

                    <div class="blog-content">
                        <h2><?= $post->title; ?></h2>
                        <p><a title="<?= $post->title; ?>" href="<?= url("/blog/{$post->uri}"); ?>">
                                <?= str_limit_chars($post->content, 200); ?></a></p>
                        <a title="<?= $post->title; ?>" href="<?= url("/blog/{$post->uri}"); ?>" class="btn btn_fluxus">ver
                            mais</a>
                    </div>
                    <header class="blog-post-header">
                        <figure>
                            <img src="<?= image($post->cover, 600, 390); ?>" alt="<?= $post->title; ?>">
                        </figure>
                    </header>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>

<!-- About Home -->
<article class="about-home">
    <div class="box-about container">
        <header class="header-home">
            <h2>sobre nós</h2>
        </header>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum consectetur temporibus repudiandae
            aspernatur architecto maxime vero cumque perferendis necessitatibus ex modi impedit harum corrupti, quaerat
            natus nam ratione! Consequatur, exercitationem.
        </p>
        <a href="<?= url("/sobre"); ?>" class="btn btn_fluxus">saiba mais</a>
    </div>
</article>

<!-- Blog home -->
<?php if (!empty($blog)) : ?>
    <section class="blog-home">
        <div class="blog-home-container container">
            <header class="header-home">
                <h2>blog</h2>
            </header>

            <?php foreach ($blog as $post) : ?>
                <?php $this->insert("article", ["post" => $post]); ?>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>