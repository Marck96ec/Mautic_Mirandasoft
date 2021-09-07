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

/* :Mauve:message.html.twig */
class __TwigTemplate_5469b0f7dabecf84391140ff831923816f996cf8e0430d33eca40b6fbb9d82db extends \Twig\Template
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
        return ":Mauve:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate(":Mauve:base.html.twig", ":Mauve:message.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"well text-center\">
        ";
        // line 5
        echo ($context["message"] ?? null);
        echo "
        ";
        // line 6
        if ((isset($context["content"]) || array_key_exists("content", $context))) {
            // line 7
            echo "        <div class=\"text-left\">";
            echo ($context["content"] ?? null);
            echo "</div>
        ";
        }
        // line 9
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return ":Mauve:message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 9,  59 => 7,  57 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", ":Mauve:message.html.twig", "/home/yerbanov/public_html/mailingms/themes/Mauve/html/message.html.twig");
    }
}
