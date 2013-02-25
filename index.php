<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <div id="main_controller" class="container main-page bg-blue" style="display:block;">

            <!-- normal page content is controlled here -->
            <?php //include('views/pagestructure.php'); ?>
            <!-- end of normal page content -->


            <!-- layers and plants are created in this file -->
            <?php include('views/layerstructure.php'); ?>
            <!-- end of layers and plants -->




        </div><!-- #main_controller -->
        <!-- Add your site or application content here -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
        <!--
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
    -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/jquery.parallax.min.js"></script>
        
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script type="text/javascript">
            /*
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
            */
            jQuery(document).ready(function(){
                            // Declare parallax on layers
                            jQuery('.parallax-layer').parallax({
                                mouseport: jQuery('.parallax-viewport'),
                                yparallax: false,
                                xorigin: 'middle'
                            });

                            jQuery('.plant').popover({
                                animation : true,
                                trigger: 'hover'
                            });

                            
                        });
        </script>
    </body>
</html>
