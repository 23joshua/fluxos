<article class="blog-post box-column-6">
    <header class="blog-post-header">
        <figure>
            <a title="Artigos em <?= $post->category()->title; ?>" href="<?= url("/blog/em/{$post->category()->uri}"); ?>">
                <img src="<?= image($post->cover, 600, 390); ?>" alt="<?= $post->title; ?>">
            </a>
        </figure>
    </header>
    <div class="blog-content">
        <h2><a href="<?= url("/blog/{$post->uri}"); ?>" title="<?= $post->title; ?>"><?= $post->title; ?></a></h2>
        <p class="category">
            <a title="Artigos em <?= $post->category()->title; ?>" href="<?= url("/blog/em/{$post->category()->uri}"); ?>"><?= str_limit_chars($post->content, 200); ?></a>
        </p>
    </div>
</article>