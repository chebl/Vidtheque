<?php

/* GallerieAdminBundle:Photo:gestionphotos.html.twig */
class __TwigTemplate_bd607ac2bb06f5f2f0e77abca7311ea54d87db489668e4ef1857eb4e479c0eb7 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/images/gallery.png"), "html", null, true);
        echo "\" height=\"100\" width=\"100\" style=\"float: top;\">
                                                                    </div>
    <div style=\"width: 400; alignment-adjust: central\"><h1>
     Mes Photos Publiées
      
        </h1>
        
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
\t\t\t\t\t\t            <th><strong>Photo</strong></th>
                                                           
                                                            ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pagerparam"]) ? $context["pagerparam"] : $this->getContext($context, "pagerparam")), "currentPageResults"));
        foreach ($context['_seq'] as $context["_key"] => $context["param"]) {
            // line 31
            echo "                                                            <th><strong>";
            echo twig_escape_filter($this->env, (isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")), "html", null, true);
            echo "</strong></th>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['param'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                                                            <th><strong>Publié Le</strong></th>
                                                            <th><strong>Action</strong></th>
                                                                   
                                                                   
\t\t\t\t\t\t\t\t   \t</tr>
                                                                 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</thead>
                                                       
\t\t\t\t\t\t\t
                                                      
                                                        
\t\t\t\t\t\t\t<tbody>
                                                    ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pagerphoto"]) ? $context["pagerphoto"] : $this->getContext($context, "pagerphoto")), "currentPageResults"));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 47
            echo "                                                          
                                                            <tr>
                                                                    
\t\t\t\t\t\t\t\t\t
                                                                        <td>
                                                                            <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editphoto", array("id" => $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "libelle"), "html", null, true);
            echo " </a>
                                                                            
                                                                        </td>
                                                                        
                                                                        <td>
                                                                            
                                                                            <div class=\"thumbnail-item\">
                                                                                <a href=\"#\">
                <img src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/uploads/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "path"), "html", null, true);
            echo "\" width=\"30%\" height=\"20%\" class=\"thumbnail\">
                                                                                </a>
                <div class=\"tooltip\">
    \t<img src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/uploads/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "path"), "html", null, true);
            echo "\" width=\"180%\" height=\"180%\">
            \t
\t\t\t<span class=\"overlay\"></span>
\t\t</div> 
</div>
                                                                            
                                                                            
                                                                            
                                                                            
                                                                            
                                                                           </td>
                                                                            
                                                                ";
            // line 75
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pagerparam"]) ? $context["pagerparam"] : $this->getContext($context, "pagerparam")), "currentPageResults"));
            foreach ($context['_seq'] as $context["_key"] => $context["param"]) {
                // line 76
                echo "                                                                           
                                                                    ";
                // line 77
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "sousparametres"));
                foreach ($context['_seq'] as $context["_key"] => $context["sousparam"]) {
                    echo " 
                                                                            ";
                    // line 78
                    if (($this->getAttribute($this->getAttribute((isset($context["sousparam"]) ? $context["sousparam"] : $this->getContext($context, "sousparam")), "parametre"), "id") == $this->getAttribute((isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")), "id"))) {
                        // line 79
                        echo "                                                                           <td>
                                                                               ";
                        // line 80
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sousparam"]) ? $context["sousparam"] : $this->getContext($context, "sousparam")), "name"), "html", null, true);
                        echo "
                                                                           </td>

                                                                         
";
                    }
                    // line 85
                    echo "                                                                           
                                                                           ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousparam'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                echo "                                                                          
                                                                           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['param'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                                                                          
                                                                        <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "dateinsertion"), "d-M-y H:i:s"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t
                                                                        <td><a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editphoto", array("id" => $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "id"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gallerieadmin/images/edit-icon.png"), "html", null, true);
            echo "\" alt=\"Editer\"></a>&nbsp;
                                                                        <a href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deletephoto", array("id" => $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "id"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gallerieadmin/images/delete-icon.png"), "html", null, true);
            echo "\" alt=\"Supprimer\"></a></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                                                               
                                                                
                                                                
                                                                
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tbody>
                                                        
\t\t\t\t\t\t<div id=\"pagination\">";
        // line 103
        echo $this->env->getExtension('pagerfanta')->renderPagerfanta((isset($context["pagerphoto"]) ? $context["pagerphoto"] : $this->getContext($context, "pagerphoto")), "default");
        echo "</div> \t
\t\t\t\t\t\t</table>
            <a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("addphoto");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/images/image_add_48.png"), "html", null, true);
        echo "\" alt=\"Ajouter une photo\"></a>
        
        
        </div>
\t\t\t\t\t\t
</div> <!-- End #tab1 -->
</div> <!-- End .content-box-content -->

";
    }

    public function getTemplateName()
    {
        return "GallerieAdminBundle:Photo:gestionphotos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 105,  202 => 103,  193 => 96,  182 => 93,  176 => 92,  171 => 90,  168 => 89,  161 => 87,  154 => 85,  146 => 80,  143 => 79,  135 => 77,  128 => 75,  112 => 63,  105 => 60,  92 => 52,  85 => 47,  81 => 46,  66 => 33,  57 => 31,  53 => 30,  27 => 7,  19 => 1,  397 => 251,  395 => 250,  386 => 243,  384 => 242,  381 => 241,  377 => 240,  371 => 238,  369 => 237,  364 => 234,  362 => 233,  359 => 232,  355 => 231,  349 => 229,  347 => 228,  343 => 226,  340 => 225,  336 => 223,  330 => 221,  328 => 220,  318 => 212,  315 => 211,  311 => 209,  305 => 207,  303 => 206,  296 => 201,  289 => 199,  282 => 196,  279 => 195,  273 => 193,  268 => 191,  265 => 190,  262 => 189,  256 => 187,  251 => 185,  248 => 184,  245 => 183,  239 => 181,  233 => 179,  231 => 178,  219 => 170,  179 => 132,  145 => 101,  141 => 78,  132 => 76,  86 => 51,  83 => 50,  33 => 4,  30 => 3,);
    }
}
