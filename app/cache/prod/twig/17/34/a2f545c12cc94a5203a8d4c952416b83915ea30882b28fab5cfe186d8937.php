<?php

/* GallerieAdminBundle:Photo:editphoto.html.twig */
class __TwigTemplate_1734a2f545c12cc94a5203a8d4c952416b83915ea30882b28fab5cfe186d8937 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GallerieMediaBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GallerieMediaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
       
";
    }

    // line 8
    public function block_container($context, array $blocks = array())
    {
        // line 9
        echo " 
   <hgroup class=\"page-head\">     \t\t
                                <h2><span>Médiathéque</span></h2>
                                    </hgroup>
                        
                        <div id=\"container\" class=\"clearfix\" style=\"background-color: whitesmoke;\">
\t\t\t\t\t\t  \t\t<div id=\"content\" class=\"full-width\">\t\t\t\t\t\t\t\t
                                         <ul class=\"tabs-nav1\">
\t\t  
                               <li class=\"active\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("gallerie_admin_homepage", array("v" => 1));
        echo "\">Gestion des photos</a></li>
                    
                    <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("gallerie_admin_homepage", array("v" => 2));
        echo "\">Gestion des vidéos</a></li>
                    <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("gallerie_admin_homepage", array("v" => 3));
        echo "\">Gestion des animations</a></li>
                         <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("gallerie_admin_homepage", array("v" => 4));
        echo "\">Gestion des paramétres du Filtrage</a></li> 
                               
                            </ul>
                            <div class=\"tabs-container\">
\t\t\t\t\t\t\t<div class=\"tab-content\">
                                                            
                                                            
                                                                 <section class=\"widget\">
                                                            <form action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("updatephoto");
        echo "\" method=\"post\" id=\"searchform\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">  
                                                           <table>
                                                                <tr>
                                                                    <td style=\"width:30px\">
                                                                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle"), 'label');
        echo "
                                                                    </td>
                                                                   <td>
                                                                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle"), 'widget');
        echo "
                                                                    </td>
                                                                     <td>
                                                                         <input type=\"hidden\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"id\"/>    </td>
                                                                  
                                                                     <td><span style=\"color: red\">
                                                                    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle"), 'errors');
        echo "</span>
                                                                    </td>
                                                                   </tr>
                                                                   <tr>
                                                                     <td style=\"width:30px\">
                                                                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'label');
        echo "
                                                                    </td>
                                                                <td>
                                                                    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget');
        echo "
                                                                    </td>
                                                                </tr>
                                                               
                                                                
                                                                <tr>
                                                               <td style=\"width:30px\">
                                                                    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'label');
        echo "
                                                                    </td>
                                                                    
                                                               <td>
                                                                    ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'widget');
        echo "
                                                                    </td>
                                                                    
                                                                    
                                                                     </tr>
                                                                     <tr><td>
                                                    <td>
                                                  <span style=\"color: red\">";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'errors');
        echo "</span></td> 
                                                                     
                                                                     
                                                                 </tr>
                                                                 
                                                                  ";
        // line 74
        $context["j"] = 0;
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parametre"]) ? $context["parametre"] : $this->getContext($context, "parametre")));
        foreach ($context['_seq'] as $context["_key"] => $context["param"]) {
            // line 76
            echo "  <tr>
<td style=\"width:30px\">
 ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")), "name"), "html", null, true);
            echo "
     </td>  
     <td>
         <select name=\"l";
            // line 81
            echo twig_escape_filter($this->env, (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")), "html", null, true);
            echo "\">
";
            // line 82
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sousparametres"]) ? $context["sousparametres"] : $this->getContext($context, "sousparametres")));
            foreach ($context['_seq'] as $context["_key"] => $context["sousparam"]) {
                echo " 
                                
                                   ";
                // line 84
                if (($this->getAttribute($this->getAttribute((isset($context["sousparam"]) ? $context["sousparam"] : $this->getContext($context, "sousparam")), "parametre"), "id") == $this->getAttribute((isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")), "id"))) {
                    echo "     
            
                 <option value=\"";
                    // line 86
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sousparam"]) ? $context["sousparam"] : $this->getContext($context, "sousparam")), "id"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sousparam"]) ? $context["sousparam"] : $this->getContext($context, "sousparam")), "name"), "html", null, true);
                    echo "</option>
            
         ";
                }
                // line 89
                echo "                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousparam'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                 ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["restsousparametre"]) ? $context["restsousparametre"] : $this->getContext($context, "restsousparametre")));
            foreach ($context['_seq'] as $context["_key"] => $context["sousparam1"]) {
                echo " 
                                
                                   ";
                // line 92
                if (($this->getAttribute($this->getAttribute((isset($context["sousparam1"]) ? $context["sousparam1"] : $this->getContext($context, "sousparam1")), "parametre"), "id") == $this->getAttribute((isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")), "id"))) {
                    echo "     
            
                 <option value=\"";
                    // line 94
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sousparam1"]) ? $context["sousparam1"] : $this->getContext($context, "sousparam1")), "id"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sousparam1"]) ? $context["sousparam1"] : $this->getContext($context, "sousparam1")), "name"), "html", null, true);
                    echo "</option>
            
         ";
                }
                // line 97
                echo "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousparam1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "  
              
                 
                                
                 
                 
                  </select>
             ";
            // line 104
            $context["j"] = ((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) + 1);
            // line 105
            echo "         </td>
                  </tr>                   
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['param'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                                                                         
                  <input type=\"hidden\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")), "html", null, true);
        echo "\" name=\"nbparam\"/>                                                      
                                                                         
                                                                   
                                                                 
                                                             ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                                                                     <tr><td>
                                                                          <input type=\"submit\" id=\"searchsubmit\" value=\"Modifier\">
                                                                         </td>
                                                                     </tr>
                                                                    
                                                            </table>\t
                                                                     
                                                         </form>
\t                                               </section>
\t\t\t\t\t    
                                                                    </div></div>
                                                                    </div>
                            </div>
                                  ";
        // line 127
        $this->env->loadTemplate("GallerieMediaBundle:gallerie:footer.html.twig")->display($context);
        // line 128
        echo " ";
    }

    public function getTemplateName()
    {
        return "GallerieAdminBundle:Photo:editphoto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 128,  271 => 127,  254 => 113,  247 => 109,  244 => 108,  236 => 105,  234 => 104,  220 => 97,  212 => 94,  207 => 92,  199 => 90,  193 => 89,  185 => 86,  180 => 84,  173 => 82,  169 => 81,  163 => 78,  159 => 76,  155 => 75,  153 => 74,  145 => 69,  135 => 62,  128 => 58,  118 => 51,  112 => 48,  104 => 43,  98 => 40,  92 => 37,  86 => 34,  77 => 30,  66 => 22,  62 => 21,  58 => 20,  53 => 18,  42 => 9,  39 => 8,  32 => 4,  29 => 3,);
    }
}
