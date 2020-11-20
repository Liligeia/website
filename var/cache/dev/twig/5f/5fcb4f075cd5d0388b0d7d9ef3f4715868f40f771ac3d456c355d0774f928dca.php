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

/* website/presentation/index.html.twig */
class __TwigTemplate_d85fc6bbf4b59d960abb0b427a15c8c5fc34b6389a454159c290ee431322714c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "website/presentation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "website/presentation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "website/presentation/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Présentation";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $this->displayParentBlock("head", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"presentation_description\">
\t\t\t<h2>";
        // line 13
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>
\t\t\t<p>
\t\t\t\tDéveloppeuse Web en recherche active.
\t\t\t\t<br/>
\t\t\t\tAprès avoir effectué une formation de Développeur Web où j'ai obtenu un diplome de niveau 5 (Bac +2).
\t\t\t\tJ'ai appris tout au long à intégrer une maquette, réaliser une carte intéractive à l'aide d'une Api, mettre en place un site sous Wordpress et créer un blog en php.<br/>
\t\t\t\tPour terminer cette formation j'ai réalisé un stage de 5 mois en entreprise où j'ai pu mettre en avant mes compétences acquises et en apprendre de nouvelles tel que Symfony.
\t\t\t\t<br/>
\t\t\t\tActuellement, je travail sur un projet en scala/react.js et Less.
\t\t\t</p>
\t\t</div>
\t\t<a class=\"cv\">
\t\t\t<h3>Mon CV :</h3>
\t\t\t<a  href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/cv/CV-2020-DEVELOPPEURWEB.jpg"), "html", null, true);
        echo "\"><img class=\"cv_image\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/cv/CV-2020-DEVELOPPEURWEB.jpg"), "html", null, true);
        echo "\"/></a>
\t\t\t<a class=\"cv_download btn-theme btn-theme-md btn-default-bg text-uppercase\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/cv/Melanie_Morice_cv_2020_dwj.pdf"), "html", null, true);
        echo "\">pdf</a>
\t\t</div>
\t</div>
</div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "website/presentation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 27,  129 => 26,  113 => 13,  108 => 10,  98 => 9,  79 => 7,  60 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{# View : Presentation Page index #}

{% block title %}Présentation{% endblock %}

\t{% block head %}{{ parent() }}{% endblock %}

{% block content %}
<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"presentation_description\">
\t\t\t<h2>{{ block('title') }}</h2>
\t\t\t<p>
\t\t\t\tDéveloppeuse Web en recherche active.
\t\t\t\t<br/>
\t\t\t\tAprès avoir effectué une formation de Développeur Web où j'ai obtenu un diplome de niveau 5 (Bac +2).
\t\t\t\tJ'ai appris tout au long à intégrer une maquette, réaliser une carte intéractive à l'aide d'une Api, mettre en place un site sous Wordpress et créer un blog en php.<br/>
\t\t\t\tPour terminer cette formation j'ai réalisé un stage de 5 mois en entreprise où j'ai pu mettre en avant mes compétences acquises et en apprendre de nouvelles tel que Symfony.
\t\t\t\t<br/>
\t\t\t\tActuellement, je travail sur un projet en scala/react.js et Less.
\t\t\t</p>
\t\t</div>
\t\t<a class=\"cv\">
\t\t\t<h3>Mon CV :</h3>
\t\t\t<a  href=\"{{ asset('build/images/cv/CV-2020-DEVELOPPEURWEB.jpg') }}\"><img class=\"cv_image\" src=\"{{ asset('build/images/cv/CV-2020-DEVELOPPEURWEB.jpg') }}\"/></a>
\t\t\t<a class=\"cv_download btn-theme btn-theme-md btn-default-bg text-uppercase\" href=\"{{ asset('build/images/cv/Melanie_Morice_cv_2020_dwj.pdf') }}\">pdf</a>
\t\t</div>
\t</div>
</div>




{% endblock %}", "website/presentation/index.html.twig", "C:\\xampp\\htdocs\\website\\templates\\website\\presentation\\index.html.twig");
    }
}
