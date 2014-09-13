<?php

/* GallerieMediaBundle:gallerie:sidebar.html.twig */
class __TwigTemplate_afb2111dde499558f23bd772ab46139ebf4ddba7d9d1254518ef2c0cd17ddc76 extends Twig_Template
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
        echo "<aside id=\"sidebar\">
                                     
                                    <section class=\"widget\">
                                      <h3 class=\"title\">Nos derniers Photos</h3>
                                       ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lastphotos"]) ? $context["lastphotos"] : $this->getContext($context, "lastphotos")));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            echo " 
                                        <div class=\"sidebar-post clearfix\">\t\t\t\t\t\t
                                            <a href=\"#\"><img src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/uploads/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "path"), "html", null, true);
            echo "\" height=\"40\" weight=\"30\" alt=\"Post Image\"></a>
                                            <div class=\"sidebar-post-text\">
                                            <a href=\"\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "libelle"), "html", null, true);
            echo "</a>
                                            <span class=\"date\">";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "dateinsertion"), "d-M-Y H:i:s"), "html", null, true);
            echo "</span>
                                            </div>
                                        </div>\t\t\t
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t                         \t\t\t\t\t\t
                                    </section>
                                
         <section class=\"widget\">
                                      <h3 class=\"title\">Nos derniers Videos</h3>
                                       ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lastvideos"]) ? $context["lastvideos"] : $this->getContext($context, "lastvideos")));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            echo " 
                                        <div class=\"sidebar-post clearfix\">\t\t\t\t\t\t
                                               <a href=\"\"  data-rel=\"popup";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "libelle"), "html", null, true);
            echo "\" class=\"poplight\" data-width=\"500\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "libelle"), "html", null, true);
            echo "\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/images/video.jpg"), "html", null, true);
            echo "\" height=\"40\" weight=\"30\"></a>
                                                      
                                                      <div id=\"popup";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "libelle"), "html", null, true);
            echo "\" class=\"popup_block\">
                                                      
                                                          <video poster=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/images/video.png"), "html", null, true);
            echo "\" width=\"100%\" height=\"100%\"  controls preload>
                                                  <source src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/uploads/videos/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "path"), "html", null, true);
            echo "\"/> </video>
                                                </div>
                                            <div class=\"sidebar-post-text\">
                                            <a href=\"\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "libelle"), "html", null, true);
            echo "</a>
                                            <span class=\"date\">";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "dateinsertion"), "d-M-Y H:i:s"), "html", null, true);
            echo "</span>
                                            </div>
                                      \t\t
                                        </div>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t                         \t\t\t\t\t\t
                                    </section>
        
        
         <section class=\"widget\">
                                      <h3 class=\"title\">Nos derniers Animations</h3>
                                       ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lastanimations"]) ? $context["lastanimations"] : $this->getContext($context, "lastanimations")));
        foreach ($context['_seq'] as $context["_key"] => $context["animation"]) {
            echo " 
                                        <div class=\"sidebar-post clearfix\">\t\t\t\t\t\t
                                           <embed src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/uploads/animations/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["animation"]) ? $context["animation"] : $this->getContext($context, "animation")), "path"), "html", null, true);
            echo "\">
                                            <span class=\"date\">";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["animation"]) ? $context["animation"] : $this->getContext($context, "animation")), "dateinsertion"), "d-M-Y H:i:s"), "html", null, true);
            echo "</span>
                                            </div>
                                        </div>\t\t\t
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t                         \t\t\t\t\t\t
                                    </section>
        
                                    
                                            
                                  
                                   \t\t\t\t\t\t\t\t\t
                                </aside>          ";
    }

    public function getTemplateName()
    {
        return "GallerieMediaBundle:gallerie:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 45,  126 => 42,  121 => 41,  114 => 39,  106 => 33,  95 => 29,  91 => 28,  84 => 25,  80 => 24,  75 => 22,  66 => 20,  59 => 18,  52 => 13,  42 => 10,  38 => 9,  32 => 7,  25 => 5,  19 => 1,  448 => 257,  446 => 256,  431 => 244,  422 => 238,  412 => 230,  408 => 228,  396 => 223,  390 => 219,  386 => 218,  383 => 217,  381 => 216,  378 => 215,  374 => 213,  360 => 206,  356 => 205,  352 => 204,  348 => 203,  340 => 202,  336 => 200,  332 => 199,  329 => 198,  326 => 197,  322 => 195,  305 => 187,  301 => 186,  297 => 185,  290 => 184,  281 => 183,  277 => 181,  273 => 180,  268 => 177,  266 => 176,  255 => 167,  236 => 153,  225 => 151,  221 => 150,  214 => 146,  210 => 145,  204 => 141,  200 => 140,  178 => 121,  158 => 103,  149 => 101,  145 => 100,  130 => 87,  127 => 86,  88 => 50,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
