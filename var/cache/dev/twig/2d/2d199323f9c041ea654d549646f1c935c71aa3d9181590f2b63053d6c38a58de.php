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

/* base.html.twig */
class __TwigTemplate_a7a469d5f727bbea2359ad420261ba7124ee4b1cc200de0c04b56392718c2ccf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!-- Base : Website -->

<!DOCTYPE html>
<html lang=\"fr\">
    <head>
    ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 27
        echo "    </head>

    <body>
        ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 101
        echo "               

            <!-- Javascript -->  
        ";
        // line 104
        $this->displayBlock('javascripts', $context, $blocks);
        // line 110
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 7
        echo "        <meta charset=\"UTF-8\">
            <!--Stylesheet-->

            <!-- Metatag -->
        <meta name=\"title\" content=\"Mélanie MORICE\">
        <meta name=\"description\" content=\"Développeuse web en recherche active d'emploi\">
        <meta name=\"author\" content=\"Mélanie MORICE\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t    \t<!-- Bootstrap -->
        ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "      
            <!--Title-->
        <title>";
        // line 25
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "\t    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\" integrity=\"sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu\" crossorigin=\"anonymous\">          \t
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/main.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/scss/main.scss"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mélanie MORICE";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo "  
        <div id=\"global\"> \t
            <!--Header-->
        <header class=\"navbar-fixed-top\">
            <!--Nav-->
            <div class =\"row\">
                <div class= \"col-md-12\">  
\t\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light fixed-top bg-light\">
\t\t\t\t\t <div class=\"container\">                 \t
\t                \t<div class=\"col-md-6\">  
\t                \t\t<div id=\"logo\">
\t                \t\t\t<a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
\t                \t\t\t\t<img class=\"logo-img\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-melanie.jpg"), "html", null, true);
        echo "\">
\t                \t\t\t</a>
\t                \t\t</div>
\t                \t</div>\t
\t\t                <div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t\t\t<ul class=\"navbar-nav navbar-nav-right ml-auto\">
\t\t\t\t\t\t\t\t\t<li class=\"dropdown nav-item active\"><a class=\"nav-link\" href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"dropdown nav-item\"><a class=\"nav-link\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("presentation");
        echo "\">Présentation</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"dropdown nav-item\"><a class=\"nav-link\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("realisations");
        echo "\">Réalisations</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"dropdown nav-item\"><a class=\"nav-link\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>\t
\t\t\t\t\t</nav> 
\t\t\t\t</div>\t 
\t\t\t</div>
        </header>
            <!--Container-->
    
\t        <div class =\"row\">
\t            <div class= \"col-md-12\">
\t                <div class=\"container-fluid\">
\t                    ";
        // line 66
        $this->displayBlock('content', $context, $blocks);
        // line 67
        echo "\t                </div>
\t            </div>
\t        </div> 
            <!--Footer-->
        <footer>
        \t<div class=\"container content-lg\"> \t
\t        \t<div class=\"row\">
\t        \t\t<div class=\"col-md-12\">
\t        \t\t\t<div class=\"row\">
\t        \t\t\t\t<div class=\"col-md-3 col-xs-6 md-margin-b-30\">
\t        \t\t\t\t\t<h4>Lieu</h4>
\t        \t\t\t\t\t<a href=\"https://goo.gl/maps/fKKRSh7Ndxkmt2zY8\">Courbevoie, France</a>
\t        \t\t\t\t</div>\t        \t\t\t\t
\t        \t\t\t\t<div class=\"col-md-3 col-xs-6 md-margin-b-30\">
\t        \t\t\t\t\t<h4>Mail</h4>
\t        \t\t\t\t\t<a href=\"mailto:melanie.xelm@gmail.com\">melanie.xelm@gmail.com</a>        \t\t\t\t\t
\t        \t\t\t\t</div>
\t        \t\t\t\t<div class=\"col-md-3 col-xs-6 md-margin-b-30\">
\t        \t\t\t\t\t<h4>Téléphone</h4>
\t        \t\t\t\t\t<a href=\"tel:+3361589289\">0661589289</a>
\t        \t\t\t\t</div>\t 
\t        \t\t\t\t<div class=\"col-md-3 col-xs-6 md-margin-b-30\">
\t        \t\t\t\t\t<h4>Téléchargement</h4>
\t        \t\t\t\t\t<a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("photo");
        echo "\">Xelm photography</a>
\t        \t\t\t\t</div>\t\t        \t\t\t\t     \t\t\t\t       \t\t\t\t
\t        \t\t\t</div>
\t        \t\t</div>
\t        \t</div>
\t        </div>\t
        </footer>
    \t</div>


        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 104
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 105
        echo "    \t\t<!-- jQuery -->
\t    <script src=\"https://code.jquery.com/jquery-1.12.4.min.js\" integrity=\"sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ\" crossorigin=\"anonymous\"></script>
    \t\t<!-- Include all compiled plugins (below), or include individual files as needed -->
    \t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\" integrity=\"sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd\" crossorigin=\"anonymous\"></script>           
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  314 => 105,  304 => 104,  286 => 66,  265 => 90,  240 => 67,  238 => 66,  221 => 52,  217 => 51,  213 => 50,  209 => 49,  199 => 42,  195 => 41,  173 => 30,  154 => 25,  141 => 20,  137 => 19,  134 => 18,  124 => 17,  112 => 25,  108 => 23,  106 => 17,  94 => 7,  84 => 6,  72 => 110,  70 => 104,  65 => 101,  63 => 30,  58 => 27,  56 => 6,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Base : Website -->

<!DOCTYPE html>
<html lang=\"fr\">
    <head>
    {% block head %}
        <meta charset=\"UTF-8\">
            <!--Stylesheet-->

            <!-- Metatag -->
        <meta name=\"title\" content=\"Mélanie MORICE\">
        <meta name=\"description\" content=\"Développeuse web en recherche active d'emploi\">
        <meta name=\"author\" content=\"Mélanie MORICE\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t    \t<!-- Bootstrap -->
        {% block stylesheets %}
\t    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\" integrity=\"sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu\" crossorigin=\"anonymous\">          \t
        <link rel=\"stylesheet\" href=\"{{asset('build/css/main.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('build/scss/main.scss')}}\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">
        {% endblock %}
      
            <!--Title-->
        <title>{% block title %}Mélanie MORICE{% endblock %}</title>
    {% endblock %}
    </head>

    <body>
        {% block body %}  
        <div id=\"global\"> \t
            <!--Header-->
        <header class=\"navbar-fixed-top\">
            <!--Nav-->
            <div class =\"row\">
                <div class= \"col-md-12\">  
\t\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light fixed-top bg-light\">
\t\t\t\t\t <div class=\"container\">                 \t
\t                \t<div class=\"col-md-6\">  
\t                \t\t<div id=\"logo\">
\t                \t\t\t<a href=\"{{ path('home') }}\">
\t                \t\t\t\t<img class=\"logo-img\" src=\"{{ asset('build/images/logo-melanie.jpg') }}\">
\t                \t\t\t</a>
\t                \t\t</div>
\t                \t</div>\t
\t\t                <div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t\t\t<ul class=\"navbar-nav navbar-nav-right ml-auto\">
\t\t\t\t\t\t\t\t\t<li class=\"dropdown nav-item active\"><a class=\"nav-link\" href=\"{{ path('home') }}\">Accueil</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"dropdown nav-item\"><a class=\"nav-link\" href=\"{{ path('presentation') }}\">Présentation</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"dropdown nav-item\"><a class=\"nav-link\" href=\"{{ path('realisations') }}\">Réalisations</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"dropdown nav-item\"><a class=\"nav-link\" href=\"{{ path('contact') }}\">Contact</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>\t
\t\t\t\t\t</nav> 
\t\t\t\t</div>\t 
\t\t\t</div>
        </header>
            <!--Container-->
    
\t        <div class =\"row\">
\t            <div class= \"col-md-12\">
\t                <div class=\"container-fluid\">
\t                    {% block content %}{% endblock %}
\t                </div>
\t            </div>
\t        </div> 
            <!--Footer-->
        <footer>
        \t<div class=\"container content-lg\"> \t
\t        \t<div class=\"row\">
\t        \t\t<div class=\"col-md-12\">
\t        \t\t\t<div class=\"row\">
\t        \t\t\t\t<div class=\"col-md-3 col-xs-6 md-margin-b-30\">
\t        \t\t\t\t\t<h4>Lieu</h4>
\t        \t\t\t\t\t<a href=\"https://goo.gl/maps/fKKRSh7Ndxkmt2zY8\">Courbevoie, France</a>
\t        \t\t\t\t</div>\t        \t\t\t\t
\t        \t\t\t\t<div class=\"col-md-3 col-xs-6 md-margin-b-30\">
\t        \t\t\t\t\t<h4>Mail</h4>
\t        \t\t\t\t\t<a href=\"mailto:melanie.xelm@gmail.com\">melanie.xelm@gmail.com</a>        \t\t\t\t\t
\t        \t\t\t\t</div>
\t        \t\t\t\t<div class=\"col-md-3 col-xs-6 md-margin-b-30\">
\t        \t\t\t\t\t<h4>Téléphone</h4>
\t        \t\t\t\t\t<a href=\"tel:+3361589289\">0661589289</a>
\t        \t\t\t\t</div>\t 
\t        \t\t\t\t<div class=\"col-md-3 col-xs-6 md-margin-b-30\">
\t        \t\t\t\t\t<h4>Téléchargement</h4>
\t        \t\t\t\t\t<a href=\"{{ path('photo') }}\">Xelm photography</a>
\t        \t\t\t\t</div>\t\t        \t\t\t\t     \t\t\t\t       \t\t\t\t
\t        \t\t\t</div>
\t        \t\t</div>
\t        \t</div>
\t        </div>\t
        </footer>
    \t</div>


        {% endblock %}
               

            <!-- Javascript -->  
        {% block javascripts %}
    \t\t<!-- jQuery -->
\t    <script src=\"https://code.jquery.com/jquery-1.12.4.min.js\" integrity=\"sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ\" crossorigin=\"anonymous\"></script>
    \t\t<!-- Include all compiled plugins (below), or include individual files as needed -->
    \t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\" integrity=\"sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd\" crossorigin=\"anonymous\"></script>           
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\website\\templates\\base.html.twig");
    }
}
