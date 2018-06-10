<?php

/* @App/layout.html.twig */
class __TwigTemplate_0c69dabcf27570e2bc13f545f16693a7c993a074c92ee487029b5d0c7a5ecd28 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Mon super blog</title>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css\">
    </head>

    <body>
        <div class=\"container\">    
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "                <h2>";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</h2>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        </div>
        </body>
</html>";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@App/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  57 => 13,  51 => 15,  48 => 13,  39 => 11,  35 => 10,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/layout.html.twig", "/var/www/html/sfblog/src/AppBundle/Resources/views/layout.html.twig");
    }
}
