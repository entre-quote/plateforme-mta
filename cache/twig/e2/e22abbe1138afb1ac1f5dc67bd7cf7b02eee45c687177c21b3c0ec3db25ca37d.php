<?php

/* partials/_header.html.twig */
class __TwigTemplate_b1f4b9a14d5fb7435109b49f248caf6cde6ba2013dd561d9cdd08eff572d6bf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'header_navigation' => array($this, 'block_header_navigation'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('header', $context, $blocks);
    }

    public function block_header($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"header\">
  <div class=\"wrapper padding\">
    <a class=\"logo left\" href=\"";
        // line 4
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">
      <i class=\"fa fa-rebel\"></i>
      ";
        // line 6
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", array()), "title", array());
        echo "
    </a> ";
        // line 7
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 12
        echo "  </div>
</div>
";
    }

    // line 7
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 8
        echo "    <nav class=\"main-nav\">
      ";
        // line 9
        $this->loadTemplate("partials/_navigation.html.twig", "partials/_header.html.twig", 9)->display($context);
        // line 10
        echo "    </nav>
    ";
    }

    public function getTemplateName()
    {
        return "partials/_header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  56 => 10,  54 => 9,  51 => 8,  48 => 7,  42 => 12,  40 => 7,  36 => 6,  31 => 4,  27 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block header %}
<div class=\"header\">
  <div class=\"wrapper padding\">
    <a class=\"logo left\" href=\"{{ base_url == '' ? '/' : base_url }}\">
      <i class=\"fa fa-rebel\"></i>
      {{ config.site.title }}
    </a> {% block header_navigation %}
    <nav class=\"main-nav\">
      {% include 'partials/_navigation.html.twig' %}
    </nav>
    {% endblock %}
  </div>
</div>
{% endblock %}
", "partials/_header.html.twig", "/Users/dev/Downloads/grav-admin/user/themes/starter/templates/partials/_header.html.twig");
    }
}
