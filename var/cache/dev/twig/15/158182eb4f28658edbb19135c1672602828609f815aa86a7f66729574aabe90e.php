<?php

/* @App/includes/navbar.html.twig */
class __TwigTemplate_1b32ef566a7515d9dea21259f51d0700f44962dc3e3a8f795703a6869b332fbc extends Twig_Template
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
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->source); })()), "user", array()), "username", array()), "html", null, true);
            echo "</a></li>
        ";
        } else {
            // line 7
            echo "            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">
                    <i class=\"fas fa-user-graduate\"></i>
                </a></li>
            <li><a href=\"";
            // line 10
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">
                    <i class=\"fas fa-user-plus\"></i>
                </a></li>
        ";
        }
        // line 14
        echo "        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 15
            echo "            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("binder");
            echo "\"><i class=\"fas fa-book\"></i></a></li>
            <li><a href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\"><i class=\"fas fa-door-open\"></i></a></li>
        ";
        }
        // line 18
        echo "        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 19
            echo "            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addpost");
            echo "\">
                    <i class=\"fas fa-pen-alt\"></i>
                </a></li>
        ";
        }
        // line 23
        echo "        <li>
            <form action=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\" method=\"GET\">
                <input class=\"input-search\" id=\"search\" type=\"text\" name=\"q\"
                       placeholder=\"Rechercher par titre, tags...\">
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
        return array (  88 => 24,  85 => 23,  77 => 19,  74 => 18,  69 => 16,  64 => 15,  61 => 14,  54 => 10,  47 => 7,  39 => 5,  37 => 4,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"navbar\">
    <ul id=\"ul-list\">
        <li><a href=\"{{ path('homepage') }}\">Blog</a></li>
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            <li><a href=\"{{ path('profile') }}\">{{ app.user.username }}</a></li>
        {% else %}
            <li><a href=\"{{ path('login') }}\">
                    <i class=\"fas fa-user-graduate\"></i>
                </a></li>
            <li><a href=\"{{ path('register') }}\">
                    <i class=\"fas fa-user-plus\"></i>
                </a></li>
        {% endif %}
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            <li><a href=\"{{ path('binder') }}\"><i class=\"fas fa-book\"></i></a></li>
            <li><a href=\"{{ path('logout') }}\"><i class=\"fas fa-door-open\"></i></a></li>
        {% endif %}
        {% if is_granted('ROLE_ADMIN') %}
            <li><a href=\"{{ path('addpost') }}\">
                    <i class=\"fas fa-pen-alt\"></i>
                </a></li>
        {% endif %}
        <li>
            <form action=\"{{ path('search') }}\" method=\"GET\">
                <input class=\"input-search\" id=\"search\" type=\"text\" name=\"q\"
                       placeholder=\"Rechercher par titre, tags...\">
            </form>
        </li>
    </ul>
</div>", "@App/includes/navbar.html.twig", "/var/www/html/symfony-blog/src/AppBundle/Resources/views/includes/navbar.html.twig");
    }
}
