<?php

/* GallerieAdminBundle:Video:gestionvideos.html.twig */
class __TwigTemplate_cb386460a1c6e2a2be97466c30819d5fb8f7156b422681c2724cbf2f9d235121 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/images/videogallery.png"), "html", null, true);
        echo "\" height=\"100\" width=\"100\" style=\"float: top;\">
                                                                    </div>
    <div style=\"width: 400; alignment-adjust: central\"><h1>
     Mes Videos Publiées
      
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
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pagervideo"]) ? $context["pagervideo"] : $this->getContext($context, "pagervideo")), "currentPageResults"));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 49
            echo "                                                          
                                                            <tr>
                                                                    
\t\t\t\t\t\t\t\t\t
                                                                        <td>
                                                                            <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editvideo", array("id" => $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "libelle"), "html", null, true);
            echo " </a>
                                                                            
                                                                        </td>
                                                                        
                                                                        <td>
                                                                            <a href=\"#\"  data-rel=\"popup";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "id"), "html", null, true);
            echo "\" class=\"poplight\">Lire</a>
                                                                            
                                                                            <div id=\"popup";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "id"), "html", null, true);
            echo "\" class=\"popup_block\" style=\"width: 500px; height: 300px;\">
                                                                                <video poster=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/images/img1.jpg"), "html", null, true);
            echo "\" width=\"100%\" height=\"100%\"  controls preload>
                                                  <source src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/uploads/videos/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "path"), "html", null, true);
            echo "\"/> </video>                                                       
                                              
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
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "sousparametres"));
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
            echo "                                                                                
                                                                        <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "dateinsertion"), "d-M-y H:i:s"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t
                                                                        <td><a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editvideo", array("id" => $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "id"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gallerieadmin/images/edit-icon.png"), "html", null, true);
            echo "\" alt=\"Editer\"></a>&nbsp;
                                                                        <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deletevideo", array("id" => $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "id"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gallerieadmin/images/delete-icon.png"), "html", null, true);
            echo "\" alt=\"Supprimer\"></a></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                                                                
                                                                
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tbody>
                                                        
\t\t\t\t\t\t<div id=\"pagination\">";
        // line 95
        echo $this->env->getExtension('pagerfanta')->renderPagerfanta((isset($context["pagervideo"]) ? $context["pagervideo"] : $this->getContext($context, "pagervideo")), "default");
        echo "</div> \t
\t\t\t\t\t\t</table>
            <a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("addvideo");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/images/addvideo.png"), "html", null, true);
        echo "\" alt=\"Ajouter une video\" width=\"50\" height=\"50\"></a>
   
\t\t\t\t
        
        
        </div>
                    
                  
\t\t\t\t\t\t
</div> <!-- End #tab1 -->
</div> <!-- End .content-box-content -->
";
    }

    public function getTemplateName()
    {
        return "GallerieAdminBundle:Video:gestionvideos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 97,  199 => 95,  192 => 90,  181 => 87,  175 => 86,  170 => 84,  167 => 83,  160 => 81,  153 => 79,  142 => 73,  140 => 72,  134 => 71,  131 => 70,  127 => 69,  117 => 63,  113 => 62,  109 => 61,  104 => 59,  94 => 54,  87 => 49,  68 => 35,  59 => 33,  55 => 32,  207 => 105,  202 => 103,  193 => 96,  182 => 93,  176 => 92,  171 => 90,  168 => 89,  161 => 87,  154 => 85,  146 => 80,  143 => 79,  135 => 77,  128 => 75,  112 => 63,  105 => 60,  92 => 52,  85 => 47,  81 => 46,  66 => 33,  57 => 31,  53 => 30,  27 => 7,  19 => 1,  397 => 251,  395 => 250,  386 => 243,  384 => 242,  381 => 241,  377 => 240,  371 => 238,  369 => 237,  364 => 234,  362 => 233,  359 => 232,  355 => 231,  349 => 229,  347 => 228,  343 => 226,  340 => 225,  336 => 223,  330 => 221,  328 => 220,  318 => 212,  315 => 211,  311 => 209,  305 => 207,  303 => 206,  296 => 201,  289 => 199,  282 => 196,  279 => 195,  273 => 193,  268 => 191,  265 => 190,  262 => 189,  256 => 187,  251 => 185,  248 => 184,  245 => 183,  239 => 181,  233 => 179,  231 => 178,  219 => 170,  179 => 132,  145 => 74,  141 => 78,  132 => 76,  86 => 51,  83 => 48,  33 => 4,  30 => 3,);
    }
}
