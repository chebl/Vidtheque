<?php

/* GallerieAdminBundle:Filtre:gestionparams.html.twig */
class __TwigTemplate_600c24a44831e27b0e9fae3faae800cf244375296e71b793b5bde478407fc215 extends Twig_Template
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
      
            
        <img src=\"\" height=\"120\" width=\"120\" style=\"float: top;\">
                                                                    </div>
    <div style=\"width: 400; alignment-adjust: central\"><h1>
     Les Paramétres du Filtrage
      
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
                                                            <th><strong>Paramétre</strong></th>
\t\t\t\t\t\t            
                                                            <th><strong>Action</strong></th>
                                                                   
                                                                   
\t\t\t\t\t\t\t\t   \t</tr>
                                                                 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</thead>
                                                       
\t\t\t\t\t\t\t
                                                      
                                                        
\t\t\t\t\t\t\t<tbody>
                                                    ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pagerparam"]) ? $context["pagerparam"] : $this->getContext($context, "pagerparam")), "currentPageResults"));
        foreach ($context['_seq'] as $context["_key"] => $context["param"]) {
            // line 45
            echo "                                                          
                                                            <tr>
                                                                    
\t\t\t\t\t\t\t\t\t
                                                                        <td>
                                                                            <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sousparam", array("id" => $this->getAttribute((isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")), "name"), "html", null, true);
            echo " </a>
                                                                            
                                                                        </td>
                                                                        
                                                                  
                                                                                
                                                                  \t
                                                                        <td><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editparam", array("id" => $this->getAttribute((isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")), "id"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gallerieadmin/images/edit-icon.png"), "html", null, true);
            echo "\" alt=\"Editer\"></a>&nbsp;
                                                                        <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deleteparam", array("id" => $this->getAttribute((isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")), "id"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gallerieadmin/images/delete-icon.png"), "html", null, true);
            echo "\" alt=\"Supprimer\"></a></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['param'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                                                                
                                                                
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tbody>
                                                        
\t\t\t\t\t\t<div id=\"pagination\">";
        // line 66
        echo $this->env->getExtension('pagerfanta')->renderPagerfanta((isset($context["pagerparam"]) ? $context["pagerparam"] : $this->getContext($context, "pagerparam")), "default");
        echo "</div> \t
\t\t\t\t\t\t</table>
\t\t\t\t<a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("addparam");
        echo "\">Nouveau paramétre</a>
        
        
        </div>
\t\t\t\t\t\t
</div> <!-- End #tab1 -->
</div> <!-- End .content-box-content -->

";
    }

    public function getTemplateName()
    {
        return "GallerieAdminBundle:Filtre:gestionparams.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 68,  111 => 66,  93 => 58,  75 => 50,  64 => 44,  198 => 95,  186 => 88,  169 => 84,  164 => 83,  157 => 81,  150 => 79,  139 => 73,  137 => 72,  124 => 69,  114 => 63,  110 => 62,  95 => 55,  88 => 50,  84 => 49,  204 => 97,  199 => 95,  192 => 90,  181 => 87,  175 => 85,  170 => 84,  167 => 83,  160 => 81,  153 => 79,  142 => 74,  140 => 72,  134 => 71,  131 => 71,  127 => 69,  117 => 63,  113 => 62,  109 => 61,  104 => 61,  94 => 54,  87 => 57,  68 => 45,  59 => 33,  55 => 32,  207 => 105,  202 => 103,  193 => 93,  182 => 93,  176 => 92,  171 => 90,  168 => 89,  161 => 87,  154 => 85,  146 => 80,  143 => 79,  135 => 77,  128 => 70,  112 => 63,  105 => 60,  92 => 52,  85 => 47,  81 => 46,  66 => 33,  57 => 31,  53 => 30,  27 => 7,  19 => 1,  397 => 251,  395 => 250,  386 => 243,  384 => 242,  381 => 241,  377 => 240,  371 => 238,  369 => 237,  364 => 234,  362 => 233,  359 => 232,  355 => 231,  349 => 229,  347 => 228,  343 => 226,  340 => 225,  336 => 223,  330 => 221,  328 => 220,  318 => 212,  315 => 211,  311 => 209,  305 => 207,  303 => 206,  296 => 201,  289 => 199,  282 => 196,  279 => 195,  273 => 193,  268 => 191,  265 => 190,  262 => 189,  256 => 187,  251 => 185,  248 => 184,  245 => 183,  239 => 181,  233 => 179,  231 => 178,  219 => 170,  179 => 132,  145 => 74,  141 => 78,  132 => 76,  86 => 51,  83 => 48,  33 => 4,  30 => 3,);
    }
}
