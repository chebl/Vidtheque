<?php

/* GallerieMediaBundle::layout.html.twig */
class __TwigTemplate_1d993898034701ff79244932c3ca44e74e0afd2014d40c3efb54899f5a61ba98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'slider' => array($this, 'block_slider'),
            'container' => array($this, 'block_container'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 72
        echo "\t\t\t\t
";
        // line 73
        $this->displayBlock('javascripts', $context, $blocks);
        // line 90
        echo "  

    </head>
    <body>
        
        

     
   
       
      \t\t\t\t
        
\t\t\t\t
                ";
        // line 103
        $this->displayBlock('body', $context, $blocks);
        // line 114
        echo " \t\t
</body>
</html>
















 ";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "MédiaThéque";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "      
\t\t<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,800,700,300' rel='stylesheet' type='text/css'>
\t\t<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>                  
                <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/js/prettyPhoto/css/prettyPhoto.css"), "html", null, true);
        echo "\"/>
                <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/js/flexslider/flexslider.css"), "html", null, true);
        echo "\"/>                
                <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/css/jquery.ui.all.css"), "html", null, true);
        echo "\"/>                
                <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/css/jquery.ui.theme.css"), "html", null, true);
        echo "\"/> 
\t\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/style.css"), "html", null, true);
        echo "\"/>
                <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/css/media-queries.css"), "html", null, true);
        echo "\"/>                    
                <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/css/custom.css"), "html", null, true);
        echo "\"/> 
                
 <style type=\"text/css\">



/*------------------POPUPS------------------------*/
#fade {
\tdisplay: none;
\tbackground: #000; 
\tposition: fixed; left: 0; top: 0; 
\tz-index: 10;
\twidth: 100%; height: 100%;
\topacity: .80;
\tz-index: 9999;
}
.popup_block{
\tdisplay: none;
\tbackground: #fff;
\tpadding: 20px; \t
\tborder: 20px solid #ddd;
\tfloat: left;
\tfont-size: 1.2em;
\tposition: fixed;
\ttop: 50%; left: 50%;
\tz-index: 99999;
\t-webkit-box-shadow: 0px 0px 20px #000;
\t-moz-box-shadow: 0px 0px 20px #000;
\tbox-shadow: 0px 0px 20px #000;
\t-webkit-border-radius: 10px;
\t-moz-border-radius: 10px;
\tborder-radius: 10px;
\tfont: normal 10px Verdana, Arial, Helvetica, sans-serif;
}
img.btn_close {
\tfloat: right; 
\tmargin: -55px -55px 0 0;
}
.popup p {
\tpadding: 5px 10px;
\tmargin: 5px 0;
}
/*--Making IE6 Understand Fixed Positioning--*/
*html #fade {
\tposition: absolute;
}
*html .popup_block {
\tposition: absolute;
}
 </style>

                <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
                <!--[if lt IE 9]>
                    <script src=\"js/html5.js\"></script>
                <![endif]-->
";
    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        // line 74
        echo "

                <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/js/jquery-1.8.2.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/js/prettyPhoto/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>                
                <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/js/jquery.form.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/js/jquery.ui.core.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/js/jquery.ui.datepicker.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/js/jquery.cycle.lite.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/js/flexslider/jquery.flexslider-min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
                   <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galleriemedia/js/custom.js"), "html", null, true);
        echo "\"></script>
                   
                  
  
     ";
    }

    // line 103
    public function block_body($context, array $blocks = array())
    {
        echo " \t\t
                       <!-- Starting Website Wrapper -->
                        <div id=\"wrapper\">
                            ";
        // line 106
        $this->displayBlock('header', $context, $blocks);
        // line 107
        echo "                            ";
        $this->displayBlock('slider', $context, $blocks);
        // line 108
        echo "                            ";
        $this->displayBlock('container', $context, $blocks);
        // line 109
        echo "                            ";
        $this->displayBlock('footer', $context, $blocks);
        echo " 
                        </div><!-- End of Wrapper Div -->
                       
     \t                <a href=\"#top\" id=\"scroll-top\"></a>
                \t
";
    }

    // line 106
    public function block_header($context, array $blocks = array())
    {
        echo " ";
    }

    // line 107
    public function block_slider($context, array $blocks = array())
    {
        echo " ";
    }

    // line 108
    public function block_container($context, array $blocks = array())
    {
        echo " ";
    }

    // line 109
    public function block_footer($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "GallerieMediaBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 109,  280 => 108,  274 => 107,  268 => 106,  257 => 109,  254 => 108,  251 => 107,  249 => 106,  242 => 103,  233 => 86,  229 => 85,  225 => 84,  221 => 83,  217 => 82,  213 => 81,  209 => 80,  205 => 79,  201 => 78,  197 => 77,  193 => 76,  189 => 74,  186 => 73,  126 => 17,  122 => 16,  118 => 15,  114 => 14,  110 => 13,  106 => 12,  102 => 11,  97 => 8,  94 => 7,  88 => 5,  65 => 114,  46 => 73,  41 => 7,  37 => 6,  27 => 1,  152 => 91,  145 => 87,  120 => 65,  77 => 25,  66 => 16,  63 => 103,  56 => 12,  52 => 11,  48 => 90,  43 => 72,  40 => 7,  33 => 5,  30 => 3,);
    }
}
