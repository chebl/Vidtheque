<?php

/* GallerieAdminBundle:Admin:dashboard.html.twig */
class __TwigTemplate_732d58f704c42b0aa759ef74e4fa490f7d875e8755fa9245b2eddaf0983b1390 extends Twig_Template
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
       <style type=\"text/css\">

    /* Zoom Image */

.thumbnail-item { 
    /* position relative so that we can use position absolute for the tooltip */
\tposition: relative; 
\tfloat: left;  
\tmargin: 0px 5px; 
}

.thumbnail-item a { 
\tdisplay: block; 
}

.thumbnail-item img.thumbnail {
\tborder:3px solid #ccc;\t
}
\t\t
.tooltip { 
\t/* by default, hide it */
\tdisplay: none; 
\t/* allow us to move the tooltip */
\tposition: absolute; 
\t/* align the image properly */
\tpadding: 8px 0 0 8px; 
}

\t.tooltip span.overlay { 
\t\t/* the png image, need ie6 hack though */
\t\t
\t\t/* put this overlay on the top of the tooltip image */
\t  position: absolute; 
    \ttop: 0px; 
\t\tleft: 0px; 
\t  
     display: block; 
        width: 350px; 
    \theight: 200px;
\t\t
\t}     


</style>
";
    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        // line 51
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  
 

   <script type=\"text/javascript\">

    // Load this script once the document is ready
\t\$(document).ready(function () {
\t\t
                \$('div.thumbnail-item').mouseenter(function(e) {

\t\t\t// Calculate the position of the image tooltip
\t\t\tx = e.pageX - \$(this).offset().left;
\t\t\ty = e.pageY - \$(this).offset().top;

\t\t\t// Set the z-index of the current item, 
\t\t\t// make sure it's greater than the rest of thumbnail items
\t\t\t// Set the position and display the image tooltip
\t\t\t\$(this).css('z-index','15')
\t\t\t.children(\"div.tooltip\")
\t\t\t.css({'top': y + 10,'left': x + 20,'display':'block'});
\t\t\t
\t\t}).mousemove(function(e) {
\t\t\t
\t\t\t// Calculate the position of the image tooltip\t\t\t
\t\t\tx = e.pageX - \$(this).offset().left;
\t\t\ty = e.pageY - \$(this).offset().top;
\t\t\t
\t\t\t// This line causes the tooltip will follow the mouse pointer
\t\t\t\$(this).children(\"div.tooltip\").css({'top': y + 10,'left': x + 20});
\t\t\t
\t\t}).mouseleave(function() {
\t\t\t
\t\t\t// Reset the z-index and hide the image tooltip 
\t\t\t\$(this).css('z-index','1')
\t\t\t.children(\"div.tooltip\")
\t\t\t.animate({\"opacity\": \"hide\"}, \"fast\");
\t\t});
\t\t
(function(){
           

\t\tvar \$tabsNav    = \$('.tabs-nav'),
\t\t\t\$tabsNavLis = \$tabsNav.children('#l";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "html", null, true);
        echo "');
                       
\t\t\$tabsNav.each(function(){
\t\t\tvar \$this = \$(this);
                        
\t\t\t\$this.next().children('.tab-content').stop(true,true).hide()
\t\t\t\t\$this.next().children('#c";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "html", null, true);
        echo "').stop(true,true).show();
\t\t//\$this.children('#l";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "html", null, true);
        echo "').addClass('active').stop(true,true).show();
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


\t});



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
        // line 132
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


</script> 
\t 
 ";
    }

    // line 170
    public function block_container($context, array $blocks = array())
    {
        echo "  
   <hgroup class=\"page-head\">     \t\t
                                <h2><span>Médiathéque</span></h2>
                                    </hgroup>
                        
                        <div id=\"container\" class=\"clearfix\" style=\"background-color: whitesmoke;\">
\t\t\t\t\t\t  \t\t<div id=\"content\" class=\"full-width\">\t\t\t\t\t\t\t\t
                                         <ul class=\"tabs-nav\">
\t\t";
        // line 178
        if (((isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")) == 1)) {
            // line 179
            echo "                                                 <li id=\"l";
            echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "html", null, true);
            echo "\" class=\"active\"><a  href=\"#\">Gestion des photos</a></li>
                    ";
        } else {
            // line 181
            echo "                                                 <li id=\"l";
            echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "html", null, true);
            echo "\"><a  href=\"#\">Gestion des photos</a></li>
                          ";
        }
        // line 183
        echo "                   ";
        if (((isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")) == 2)) {
            // line 184
            echo "                                                 
                    <li id=\"l";
            // line 185
            echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "html", null, true);
            echo "\" class=\"active\"><a  href=\"#\">Gestion des vidéos</a></li>
                  ";
        } else {
            // line 187
            echo "                     <li id=\"l";
            echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "html", null, true);
            echo "\"><a  href=\"#\">Gestion des vidéos</a></li>
                       ";
        }
        // line 189
        echo "                         ";
        if (((isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")) == 3)) {
            // line 190
            echo "                    
                           <li id=\"l";
            // line 191
            echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "html", null, true);
            echo "\" class=\"active\"><a  href=\"#\"  >Gestion des animations</a></li>
                         ";
        } else {
            // line 193
            echo "                         <li id=\"l";
            echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "html", null, true);
            echo "\"><a  href=\"#\" >Gestion des animations</a></li>
                         ";
        }
        // line 195
        echo "                    ";
        if (((isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")) == 4)) {
            // line 196
            echo "                    <li id=\"l";
            echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "html", null, true);
            echo "\" class=\"active\"><a href=\"#\" >Gestion des paramétres du Filtrage</a></li>           
                           
                    ";
        } else {
            // line 199
            echo "                     <li id=\"l";
            echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "html", null, true);
            echo "\"><a href=\"#\">Gestion des paramétres du Filtrage</a></li>  
                    
                      ";
        }
        // line 201
        echo "       
                                             </ul>
                                                                      
                                                                     
                            <div class=\"tabs-container\">
                              ";
        // line 206
        if (((isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")) == 1)) {
            // line 207
            echo "\t\t\t\t\t\t\t<div class=\"tab-content\" id=\"c";
            echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "html", null, true);
            echo "\" >
                                                          ";
        } else {
            // line 209
            echo "                                                                <div class=\"tab-content\" >
                                                                    ";
        }
        // line 211
        echo "                                                                  ";
        $this->env->loadTemplate("GallerieAdminBundle:Photo:gestionphotos.html.twig")->display(array_merge($context, array("pagerphoto" => (isset($context["pagerphoto"]) ? $context["pagerphoto"] : $this->getContext($context, "pagerphoto")))));
        // line 212
        echo "\t\t\t\t\t\t\t




                                                            
\t\t\t\t\t\t\t
</div>
                                    ";
        // line 220
        if (((isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")) == 2)) {
            // line 221
            echo "                                                                <div class=\"tab-content\" id=\"c";
            echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "html", null, true);
            echo "\">
                                                                     ";
        } else {
            // line 223
            echo "                                                                <div class=\"tab-content\" >
                                                                    ";
        }
        // line 225
        echo "                    ";
        $this->env->loadTemplate("GallerieAdminBundle:Video:gestionvideos.html.twig")->display(array_merge($context, array("pagervideo" => (isset($context["pagervideo"]) ? $context["pagervideo"] : $this->getContext($context, "pagervideo")))));
        // line 226
        echo "\t\t\t  
                                                     </div> 
                                      ";
        // line 228
        if (((isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")) == 3)) {
            // line 229
            echo "                                     <div class=\"tab-content\" id=\"c";
            echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "html", null, true);
            echo "\">
                                         ";
        } else {
            // line 231
            echo "                                           <div class=\"tab-content\" >
                                                                    ";
        }
        // line 232
        echo "  
                               ";
        // line 233
        $this->env->loadTemplate("GallerieAdminBundle:Animation:gestionanimations.html.twig")->display(array_merge($context, array("pageranimation" => (isset($context["pageranimation"]) ? $context["pageranimation"] : $this->getContext($context, "pageranimation")))));
        // line 234
        echo "
                              </div>
                                             
                                     ";
        // line 237
        if (((isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")) == 4)) {
            // line 238
            echo "                                     <div class=\"tab-content\" id=\"c";
            echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "html", null, true);
            echo "\">
                                         ";
        } else {
            // line 240
            echo "                                           <div class=\"tab-content\" >
                                                                    ";
        }
        // line 241
        echo " 
                               ";
        // line 242
        $this->env->loadTemplate("GallerieAdminBundle:Filtre:gestionparams.html.twig")->display(array_merge($context, array("pagerparam" => (isset($context["pagerparam"]) ? $context["pagerparam"] : $this->getContext($context, "pagerparam")))));
        // line 243
        echo "
                              </div>
     
\t\t\t\t\t </div>
\t\t\t\t\t    
                                                                    </div>
                            </div>
                                  ";
        // line 250
        $this->env->loadTemplate("GallerieMediaBundle:gallerie:footer.html.twig")->display($context);
        // line 251
        echo " ";
    }

    public function getTemplateName()
    {
        return "GallerieAdminBundle:Admin:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 251,  395 => 250,  386 => 243,  384 => 242,  381 => 241,  377 => 240,  371 => 238,  369 => 237,  364 => 234,  362 => 233,  359 => 232,  355 => 231,  349 => 229,  347 => 228,  343 => 226,  340 => 225,  336 => 223,  330 => 221,  328 => 220,  318 => 212,  315 => 211,  311 => 209,  305 => 207,  303 => 206,  296 => 201,  289 => 199,  282 => 196,  279 => 195,  273 => 193,  268 => 191,  265 => 190,  262 => 189,  256 => 187,  251 => 185,  248 => 184,  245 => 183,  239 => 181,  233 => 179,  231 => 178,  219 => 170,  179 => 132,  145 => 101,  141 => 100,  132 => 94,  86 => 51,  83 => 50,  33 => 4,  30 => 3,);
    }
}
