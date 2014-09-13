<?php

/* GallerieMediaBundle:gallerie:media.html.twig */
class __TwigTemplate_423b5dad6f9caa78e52f1878d2be38c197de9e55cbc363132ebd3d15fa52b459 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GallerieMediaBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        // line 8
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  

<script>
   \t\$(document).ready(function () {
        
        
   (function(){

\t\tvar \$tabsNav    = \$('.tabs-nav'),
\t\t\t\$tabsNavLis = \$tabsNav.children('li');

\t\t\$tabsNav.each(function(){
\t\t\tvar \$this = \$(this);
\t\t\t\$this.next().children('.tab-content').stop(true,true).hide()
\t\t//\$this.next().children('.tab-content').stop(true,true).first().show();
\t\t\t//\$this.children('li').first().addClass('active').stop(true,true).show();
\t\t});

\t\t\$tabsNavLis.on('click', function(e) {
\t\t\tvar \$this = \$(this);
\t\t\t\$this.siblings().removeClass('active').end()
\t\t\t\t .addClass('active');
\t\t\tvar idx = \$this.parent().children().index(\$this);\t\t\t
\t\t\t\$this.parent().next().children('.tab-content').stop(true,true).hide().eq(idx).fadeIn();
\t\t\te.preventDefault();
\t\t});
\t\t
\t})();
});
</script>\t 
\t 
<script src=\"http://code.jquery.com/jquery-1.9.1.min.js\"></script>
<script>
jQuery(function(\$){
\t\t\t\t\t\t   \t\t   
\t//When you click on a link with class of poplight and the href starts with a # 
\t\$('a.poplight').on('click', function() {
\t\tvar popID = \$(this).data('rel'); //Get Popup Name
\t\tvar popWidth = \$(this).data('width'); //Gets Popup Width

\t\t//Fade in the Popup and add close button
\t\t\$('#' + popID).fadeIn().css({ 'width': popWidth}).prepend('<a href=\"#\" class=\"close\"><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gallerieadmin/images/close_pop.png"), "html", null, true);
        echo "\" class=\"btn_close\" title=\"Close Window\" alt=\"Close\" /></a>');
\t\t
\t\t//Define margin for center alignment (vertical + horizontal) - we add 80 to the height/width to accomodate for the padding + border width defined in the css
\t\tvar popMargTop = (\$('#' + popID).height() + 80) / 2;
\t\tvar popMargLeft = (\$('#' + popID).width() + 80) / 2;
\t\t
\t\t//Apply Margin to Popup
\t\t\$('#' + popID).css({ 
\t\t\t'margin-top' : -popMargTop,
\t\t\t'margin-left' : -popMargLeft
\t\t});
\t\t
\t\t//Fade in Background
\t\t\$('body').append('<div id=\"fade\"></div>'); //Add the fade layer to bottom of the body tag.
\t\t\$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
\t\t
\t\treturn false;
\t});
\t
\t
\t//Close Popups and Fade Layer
\t\$('body').on('click', 'a.close, #fade', function() { //When clicking on the close or fade layer...
\t\t\$('#fade , .popup_block').fadeOut(function() {
\t\t\t\$('#fade, a.close').remove();  
\t}); //fade them both out
\t\t
\t\treturn false;
\t});

\t
});


</script> \t 
 ";
    }

    // line 86
    public function block_container($context, array $blocks = array())
    {
        // line 87
        echo " 
   <hgroup class=\"page-head\">     \t\t
                                <h2><span>Médiathéque</span></h2>
                                    </hgroup>
                        
                        <div id=\"container\" class=\"clearfix\" style=\"background-color: whitesmoke;\">
\t\t\t\t\t\t  \t\t<div id=\"content\" class=\"full-width\">\t\t\t\t\t\t\t\t
                                         <ul class=\"tabs-nav\">
\t\t  
                                <li><a href=\"#\">Filtrer par nom</a></li>
                    
                    <li><a href=\"#\">Filtrer par Type</a></li>
                    
                      ";
        // line 100
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parametre"]) ? $context["parametre"] : $this->getContext($context, "parametre")));
        foreach ($context['_seq'] as $context["_key"] => $context["param"]) {
            // line 101
            echo "                 <li><a href=\"#\">Filter par ";
            echo twig_escape_filter($this->env, (isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")), "html", null, true);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['param'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                 
                    
                            </ul>
                            <div class=\"tabs-container\">
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<section class=\"widget\">
                                        <form  method=\"post\" id=\"searchform\" style=\"width:30%;\" action=\"\">
                                            <div><label class=\"screen-reader-text\" for=\"s\">Search for:</label>
                                            <input type=\"text\" value=\"\" name=\"search\" id=\"s\">
                                            <input type=\"submit\" id=\"searchsubmit\" value=\"Rechercher\">
                                            </div>
                                         </form>
                                     </section>
                                                                                
\t\t\t\t\t\t\t</div>
                          \t\t 
                                                                 <div class=\"tab-content\">
                               <section class=\"widget\">
                                        <form  method=\"post\" id=\"searchform\" action=\"";
        // line 121
        echo $this->env->getExtension('routing')->getPath("listbyparam");
        echo "\">
                                            <div>
                                                Type:
                                                <select name=\"typemedia\">
                                                    <option value=\"p\">Photo</option>
                                                    <option value=\"v\">Video</option>
                                                    <option value=\"a\">Animation</option>
                                                
                                                </select>
                                                
                                                 <input type=\"submit\" id=\"searchsubmit\" value=\"Rechercher\">
                                            </div>
                                         </form>
                                     </section>
 
                              </div>\t 
                                  
                                   
                                   
                                     ";
        // line 140
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parametre"]) ? $context["parametre"] : $this->getContext($context, "parametre")));
        foreach ($context['_seq'] as $context["_key"] => $context["param"]) {
            // line 141
            echo "                                    <div class=\"tab-content\">
                                        
                                             <section class=\"widget\">
                                                 
                                     <form  method=\"post\" id=\"searchform\" action=\"";
            // line 145
            echo $this->env->getExtension('routing')->getPath("listbyparam");
            echo "\">
                                         ";
            // line 146
            echo twig_escape_filter($this->env, (isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")), "html", null, true);
            echo " 
                                             
                                             
                                         <select name=\"sousparametre\">
                                        ";
            // line 150
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")), "getSousparametres"));
            foreach ($context['_seq'] as $context["_key"] => $context["sousparam"]) {
                // line 151
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sousparam"]) ? $context["sousparam"] : $this->getContext($context, "sousparam")), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["sousparam"]) ? $context["sousparam"] : $this->getContext($context, "sousparam")), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousparam'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "                                              
                                               
                                        </select>
                                             <br>
                                             <br> Type médias:&nbsp;  <input type=\"radio\" name=\"typemedia\" value=\"p\" checked>Photos<br>
                                            <div style=\"margin-left: 83px;\">    <input type=\"radio\" name=\"typemedia\" value=\"v\">Videos<br></div>
                                            <div style=\"margin-left: 83px;\"><input type=\"radio\" name=\"typemedia\" value=\"a\">Animations</div>
                                             
                                                               <br>
                                             <input type=\"submit\" id=\"searchsubmit\" value=\"Rechercher\">
                                         </form>
                                                 </section>
                                    </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['param'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "                                    
                                    <div id=\"content\" class=\"full-width\">\t</div>
                                    <div class=\"official clearfix\">
                                \t\t
                                        <div class=\"home-left-side\">   
                                             
                                            <section class=\"team clearfix\" style=\"width:100%\">
                                                                          
                                \t<!--sidebar-->\t
                                         ";
        // line 176
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == 0)) {
            // line 177
            echo "\t\t\t\t\t\t\t\t\t\t<ul class=\"doctors\">
                               \t\t\t\t
                                                                                       
                                              ";
            // line 180
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "currentPageResults"));
            foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                // line 181
                echo "                                                <li style=\"width:25%;height: 100%;\">
                                                    <figure class=\"doc-img\">\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                        <a href=\"";
                // line 183
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/uploads/images/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "path"), "html", null, true);
                echo "\"  data-rel=\"popup";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "id"), "html", null, true);
                echo "\" class=\"poplight\" data-width=\"500\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "libelle"), "html", null, true);
                echo "\" >
                                                            <img width=\"100%\" height=\"100%\" src=\"";
                // line 184
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/uploads/images/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "path"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "libelle"), "html", null, true);
                echo "\"></a>
                                                            <span class=\"doc-type\"><a href=\"\">";
                // line 185
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "libelle"), "html", null, true);
                echo "</a></span>\t
                                                            <div id=\"popup";
                // line 186
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "id"), "html", null, true);
                echo "\" class=\"popup_block\">
                                                            <img width=\"100%\" height=\"100%\" src=\"";
                // line 187
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/uploads/images/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "path"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "libelle"), "html", null, true);
                echo "\">\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                    </div>
                                                        </figure>
                                                   
                                                    </li>
                                                    
                                               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 195
            echo "                                                    </ul>
                                                    ";
        }
        // line 197
        echo "                                                    ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == 1)) {
            // line 198
            echo "                                        <ul class=\"doctors\">
                                                     ";
            // line 199
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "currentPageResults"));
            foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                // line 200
                echo "                                              <li>
                                                  <figure class=\"doc-img\">\t   \t\t
                                                      <a href=\"\"  data-rel=\"popup";
                // line 202
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "id"), "html", null, true);
                echo "\" class=\"poplight\" data-width=\"500\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "libelle"), "html", null, true);
                echo "\" ><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/images/video.jpg"), "html", null, true);
                echo "\" width=\"100%\" height=\"100%\"></a>
                                                      <span class=\"doc-type\" style=\"color: #000\">";
                // line 203
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "libelle"), "html", null, true);
                echo "</span> 
                                                      <div id=\"popup";
                // line 204
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "id"), "html", null, true);
                echo "\" class=\"popup_block\">
                                                         <video poster=\"";
                // line 205
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/images/video.png"), "html", null, true);
                echo "\" width=\"100%\" height=\"100%\"  controls preload>
                                                  <source src=\"";
                // line 206
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/uploads/videos/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "path"), "html", null, true);
                echo "\"/> </video>
                                                      
                                                          </div>
                                                    </figure>
                                                   
                                                    </li>   
                                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            echo "                                                    </ul>
                                                    ";
        }
        // line 215
        echo "                                                    \t\t
                                        ";
        // line 216
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == 2)) {
            // line 217
            echo "                                        <ul class=\"doctors\">
                                                     ";
            // line 218
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "currentPageResults"));
            foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                // line 219
                echo "                                              <li>
                                                  <figure class=\"doc-img\">
                                        
                                        
                                         <embed src=\"";
                // line 223
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/uploads/animations/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "path"), "html", null, true);
                echo "\">
\t\t\t\t\t\t </figure>
                                                   
                                                    </li>   
                                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            echo "                                                    </ul>
                                                    ";
        }
        // line 230
        echo "                                                    \t\t\t\t\t\t 
                                        
                                      
\t\t\t\t\t\t\t\t\t\t                                                                               
                                </section>
                                             
                                        </div>
                                        
                                            ";
        // line 238
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("GallerieMediaBundle:Media:getsidebar"));
        echo "  
                                                                
                                                         
                                                              
                                        </div>
                                   
\t\t\t\t\t <div id=\"pagination\">";
        // line 244
        echo $this->env->getExtension('pagerfanta')->renderPagerfanta((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "default");
        echo "</div> \t
\t\t\t\t\t\t\t
 \t\t\t\t 
                  \t\t\t\t\t\t\t  
                  
\t\t\t\t\t </div>
\t\t\t\t\t                           </div>
                            
                                
                         
                            </div>
                               
                                  ";
        // line 256
        $this->env->loadTemplate("GallerieMediaBundle:gallerie:footer.html.twig")->display($context);
        // line 257
        echo " ";
    }

    public function getTemplateName()
    {
        return "GallerieMediaBundle:gallerie:media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 257,  446 => 256,  431 => 244,  422 => 238,  412 => 230,  408 => 228,  396 => 223,  390 => 219,  386 => 218,  383 => 217,  381 => 216,  378 => 215,  374 => 213,  360 => 206,  356 => 205,  352 => 204,  348 => 203,  340 => 202,  336 => 200,  332 => 199,  329 => 198,  326 => 197,  322 => 195,  305 => 187,  301 => 186,  297 => 185,  290 => 184,  281 => 183,  277 => 181,  273 => 180,  268 => 177,  266 => 176,  255 => 167,  236 => 153,  225 => 151,  221 => 150,  214 => 146,  210 => 145,  204 => 141,  200 => 140,  178 => 121,  158 => 103,  149 => 101,  145 => 100,  130 => 87,  127 => 86,  88 => 50,  43 => 8,  40 => 7,  33 => 4,  30 => 3,);
    }
}
