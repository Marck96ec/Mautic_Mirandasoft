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

/* :Mauve:base.html.twig */
class __TwigTemplate_f941cfa95d00c4ceb949c324d40c49e5bfe5ea73a71adef9f430966cc36cf6dc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        if ((isset($context["page"]) || array_key_exists("page", $context))) {
            // line 5
            echo "            <title>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "getTitle", [], "method", false, false, false, 5), "html", null, true);
            echo "</title>
            <meta name=\"description\" content=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metaDescription", [], "any", false, false, false, 6), "html", null, true);
            echo "\" />
        ";
        }
        // line 8
        echo "        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->getAssetUrl("themes/Mauve/css/mauve.css");
        echo "\" type=\"text/css\" />
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        ";
        // line 14
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->outputHeadDeclarations();
        echo "
    </head>
    <body>
        ";
        // line 17
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->outputScripts("bodyOpen");
        echo "
        ";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "        ";
        echo $this->extensions['Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension']->outputScripts("bodyClose");
        echo "
    </body>
</html>
";
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return ":Mauve:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 18,  78 => 19,  76 => 18,  72 => 17,  66 => 14,  59 => 10,  55 => 8,  50 => 6,  45 => 5,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", ":Mauve:base.html.twig", "/home/yerbanov/public_html/mailingms/themes/Mauve/html/base.html.twig");
    }
}
