<?php

/* GallerieAdminBundle:Photo:addphoto.html.twig */
class __TwigTemplate_4e9209a2695cfe41d4d5e52935c14a4c9a07ebb76db1e6db20ea038c8937fd86 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("addphoto");
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
                                                                     <td><span style=\"color: red\">
                                                                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle"), 'errors');
        echo "</span>
                                                                    </td>
                                                                   </tr>
                                                                   <tr>
                                                                     <td style=\"width:30px\">
                                                                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'label');
        echo "
                                                                    </td>
                                                                <td>
                                                                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget');
        echo "
                                                                    </td>
                                                                </tr>
                                                               
                                                                
                                                                <tr>
                                                               <td style=\"width:30px\">
                                                                    ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'label');
        echo "
                                                                    </td>
                                                                    
                                                               <td>
                                                                    ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'widget');
        echo "
                                                                    </td>
                                                                    
                                                                    
                                                                     </tr>
                                                                     <tr>
                                              <td><span style=\"color: red\">";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'errors');
        echo "</span></td> 
                                                                     </tr>
                                                     
                                                                    
                    ";
        // line 69
        $context["j"] = 0;
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parametre"]) ? $context["parametre"] : $this->getContext($context, "parametre")));
        foreach ($context['_seq'] as $context["_key"] => $context["param"]) {
            // line 71
            echo "  <tr>
<td style=\"width:30px\">
 ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")), "name"), "html", null, true);
            echo "
     </td>  
     <td>
         <select name=\"l";
            // line 76
            echo twig_escape_filter($this->env, (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")), "html", null, true);
            echo "\">
";
            // line 77
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sousparametres"]) ? $context["sousparametres"] : $this->getContext($context, "sousparametres")));
            foreach ($context['_seq'] as $context["_key"] => $context["sousparam"]) {
                echo " 
                                
                                   ";
                // line 79
                if (($this->getAttribute($this->getAttribute((isset($context["sousparam"]) ? $context["sousparam"] : $this->getContext($context, "sousparam")), "parametre"), "id") == $this->getAttribute((isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")), "id"))) {
                    echo "     
            
                 <option value=\"";
                    // line 81
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sousparam"]) ? $context["sousparam"] : $this->getContext($context, "sousparam")), "id"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sousparam"]) ? $context["sousparam"] : $this->getContext($context, "sousparam")), "name"), "html", null, true);
                    echo "</option>
            
         ";
                }
                // line 84
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousparam'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "                  </select>
             ";
            // line 86
            $context["j"] = ((isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")) + 1);
            // line 87
            echo "         </td>
                  </tr>                   
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['param'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                                                                         
                  <input type=\"hidden\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")), "html", null, true);
        echo "\" name=\"nbparam\"/>                                                      
                                                                         
                                                                     </td>
                                                                <td>
                                                                      </td>
                                                                </tr>
                                                                             
                                                             ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                                                                     <tr><td>
                                                                          <input type=\"submit\" id=\"searchsubmit\" value=\"Ajouter\">
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
        // line 112
        $this->env->loadTemplate("GallerieMediaBundle:gallerie:footer.html.twig")->display($context);
        // line 113
        echo " ";
    }

    public function getTemplateName()
    {
        return "GallerieAdminBundle:Photo:addphoto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 113,  234 => 112,  217 => 98,  207 => 91,  204 => 90,  196 => 87,  194 => 86,  191 => 85,  185 => 84,  177 => 81,  172 => 79,  165 => 77,  161 => 76,  155 => 73,  151 => 71,  147 => 70,  145 => 69,  138 => 65,  129 => 59,  122 => 55,  112 => 48,  106 => 45,  98 => 40,  92 => 37,  86 => 34,  77 => 30,  66 => 22,  62 => 21,  58 => 20,  53 => 18,  42 => 9,  39 => 8,  32 => 4,  29 => 3,);
    }
}
