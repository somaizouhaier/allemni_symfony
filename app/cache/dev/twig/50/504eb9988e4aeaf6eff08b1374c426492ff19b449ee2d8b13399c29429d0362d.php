<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_8700a93fe6552d8a9ff85f0098aa4750e880b5861ab1e6675e366e96c62cbe1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("atnUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'user_content' => array($this, 'block_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "atnUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_user_content($context, array $blocks = array())
    {
        // line 4
        $this->loadTemplate("atnUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "atnUserBundle::layout.html.twig" %}*/
/* */
/* {% block user_content %}*/
/* {% include "atnUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock user_content %}*/
/* */
