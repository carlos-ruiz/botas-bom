<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 3.4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest (the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title><?= $this->pageTitle ?></title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Botas y Botines de trabajo rudo BOM" name="description">
  <meta content="botas botines bom trabajo calzado zapatos" name="keywords">
  <meta content="Techinc" name="author">

  <meta property="og:site_name" content="botasbom.com">
  <meta property="og:title" content="Botas y Botines BOM">
  <meta property="og:description" content="Botas y Botines de trabajo rudo BOM">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="http://botasbom.com">

  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->
  <!-- Fonts END -->

  <!-- Global styles START -->
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Global styles END -->

  <!-- Page level plugin styles START -->
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/slider-layer-slider/css/layerslider.css" rel="stylesheet">
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/jquery-multi-select/css/multi-select.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/select2/select2.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>

  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/css/components.css" rel="stylesheet">
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/frontend/layout/css/style.css" rel="stylesheet">
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/frontend/pages/css/style-shop.css" rel="stylesheet" type="text/css">
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/frontend/pages/css/style-layer-slider.css" rel="stylesheet">
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/frontend/layout/css/style-responsive.css" rel="stylesheet">
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/frontend/layout/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/frontend/layout/css/custom.css" rel="stylesheet">
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->

  <!-- JAVASCRIPT FILES -->
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/jquery.multifile.js" type="text/javascript"></script>
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="ecommerce">

    <!-- BEGIN HEADER -->
    <div class="header" id="header">
      <div class="container">
        <a class="site-logo" href="<?php echo Yii::app()->request->baseUrl; ?>/site/index"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/bom.jpg" height="60px" alt="Botas y Botines BOM"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation">
          <ul>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/products/index" <?php if($this->section == "catalogo")echo "style='color:#E02222;'";?>>Catálogo</a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/aboutUs" <?php if($this->section == "aboutUs")echo "style='color:#E02222;'";?>>¿Quiénes somos?</a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/mision" <?php if($this->section == "mision")echo "style='color:#E02222;'";?>>Misión</a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/vision" <?php if($this->section == "vision")echo "style='color:#E02222;'";?>>Visión</a></li>
            <?php if(!Yii::app()->user->isGuest){ ?>
              <li><a <?php if($this->section == "administration")echo "style='color:#E02222;'";?>> Administrar</a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                  <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/products/admin" <?php if($this->subSection == "products")echo "style='color:#E02222;'";?>>Productos</a></li>
                  <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/categories/admin" <?php if($this->subSection == "categories")echo "style='color:#E02222;'";?>>Categorías</a></li>
                </ul>              
              </li>
              <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/logout" <?php if($this->section == "logout")echo "style='color:#E02222;'";?>>Salir</a></li>
            <?php } ?>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/contacto" <?php if($this->section == "contacto")echo "style='color:#E02222;'";?>>Contactanos</a></li>

            <!-- BEGIN TOP SEARCH -->
            <li class="menu-search">
              <span class="sep"></span>
              <i class="fa fa-search search-btn"></i>
              <div class="search-box">

                  <div class="input-group">
                    <input id="field-search" type="text" placeholder="Buscar..." class="form-control">
                    <span class="input-group-btn">
                      <button id="btn-search" class="btn btn-primary" type="button">Buscar</button>
                    </span>
                  </div>

              </div>
            </li>
            <!-- END TOP SEARCH -->
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <div id="backing-header"></div>
    <!-- Header END -->

    <div>
      <?php echo $content; ?>
    </div>

    <!-- BEGIN FOOTER -->
    <!-- <div id="backing-footer"></div> -->
    <div class="footer" id="footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-6 col-sm-6 padding-top-10">
            BOM 2015 © Techinc.
          </div>
          <!-- END COPYRIGHT -->
            <!-- BEGIN SOCIAL ICONS -->
            <div class="col-md-6 col-sm-6">
              <ul class="social-icons">
                <li><a class="rss" data-original-title="rss" href="#"></a></li>
                <li><a class="facebook" data-original-title="facebook" href="#"></a></li>
                <li><a class="twitter" data-original-title="twitter" href="#"></a></li>
                <li><a class="googleplus" data-original-title="googleplus" href="#"></a></li>
                <li><a class="linkedin" data-original-title="linkedin" href="#"></a></li>
                <li><a class="youtube" data-original-title="youtube" href="#"></a></li>
                <li><a class="vimeo" data-original-title="vimeo" href="#"></a></li>
                <li><a class="skype" data-original-title="skype" href="#"></a></li>
              </ul>
            </div>
            <!-- END SOCIAL ICONS -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->

    <!-- BEGIN fast view of a product -->
    <div id="product-pop-up" style="display: none; width: 700px;">
            
    </div>
    <!-- END fast view of a product -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/custom.js" type="text/javascript"></script>
    
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/frontend/layout/scripts/back-to-top.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->
    <script src='<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script><!-- product zoom -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script><!-- Quantity -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/select2/select2.min.js" type="text/javascript"></script>
    <!-- BEGIN LayerSlider -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/slider-layer-slider/js/greensock.js" type="text/javascript"></script><!-- External libraries: GreenSock -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/slider-layer-slider/js/layerslider.transitions.js" type="text/javascript"></script><!-- LayerSlider script files -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/global/plugins/slider-layer-slider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script><!-- LayerSlider script files -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/frontend/pages/scripts/layerslider-init.js" type="text/javascript"></script>
    <!-- END LayerSlider -->

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/frontend/layout/scripts/layout.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initOWL();
            LayersliderInit.initLayerSlider();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initTwitter();
            $('.select2').select2({
              placeholder: "--Seleccione--",
              allowClear: true
            });
            var backingHeader = document.getElementById("backing-header");
            var offsetHeight = document.getElementById("header").offsetHeight;
            backingHeader.setAttribute("style","height:"+offsetHeight+"px");

            // var backingFooter = document.getElementById("backing-footer");
            // var offsetHeightFooter = document.getElementById("footer").offsetHeight;
            // backingFooter.setAttribute("style","height:"+offsetHeightFooter+"px");

        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>