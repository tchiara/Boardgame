<?php

/* AppBundle:User:register.html.twig */
class __TwigTemplate_f44f5d0e3320108f4ef474855591e3a97e0ca1fe758eabe2e77c0d6d8571fd59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:User:register.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
        <div id=\"questions\" class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Inscris-toi pour jouer :</div>
                <div class=\"panel-body\">
                    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formRegister"] ?? null), 'form_start');
        echo "
                    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["formRegister"] ?? null), 'widget');
        echo "
                    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formRegister"] ?? null), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "AppBundle:User:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  42 => 10,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:User:register.html.twig", "C:\\www\\Web2\\src\\AppBundle\\Resources\\views\\User\\register.html.twig");
    }
}
