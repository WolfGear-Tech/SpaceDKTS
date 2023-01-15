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

/* spaceship/index.html.twig */
class __TwigTemplate_b00d7d6d45f8a2899404d795ef91385a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "spaceship/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "spaceship/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "spaceship/index.html.twig", 1);
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
        if ((isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("spaceship_add");
            echo "\" class=\"btn btn-primary\">+ Add Spaceship</a>
    ";
        } else {
            // line 6
            echo "    ";
        }
        // line 7
        echo "    <table>
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
                ";
        // line 23
        if ((isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 23, $this->source); })())) {
            // line 24
            echo "                    <th>Actions</th>
                ";
        }
        // line 26
        echo "            </tr>
        </thead>
        <tbody>
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["spaceships"]) || array_key_exists("spaceships", $context) ? $context["spaceships"] : (function () { throw new RuntimeError('Variable "spaceships" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["spaceship"]) {
            // line 30
            echo "                ";
            $context["onclick"] = (("window.location.href = '" . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("spaceship_show", ["id" => twig_get_attribute($this->env, $this->source, $context["spaceship"], "id", [], "any", false, false, false, 30)])) . "'");
            // line 31
            echo "                <tr class=\"selectable\" onclick=\"";
            echo twig_escape_filter($this->env, (isset($context["onclick"]) || array_key_exists("onclick", $context) ? $context["onclick"] : (function () { throw new RuntimeError('Variable "onclick" does not exist.', 31, $this->source); })()), "html", null, true);
            echo "\">
                    <td>";
            // line 32
            (((twig_get_attribute($this->env, $this->source, $context["spaceship"], "name", [], "any", true, true, false, 32) &&  !(null === twig_get_attribute($this->env, $this->source, $context["spaceship"], "name", [], "any", false, false, false, 32)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["spaceship"], "name", [], "any", false, false, false, 32), "html", null, true))) : (print ("null")));
            echo "</td>
                    <td>";
            // line 33
            (((twig_get_attribute($this->env, $this->source, $context["spaceship"], "model", [], "any", true, true, false, 33) &&  !(null === twig_get_attribute($this->env, $this->source, $context["spaceship"], "model", [], "any", false, false, false, 33)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["spaceship"], "model", [], "any", false, false, false, 33), "html", null, true))) : (print ("null")));
            echo "</td>
                    <td>";
            // line 34
            (((twig_get_attribute($this->env, $this->source, $context["spaceship"], "manufacturer", [], "any", true, true, false, 34) &&  !(null === twig_get_attribute($this->env, $this->source, $context["spaceship"], "manufacturer", [], "any", false, false, false, 34)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["spaceship"], "manufacturer", [], "any", false, false, false, 34), "html", null, true))) : (print ("null")));
            echo "</td>
                    <td align='right'>";
            // line 35
            (((twig_get_attribute($this->env, $this->source, $context["spaceship"], "cost_in_credits", [], "any", true, true, false, 35) &&  !(null === twig_get_attribute($this->env, $this->source, $context["spaceship"], "cost_in_credits", [], "any", false, false, false, 35)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["spaceship"], "cost_in_credits", [], "any", false, false, false, 35), "html", null, true))) : (print ("null")));
            echo "</td>
                    <td align='right'>";
            // line 36
            (((twig_get_attribute($this->env, $this->source, $context["spaceship"], "length", [], "any", true, true, false, 36) &&  !(null === twig_get_attribute($this->env, $this->source, $context["spaceship"], "length", [], "any", false, false, false, 36)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["spaceship"], "length", [], "any", false, false, false, 36), "html", null, true))) : (print ("null")));
            echo "</td>
                    <td align='right'>";
            // line 37
            (((twig_get_attribute($this->env, $this->source, $context["spaceship"], "max_atmosphering_speed", [], "any", true, true, false, 37) &&  !(null === twig_get_attribute($this->env, $this->source, $context["spaceship"], "max_atmosphering_speed", [], "any", false, false, false, 37)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["spaceship"], "max_atmosphering_speed", [], "any", false, false, false, 37), "html", null, true))) : (print ("null")));
            echo "</td>
                    <td align='center'>";
            // line 38
            (((twig_get_attribute($this->env, $this->source, $context["spaceship"], "crew", [], "any", true, true, false, 38) &&  !(null === twig_get_attribute($this->env, $this->source, $context["spaceship"], "crew", [], "any", false, false, false, 38)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["spaceship"], "crew", [], "any", false, false, false, 38), "html", null, true))) : (print ("null")));
            echo "</td>
                    <td align='center'>";
            // line 39
            (((twig_get_attribute($this->env, $this->source, $context["spaceship"], "passengers", [], "any", true, true, false, 39) &&  !(null === twig_get_attribute($this->env, $this->source, $context["spaceship"], "passengers", [], "any", false, false, false, 39)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["spaceship"], "passengers", [], "any", false, false, false, 39), "html", null, true))) : (print ("null")));
            echo "</td>
                    <td align='right'>";
            // line 40
            (((twig_get_attribute($this->env, $this->source, $context["spaceship"], "cargo_capacity", [], "any", true, true, false, 40) &&  !(null === twig_get_attribute($this->env, $this->source, $context["spaceship"], "cargo_capacity", [], "any", false, false, false, 40)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["spaceship"], "cargo_capacity", [], "any", false, false, false, 40), "html", null, true))) : (print ("null")));
            echo "</td>
                    <td align='right'>";
            // line 41
            (((twig_get_attribute($this->env, $this->source, $context["spaceship"], "consumables", [], "any", true, true, false, 41) &&  !(null === twig_get_attribute($this->env, $this->source, $context["spaceship"], "consumables", [], "any", false, false, false, 41)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["spaceship"], "consumables", [], "any", false, false, false, 41), "html", null, true))) : (print ("null")));
            echo "</td>
                    <td align='center'>";
            // line 42
            (((twig_get_attribute($this->env, $this->source, $context["spaceship"], "hyperdrive_rating", [], "any", true, true, false, 42) &&  !(null === twig_get_attribute($this->env, $this->source, $context["spaceship"], "hyperdrive_rating", [], "any", false, false, false, 42)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["spaceship"], "hyperdrive_rating", [], "any", false, false, false, 42), "html", null, true))) : (print ("null")));
            echo "</td>
                    <td align='center'>";
            // line 43
            (((twig_get_attribute($this->env, $this->source, $context["spaceship"], "MGLT", [], "any", true, true, false, 43) &&  !(null === twig_get_attribute($this->env, $this->source, $context["spaceship"], "MGLT", [], "any", false, false, false, 43)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["spaceship"], "MGLT", [], "any", false, false, false, 43), "html", null, true))) : (print ("null")));
            echo "</td>
                    <td align='center'>";
            // line 44
            (((twig_get_attribute($this->env, $this->source, $context["spaceship"], "starship_class", [], "any", true, true, false, 44) &&  !(null === twig_get_attribute($this->env, $this->source, $context["spaceship"], "starship_class", [], "any", false, false, false, 44)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["spaceship"], "starship_class", [], "any", false, false, false, 44), "html", null, true))) : (print ("null")));
            echo "</td>
                    ";
            // line 45
            if ((isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 45, $this->source); })())) {
                // line 46
                echo "                        <td>
                            <div class=\"actions\"> 
                                <a class=\"btn btn-tertiary\" href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("spaceship_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["spaceship"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\">Edit</a>
                                <a class=\"btn btn-secondary\" href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("spaceship_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["spaceship"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\">Delete</a>
                            </div>
                        </td>
                    ";
            }
            // line 53
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['spaceship'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tbody>
    </table>
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
        .selectable:hover {
            background-color: yellow;
            cursor: pointer;
        }
        .btn {
            color: white;
            padding: 5px;
            border-radius: 5px;
            text-decoration: none;
        }
        .btn-primary {
            background-color: blue;
            width: 130px;
        }
        .btn-primary:hover {
            background-color: darkblue;
        }
        .btn-secondary {
            background-color: red;
        }
        .btn-secondary:hover {
            background-color: darkred;
        }
        .btn-tertiary {
            background-color: yellow;
            color: black;
        }
        .btn-tertiary:hover {
            background-color: darkyellow;
        }
        .actions {
            display: flex;
            flex-direction: row;
            column-gap: 5px;
            height: 100%;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "spaceship/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 55,  190 => 53,  183 => 49,  179 => 48,  175 => 46,  173 => 45,  169 => 44,  165 => 43,  161 => 42,  157 => 41,  153 => 40,  149 => 39,  145 => 38,  141 => 37,  137 => 36,  133 => 35,  129 => 34,  125 => 33,  121 => 32,  116 => 31,  113 => 30,  109 => 29,  104 => 26,  100 => 24,  98 => 23,  80 => 7,  77 => 6,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block content %}
    {% if admin %}
        <a href=\"{{ path('spaceship_add') }}\" class=\"btn btn-primary\">+ Add Spaceship</a>
    {% else %}
    {% endif %}
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
                {% if admin %}
                    <th>Actions</th>
                {% endif %}
            </tr>
        </thead>
        <tbody>
            {% for spaceship in spaceships %}
                {% set onclick = \"window.location.href = '\" ~ path('spaceship_show', {'id': spaceship.id}) ~ \"'\" %}
                <tr class=\"selectable\" onclick=\"{{ onclick }}\">
                    <td>{{ spaceship.name ?? \"null\" }}</td>
                    <td>{{ spaceship.model ?? \"null\" }}</td>
                    <td>{{ spaceship.manufacturer ?? \"null\" }}</td>
                    <td align='right'>{{ spaceship.cost_in_credits ?? \"null\" }}</td>
                    <td align='right'>{{ spaceship.length ?? \"null\" }}</td>
                    <td align='right'>{{ spaceship.max_atmosphering_speed ?? \"null\" }}</td>
                    <td align='center'>{{ spaceship.crew ?? \"null\" }}</td>
                    <td align='center'>{{ spaceship.passengers ?? \"null\" }}</td>
                    <td align='right'>{{ spaceship.cargo_capacity ?? \"null\" }}</td>
                    <td align='right'>{{ spaceship.consumables ?? \"null\" }}</td>
                    <td align='center'>{{ spaceship.hyperdrive_rating ?? \"null\" }}</td>
                    <td align='center'>{{ spaceship.MGLT ?? \"null\" }}</td>
                    <td align='center'>{{ spaceship.starship_class ?? \"null\" }}</td>
                    {% if admin %}
                        <td>
                            <div class=\"actions\"> 
                                <a class=\"btn btn-tertiary\" href=\"{{ path('spaceship_edit', {'id': spaceship.id}) }}\">Edit</a>
                                <a class=\"btn btn-secondary\" href=\"{{ path('spaceship_delete', {'id': spaceship.id}) }}\">Delete</a>
                            </div>
                        </td>
                    {% endif %}
                </tr>
            {% endfor %}
        </tbody>
    </table>
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
        .selectable:hover {
            background-color: yellow;
            cursor: pointer;
        }
        .btn {
            color: white;
            padding: 5px;
            border-radius: 5px;
            text-decoration: none;
        }
        .btn-primary {
            background-color: blue;
            width: 130px;
        }
        .btn-primary:hover {
            background-color: darkblue;
        }
        .btn-secondary {
            background-color: red;
        }
        .btn-secondary:hover {
            background-color: darkred;
        }
        .btn-tertiary {
            background-color: yellow;
            color: black;
        }
        .btn-tertiary:hover {
            background-color: darkyellow;
        }
        .actions {
            display: flex;
            flex-direction: row;
            column-gap: 5px;
            height: 100%;
        }
    </style>
{% endblock %}", "spaceship/index.html.twig", "C:\\AML\\spacedkts\\spacedkts\\templates\\spaceship\\index.html.twig");
    }
}
