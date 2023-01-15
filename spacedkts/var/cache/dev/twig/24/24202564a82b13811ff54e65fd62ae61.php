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

/* spaceship/show.html.twig */
class __TwigTemplate_6c187d6e9b66533e77d8f6b694ac2203 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "spaceship/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "spaceship/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "spaceship/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    ";
        if ((isset($context["spaceship"]) || array_key_exists("spaceship", $context) ? $context["spaceship"] : (function () { throw new RuntimeError('Variable "spaceship" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Model</th>
                    <th>Manufacturer</th>
                    <th>Value</th>
                    <th>Length</th>
                    <th>Max Atmosphering Speed</th>
                    <th>Crew</th>
                    <th>Passengers</th>
                    <th>Cargo Capacity</th>
                    <th>Consumables</th>
                    <th>Hyperdrive Rating</th>
                    <th>MGLT</th>
                    <th>Starship Class</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["spaceship"]) || array_key_exists("spaceship", $context) ? $context["spaceship"] : (function () { throw new RuntimeError('Variable "spaceship" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["spaceship"]) || array_key_exists("spaceship", $context) ? $context["spaceship"] : (function () { throw new RuntimeError('Variable "spaceship" does not exist.', 25, $this->source); })()), "model", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["spaceship"]) || array_key_exists("spaceship", $context) ? $context["spaceship"] : (function () { throw new RuntimeError('Variable "spaceship" does not exist.', 26, $this->source); })()), "manufacturer", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                    <td align='right'>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["spaceship"]) || array_key_exists("spaceship", $context) ? $context["spaceship"] : (function () { throw new RuntimeError('Variable "spaceship" does not exist.', 27, $this->source); })()), "cost_in_credits", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td align='right'>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["spaceship"]) || array_key_exists("spaceship", $context) ? $context["spaceship"] : (function () { throw new RuntimeError('Variable "spaceship" does not exist.', 28, $this->source); })()), "length", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td align='right'>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["spaceship"]) || array_key_exists("spaceship", $context) ? $context["spaceship"] : (function () { throw new RuntimeError('Variable "spaceship" does not exist.', 29, $this->source); })()), "max_atmosphering_speed", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                    <td align='center'>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["spaceship"]) || array_key_exists("spaceship", $context) ? $context["spaceship"] : (function () { throw new RuntimeError('Variable "spaceship" does not exist.', 30, $this->source); })()), "crew", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                    <td align='center'>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["spaceship"]) || array_key_exists("spaceship", $context) ? $context["spaceship"] : (function () { throw new RuntimeError('Variable "spaceship" does not exist.', 31, $this->source); })()), "passengers", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                    <td align='right'>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["spaceship"]) || array_key_exists("spaceship", $context) ? $context["spaceship"] : (function () { throw new RuntimeError('Variable "spaceship" does not exist.', 32, $this->source); })()), "cargo_capacity", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                    <td align='right'>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["spaceship"]) || array_key_exists("spaceship", $context) ? $context["spaceship"] : (function () { throw new RuntimeError('Variable "spaceship" does not exist.', 33, $this->source); })()), "consumables", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                    <td align='center'>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["spaceship"]) || array_key_exists("spaceship", $context) ? $context["spaceship"] : (function () { throw new RuntimeError('Variable "spaceship" does not exist.', 34, $this->source); })()), "hyperdrive_rating", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                    <td align='center'>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["spaceship"]) || array_key_exists("spaceship", $context) ? $context["spaceship"] : (function () { throw new RuntimeError('Variable "spaceship" does not exist.', 35, $this->source); })()), "MGLT", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                    <td align='center'>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["spaceship"]) || array_key_exists("spaceship", $context) ? $context["spaceship"] : (function () { throw new RuntimeError('Variable "spaceship" does not exist.', 36, $this->source); })()), "starship_class", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                </tr>
            </tbody>
        </table>
    ";
        } else {
            // line 41
            echo "        <p>Spaceship not found.</p>        
    ";
        }
        // line 43
        echo "    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
        }
        thead {
            background-color: rgba(255,255,255,0.5);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "spaceship/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 43,  149 => 41,  141 => 36,  137 => 35,  133 => 34,  129 => 33,  125 => 32,  121 => 31,  117 => 30,  113 => 29,  109 => 28,  105 => 27,  101 => 26,  97 => 25,  93 => 24,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block content %}
    {% if spaceship %}
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Model</th>
                    <th>Manufacturer</th>
                    <th>Value</th>
                    <th>Length</th>
                    <th>Max Atmosphering Speed</th>
                    <th>Crew</th>
                    <th>Passengers</th>
                    <th>Cargo Capacity</th>
                    <th>Consumables</th>
                    <th>Hyperdrive Rating</th>
                    <th>MGLT</th>
                    <th>Starship Class</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ spaceship.name }}</td>
                    <td>{{ spaceship.model }}</td>
                    <td>{{ spaceship.manufacturer }}</td>
                    <td align='right'>{{ spaceship.cost_in_credits }}</td>
                    <td align='right'>{{ spaceship.length }}</td>
                    <td align='right'>{{ spaceship.max_atmosphering_speed }}</td>
                    <td align='center'>{{ spaceship.crew }}</td>
                    <td align='center'>{{ spaceship.passengers }}</td>
                    <td align='right'>{{ spaceship.cargo_capacity }}</td>
                    <td align='right'>{{ spaceship.consumables }}</td>
                    <td align='center'>{{ spaceship.hyperdrive_rating }}</td>
                    <td align='center'>{{ spaceship.MGLT }}</td>
                    <td align='center'>{{ spaceship.starship_class }}</td>
                </tr>
            </tbody>
        </table>
    {% else %}
        <p>Spaceship not found.</p>        
    {% endif %}
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
        }
        thead {
            background-color: rgba(255,255,255,0.5);
        }
    </style>
{% endblock %}", "spaceship/show.html.twig", "C:\\AML\\spacedkts\\spacedkts\\templates\\spaceship\\show.html.twig");
    }
}
