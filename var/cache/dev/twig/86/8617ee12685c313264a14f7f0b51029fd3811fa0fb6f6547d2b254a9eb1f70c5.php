<?php

/* @App/pages/search.html.twig */
class __TwigTemplate_424c16b30dcaa4f7d3f98e2b52aa85c5b0e8a4c67f752d7e6c0877e5d40165fb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@App/layout.html.twig", "@App/pages/search.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/pages/search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/pages/search.html.twig"));

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
        echo " Recherche ";
        
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
        echo "    <h1>Ma recherche...</h1>
    <div class=\"blog-posts\">
        ";
        // line 6
        if ((twig_length_filter($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 6, $this->source); })())) > 0)) {
            // line 7
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 7, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 8
                echo "                <div class=\"blog-post\">
                    <h1>";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", array()), "html", null, true);
                echo "</h1>
                    <em>Ecrit par <strong>";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "author", array()), "html", null, true);
                echo "</strong>, le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "createdAt", array()), "d/m/Y"), "html", null, true);
                echo "</em>
                    ";
                // line 11
                if ((twig_get_attribute($this->env, $this->source, $context["post"], "image", array()) != null)) {
                    // line 12
                    echo "                        <img class=\"thumb1\"
                             src=\"";
                    // line 13
                    echo twig_escape_filter($this->env, ((($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/img/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "image", array()), "id", array())) . ".") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "image", array()), "extension", array())), "html", null, true);
                    echo "\"
                             alt=\"";
                    // line 14
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "image", array()), "alt", array()), "html", null, true);
                    echo "\">
                    ";
                }
                // line 16
                echo "                    <p>";
                echo $this->extensions['AppBundle\Twig\AppExtension']->truncateFilter(twig_get_attribute($this->env, $this->source, $context["post"], "content", array()));
                echo "</p>
                    <p>
                        ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "tags", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 19
                    echo "                            <strong><span class=\"tag\"><i class=\"fas fa-tag\"></i> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", array()), "html", null, true);
                    echo "</span></strong>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "                    </p>
                    <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewpost", array("slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", array()))), "html", null, true);
                echo "\" class=\"btn\">Lire la suite</a>
                    ";
                // line 23
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                    // line 24
                    echo "                        ";
                    if (!twig_in_filter(twig_get_attribute($this->env, $this->source, $context["post"], "id", array()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 24, $this->source); })()), "user", array()), "bookmarks", array()))) {
                        // line 25
                        echo "                         <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addBookmark", array("id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", array()))), "html", null, true);
                        echo "\" class=\"btn\"><i class=\"far fa-bookmark\"></i> Ajouter au classeur</a>
                        ";
                    }
                    // line 27
                    echo "                    ";
                }
                // line 28
                echo "                    ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 29
                    echo "                        <a class=\"btn btn-warning\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editpost", array("id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", array()))), "html", null, true);
                    echo "\">Editer</a>
                        <form style=\"display:inline-block\" action=\"";
                    // line 30
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletepost", array("id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", array()))), "html", null, true);
                    echo "\"
                              method=\"post\">
                            <input type=\"hidden\" name=\"token\" value=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-post"), "html", null, true);
                    echo "\">
                            <button class=\"btn btn-danger\" type=\"submit\">Supprimer l'article</button>
                        </form>
                    ";
                }
                // line 36
                echo "                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "        ";
        } else {
            // line 39
            echo "            <div class=\"alert alert-info\">Aucun post n'a été trouvé</div>
        ";
        }
        // line 41
        echo "        <div class=\"paginate-block\">
            ";
        // line 42
        if (((isset($context["pagesNbr"]) || array_key_exists("pagesNbr", $context) ? $context["pagesNbr"] : (function () { throw new Twig_Error_Runtime('Variable "pagesNbr" does not exist.', 42, $this->source); })()) != 0)) {
            // line 43
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pagesNbr"]) || array_key_exists("pagesNbr", $context) ? $context["pagesNbr"] : (function () { throw new Twig_Error_Runtime('Variable "pagesNbr" does not exist.', 43, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 44
                echo "                    <span><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search", array("q" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 44, $this->source); })()), "request", array()), "get", array(0 => "q"), "method"), "page" => $context["i"])), "html", null, true);
                echo "\"
                             class=\"paginate";
                // line 45
                if (($context["i"] == (isset($context["cPage"]) || array_key_exists("cPage", $context) ? $context["cPage"] : (function () { throw new Twig_Error_Runtime('Variable "cPage" does not exist.', 45, $this->source); })()))) {
                    echo " current";
                }
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "            ";
        }
        // line 48
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/pages/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 48,  213 => 47,  201 => 45,  196 => 44,  191 => 43,  189 => 42,  186 => 41,  182 => 39,  179 => 38,  172 => 36,  165 => 32,  160 => 30,  155 => 29,  152 => 28,  149 => 27,  143 => 25,  140 => 24,  138 => 23,  134 => 22,  131 => 21,  122 => 19,  118 => 18,  112 => 16,  107 => 14,  103 => 13,  100 => 12,  98 => 11,  92 => 10,  88 => 9,  85 => 8,  80 => 7,  78 => 6,  74 => 4,  65 => 3,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@App/layout.html.twig\" %}
{% block title %} {{ parent() }} Recherche {% endblock %}
{% block body %}
    <h1>Ma recherche...</h1>
    <div class=\"blog-posts\">
        {% if posts|length > 0 %}
            {% for post in posts %}
                <div class=\"blog-post\">
                    <h1>{{ post.title }}</h1>
                    <em>Ecrit par <strong>{{ post.author }}</strong>, le {{ post.createdAt|date('d/m/Y') }}</em>
                    {% if(post.image != null) %}
                        <img class=\"thumb1\"
                             src=\"{{ asset('uploads/img/') ~ post.image.id ~ '.' ~ post.image.extension }}\"
                             alt=\"{{ post.image.alt }}\">
                    {% endif %}
                    <p>{{ post.content|truncate|raw }}</p>
                    <p>
                        {% for tag in post.tags %}
                            <strong><span class=\"tag\"><i class=\"fas fa-tag\"></i> {{ tag.name }}</span></strong>
                        {% endfor %}
                    </p>
                    <a href=\"{{ path('viewpost', {'slug': post.slug}) }}\" class=\"btn\">Lire la suite</a>
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                        {% if post.id not in app.user.bookmarks%}
                         <a href=\"{{ path('addBookmark', {'id': post.id}) }}\" class=\"btn\"><i class=\"far fa-bookmark\"></i> Ajouter au classeur</a>
                        {% endif %}
                    {% endif %}
                    {% if is_granted('ROLE_ADMIN') %}
                        <a class=\"btn btn-warning\" href=\"{{ path('editpost', {'id': post.id}) }}\">Editer</a>
                        <form style=\"display:inline-block\" action=\"{{ path('deletepost', {'id': post.id}) }}\"
                              method=\"post\">
                            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete-post') }}\">
                            <button class=\"btn btn-danger\" type=\"submit\">Supprimer l'article</button>
                        </form>
                    {% endif %}
                </div>
            {% endfor %}
        {% else %}
            <div class=\"alert alert-info\">Aucun post n'a été trouvé</div>
        {% endif %}
        <div class=\"paginate-block\">
            {% if pagesNbr != 0 %}
                {% for i in range(1, pagesNbr) %}
                    <span><a href=\"{{ path('search', {'q': app.request.get('q'), 'page': i}) }}\"
                             class=\"paginate{% if i == cPage %} current{% endif %}\">{{ i }}</a></span>
                {% endfor %}
            {% endif %}
        </div>
    </div>
{% endblock %}", "@App/pages/search.html.twig", "/var/www/html/symfony-blog/src/AppBundle/Resources/views/pages/search.html.twig");
    }
}
