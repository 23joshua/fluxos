<?php

namespace Source\App;

use Source\Core\Controller;
use Source\Models\Auth;
use Source\Models\Category;
use Source\Models\Faq\Question;
use Source\Models\Post;
use Source\Models\Report\Access;
use Source\Models\Report\Online;
use Source\Models\User;
use Source\Support\Pager;
use Source\Support\Email;

/**
 * Web Controller
 * @package Source\App
 */
class Web extends Controller
{
    /**
     * Web constructor.
     */
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");

        (new Access())->report();
        (new Online())->report();
    }

    /**
     * SITE HOME
     */
    public function home(): void
    {
        $head = $this->seo->render(
            CONF_SITE_NAME . " - " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            theme("/assets/images/share.jpg")
        );

        echo $this->view->render("home", [
            "head" => $head,
            "blog" => (new Post())
                ->findPost()
                ->order("post_at DESC")
                ->limit(3)
                ->fetch(true),
            "blogViews" => (new Post())
                ->findPost()
                ->order("views")
                ->limit(1)
                ->fetch(true)
        ]);
    }

    /**
     * SITE ABOUT
     */
    public function about(): void
    {
        $head = $this->seo->render(
            "Descubra a " . CONF_SITE_NAME . " - " . CONF_SITE_DESC,
            CONF_SITE_DESC,
            url("/sobre"),
            theme("/assets/images/share.jpg")
        );

        echo $this->view->render("about", [
            "head" => $head,
            "video" => "lDZGl9Wdc7Y",
            "faq" => (new Question())
                ->find("channel_id = :id", "id=1", "question, response")
                ->order("order_by")
                ->fetch(true)
        ]);
    }

    /**
     * SITE SERVICE
     */
    public function services(): void
    {
        $head = $this->seo->render(
            "Conheça as soluções da " . CONF_SITE_NAME . " - " . CONF_SITE_DESC,
            CONF_SITE_DESC,
            url("/servico"),
            theme("/assets/images/share.jpg")
        );

        echo $this->view->render("services", [
            "head" => $head,
            "faq" => (new Question())
                ->find("channel_id = :id", "id=1", "question, response")
                ->order("order_by")
                ->fetch(true)
        ]);
    }

    /**
     * SITE branding
     */
    public function branding(): void
    {
        $head = $this->seo->render(
            "Branding na " . CONF_SITE_NAME . " - " . CONF_SITE_DESC,
            CONF_SITE_DESC,
            url("/branding"),
            theme("/assets/images/share.jpg")
        );

        echo $this->view->render("branding", [
            "head" => $head,
            "faq" => (new Question())
                ->find("channel_id = :id", "id=1", "question, response")
                ->order("order_by")
                ->fetch(true)
        ]);
    }

    /**
     * SITE GOOGLE ADS
     */
    public function googleads(): void
    {
        $head = $this->seo->render(
            "Google ADS na " . CONF_SITE_NAME . " - " . CONF_SITE_DESC,
            CONF_SITE_DESC,
            url("/googleads"),
            theme("/assets/images/share.jpg")
        );

        echo $this->view->render("googleads", [
            "head" => $head,
            "faq" => (new Question())
                ->find("channel_id = :id", "id=1", "question, response")
                ->order("order_by")
                ->fetch(true)
        ]);
    }

    /**
     * SITE facebook ADS
     */
    public function facebookads(): void
    {
        $head = $this->seo->render(
            "Facebook ADS na " . CONF_SITE_NAME . " - " . CONF_SITE_DESC,
            CONF_SITE_DESC,
            url("/facebookads"),
            theme("/assets/images/share.jpg")
        );

        echo $this->view->render("facebookads", [
            "head" => $head,
            "faq" => (new Question())
                ->find("channel_id = :id", "id=1", "question, response")
                ->order("order_by")
                ->fetch(true)
        ]);
    }

    /**
     * SITE Email marketing
     */
    public function mailmark(): void
    {
        $head = $this->seo->render(
            "Email-marketing na " . CONF_SITE_NAME . " - " . CONF_SITE_DESC,
            CONF_SITE_DESC,
            url("/mailmark"),
            theme("/assets/images/share.jpg")
        );

        echo $this->view->render("mailmark", [
            "head" => $head,
            "faq" => (new Question())
                ->find("channel_id = :id", "id=1", "question, response")
                ->order("order_by")
                ->fetch(true)
        ]);
    }

    /**
     * SITE Criação de site
     */
    public function website(): void
    {
        $head = $this->seo->render(
            "Criação de site " . CONF_SITE_NAME . " - " . CONF_SITE_DESC,
            CONF_SITE_DESC,
            url("/website"),
            theme("/assets/images/share.jpg")
        );

        echo $this->view->render("website", [
            "head" => $head,
            "faq" => (new Question())
                ->find("channel_id = :id", "id=1", "question, response")
                ->order("order_by")
                ->fetch(true)
        ]);
    }

    /**
     * SITE Inbound Marketing
     */
    public function inbound(): void
    {
        $head = $this->seo->render(
            "Inbound Marketing " . CONF_SITE_NAME . " - " . CONF_SITE_DESC,
            CONF_SITE_DESC,
            url("/inbound"),
            theme("/assets/images/share.jpg")
        );

        echo $this->view->render("inbound", [
            "head" => $head,
            "faq" => (new Question())
                ->find("channel_id = :id", "id=1", "question, response")
                ->order("order_by")
                ->fetch(true)
        ]);
    }

    /**
     * SITE Inbound Marketing
     */
    public function marketingdigital(): void
    {
        $head = $this->seo->render(
            "Marketing Digital " . CONF_SITE_NAME . " - " . CONF_SITE_DESC,
            CONF_SITE_DESC,
            url("/marketingdigital"),
            theme("/assets/images/share.jpg")
        );

        echo $this->view->render("marketingdigital", [
            "head" => $head,
            "faq" => (new Question())
                ->find("channel_id = :id", "id=1", "question, response")
                ->order("order_by")
                ->fetch(true)
        ]);
    }

    /**
     * SITE SEO
     */
    public function seo(): void
    {
        $head = $this->seo->render(
            "Consultoria em SEO " . CONF_SITE_NAME . " - " . CONF_SITE_DESC,
            CONF_SITE_DESC,
            url("/seo"),
            theme("/assets/images/share.jpg")
        );

        echo $this->view->render("seo", [
            "head" => $head,
            "faq" => (new Question())
                ->find("channel_id = :id", "id=1", "question, response")
                ->order("order_by")
                ->fetch(true)
        ]);
    }

    /**
     * SITE Inbound Marketing
     */
    public function marketingconteudo(): void
    {
        $head = $this->seo->render(
            "Marketing Digital " . CONF_SITE_NAME . " - " . CONF_SITE_DESC,
            CONF_SITE_DESC,
            url("/marketingconteudo"),
            theme("/assets/images/share.jpg")
        );

        echo $this->view->render("marketingconteudo", [
            "head" => $head,
            "faq" => (new Question())
                ->find("channel_id = :id", "id=1", "question, response")
                ->order("order_by")
                ->fetch(true)
        ]);
    }

    /**
     * SITE BLOG
     * @param array|null $data
     */
    public function blog(?array $data): void
    {
        $head = $this->seo->render(
            "Blog - " . CONF_SITE_NAME,
            "Confira em nosso blog dicas e sacadas de como gerenciar as suas estratégias de marketing. Vamos tomar um café?",
            url("/blog"),
            theme("/assets/images/share.jpg")
        );

        $categories = (new Category())->find();
        $blog = (new Post())->findPost();
        $pager = new Pager(url("/blog/p/"));
        $pager->pager($blog->count(), 8, ($data['page'] ?? 1));

        echo $this->view->render("blog", [
            "head" => $head,
            "blog" => $blog->order("post_at DESC")->limit($pager->limit())->offset($pager->offset())->fetch(true),
            "categories" => $categories->order("title")->limit($pager->limit())->offset($pager->offset())->fetch(true),
            "paginator" => $pager->render()
        ]);
    }

    /**
     * SITE BLOG CATEGORY
     * @param array $data
     */
    public function blogCategory(array $data): void
    {
        $categoryUri = filter_var($data["category"], FILTER_SANITIZE_STRIPPED);
        $category = (new Category())->findByUri($categoryUri);

        if (!$category) {
            redirect("/blog");
        }

        $categories = (new Category())->find();
        $blogCategory = (new Post())->findPost("category = :c", "c={$category->id}");
        $page = (!empty($data['page']) && filter_var($data['page'], FILTER_VALIDATE_INT) >= 1 ? $data['page'] : 1);
        $pager = new Pager(url("/blog/em/{$category->uri}/"));
        $pager->pager($blogCategory->count(), 8, $page);

        $head = $this->seo->render(
            "Artigos sobre {$category->title} - " . CONF_SITE_NAME,
            $category->description,
            url("/blog/em/{$category->uri}/{$page}"),
            ($category->cover ? image($category->cover, 1200, 628) : theme("/assets/images/share.jpg"))
        );

        echo $this->view->render("blog", [
            "head" => $head,
            "title" => "Artigos em {$category->title}",
            "desc" => $category->description,
            "blog" => $blogCategory
                ->limit($pager->limit())
                ->offset($pager->offset())
                ->order("post_at DESC")
                ->fetch(true),
            "categories" => $categories->order("title")->limit($pager->limit())->offset($pager->offset())->fetch(true),
            "paginator" => $pager->render()
        ]);
    }

    /**
     * SITE BLOG SEARCH
     * @param array $data
     */
    public function blogSearch(array $data): void
    {
        if (!empty($data['s'])) {
            $search = str_search($data['s']);
            echo json_encode(["redirect" => url("/blog/buscar/{$search}/1")]);
            return;
        }

        $search = str_search($data['search']);
        $page = (filter_var($data['page'], FILTER_VALIDATE_INT) >= 1 ? $data['page'] : 1);

        if ($search == "all") {
            redirect("/blog");
        }

        $head = $this->seo->render(
            "Pesquisa por {$search} - " . CONF_SITE_NAME,
            "Confira os resultados de sua pesquisa para {$search}",
            url("/blog/buscar/{$search}/{$page}"),
            theme("/assets/images/share.jpg")
        );

        $blogSearch = (new Post())->findPost("MATCH(title, subtitle) AGAINST(:s)", "s={$search}");

        if (!$blogSearch->count()) {
            echo $this->view->render("blog", [
                "head" => $head,
                "title" => "PESQUISA POR:",
                "search" => $search
            ]);
            return;
        }

        $categories = (new Category())->find();
        $pager = new Pager(url("/blog/buscar/{$search}/"));
        $pager->pager($blogSearch->count(), 8, $page);

        echo $this->view->render("blog", [
            "head" => $head,
            "title" => "PESQUISA POR:",
            "search" => $search,
            "blog" => $blogSearch->limit($pager->limit())->offset($pager->offset())->fetch(true),
            "categories" => $categories->order("title")->limit($pager->limit())->offset($pager->offset())->fetch(true),
            "paginator" => $pager->render()
        ]);
    }

    /**
     * SITE BLOG POST
     * @param array $data
     */
    public function blogPost(array $data): void
    {
        $post = (new Post())->findByUri($data['uri']);
        if (!$post) {
            redirect("/404");
        }

        $user = Auth::user();
        if (!$user || $user->level < 5) {
            $post->views += 1;
            $post->save();
        }

        $categories = (new Category())->find();
        $pager = new Pager(url("/blog/p/"));
        $pager->pager($categories->count(), 8, ($data['page'] ?? 1));
        $head = $this->seo->render(
            "{$post->title} - " . CONF_SITE_NAME,
            $post->subtitle,
            url("/blog/{$post->uri}"),
            ($post->cover ? image($post->cover, 1200, 628) : theme("/assets/images/share.jpg"))
        );

        echo $this->view->render("blog-post", [
            "head" => $head,
            "post" => $post,
            "related" => (new Post())
                ->findPost("category = :c AND id != :i", "c={$post->category}&i={$post->id}")
                ->order("rand()")
                ->limit(3)
                ->fetch(true),
            "categories" => $categories->order("title")->limit($pager->limit())->offset($pager->offset())->fetch(true),
            "paginator" => $pager->render()
        ]);
    }

    /**
     * SITE CONTACTE
     */
    public function contacte(): void
    {


        $head = $this->seo->render(
            "Fale com a " . CONF_SITE_NAME . " - " . CONF_SITE_DESC,
            CONF_SITE_DESC,
            url("/contacto"),
            theme("/assets/images/share.jpg")
        );

        echo $this->view->render("contacte", [
            "head" => $head
        ]);
    }

    /**
     * SITE LOGIN
     * @param null|array $data
     */
    public function login(?array $data): void
    {
        if (Auth::user()) {
            redirect("/app");
        }

        if (!empty($data['csrf'])) {
            if (!csrf_verify($data)) {
                $json['message'] = $this->message->error("Erro ao enviar, favor use o formulário")->render();
                echo json_encode($json);
                return;
            }

            if (request_limit("weblogin", 3, 60 * 5)) {
                $json['message'] = $this->message->error("Você já efetuou 3 tentativas, esse é o limite. Por favor, aguarde 5 minutos para tentar novamente!")->render();
                echo json_encode($json);
                return;
            }

            if (empty($data['email']) || empty($data['password'])) {
                $json['message'] = $this->message->warning("Informe seu email e senha para entrar")->render();
                echo json_encode($json);
                return;
            }

            $save = (!empty($data['save']) ? true : false);
            $auth = new Auth();
            $login = $auth->login($data['email'], $data['password'], $save);

            if ($login) {
                $this->message->success("Seja bem-vindo(a) de volta " . Auth::user()->first_name . "!")->flash();
                $json['redirect'] = url("/app");
            } else {
                $json['message'] = $auth->message()->before("Ooops! ")->render();
            }

            echo json_encode($json);
            return;
        }

        $head = $this->seo->render(
            "Entrar - " . CONF_SITE_NAME,
            CONF_SITE_DESC,
            url("/entrar"),
            theme("/assets/images/share.jpg")
        );

        echo $this->view->render("auth-login", [
            "head" => $head,
            "cookie" => filter_input(INPUT_COOKIE, "authEmail")
        ]);
    }

    /**
     * SITE PASSWORD FORGET
     * @param null|array $data
     */
    public function forget(?array $data)
    {
        if (Auth::user()) {
            redirect("/app");
        }

        if (!empty($data['csrf'])) {
            if (!csrf_verify($data)) {
                $json['message'] = $this->message->error("Erro ao enviar, favor use o formulário")->render();
                echo json_encode($json);
                return;
            }

            if (empty($data["email"])) {
                $json['message'] = $this->message->info("Informe seu e-mail para continuar")->render();
                echo json_encode($json);
                return;
            }

            if (request_repeat("webforget", $data["email"])) {
                $json['message'] = $this->message->error("Ooops! Você já tentou este e-mail antes")->render();
                echo json_encode($json);
                return;
            }

            $auth = new Auth();
            if ($auth->forget($data["email"])) {
                $json["message"] = $this->message->success("Acesse seu e-mail para recuperar a senha")->render();
            } else {
                $json["message"] = $auth->message()->before("Ooops! ")->render();
            }

            echo json_encode($json);
            return;
        }

        $head = $this->seo->render(
            "Recuperar Senha - " . CONF_SITE_NAME,
            CONF_SITE_DESC,
            url("/recuperar"),
            theme("/assets/images/share.jpg")
        );

        echo $this->view->render("auth-forget", [
            "head" => $head
        ]);
    }

    /**
     * SITE FORGET RESET
     * @param array $data
     */
    public function reset(array $data): void
    {
        if (Auth::user()) {
            redirect("/app");
        }

        if (!empty($data['csrf'])) {
            if (!csrf_verify($data)) {
                $json['message'] = $this->message->error("Erro ao enviar, favor use o formulário")->render();
                echo json_encode($json);
                return;
            }

            if (empty($data["password"]) || empty($data["password_re"])) {
                $json["message"] = $this->message->info("Informe e repita a senha para continuar")->render();
                echo json_encode($json);
                return;
            }

            list($email, $code) = explode("|", $data["code"]);
            $auth = new Auth();

            if ($auth->reset($email, $code, $data["password"], $data["password_re"])) {
                $this->message->success("Senha alterada com sucesso. Vamos controlar?")->flash();
                $json["redirect"] = url("/entrar");
            } else {
                $json["message"] = $auth->message()->before("Ooops! ")->render();
            }

            echo json_encode($json);
            return;
        }

        $head = $this->seo->render(
            "Crie sua nova senha no " . CONF_SITE_NAME,
            CONF_SITE_DESC,
            url("/recuperar"),
            theme("/assets/images/share.jpg")
        );

        echo $this->view->render("auth-reset", [
            "head" => $head,
            "code" => $data["code"]
        ]);
    }

    /**
     * SITE REGISTER
     * @param null|array $data
     */
    public function register(?array $data): void
    {
        $email = new Email();
        $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $data['url'] =  $_SERVER["HTTP_REFERER"];
        $url = explode("/", $data['url']);
        $message = '
            <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td>
                        <div class="content">
                            <h2>Obrigado(a) ' . $data["name"] . '</h2>
                            <p>Por entrar em contacto connosco. Em breve entraremos em contacto para responder o seu e-mail.</p>
                            <p>Atenciosamente, equipe ' . CONF_SITE_NAME . ' </p>
                        </div>
                        <div class="footer">
                            <p>' . CONF_SITE_NAME . ' - ' . CONF_SITE_TITLE . '</p>
                            <p>' . CONF_SITE_ADDR_STREET .  ' ,'
            . (CONF_SITE_ADDR_COMPLEMENT ? ", " . CONF_SITE_ADDR_COMPLEMENT : "") . '</p>
                            <p>' . CONF_SITE_ADDR_CITY . ' ' . CONF_SITE_ADDR_STATE . ' - ' . CONF_SITE_ADDR_ZIPCODE . '</p>
                            </div>
                            </td>
                            </tr>
                            </table>';

        if (!empty($data)) {
            $email->bootstrap(
                $data["assunto"] . " - " . CONF_SITE_NAME,
                $data["texto"],
                "josuechone@jsbrilliantmind.com",
                $data["name"]
            )->send();

            $email->bootstrap(
                "Obrigado - ",
                $message,
                $data["email"],
                $data["name"]
            )->send();

            redirect($url[4]);
        }

        $head = $this->seo->render(
            "Criar Conta - " . CONF_SITE_NAME,
            CONF_SITE_DESC,
            url("/contacto"),
            theme("/assets/images/share.jpg")
        );

        echo $this->view->render("auth-register", [
            "head" => $head
        ]);
    }

    /**
     * SITE OPT-IN CONFIRM
     */
    public function confirm(): void
    {
        $head = $this->seo->render(
            "Confirme Seu Cadastro - " . CONF_SITE_NAME,
            CONF_SITE_DESC,
            url("/confirma"),
            theme("/assets/images/share.jpg")
        );

        echo $this->view->render("optin", [
            "head" => $head,
            "data" => (object)[
                "title" => "Falta pouco! Confirme seu cadastro.",
                "desc" => "Enviamos um link de confirmação para seu e-mail. Acesse e siga as instruções para concluir seu cadastro e
comece a controlar com o CaféControl",
                "image" => theme("/assets/images/optin-confirm.jpg")
            ]
        ]);
    }

    /**
     * SITE OPT-IN SUCCESS
     * @param array $data
     */
    public function success(array $data): void
    {
        $email = base64_decode($data["email"]);
        $user = (new User())->findByEmail($email);

        if ($user && $user->status != "confirmed") {
            $user->status = "confirmed";
            $user->save();
        }

        $head = $this->seo->render(
            "Bem-vindo(a) ao " . CONF_SITE_NAME,
            CONF_SITE_DESC,
            url("/obrigado"),
            theme("/assets/images/share.jpg")
        );

        echo $this->view->render("optin", [
            "head" => $head,
            "data" => (object)[
                "title" => "Tudo pronto. Você já pode controlar :)",
                "desc" => "Bem-vindo(a) ao seu controle de contas, vamos tomar um café?",
                "image" => theme("/assets/images/optin-success.jpg"),
                "link" => url("/entrar"),
                "linkTitle" => "Fazer Login"
            ],
            "track" => (object)[
                "fb" => "Lead",
                "aw" => "AW-953362805/yAFTCKuakIwBEPXSzMYD"
            ]
        ]);
    }

    /**
     * SITE TERMS
     */
    public function terms(): void
    {
        $head = $this->seo->render(
            CONF_SITE_NAME . " - Termos de uso",
            CONF_SITE_DESC,
            url("/termos"),
            theme("/assets/images/share.jpg")
        );

        echo $this->view->render("terms", [
            "head" => $head
        ]);
    }

    /**
     * SITE NAV ERROR
     * @param array $data
     */
    public function error(array $data): void
    {
        $error = new \stdClass();

        switch ($data['errcode']) {
            case "problemas":
                $error->code = "OPS";
                $error->title = "Estamos enfrentando problemas!";
                $error->message = "Parece que nosso serviço não está diponível no momento. Já estamos vendo isso mas caso precise, envie
um e-mail :)";
                $error->linkTitle = "ENVIAR E-MAIL";
                $error->link = "mailto:" . CONF_MAIL_SUPPORT;
                break;

            case "manutencao":
                $error->code = "OPS";
                $error->title = "Desculpe. Estamos em manutenção!";
                $error->message = "Voltamos logo! Por hora estamos trabalhando para melhorar nosso conteúdo para você controlar melhor
as suas contas :P";
                $error->linkTitle = null;
                $error->link = null;
                break;

            default:
                $error->code = $data['errcode'];
                $error->title = "Ooops. Conteúdo indispinível :/";
                $error->message = "Sentimos muito, mas o conteúdo que você tentou acessar não existe, está indisponível no momento ou
foi removido :/";
                $error->linkTitle = "Continue navegando!";
                $error->link = url_back();
                break;
        }

        $head = $this->seo->render(
            "{$error->code} | {$error->title}",
            $error->message,
            url("/ops/{$error->code}"),
            theme("/assets/images/share.jpg"),
            false
        );

        echo $this->view->render("error", [
            "head" => $head,
            "error" => $error
        ]);
    }
}