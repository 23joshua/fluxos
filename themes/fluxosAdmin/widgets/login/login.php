<?php $this->layout("_login", ["head" => $head]); ?>

<div class="login">
    <article class="login_box radius">
        <h1 class="hl icon-coffee">Login</h1>
        <div class="ajax_response"><?= flash(); ?></div>

        <form name="login" action="<?= url("/admin/login"); ?>" method="post">
            <label>
                <span class="field icon-envelope">E-mail:</span>
                <input name="email" type="email" placeholder="Informe seu e-mail" required />
            </label>

            <label>
                <span class="field icon-unlock-alt">Senha:</span>
                <input name="password" type="password" placeholder="Informe sua senha:" required />
            </label>

            <button class="radius gradient gradient-green gradient-hover icon-sign-in">Entrar</button>
        </form>

        <footer>
            <p>Desenvolvido por www.<b>jsbrilliantmind</b>.com</p>
            <p>&copy; <?= date("Y"); ?> - todos os direitos reservados</p>
            <a target="_blank" class="icon-whatsapp transition" href=", preciso de ajuda com o login.">Telefone: (+258)
                84 43 06 999</a>
        </footer>
    </article>
</div>