<?php

/* adminBundle:sidebar:teste.html.twig */
class __TwigTemplate_d76540908836bb65a86fa78961c580b9da7a9d2855416f3f6c243ebdee24fa9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a8690f6b66c8db7ed120a22038b242dde2977c86ad6ad6baf43bcfecc0d7072 = $this->env->getExtension("native_profiler");
        $__internal_6a8690f6b66c8db7ed120a22038b242dde2977c86ad6ad6baf43bcfecc0d7072->enter($__internal_6a8690f6b66c8db7ed120a22038b242dde2977c86ad6ad6baf43bcfecc0d7072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adminBundle:sidebar:teste.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('sidebar', $context, $blocks);
        // line 7
        echo "<div >
";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["nome"]) ? $context["nome"] : $this->getContext($context, "nome")), "html", null, true);
        echo "
    Sidebar testes
</div>";
        
        $__internal_6a8690f6b66c8db7ed120a22038b242dde2977c86ad6ad6baf43bcfecc0d7072->leave($__internal_6a8690f6b66c8db7ed120a22038b242dde2977c86ad6ad6baf43bcfecc0d7072_prof);

    }

    // line 3
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c3ec9695e54879ba56bbcb8bb53683d2a7abcbfd12ddb82f25e2876a8c5aee30 = $this->env->getExtension("native_profiler");
        $__internal_c3ec9695e54879ba56bbcb8bb53683d2a7abcbfd12ddb82f25e2876a8c5aee30->enter($__internal_c3ec9695e54879ba56bbcb8bb53683d2a7abcbfd12ddb82f25e2876a8c5aee30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 4
        echo "          <!-- Left side column. contains the logo and sidebar -->
          aaaaa
    ";
        
        $__internal_c3ec9695e54879ba56bbcb8bb53683d2a7abcbfd12ddb82f25e2876a8c5aee30->leave($__internal_c3ec9695e54879ba56bbcb8bb53683d2a7abcbfd12ddb82f25e2876a8c5aee30_prof);

    }

    public function getTemplateName()
    {
        return "adminBundle:sidebar:teste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 4,  42 => 3,  32 => 8,  29 => 7,  27 => 3,  23 => 1,);
    }
}
/* */
/* */
/* {% block sidebar %}*/
/*           <!-- Left side column. contains the logo and sidebar -->*/
/*           aaaaa*/
/*     {% endblock %}*/
/* <div >*/
/* {{nome}}*/
/*     Sidebar testes*/
/* </div>*/
