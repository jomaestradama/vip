<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="format-detection" content="email=no" />
		<title><?php wp_title(''); ?></title>

        <link href="//www.google-analytics.com" rel="dns-prefetch">
        <?php if(isset($favicon)){?>
            <link href="<?= $favicon['url'] ?>" rel="shortcut icon">
            <link href="<?= $favicon['url'] ?>" rel="apple-touch-icon-precomposed">
        <?php } ?>
	
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta property="article:publisher" content="https://www.facebook.com/OOHMktTuristico"/>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
    	<header>
    		<!-- nav -->
    		<nav class="navbar navbar-default bootsnav navbar-top header-light bg-transparent nav-box-width <?php color_menu(); ?>">
                <div class="container nav-header-container">
                    <div class="row padding-one-tb">
                        <!-- start logo -->
                        <div class="col-md-2 col-xs-5">
                            <a href="<?php echo home_url(); ?>" title="OH! Travel Marketing" class="logo">
                                <img src="<?= get_field('logo_negro', 'option')['url']; ?>" class="<?php logo_dark(); ?>" alt="<?= get_field('logo_negro', 'option')['alt']; ?>" title="<?= get_field('logo_negro', 'option')['title']; ?>">
                                <img src="<?= get_field('logo_blanco', 'option')['url']; ?>" alt="<?= get_field('logo_blanco', 'option')['alt']; ?>" title="<?= get_field('logo_blanco', 'option')['title']; ?>" class="logo-light <?php logo_light(); ?>">
                            </a>
                        </div>
                        <!-- end logo -->
                        <div class="col-md-7 col-xs-2 width-auto pull-right accordion-menu xs-no-padding-right">
                            <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                                <span class="sr-only">toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="navbar-collapse collapse pull-right" id="navbar-collapse-toggle-1">
                                <?php oh_nav(); ?>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-5 width-auto">
                            <div class="header-searchbar">
                                <a href="#search-header" class="header-search-form text-white"><i class="fa fa-search search-button"></i></a>
                                <!-- search input-->
                                <form id="search-header" method="post" action="search-result.html" name="search-header" class="mfp-hide search-form-result">
                                    <div class="search-form position-relative">
                                        <button type="submit" class="fa fa-search close-search search-button"></button>
                                        <input type="text" name="search" class="search-input" placeholder="Buscar..." autocomplete="off">
                                    </div>
                                </form>
                            </div>
                        </form>
                    </div>
                    <div class="header-social-icon xs-display-none">
                        <?php $social_media = get_field('social_media', 'option') ;
                        if($social_media && is_array($social_media)){
                            foreach($social_media as $social_media){ 
                                $title_media = ($social_media['social_icon'] == 'fa-facebook')? 'Facebook': '';
                                $title_media = ($social_media['social_icon'] == 'fa-twitter')? 'Twitter': '';
                                $title_media = ($social_media['social_icon'] == 'fa-instagram')? 'Instagram': '';
                                ?>
                                <a href="<?= $social_media['link_social'] ?>" title="<?= $title_media ?>" target="_blank">
                                    <i class="fa <?= $social_media['social_icon'] ?>"></i>
                                </a>
                                <?php
                            }
                        }
                        ?>
                                <!-- <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="https://instagram.com/" title="Dribbble" target="_blank"><i class="fa fa-instagram"></i></a>   -->                        
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!-- /header -->


