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
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/dark-atom.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"blog-post\">
        <h1>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 8, $this->source); })()), "title", array()), "html", null, true);
        echo "</h1>
        <em>Ecrit par <strong>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 9, $this->source); })()), "author", array()), "html", null, true);
        echo "</strong>, le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 9, $this->source); })()), "createdAt", array()), "d/m/Y"), "html", null, true);
        echo "</em>
        ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 10, $this->source); })()), "image", array()) != null)) {
            // line 11
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, ((($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/img/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 11, $this->source); })()), "image", array()), "id", array())) . ".") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 11, $this->source); })()), "image", array()), "extension", array())), "html", null, true);
            echo "\"
                 alt=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 12, $this->source); })()), "image", array()), "alt", array()), "html", null, true);
            echo "\">
        ";
        }
        // line 14
        echo "        <p>";
        echo twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 14, $this->source); })()), "content", array());
        echo "</p>
        <p>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 16, $this->source); })()), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 17
            echo "                <strong><span class=\"tag\"><ion-icon name=\"pricetag\"></ion-icon> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", array()), "html", null, true);
            echo "</span></strong>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </p>
    </div>
    <div class=\"comments\">
        ";
        // line 22
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 23
            echo "            <form method=\"post\" id=\"add-comment\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment.add");
            echo "\">
                <label for=\"comment_content\" class=\"required\">Mon commentaire</label>
                <textarea name=\"_comment\" id=\"comment_content\" required=\"required\" class=\"input\"></textarea>
                <input type=\"hidden\" name=\"_postid\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 26, $this->source); })()), "id", array()), "html", null, true);
            echo "\">
                <button type=\"submit\" id=\"comment_submit\" class=\"btn\">Poster mon commentaire</button>
            </form>
        ";
        } else {
            // line 30
            echo "            <p><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Connectez-vous</a> pour commenter !</p>
        ";
        }
        // line 32
        echo "        <br>
        <h2>
            <ion-icon name=\"chatbubbles\"></ion-icon>
            Commentaires:
        </h2>
        ";
        // line 37
        if ((twig_length_filter($this->env, (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new Twig_Error_Runtime('Variable "comments" does not exist.', 37, $this->source); })())) > 0)) {
            // line 38
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new Twig_Error_Runtime('Variable "comments" does not exist.', 38, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 39
                echo "                <div class=\"comment\">
                    <em>
                        ";
                // line 41
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "avatar", array()) != null)) {
                    // line 42
                    echo "                            <img class=\"avatar\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatar/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "avatar", array()))), "html", null, true);
                    echo "\"
                                 alt=\"avatar\">
                        ";
                } else {
                    // line 45
                    echo "                            <img class=\"avatar\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/avatar/default.png"), "html", null, true);
                    echo "\" alt=\"avatar\">
                        ";
                }
                // line 47
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "username", array()), "html", null, true);
                echo " a dit</em>
                    <p>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", array()), "html", null, true);
                echo "</p>
                    ";
                // line 49
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("delete", $context["comment"])) {
                    // line 50
                    echo "                        <form style=\"display: inline-block\" action=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment.delete", array("id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", array()))), "html", null, true);
                    echo "\"
                              method=\"post\">
                            <input type=\"hidden\" name=\"token\" value=\"";
                    // line 52
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("comment-item"), "html", null, true);
                    echo "\">
                            <button class=\"btn btn-danger btn-sm\" type=\"submit\">
                                <ion-icon name=\"trash\"></ion-icon>
                            </button>
                        </form>
                    ";
                }
                // line 58
                echo "                    ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", $context["comment"])) {
                    // line 59
                    echo "                        <a href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment.update");
                    echo "\" id=\"edit-button\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", array()), "html", null, true);
                    echo "\"
                           class=\"btn btn-warning btn-sm\">
                            <ion-icon name=\"code-working\"></ion-icon>
                        </a>
                    ";
                }
                // line 64
                echo "                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "        ";
        } else {
            // line 67
            echo "            <h4>Aucun commentaire sur cet article pour le moment</h4>
        ";
        }
        // line 69
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/addComment.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/editComment.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/highlight.min.js"), "html", null, true);
        echo "\"></script>
    <script>hljs.initHighlightingOnLoad();</script>
";
        
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
        return array (  287 => 74,  283 => 73,  278 => 72,  269 => 71,  258 => 69,  254 => 67,  251 => 66,  244 => 64,  233 => 59,  230 => 58,  221 => 52,  215 => 50,  213 => 49,  209 => 48,  204 => 47,  198 => 45,  191 => 42,  189 => 41,  185 => 39,  180 => 38,  178 => 37,  171 => 32,  165 => 30,  158 => 26,  151 => 23,  149 => 22,  144 => 19,  135 => 17,  131 => 16,  125 => 14,  120 => 12,  115 => 11,  113 => 10,  107 => 9,  103 => 8,  100 => 7,  91 => 6,  78 => 4,  69 => 3,  47 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends\"@App/layout.html.twig\" %}
{% block title %} {{ parent() }} {{ post.title }} {% endblock %}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/dark-atom.css') }}\">
    {% endblock %}
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
                <button type=\"submit\" id=\"comment_submit\" class=\"btn\">Poster mon commentaire</button>
            </form>
        {% else %}
            <p><a href=\"{{ path('login') }}\">Connectez-vous</a> pour commenter !</p>
        {% endif %}
        <br>
        <h2>
            <ion-icon name=\"chatbubbles\"></ion-icon>
            Commentaires:
        </h2>
        {% if comments|length > 0 %}
            {% for comment in comments %}
                <div class=\"comment\">
                    <em>
                        {% if comment.user.avatar != null %}
                            <img class=\"avatar\" src=\"{{ asset('uploads/avatar/' ~ comment.user.avatar ) }}\"
                                 alt=\"avatar\">
                        {% else %}
                            <img class=\"avatar\" src=\"{{ asset('uploads/avatar/default.png') }}\" alt=\"avatar\">
                        {% endif %}
                        {{ comment.user.username }} a dit</em>
                    <p>{{ comment.content }}</p>
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
                        <a href=\"{{ path('comment.update') }}\" id=\"edit-button\" data-id=\"{{ comment.id }}\"
                           class=\"btn btn-warning btn-sm\">
                            <ion-icon name=\"code-working\"></ion-icon>
                        </a>
                    {% endif %}
                </div>
            {% endfor %}
        {% else %}
            <h4>Aucun commentaire sur cet article pour le moment</h4>
        {% endif %}
    </div>
{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('js/addComment.js') }}\"></script>
    <script src=\"{{ asset('js/editComment.js') }}\"></script>
    <script src=\"{{ asset('js/highlight.min.js') }}\"></script>
    <script>hljs.initHighlightingOnLoad();</script>
{% endblock %}", "@App/pages/view.html.twig", "/var/www/html/symfony-blog/src/AppBundle/Resources/views/pages/view.html.twig");
    }
}
