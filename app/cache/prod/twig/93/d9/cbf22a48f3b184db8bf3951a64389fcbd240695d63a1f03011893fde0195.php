<?php

/* GallerieAdminBundle:Animation:gestionanimations.html.twig */
class __TwigTemplate_93d9cbf22a48f3b184db8bf3951a64389fcbd240695d63a1f03011893fde0195 extends Twig_Template
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
        echo "
 <!-- This is the target div. id must match the href of this div's tab -->
\t<div class=\"mws-panel grid_8 mws-collapsible\" id=\"mws-dashboard-chart\">\t\t\t\t
    <div style=\"width: 130; float: left\">
      
            
        <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/images/animationgallery.png"), "html", null, true);
        echo "\" height=\"100\" width=\"100\" style=\"float: top;\">
                                                                    </div>
    <div style=\"width: 400;\"><h1>
     Mes Animations Flash Publiées
      
        </h1>
        
     </div>
        <div class=\"mws-panel-header\">
                            
                    \t<span><i class=\"icon-table\"></i></span>
                    </div>
                <div class=\"mws-panel-body no-padding\">
                        
        <div id=\"supp\">
        
        \t\t 
            <table  class=\"mws-table mws-datatable\" style=\"border:1\">
\t\t\t\t\t\t\t
                                                    <thead>
                                                        <tr style=\"background-color: #B8E0F9;\">
                                                                    
\t\t\t\t\t\t\t\t  
                                                            <th><strong>Libellé</strong></th>
\t\t\t\t\t\t            <th><strong>Path</strong></th>
                                                              ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pagerparam"]) ? $context["pagerparam"] : $this->getContext($context, "pagerparam")), "currentPageResults"));
        foreach ($context['_seq'] as $context["_key"] => $context["param"]) {
            // line 33
            echo "                                                            <th><strong>";
            echo twig_escape_filter($this->env, (isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")), "html", null, true);
            echo "</strong></th>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['param'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                                                            <th><strong>Publié Le</strong></th>
                                                            
                                                            <th><strong>Action</strong></th>
                                                                   
                                                                   
\t\t\t\t\t\t\t\t   \t</tr>
                                                                 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</thead>
                                                       
\t\t\t\t\t\t\t
                                                      
                                                        
\t\t\t\t\t\t\t<tbody>
                                                    ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pageranimation"]) ? $context["pageranimation"] : $this->getContext($context, "pageranimation")), "currentPageResults"));
        foreach ($context['_seq'] as $context["_key"] => $context["animation"]) {
            // line 50
            echo "                                                          
                                                            <tr>
                                                                    
\t\t\t\t\t\t\t\t\t
                                                                        <td>
                                                                            <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editanimation", array("id" => $this->getAttribute((isset($context["animation"]) ? $context["animation"] : $this->getContext($context, "animation")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["animation"]) ? $context["animation"] : $this->getContext($context, "animation")), "libelle"), "html", null, true);
            echo " </a>
                                                                            
                                                                        </td>
                                                                        
                                                                        <td>
                                                                            <a href=\"#\"  data-rel=\"popup";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["animation"]) ? $context["animation"] : $this->getContext($context, "animation")), "id"), "html", null, true);
            echo "\" class=\"poplight\">Lire</a>
                                                                            
                                                                            <div id=\"popup";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["animation"]) ? $context["animation"] : $this->getContext($context, "animation")), "id"), "html", null, true);
            echo "\" class=\"popup_block\" style=\"width: 500px; height: 300px;\">
                                                                                <embed src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/uploads/animations/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["animation"]) ? $context["animation"] : $this->getContext($context, "animation")), "path"), "html", null, true);
            echo "\" width=\"100%\" height=\"100%\">                                                       
                                                                         
                                                                                      </div>
                                                                              
                                                                            
                                                                            </td>
                                                                           ";
            // line 69
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pagerparam"]) ? $context["pagerparam"] : $this->getContext($context, "pagerparam")), "currentPageResults"));
            foreach ($context['_seq'] as $context["_key"] => $context["param"]) {
                // line 70
                echo "                                                                           
                                                                    ";
                // line 71
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["animation"]) ? $context["animation"] : $this->getContext($context, "animation")), "sousparametres"));
                foreach ($context['_seq'] as $context["_key"] => $context["sousparam"]) {
                    echo " 
                                                                            ";
                    // line 72
                    if (($this->getAttribute($this->getAttribute((isset($context["sousparam"]) ? $context["sousparam"] : $this->getContext($context, "sousparam")), "parametre"), "id") == $this->getAttribute((isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")), "id"))) {
                        // line 73
                        echo "                                                                           <td>
                                                                               ";
                        // line 74
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sousparam"]) ? $context["sousparam"] : $this->getContext($context, "sousparam")), "name"), "html", null, true);
                        echo "
                                                                           </td>

                                                                         
";
                    }
                    // line 79
                    echo "                                                                           
                                                                           ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousparam'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "                                                                          
                                                                           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['param'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "\t                                                                   <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["animation"]) ? $context["animation"] : $this->getContext($context, "animation")), "dateinsertion"), "d-M-y H:i:s"), "html", null, true);
            echo "</td>
                                                                        <td><a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editanimation", array("id" => $this->getAttribute((isset($context["animation"]) ? $context["animation"] : $this->getContext($context, "animation")), "id"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gallerieadmin/images/edit-icon.png"), "html", null, true);
            echo "\" alt=\"Editer\"></a>&nbsp;
                                                                        <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteanimation", array("id" => $this->getAttribute((isset($context["animation"]) ? $context["animation"] : $this->getContext($context, "animation")), "id"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gallerieadmin/images/delete-icon.png"), "html", null, true);
            echo "\" alt=\"Supprimer\"></a></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                                                                
                                                                
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tbody>
                                                        
\t\t\t\t\t\t<div id=\"pagination\">";
        // line 93
        echo $this->env->getExtension('pagerfanta')->renderPagerfanta((isset($context["pageranimation"]) ? $context["pageranimation"] : $this->getContext($context, "pageranimation")), "default");
        echo "</div> \t
\t\t\t\t\t\t</table>
\t\t\t\t<a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("addanimation");
        echo "\">Nouvelle Animation</a>
        
        
        </div>
                    
                  
\t\t\t\t\t\t
</div> <!-- End #tab1 -->
</div> <!-- End .content-box-content -->
";
    }

    public function getTemplateName()
    {
        return "GallerieAdminBundle:Animation:gestionanimations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 95,  186 => 88,  169 => 84,  164 => 83,  157 => 81,  150 => 79,  139 => 73,  137 => 72,  124 => 69,  114 => 63,  110 => 62,  95 => 55,  88 => 50,  84 => 49,  204 => 97,  199 => 95,  192 => 90,  181 => 87,  175 => 85,  170 => 84,  167 => 83,  160 => 81,  153 => 79,  142 => 74,  140 => 72,  134 => 71,  131 => 71,  127 => 69,  117 => 63,  113 => 62,  109 => 61,  104 => 59,  94 => 54,  87 => 49,  68 => 35,  59 => 33,  55 => 32,  207 => 105,  202 => 103,  193 => 93,  182 => 93,  176 => 92,  171 => 90,  168 => 89,  161 => 87,  154 => 85,  146 => 80,  143 => 79,  135 => 77,  128 => 70,  112 => 63,  105 => 60,  92 => 52,  85 => 47,  81 => 46,  66 => 33,  57 => 31,  53 => 30,  27 => 7,  19 => 1,  397 => 251,  395 => 250,  386 => 243,  384 => 242,  381 => 241,  377 => 240,  371 => 238,  369 => 237,  364 => 234,  362 => 233,  359 => 232,  355 => 231,  349 => 229,  347 => 228,  343 => 226,  340 => 225,  336 => 223,  330 => 221,  328 => 220,  318 => 212,  315 => 211,  311 => 209,  305 => 207,  303 => 206,  296 => 201,  289 => 199,  282 => 196,  279 => 195,  273 => 193,  268 => 191,  265 => 190,  262 => 189,  256 => 187,  251 => 185,  248 => 184,  245 => 183,  239 => 181,  233 => 179,  231 => 178,  219 => 170,  179 => 132,  145 => 74,  141 => 78,  132 => 76,  86 => 51,  83 => 48,  33 => 4,  30 => 3,);
    }
}
