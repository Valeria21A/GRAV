<?php

/* @Page:C:\xampp\htdocs\EXA\user\plugins\error/pages */
class __TwigTemplate_0ebe5e1f36788380a2421d990d692029b5eb6ce2b239e36b096cee99dd2f0cd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_ERROR.ERROR_MESSAGE"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "@Page:C:\\xampp\\htdocs\\EXA\\user\\plugins\\error/pages";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ 'PLUGIN_ERROR.ERROR_MESSAGE'|t }}

", "@Page:C:\\xampp\\htdocs\\EXA\\user\\plugins\\error/pages", "");
    }
}
