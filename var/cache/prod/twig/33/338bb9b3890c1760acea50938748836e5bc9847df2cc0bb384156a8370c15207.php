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

/* memory/index.html.twig */
class __TwigTemplate_6f4573825d7944760fbf8f4a588c830b9e73ab2f2b5c5bfbd5951f2482c31c02 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "memory/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container my-4\">
<div class=\"grille\">
    
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "persos", [], "any", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["personnages"]) {
            // line 10
            echo "    ";
            // line 11
            echo "        <div class=\"carte\"  data-attr=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personnages"], "id", [], "any", false, false, false, 11), "html", null, true);
            echo "\">
                <div class=\"double-face\">
                    <div class=\"face\">
                        <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["personnages"], "imageFile"), "html", null, true);
            echo "\">
                    </div>
                
                    <div class=\"arriere\">
                        <span>❓</span>
                    </div>
                </div>
        </div>
    
        <div class=\"carte\"  data-attr=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personnages"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\">
                <div class=\"double-face\">
                    <div class=\"face\">
                        <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["personnages"], "imageFile"), "html", null, true);
            echo "\">
                    </div>
            
                    <div class=\"arriere\">
                            <span>❓</span>
                    </div>
                </div>
        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personnages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
     <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
     
</div>
";
    }

    public function getTemplateName()
    {
        return "memory/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 37,  110 => 36,  94 => 26,  88 => 23,  76 => 14,  69 => 11,  67 => 10,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "memory/index.html.twig", "/home/tomdev/projetMiaEvan/projetMiaEvan/templates/memory/index.html.twig");
    }
}
