<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
    
		<meta charset="utf-8">

		<title><?php wp_title(''); ?></title>

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- Mobile Meta -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    
    <!-- Adobe Fonts Import -->
    <link rel="stylesheet" href="https://use.typekit.net/xum7txi.css">
    
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WCC6FJW');</script>
    <!-- End Google Tag Manager -->
      
    <!-- Fallback for AOS in case of disabled JS -->
    <noscript>
        <style type="text/css">
            [data-aos] {
                opacity: 1 !important;
                transform: translate(0) scale(1) !important;
            }
            
            .a {
              display: block;
            }
        </style>
    </noscript>

	</head>

	<body <?php body_class(); ?>>
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WCC6FJW"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
  	
  	<nav class="navbar navbar-static navbar-expand-lg navbar-light">
        <div class="container-fluid">
          
		<?php if ( get_field('navbar_logo_light', 'option') ) : ?>
			<a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php the_field('navbar_logo_light', 'option') ?>" class="img-fluid"></a>
		<?php else : ?>
			<a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
		<?php endif; ?>
		
    	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
    		<span class="navbar-toggler-icon"></span>
    	</button>
        
    	<div class="collapse navbar-collapse" id="navbar-content">
      	
          	<?php primer_main_nav(); ?>
      	
    	</div><!-- end #navbar-content -->
            	
        </div><!-- end .container -->
      </nav>
      
      <div class="nav-fixed-container">
      
      <nav class="navbar navbar-fixed navbar-expand-lg navbar-light">
        <div class="container-fluid">
          
		<?php if ( get_field('navbar_logo', 'option') ) : ?>
			<a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php the_field('navbar_logo', 'option') ?>" class="img-fluid"></a>
		<?php else : ?>
			<a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
		<?php endif; ?>
		
    	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content-fixed" aria-controls="navbar-content-fixed" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
    		<span class="navbar-toggler-icon"></span>
    	</button>
        
    	<div class="collapse navbar-collapse" id="navbar-content-fixed">
      	
          	<?php primer_main_nav(); ?>
      	
    	</div><!-- end #navbar-content -->
            	
        </div><!-- end .container -->
      </nav>
      
      </div><!-- end .nav-fixed-container -->