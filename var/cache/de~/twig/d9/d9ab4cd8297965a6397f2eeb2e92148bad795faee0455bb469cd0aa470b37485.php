<?php

/* @App/includes/navbar.html.twig */
class __TwigTemplate_276836ca947b4412bc704c9a36c7cf11bf449c2e45cf7b32870165f3c28d0fe3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/includes/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/includes/navbar.html.twig"));

        // line 1
        echo "<div class=\"navbar\">
    <ul id=\"ul-list\">
        <li><a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Blog</a></li>
        ";
        // line 4
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 5
            echo "            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Se déconnecter</a></li>
        ";
        } else {
            // line 7
            echo "            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Se connecter</a></li>
            <li><a href=\"";
            // line 8
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">S'enregistrer</a></li>
        ";
        }
        // line 10
        echo "        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 11
            echo "            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addpost");
            echo "\">Poster un article</a></li>
        ";
        }
        // line 13
        echo "        <li>
            <form action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\" method=\"GET\">
                <input class=\"input-search\" id=\"search\" type=\"text\" name=\"q\" placeholder=\"Rechercher\">
            </form>
        </li>
    </ul>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@App/includes/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 14,  64 => 13,  58 => 11,  55 => 10,  50 => 8,  45 => 7,  39 => 5,  37 => 4,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"navbar\">
    <ul id=\"ul-list\">
        <li><a href=\"{{ path('homepage') }}\">Blog</a></li>
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            <li><a href=\"{{ path('logout') }}\">Se déconnecter</a></li>
        {% else %}
            <li><a href=\"{{ path('login') }}\">Se connecter</a></li>
            <li><a href=\"{{ path('register') }}\">S'enregistrer</a></li>
        {% endif %}
        {% if is_granted('ROLE_ADMIN') %}
            <li><a href=\"{{ path('addpost') }}\">Poster un article</a></li>
        {% endif %}
        <li>
            <form action=\"{{ path('search') }}\" method=\"GET\">
                <input class=\"input-search\" id=\"search\" type=\"text\" name=\"q\" placeholder=\"Rechercher\">
            </form>
        </li>
    </ul>
</div>", "@App/includes/navbar.html.twig", "/var/www/html/sfblog/src/AppBundle/Resources/views/includes/navbar.html.twig");
    }
}
