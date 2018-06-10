<?php

/* @App/pages/index.html.twig */
class __TwigTemplate_82851ae89190636984b586db9c378ae2ba316571f381ffcc7530514a910e5e34 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@App/layout.html.twig", "@App/pages/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/pages/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/pages/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Blog ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"blog-posts\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 6
            echo "            <div class=\"blog-post\">
                <h1>";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", array()), "html", null, true);
            echo "</h1>
                <em>Ecrit par <strong>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "author", array()), "html", null, true);
            echo "</strong>, le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "createdAt", array()), "d/m/Y"), "html", null, true);
            echo "</em>
                ";
            // line 9
            if ((twig_get_attribute($this->env, $this->source, $context["post"], "image", array()) != null)) {
                // line 10
                echo "                    <img class=\"thumb1\" src=\"";
                echo twig_escape_filter($this->env, ((($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/img/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "image", array()), "id", array())) . ".") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "image", array()), "extension", array())), "html", null, true);
                echo "\"
                         alt=\"";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "image", array()), "alt", array()), "html", null, true);
                echo "\">
                ";
            }
            // line 13
            echo "                <p>";
            echo $this->extensions['AppBundle\Twig\AppExtension']->truncateFilter(twig_get_attribute($this->env, $this->source, $context["post"], "content", array()));
            echo "</p>
                <p>
                    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 16
                echo "                        <strong><span class=\"tag\"><ion-icon name=\"folder\"></ion-icon> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", array()), "html", null, true);
                echo "</span></strong>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "                </p>
                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewpost", array("slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", array()))), "html", null, true);
            echo "\" class=\"btn\">Lire la suite</a>
                ";
            // line 20
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 21
                echo "                    <a class=\"btn btn-warning\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editpost", array("id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", array()))), "html", null, true);
                echo "\">Editer</a>
                    <form style=\"display:inline-block\" action=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletepost", array("id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", array()))), "html", null, true);
                echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"token\" value=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-post"), "html", null, true);
                echo "\">
                        <button class=\"btn btn-danger\" type=\"submit\">Supprimer l'article</button>
                    </form>
                ";
            }
            // line 27
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
        <div class=\"paginate-block\">
            ";
        // line 31
        if (((isset($context["pagesNbr"]) || array_key_exists("pagesNbr", $context) ? $context["pagesNbr"] : (function () { throw new Twig_Error_Runtime('Variable "pagesNbr" does not exist.', 31, $this->source); })()) != 0)) {
            // line 32
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pagesNbr"]) || array_key_exists("pagesNbr", $context) ? $context["pagesNbr"] : (function () { throw new Twig_Error_Runtime('Variable "pagesNbr" does not exist.', 32, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 33
                echo "                    <span><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage", array("page" => $context["i"])), "html", null, true);
                echo "\" class=\"paginate ";
                if (($context["i"] == (isset($context["cPage"]) || array_key_exists("cPage", $context) ? $context["cPage"] : (function () { throw new Twig_Error_Runtime('Variable "cPage" does not exist.', 33, $this->source); })()))) {
                    echo "current";
                }
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            ";
        }
        // line 36
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/pages/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 36,  183 => 35,  168 => 33,  163 => 32,  161 => 31,  157 => 29,  150 => 27,  143 => 23,  139 => 22,  134 => 21,  132 => 20,  128 => 19,  125 => 18,  116 => 16,  112 => 15,  106 => 13,  101 => 11,  96 => 10,  94 => 9,  88 => 8,  84 => 7,  81 => 6,  77 => 5,  74 => 4,  65 => 3,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@App/layout.html.twig\" %}
{% block title %} {{ parent() }} Blog {% endblock %}
{% block body %}
    <div class=\"blog-posts\">
        {% for post in posts %}
            <div class=\"blog-post\">
                <h1>{{ post.title }}</h1>
                <em>Ecrit par <strong>{{ post.author }}</strong>, le {{ post.createdAt|date('d/m/Y') }}</em>
                {% if(post.image != null) %}
                    <img class=\"thumb1\" src=\"{{ asset('uploads/img/') ~ post.image.id ~ '.' ~ post.image.extension }}\"
                         alt=\"{{ post.image.alt }}\">
                {% endif %}
                <p>{{ post.content|truncate|raw }}</p>
                <p>
                    {% for tag in post.tags %}
                        <strong><span class=\"tag\"><ion-icon name=\"folder\"></ion-icon> {{ tag.name }}</span></strong>
                    {% endfor %}
                </p>
                <a href=\"{{ path('viewpost', {'slug': post.slug}) }}\" class=\"btn\">Lire la suite</a>
                {% if is_granted('ROLE_ADMIN') %}
                    <a class=\"btn btn-warning\" href=\"{{ path('editpost', {'id': post.id}) }}\">Editer</a>
                    <form style=\"display:inline-block\" action=\"{{ path('deletepost', {'id': post.id}) }}\" method=\"post\">
                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete-post') }}\">
                        <button class=\"btn btn-danger\" type=\"submit\">Supprimer l'article</button>
                    </form>
                {% endif %}
            </div>
        {% endfor %}

        <div class=\"paginate-block\">
            {% if pagesNbr != 0 %}
                {% for i in range(1, pagesNbr) %}
                    <span><a href=\"{{ path('homepage', {'page': i}) }}\" class=\"paginate {% if i == cPage %}current{% endif %}\">{{ i }}</a></span>
                {% endfor %}
            {% endif %}
        </div>
    </div>
{% endblock %}", "@App/pages/index.html.twig", "/var/www/html/sfblog/src/AppBundle/Resources/views/pages/index.html.twig");
    }
}
