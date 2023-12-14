<?php $this->layout("_theme", ["head" => $head]); ?>
<section class="contact">
    <?php $this->insert("banner") ?>

    <?php $this->insert("contract") ?>
    <article class="contact-form container" id="form">
        <div class="bg-contacte box-column-4">

        </div>
        <div class="form-content box-column-8">
            <h3>Fale connosco</h3>
            <address class="address">
                <h3>cotactos</h3>
                <p><span>e-mail:</span>josuechone@jsbrilliantmind.com</p>
                <p><span>telefone:</span> +255 84 43 06 999</p>
                <p><span>endereço:</span>bairro de Hulene "A" rua 5</p>
            </address>
            <form action="" class="form" method="post" id="form">
                <div class="form-box-1">
                    <input type="text" name="" id="" placeholder="Name*">
                    <input type="email" name="" id="" placeholder="Email*">
                    <input type="text" name="" id="" placeholder="empresa*">
                    <input type="text" name="" id="" placeholder="Telefone*">
                    <select name="" id="">
                        <option value="" required="required">Número de colaboradores</option>
                        <option value="">1 - 2</option>
                        <option value="">5 - 10</option>
                        <option value="">10 - 20</option>
                        <option value="">20 - 30</option>
                        <option value="">30 - 40</option>
                        <option value="">40 - 50</option>
                        <option value="">50 - 100</option>
                        <option value="">Acima de 100</option>
                    </select>
                </div>
                <div class="form-box-2">
                    <label for="breading"><input type="checkbox" name="" id="breading">Breading</label>
                    <label for="gads"><input type="checkbox" name="" id="gads">Google ADS</label>
                    <label for="fads"><input type="checkbox" name="" id="fads">Facebook ADS</label>
                    <label for="sites"><input type="checkbox" name="" id="sites">Criação de sites</label>
                    <label for="mark"><input type="checkbox" name="" id="mark">Marketing digital</label>
                    <label for="imark"><input type="checkbox" name="" id="imark">Inbound Marketing</label>
                    <label for="emai-mark"><input type="checkbox" name="emai-mark"
                            id="emai-mark">Email-Marketing</label>
                    <label for="seo"><input type="checkbox" name="" id="seo">Consultoria em SEO</label>
                    <label for="markc"><input type="checkbox" name="" id="markc">marketing de conteúdo</label>
                    <select name="" id="">
                        <option value="" required="required">Cargo</option>
                        <option value="">Proprietário</option>
                        <option value="">Diretor</option>
                        <option value="">Sócio</option>
                        <option value="">Gerente</option>
                        <option value="">Analista</option>
                        <option value="">Supervisor</option>
                        <option value="">Colaborador</option>
                        <option value="">Outro</option>
                    </select>
                </div>
                <textarea name="" id="" cols="30" rows="7">

                </textarea>
                <input type="submit" value="enviar" class="btn btn_js">
            </form>
        </div>
    </article>
</section>