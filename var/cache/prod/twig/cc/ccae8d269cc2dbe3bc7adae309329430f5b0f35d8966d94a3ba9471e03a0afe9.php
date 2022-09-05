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

/* @EasyAdmin/crud/detail.html.twig */
class __TwigTemplate_db14e637f0fb8ef4eb6fd8b73b6b4b8fc545f938fc72cfea3378f8d86df18af8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'main' => [$this, 'block_main'],
            'detail_fields' => [$this, 'block_detail_fields'],
            'detail_field' => [$this, 'block_detail_field'],
            'delete_form' => [$this, 'block_delete_form'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 3), "@EasyAdmin/crud/detail.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $context["__internal_fe6d178f5c21bbe979fae83c811ae3dc5d5c7224cbdd6070711b6de17f92ddb9"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "translationDomain", [], "any", false, false, false, 5);
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ((("ea-detail-" . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 7)) . "-") . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 7)), "html", null, true);
    }

    // line 8
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ("ea-detail ea-detail-" . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 8)), "html", null, true);
    }

    // line 10
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        ob_start(function () { return ''; });
        // line 12
        $context["custom_page_title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 12), "customPageTitle", [0 => ($context["pageName"] ?? null), 1 => ((($context["entity"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "instance", [], "any", false, false, false, 12)) : (null))], "method", false, false, false, 12);
        // line 13
        echo "        ";
        echo (((null === ($context["custom_page_title"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
($context["ea"] ?? null), "crud", [], "any", false, false, false, 14), "defaultPageTitle", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 14), "translationParameters", [], "any", false, false, false, 14), "EasyAdminBundle")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 15
($context["custom_page_title"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 15), "translationParameters", [], "any", false, false, false, 15),         // line 5
($context["__internal_fe6d178f5c21bbe979fae83c811ae3dc5d5c7224cbdd6070711b6de17f92ddb9"] ?? null))));
        $___internal_7d7dd33d2db8325ba1255c05b6e226219f950cc36bbc1c690541da2df2692895_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        echo twig_spaceless($___internal_7d7dd33d2db8325ba1255c05b6e226219f950cc36bbc1c690541da2df2692895_);
    }

    // line 19
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 21
            echo "        ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 21), ["action" => $context["action"]], false);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 25
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "";
    }

    // line 27
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    ";
        $this->displayBlock('detail_fields', $context, $blocks);
        // line 52
        echo "
    ";
        // line 53
        $this->displayBlock('delete_form', $context, $blocks);
    }

    // line 28
    public function block_detail_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "        ";
        $context["form_panel_is_already_open"] = false;
        // line 30
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "fields", [], "any", false, false, false, 30));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 31
            echo "            ";
            $context["is_form_field_panel"] = twig_in_filter("field-form_panel", twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 31));
            // line 32
            echo "
            ";
            // line 33
            if ((($context["is_form_field_panel"] ?? null) || (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 33) &&  !($context["is_form_field_panel"] ?? null)))) {
                // line 34
                echo "                ";
                if (($context["form_panel_is_already_open"] ?? null)) {
                    // line 35
                    echo "                    ";
                    echo twig_call_macro($macros["_self"], "macro_close_form_field_panel", [], 35, $context, $this->getSourceContext());
                    echo "
                    ";
                    // line 36
                    $context["form_panel_is_already_open"] = false;
                    // line 37
                    echo "                ";
                }
                // line 38
                echo "
                ";
                // line 39
                echo twig_call_macro($macros["_self"], "macro_open_form_field_panel", [((($context["is_form_field_panel"] ?? null)) ? ($context["field"]) : (null))], 39, $context, $this->getSourceContext());
                echo "
                ";
                // line 40
                $context["form_panel_is_already_open"] = true;
                // line 41
                echo "            ";
            }
            // line 42
            echo "
            ";
            // line 43
            $this->displayBlock('detail_field', $context, $blocks);
            // line 48
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
        ";
        // line 50
        echo twig_call_macro($macros["_self"], "macro_close_form_field_panel", [], 50, $context, $this->getSourceContext());
        echo "
    ";
    }

    // line 43
    public function block_detail_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "                ";
        if ( !($context["is_form_field_panel"] ?? null)) {
            // line 45
            echo "                    ";
            echo twig_call_macro($macros["_self"], "macro_render_field", [($context["entity"] ?? null), ($context["field"] ?? null)], 45, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 47
        echo "            ";
    }

    // line 53
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", ["entity_id" => twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 54)], false);
        echo "
    ";
    }

    // line 58
    public function macro_open_form_field_panel($__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 59
            echo "    ";
            $context["panel_name"] = (((null === ($context["field"] ?? null))) ? (null) : (("content-" . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 59))));
            // line 60
            echo "    ";
            $context["collapsible"] = (((null === ($context["field"] ?? null))) ? (false) : (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOption", [0 => "collapsible"], "method", false, false, false, 60)));
            // line 61
            echo "    ";
            $context["collapsed"] = (((null === ($context["field"] ?? null))) ? (false) : (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOption", [0 => "collapsed"], "method", false, false, false, 61)));
            // line 62
            echo "    ";
            $context["panel_icon"] = (((null === ($context["field"] ?? null))) ? (null) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, true, false, 62), "get", [0 => "icon"], "method", true, true, false, 62)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, true, false, 62), "get", [0 => "icon"], "method", false, false, false, 62), false)) : (false))));
            // line 63
            echo "    ";
            $context["panel_label"] = (((null === ($context["field"] ?? null))) ? (null) : (twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 63)));
            // line 64
            echo "    ";
            $context["panel_help"] = (((null === ($context["field"] ?? null))) ? (null) : (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", true, true, false, 64)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 64), false)) : (false))));
            // line 65
            echo "    ";
            $context["panel_has_header"] = (((($context["collapsible"] ?? null) || ($context["panel_icon"] ?? null)) || ($context["panel_label"] ?? null)) || ($context["panel_help"] ?? null));
            // line 66
            echo "
    <div class=\"";
            // line 67
            (((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", true, true, false, 67) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 67)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 67), "html", null, true))) : (print ("")));
            echo "\">
        <div class=\"form-panel\">
            ";
            // line 69
            if (($context["panel_has_header"] ?? null)) {
                // line 70
                echo "                <div class=\"form-panel-header ";
                echo ((($context["collapsible"] ?? null)) ? ("collapsible") : (""));
                echo " ";
                echo (( !twig_test_empty(($context["panel_help"] ?? null))) ? ("with-help") : (""));
                echo "\">
                    <div class=\"form-panel-title\">
                        <a ";
                // line 72
                if ( !($context["collapsible"] ?? null)) {
                    // line 73
                    echo "                            href=\"#\" class=\"not-collapsible\"
                        ";
                } else {
                    // line 75
                    echo "                            href=\"#";
                    echo twig_escape_filter($this->env, ($context["panel_name"] ?? null), "html", null, true);
                    echo "\" data-bs-toggle=\"collapse\"
                            class=\"form-panel-collapse ";
                    // line 76
                    echo ((($context["collapsed"] ?? null)) ? ("collapsed") : (""));
                    echo "\"
                            aria-expanded=\"";
                    // line 77
                    echo ((($context["collapsed"] ?? null)) ? ("false") : ("true"));
                    echo "\" aria-controls=\"";
                    echo twig_escape_filter($this->env, ($context["panel_name"] ?? null), "html", null, true);
                    echo "\"
                        ";
                }
                // line 79
                echo "                        >
                            ";
                // line 80
                if (($context["collapsible"] ?? null)) {
                    // line 81
                    echo "                                <i class=\"fas fw fa-chevron-right form-panel-collapse-marker\"></i>
                            ";
                }
                // line 83
                echo "
                            ";
                // line 84
                if (($context["panel_icon"] ?? null)) {
                    // line 85
                    echo "                                <i class=\"form-panel-icon ";
                    echo twig_escape_filter($this->env, ($context["panel_icon"] ?? null), "html", null, true);
                    echo "\"></i>
                            ";
                }
                // line 87
                echo "                            ";
                echo ($context["panel_label"] ?? null);
                echo "
                        </a>

                        ";
                // line 90
                if (($context["panel_help"] ?? null)) {
                    // line 91
                    echo "                            <div class=\"form-panel-help\">";
                    echo ($context["panel_help"] ?? null);
                    echo "</div>
                        ";
                }
                // line 93
                echo "                    </div>
                </div>
            ";
            }
            // line 96
            echo "
            <div ";
            // line 97
            if (($context["panel_name"] ?? null)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, ($context["panel_name"] ?? null), "html", null, true);
                echo "\"";
            }
            echo " class=\"form-panel-body ";
            echo ((($context["collapsible"] ?? null)) ? ("collapse") : (""));
            echo " ";
            echo (( !($context["collapsed"] ?? null)) ? ("show") : (""));
            echo "\">
                <dl class=\"datalist\">
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 101
    public function macro_close_form_field_panel(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 102
            echo "            </dl>
        </div>
    </div>
</div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 108
    public function macro_render_field($__entity__ = null, $__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 109
            echo "    <div class=\"data-row ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 109), "html", null, true);
            echo "\">
        <dt>
            ";
            // line 111
            echo twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 111);
            echo "

            ";
            // line 113
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 113))) {
                // line 114
                echo "                <span class=\"data-help\">
                    <i class=\"far fa-question-circle\" data-bs-toggle=\"tooltip\" title=\"";
                // line 115
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 115), "html_attr");
                echo "\"></i>
                </span>
            ";
            }
            // line 118
            echo "        </dt>
        <dd>
            ";
            // line 120
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "templatePath", [], "any", false, false, false, 120), ["field" => ($context["field"] ?? null), "entity" => ($context["entity"] ?? null)], false);
            echo "
        </dd>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 120,  443 => 118,  437 => 115,  434 => 114,  432 => 113,  427 => 111,  421 => 109,  407 => 108,  394 => 102,  382 => 101,  362 => 97,  359 => 96,  354 => 93,  348 => 91,  346 => 90,  339 => 87,  333 => 85,  331 => 84,  328 => 83,  324 => 81,  322 => 80,  319 => 79,  312 => 77,  308 => 76,  303 => 75,  299 => 73,  297 => 72,  289 => 70,  287 => 69,  282 => 67,  279 => 66,  276 => 65,  273 => 64,  270 => 63,  267 => 62,  264 => 61,  261 => 60,  258 => 59,  245 => 58,  238 => 54,  234 => 53,  230 => 47,  224 => 45,  221 => 44,  217 => 43,  211 => 50,  208 => 49,  194 => 48,  192 => 43,  189 => 42,  186 => 41,  184 => 40,  180 => 39,  177 => 38,  174 => 37,  172 => 36,  167 => 35,  164 => 34,  162 => 33,  159 => 32,  156 => 31,  138 => 30,  135 => 29,  131 => 28,  127 => 53,  124 => 52,  121 => 28,  117 => 27,  110 => 25,  99 => 21,  94 => 20,  90 => 19,  86 => 11,  83 => 5,  82 => 15,  81 => 14,  79 => 13,  77 => 12,  75 => 11,  71 => 10,  64 => 8,  57 => 7,  53 => 3,  51 => 5,  44 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/detail.html.twig", "/home/tomdev/projetMiaEvan/projetMiaEvan/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/detail.html.twig");
    }
}
