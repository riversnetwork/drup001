<?php

/* themes/bootstrap/templates/page.html.twig */
class __TwigTemplate_08d3eeb117717699a726e462198f0594b483611d4810d1cc1e7168d4c641ef78 extends Twig_Template
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
        $tags = array("if" => 85);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 64
        echo "<header";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
  <div class=\"container\">
    <div class=\"navbar-header\">
      ";
        // line 67
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
      ";
        // line 69
        echo "      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
    </div>
    <div class=\"navbar-collapse collapse\">
      ";
        // line 77
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
        echo "
    </div>
  </div>
</header>

<div role=\"main\" class=\"main-container container js-quickedit-main-content\">
  <div class=\"row\">

    ";
        // line 85
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 86
            echo "      <div class=\"col-xs-12\" role=\"heading\">
        ";
            // line 87
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 90
        echo "
    ";
        // line 91
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 92
            echo "      <aside class=\"col-sm-3\" role=\"complementary\">
        ";
            // line 93
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
      </aside>  <!-- End first aside. -->
    ";
        }
        // line 96
        echo "
    <section";
        // line 97
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_column_attributes"]) ? $context["content_column_attributes"] : null), "html", null, true));
        echo ">
      ";
        // line 98
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 99
            echo "        <div class=\"highlighted\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "</div>
      ";
        }
        // line 101
        echo "      ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
      <a id=\"main-content\"></a>

      ";
        // line 104
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "

      ";
        // line 106
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 107
            echo "        <ul class=\"action-links\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
            echo "</ul>
      ";
        }
        // line 109
        echo "
      ";
        // line 110
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
    </section>

    ";
        // line 113
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 114
            echo "      <aside class=\"col-sm-3\" role=\"complementary\">
        ";
            // line 115
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
      </aside> <!-- End second aside. -->
    ";
        }
        // line 118
        echo "
  </div>
</div>

";
        // line 122
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 123
            echo "  <footer class=\"footer container\" role=\"contentinfo\">
    ";
            // line 124
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
  </footer>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 124,  163 => 123,  161 => 122,  155 => 118,  149 => 115,  146 => 114,  144 => 113,  138 => 110,  135 => 109,  129 => 107,  127 => 106,  122 => 104,  115 => 101,  109 => 99,  107 => 98,  103 => 97,  100 => 96,  94 => 93,  91 => 92,  89 => 91,  86 => 90,  80 => 87,  77 => 86,  75 => 85,  64 => 77,  54 => 69,  50 => 67,  43 => 64,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  * - logo: The url of the logo image, as defined in theme settings.*/
/*  * - site_name: The name of the site. This is empty when displaying the site*/
/*  *   name has been disabled in the theme settings.*/
/*  * - site_slogan: The slogan of the site. This is empty when displaying the site*/
/*  *   slogan has been disabled in theme settings.*/
/*  **/
/*  * Navigation:*/
/*  * - breadcrumb: The breadcrumb trail for the current page.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title: The page title, for use in the actual content.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the*/
/*  *   view and edit tabs when displaying a node).*/
/*  * - action_links: Actions local to the page, such as "Add menu" on the menu*/
/*  *   administration interface.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.primary_menu: Items for the primary menu region.*/
/*  * - page.secondary_menu: Items for the secondary menu region.*/
/*  * - page.highlighted: Items for the highlighted content region.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.footer: Items for the footer region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* <header{{ navbar_attributes }} id="navbar" role="banner">*/
/*   <div class="container">*/
/*     <div class="navbar-header">*/
/*       {{ page.navigation }}*/
/*       {# .btn-navbar is used as the toggle for collapsed navbar content #}*/
/*       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </button>*/
/*     </div>*/
/*     <div class="navbar-collapse collapse">*/
/*       {{ page.navigation_collapsible }}*/
/*     </div>*/
/*   </div>*/
/* </header>*/
/* */
/* <div role="main" class="main-container container js-quickedit-main-content">*/
/*   <div class="row">*/
/* */
/*     {% if page.header %}*/
/*       <div class="col-xs-12" role="heading">*/
/*         {{ page.header }}*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     {% if page.sidebar_first %}*/
/*       <aside class="col-sm-3" role="complementary">*/
/*         {{ page.sidebar_first }}*/
/*       </aside>  <!-- End first aside. -->*/
/*     {% endif %}*/
/* */
/*     <section{{ content_column_attributes }}>*/
/*       {% if page.highlighted %}*/
/*         <div class="highlighted">{{ page.highlighted }}</div>*/
/*       {% endif %}*/
/*       {{ breadcrumb }}*/
/*       <a id="main-content"></a>*/
/* */
/*       {{ page.help }}*/
/* */
/*       {% if action_links %}*/
/*         <ul class="action-links">{{ action_links }}</ul>*/
/*       {% endif %}*/
/* */
/*       {{ page.content }}*/
/*     </section>*/
/* */
/*     {% if page.sidebar_second %}*/
/*       <aside class="col-sm-3" role="complementary">*/
/*         {{ page.sidebar_second }}*/
/*       </aside> <!-- End second aside. -->*/
/*     {% endif %}*/
/* */
/*   </div>*/
/* </div>*/
/* */
/* {% if page.footer %}*/
/*   <footer class="footer container" role="contentinfo">*/
/*     {{ page.footer }}*/
/*   </footer>*/
/* {% endif %}*/
/* */
