<?php

/* @App/pages/view.html.twig */
class __TwigTemplate_3a9e3199bc119e1b532b85d7bd56ac5b1cddedfe1ab986839fda5d3385d51ff0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@App/layout.html.twig", "@App/pages/view.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/pages/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/pages/view.html.twig"));

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
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 2, $this->source); })()), "title", array()), "html", null, true);
        echo " ";
        
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
        echo "    <div class=\"blog-post\">
        <h1>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 5, $this->source); })()), "title", array()), "html", null, true);
        echo "</h1>
        <em>Ecrit par <strong>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 6, $this->source); })()), "author", array()), "html", null, true);
        echo "</strong>, le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 6, $this->source); })()), "createdAt", array()), "d/m/Y"), "html", null, true);
        echo "</em>
        ";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 7, $this->source); })()), "image", array()) != null)) {
            // line 8
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, ((($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/img/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 8, $this->source); })()), "image", array()), "id", array())) . ".") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 8, $this->source); })()), "image", array()), "extension", array())), "html", null, true);
            echo "\"
                 alt=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 9, $this->source); })()), "image", array()), "alt", array()), "html", null, true);
            echo "\">
        ";
        }
        // line 11
        echo "        <p>";
        echo twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 11, $this->source); })()), "content", array());
        echo "</p>
        <p>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 13, $this->source); })()), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 14
            echo "                <strong><span class=\"tag\"><ion-icon name=\"pricetag\"></ion-icon> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", array()), "html", null, true);
            echo "</span></strong>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </p>
    </div>
    <div class=\"comments\">
        ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 20
            echo "            <form method=\"post\" id=\"add-comment\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment.add");
            echo "\">
                <label for=\"comment_content\" class=\"required\">Mon commentaire</label>
                <textarea name=\"_comment\" id=\"comment_content\" required=\"required\" class=\"input\"></textarea>
                <input type=\"hidden\" name=\"_postid\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 23, $this->source); })()), "id", array()), "html", null, true);
            echo "\">
                <button type=\"submit\" id=\"comment_submit\" class=\"btn\">Poster</button>
            </form>
        ";
        } else {
            // line 27
            echo "            <p><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Connectez-vous</a> pour commenter !</p>
        ";
        }
        // line 29
        echo "    </div>
    <br>
    <h2>
        <ion-icon name=\"chatbubbles\"></ion-icon>
        Commentaires:
    </h2>
    ";
        // line 35
        if ((twig_length_filter($this->env, (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new Twig_Error_Runtime('Variable "comments" does not exist.', 35, $this->source); })())) > 0)) {
            // line 36
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new Twig_Error_Runtime('Variable "comments" does not exist.', 36, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 37
                echo "            <div class=\"comment\">
                <em>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "username", array()), "html", null, true);
                echo " a dit</em>
                <p>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", array()), "html", null, true);
                echo "</p>
                <div id=\"edit-div\"></div>
            </div>
            ";
                // line 42
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("delete", $context["comment"])) {
                    // line 43
                    echo "                <form style=\"display: inline-block\" action=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment.delete", array("id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", array()))), "html", null, true);
                    echo "\"
                      method=\"post\">
                    <input type=\"hidden\" name=\"token\" value=\"";
                    // line 45
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("comment-item"), "html", null, true);
                    echo "\">
                    <button class=\"btn btn-danger btn-sm\" type=\"submit\">
                        <ion-icon name=\"trash\"></ion-icon>
                    </button>
                </form>
            ";
                }
                // line 51
                echo "            ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", $context["comment"])) {
                    // line 52
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment.edit", array("id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", array()))), "html", null, true);
                    echo "\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", array()), "html", null, true);
                    echo "\" id=\"edit-comment\"
                   class=\"btn btn-warning btn-sm\">
                    <ion-icon name=\"code-working\"></ion-icon>
                </a>
            ";
                }
                // line 57
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "    ";
        } else {
            // line 59
            echo "        <h4>Aucun commentaire sur cet article pour le moment</h4>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/pages/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 59,  212 => 58,  206 => 57,  195 => 52,  192 => 51,  183 => 45,  177 => 43,  175 => 42,  169 => 39,  165 => 38,  162 => 37,  157 => 36,  155 => 35,  147 => 29,  141 => 27,  134 => 23,  127 => 20,  125 => 19,  120 => 16,  111 => 14,  107 => 13,  101 => 11,  96 => 9,  91 => 8,  89 => 7,  83 => 6,  79 => 5,  76 => 4,  67 => 3,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends\"@App/layout.html.twig\" %}
{% block title %} {{ parent() }} {{ post.title }} {% endblock %}
{% block body %}
    <div class=\"blog-post\">
        <h1>{{ post.title }}</h1>
        <em>Ecrit par <strong>{{ post.author }}</strong>, le {{ post.createdAt|date('d/m/Y') }}</em>
        {% if(post.image != null) %}
            <img src=\"{{ asset('uploads/img/') ~ post.image.id ~ '.' ~ post.image.extension }}\"
                 alt=\"{{ post.image.alt }}\">
        {% endif %}
        <p>{{ post.content|raw }}</p>
        <p>
            {% for tag in post.tags %}
                <strong><span class=\"tag\"><ion-icon name=\"pricetag\"></ion-icon> {{ tag.name }}</span></strong>
            {% endfor %}
        </p>
    </div>
    <div class=\"comments\">
        {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
            <form method=\"post\" id=\"add-comment\" action=\"{{ path('comment.add') }}\">
                <label for=\"comment_content\" class=\"required\">Mon commentaire</label>
                <textarea name=\"_comment\" id=\"comment_content\" required=\"required\" class=\"input\"></textarea>
                <input type=\"hidden\" name=\"_postid\" value=\"{{ post.id }}\">
                <button type=\"submit\" id=\"comment_submit\" class=\"btn\">Poster</button>
            </form>
        {% else %}
            <p><a href=\"{{ path('login') }}\">Connectez-vous</a> pour commenter !</p>
        {% endif %}
    </div>
    <br>
    <h2>
        <ion-icon name=\"chatbubbles\"></ion-icon>
        Commentaires:
    </h2>
    {% if comments|length > 0 %}
        {% for comment in comments %}
            <div class=\"comment\">
                <em>{{ comment.user.username }} a dit</em>
                <p>{{ comment.content }}</p>
                <div id=\"edit-div\"></div>
            </div>
            {% if (is_granted('delete', comment)) %}
                <form style=\"display: inline-block\" action=\"{{ path('comment.delete', {'id': comment.id}) }}\"
                      method=\"post\">
                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('comment-item') }}\">
                    <button class=\"btn btn-danger btn-sm\" type=\"submit\">
                        <ion-icon name=\"trash\"></ion-icon>
                    </button>
                </form>
            {% endif %}
            {% if (is_granted('edit', comment)) %}
                <a href=\"{{ path('comment.edit', {'id': comment.id}) }}\" data-id=\"{{ comment.id }}\" id=\"edit-comment\"
                   class=\"btn btn-warning btn-sm\">
                    <ion-icon name=\"code-working\"></ion-icon>
                </a>
            {% endif %}
        {% endfor %}
    {% else %}
        <h4>Aucun commentaire sur cet article pour le moment</h4>
    {% endif %}
{% endblock %}", "@App/pages/view.html.twig", "/var/www/html/symfony-blog/src/AppBundle/Resources/views/pages/view.html.twig");
    }
}
