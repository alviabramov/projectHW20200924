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

/* update-prod.twig */
class __TwigTemplate_84e71575ca738b8199025acb68d67610a2d16d0819536d7d202a9d89be32b515 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "update-prod.twig"));

        // line 1
        echo "<html>
<body>
    <h1>Product for ID: ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()), "getId", [], "any", false, false, false, 3), "html", null, true);
        echo " - update</h1>
    <table>
        <caption>New data</caption>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "getName", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "getPrice", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
            <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })()), "getDescription", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
        </tr>
    </table>
</body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "update-prod.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 14,  60 => 13,  56 => 12,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<body>
    <h1>Product for ID: {{ product.getId}} - update</h1>
    <table>
        <caption>New data</caption>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>{{ product.getName }}</td>
            <td>{{ product.getPrice }}</td>
            <td>{{ product.getDescription }}</td>
        </tr>
    </table>
</body>
</html>", "update-prod.twig", "/app/templates/update-prod.twig");
    }
}
