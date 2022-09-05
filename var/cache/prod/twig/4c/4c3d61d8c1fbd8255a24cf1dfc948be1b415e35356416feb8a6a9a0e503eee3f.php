<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @EasyAdmin/page/login.html.twig */
class __TwigTemplate_9122a0ceb8799002054637bcb113828ab1a38ccafbd23dcca3a91afe0bb57843 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_class' => [$this, 'block_body_class'],
            'page_title' => [$this, 'block_page_title'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'header_logo' => [$this, 'block_header_logo'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate(((array_key_exists("ea", $context)) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 5)) : ("@EasyAdmin/page/login_minimal.html.twig")), "@EasyAdmin/page/login.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        $context["__internal_d9780183fa77e2c1b1a7e9d2d9e3b3fedcb760a0805ee68c1a6022c821a50316"] = ((array_key_exists("ea", $context)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 6), "translationDomain", [], "any", false, false, false, 6)) : (((array_key_exists("translation_domain", $context)) ? ((($context["translation_domain"]) ?? ("messages"))) : (""))));
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "page-login";
    }

    // line 9
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo ((array_key_exists("page_title", $context)) ? (($context["page_title"] ?? null)) : (((array_key_exists("ea", $context)) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 9)) : (""))));
    }

    // line 11
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        $context["page_title"] =         $this->renderBlock("page_title", $context, $blocks);
        // line 13
        echo "    ";
        $context["_username_label"] = ((array_key_exists("username_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["username_label"] ?? null), [],         // line 6
($context["__internal_d9780183fa77e2c1b1a7e9d2d9e3b3fedcb760a0805ee68c1a6022c821a50316"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.username", [], "EasyAdminBundle")));
        // line 14
        echo "    ";
        $context["_password_label"] = ((array_key_exists("password_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["password_label"] ?? null), [],         // line 6
($context["__internal_d9780183fa77e2c1b1a7e9d2d9e3b3fedcb760a0805ee68c1a6022c821a50316"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.password", [], "EasyAdminBundle")));
        // line 15
        echo "    ";
        $context["_forgot_password_label"] = ((array_key_exists("forgot_password_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["forgot_password_label"] ?? null), [],         // line 6
($context["__internal_d9780183fa77e2c1b1a7e9d2d9e3b3fedcb760a0805ee68c1a6022c821a50316"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.forgot_password", [], "EasyAdminBundle")));
        // line 16
        echo "    ";
        $context["_remember_me_label"] = ((array_key_exists("remember_me_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["remember_me_label"] ?? null), [],         // line 6
($context["__internal_d9780183fa77e2c1b1a7e9d2d9e3b3fedcb760a0805ee68c1a6022c821a50316"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.remember_me", [], "EasyAdminBundle")));
        // line 17
        echo "    ";
        $context["_sign_in_label"] = ((array_key_exists("sign_in_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["sign_in_label"] ?? null), [],         // line 6
($context["__internal_d9780183fa77e2c1b1a7e9d2d9e3b3fedcb760a0805ee68c1a6022c821a50316"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.sign_in", [], "EasyAdminBundle")));
        // line 18
        echo "
    ";
        // line 19
        $this->loadTemplate("@EasyAdmin/flash_messages.html.twig", "@EasyAdmin/page/login.html.twig", 19)->display($context);
        // line 20
        echo "
    <div class=\"login-wrapper\">
        <header class=\"main-header\">
            <div id=\"header-logo\">
                ";
        // line 24
        $this->displayBlock('header_logo', $context, $blocks);
        // line 37
        echo "            </div>
        </header>

        <section class=\"content\">

            ";
        // line 42
        if (((array_key_exists("error", $context)) ? (_twig_default_filter(($context["error"] ?? null), false)) : (false))) {
            // line 43
            echo "                <div class=\"w-100 alert alert-danger rounded mb-3\">
                    <i class=\"fas fa-times-circle mr-1\"></i>
                    ";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 45), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 45), "security"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 48
        echo "
            <form method=\"post\" action=\"";
        // line 49
        echo twig_escape_filter($this->env, ((array_key_exists("action", $context)) ? (_twig_default_filter(($context["action"] ?? null), "")) : ("")), "html", null, true);
        echo "\">
                ";
        // line 50
        if (((array_key_exists("csrf_token_intention", $context)) ? (_twig_default_filter(($context["csrf_token_intention"] ?? null), false)) : (false))) {
            // line 51
            echo "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(($context["csrf_token_intention"] ?? null)), "html", null, true);
            echo "\">
                ";
        }
        // line 53
        echo "
                <input type=\"hidden\" name=\"";
        // line 54
        echo twig_escape_filter($this->env, ((array_key_exists("target_path_parameter", $context)) ? (_twig_default_filter(($context["target_path_parameter"] ?? null), "_target_path")) : ("_target_path")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("target_path", $context)) ? (_twig_default_filter(($context["target_path"] ?? null), ((array_key_exists("ea", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 54))) : ("/")))) : (((array_key_exists("ea", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 54))) : ("/")))), "html", null, true);
        echo "\" />

                <div class=\"form-group\">
                    <label class=\"form-control-label required\" for=\"username\">";
        // line 57
        echo twig_escape_filter($this->env, ($context["_username_label"] ?? null), "html", null, true);
        echo "</label>
                    <div class=\"form-widget\">
                        <input type=\"text\" id=\"username\" name=\"";
        // line 59
        echo twig_escape_filter($this->env, ((array_key_exists("username_parameter", $context)) ? (_twig_default_filter(($context["username_parameter"] ?? null), "_username")) : ("_username")), "html", null, true);
        echo "\" class=\"form-control\" value=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("last_username", $context)) ? (_twig_default_filter(($context["last_username"] ?? null), "")) : ("")), "html", null, true);
        echo "\" required autofocus autocomplete=\"username\">
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"form-control-label required\" for=\"password\">";
        // line 64
        echo twig_escape_filter($this->env, ($context["_password_label"] ?? null), "html", null, true);
        echo "</label>
                    <div class=\"form-widget\">
                        <input type=\"password\" id=\"password\" name=\"";
        // line 66
        echo twig_escape_filter($this->env, ((array_key_exists("password_parameter", $context)) ? (_twig_default_filter(($context["password_parameter"] ?? null), "_password")) : ("_password")), "html", null, true);
        echo "\" class=\"form-control\" required autocomplete=\"current-password\">
                    </div>

                    ";
        // line 69
        if (((array_key_exists("forgot_password_enabled", $context)) ? (_twig_default_filter(($context["forgot_password_enabled"] ?? null), false)) : (false))) {
            // line 70
            echo "                        <div class=\"form-text\">
                            <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, ((array_key_exists("forgot_password_path", $context)) ? (_twig_default_filter(($context["forgot_password_path"] ?? null), "#")) : ("#")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["_forgot_password_label"] ?? null), "html", null, true);
            echo "</a>
                        </div>
                    ";
        }
        // line 74
        echo "                </div>

                ";
        // line 76
        if (((array_key_exists("remember_me_enabled", $context)) ? (_twig_default_filter(($context["remember_me_enabled"] ?? null), false)) : (false))) {
            // line 77
            echo "                    <div class=\"form-group\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"remember_me\" name=\"";
            // line 78
            echo twig_escape_filter($this->env, ((array_key_exists("remember_me_parameter", $context)) ? (_twig_default_filter(($context["remember_me_parameter"] ?? null), "_remember_me")) : ("_remember_me")), "html", null, true);
            echo "\" ";
            echo ((((array_key_exists("remember_me_checked", $context)) ? (_twig_default_filter(($context["remember_me_checked"] ?? null), false)) : (false))) ? ("checked") : (""));
            echo ">
                        <label class=\"form-check-label\" for=\"remember_me\">
                            ";
            // line 80
            echo twig_escape_filter($this->env, ($context["_remember_me_label"] ?? null), "html", null, true);
            echo "
                        </label>
                    </div>
                ";
        }
        // line 84
        echo "
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\" onclick=\"this.form.submit(); this.disabled=true;\">";
        // line 86
        echo twig_escape_filter($this->env, ($context["_sign_in_label"] ?? null), "html", null, true);
        echo "</button>
                </div>
            </form>

            <script type=\"text/javascript\">
                const loginForm = document.querySelector('form');
                loginForm.addEventListener('submit', function () {
                    loginForm.querySelector('button[type=\"submit\"]').setAttribute('disabled', 'disabled');
                }, false);
            </script>
        </section>
    </div>
";
    }

    // line 24
    public function block_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "                    ";
        if (($context["page_title"] ?? null)) {
            // line 26
            echo "                        ";
            if (array_key_exists("ea", $context)) {
                // line 27
                echo "                            <a class=\"logo ";
                echo (((twig_length_filter($this->env, ($context["page_title"] ?? null)) > 14)) ? ("logo-long") : (""));
                echo "\" title=\"";
                echo twig_escape_filter($this->env, strip_tags(($context["page_title"] ?? null)), "html", null, true);
                echo "\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 27));
                echo "\">
                                ";
                // line 28
                echo ($context["page_title"] ?? null);
                echo "
                            </a>
                        ";
            } else {
                // line 31
                echo "                            <div class=\"logo ";
                echo (((twig_length_filter($this->env, ($context["page_title"] ?? null)) > 14)) ? ("logo-long") : (""));
                echo "\">
                                ";
                // line 32
                echo ($context["page_title"] ?? null);
                echo "
                            </div>
                        ";
            }
            // line 35
            echo "                    ";
        }
        // line 36
        echo "                ";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/page/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 36,  269 => 35,  263 => 32,  258 => 31,  252 => 28,  243 => 27,  240 => 26,  237 => 25,  233 => 24,  216 => 86,  212 => 84,  205 => 80,  198 => 78,  195 => 77,  193 => 76,  189 => 74,  181 => 71,  178 => 70,  176 => 69,  170 => 66,  165 => 64,  155 => 59,  150 => 57,  142 => 54,  139 => 53,  133 => 51,  131 => 50,  127 => 49,  124 => 48,  118 => 45,  114 => 43,  112 => 42,  105 => 37,  103 => 24,  97 => 20,  95 => 19,  92 => 18,  90 => 6,  88 => 17,  86 => 6,  84 => 16,  82 => 6,  80 => 15,  78 => 6,  76 => 14,  74 => 6,  72 => 13,  69 => 12,  65 => 11,  58 => 9,  51 => 8,  47 => 5,  45 => 6,  38 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/page/login.html.twig", "/home/tomdev/projetMiaEvan/projetMiaEvan/vendor/easycorp/easyadmin-bundle/src/Resources/views/page/login.html.twig");
    }
}
