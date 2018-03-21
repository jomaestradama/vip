<?php /* Template Name: Home Template */ get_header(); 
$viajamos_titulo = get_field('titulo', 'option'); 
$viajamos = get_field('giros', 'option');
$clientes = get_field('clientes', 'option');
$services = get_field('servicios', 'option');
$poster = get_field('poster');
if($poster) {
    $poster = ' poster="'.$poster['url'].'"';
} else {$poster="";} ?>
<h1 class="hidden">Agencia de Marketing Turístico</h1>
<div class="contain-header fadeIn wow">
    <div class="main-header">
        <video id="my-video" class="video" playsinline muted autoplay loop poster="<?= get_field('poster')['url']; ?>">
            <source type="video/mp4"  src="<?= get_field('video'); ?>">
        </video>
    </div>
</div>
<section class="wow fadeIn no-padding-bottom">
    <div class="container">
        <div class="row equalize sm-equalize-auto">
            <div class="col-md-3 col-sm-12 col-xs-12 display-table sm-height-auto sm-margin-40px-bottom xs-margin-30px-bottom wow fadeIn">
                <div class="display-table-cell vertical-align-middle sm-text-center">
                    <h2 class="gradient-oh border-top alt-font font-weight-700 width-75 no-margin-bottom md-width-90 sm-width-100 xs-width-100 xs-text-center"><?= get_field('titulo_travel'); ?></h2>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 display-table xs-margin-30px-bottom wow fadeIn" data-wow-delay="0.2s">
                <div class="display-table-cell vertical-align-middle">
                    <img class="padding-ten-right xs-no-padding-right sm-no-padding-right width-100" src="<?= get_field('imagen_travel')['url']; ?>" alt="<?= get_field('imagen_travel')['alt']; ?>" title="<?= get_field('imagen_travel')['title']; ?>">
                </div>
            </div>
            <div class="col-md-5 col-sm-8 col-xs-12 display-table wow fadeIn" data-wow-delay="0.4s">
                <div class="display-table-cell vertical-align-middle sm-padding-ten-left xs-no-padding-left xs-text-justify">
                    <?= get_field('texto_travel'); ?>
                    <a href="<?= get_field('link'); ?>" class="alt-font font-weight-600 text-link-extra-dark-gray text-deep-pink-hover"><?= get_field('texto_link'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="wow fadeIn no-padding-bottom"> 
    <div class="container">
        <div class="row">
        	<div class="col-md-3 col-sm-6 col-xs-12 sm-margin-seven-bottom xs-margin-40px-bottom wow fadeInRight last-paragraph-no-margin">
                <div class="position-relative">
                    <h2 class="gradient-oh border-right pagination-right alt-font font-weight-700 display-block no-margin-bottom md-width-90 sm-width-100 xs-width-100 xs-text-center"><?= get_field('titulo', 'option'); ?></h2>
                </div>
            </div>  
            <div class="col-md-9 col-sm-6 col-xs-12 padding-one-half-top">
                <ul class="travel-with ">
                    <?php
                    if( isset($viajamos) ):
                        $i=0;
                        $format = get_field('icono_format', 'option');
                        if($format) $format = 'sprite';
                        foreach($viajamos as $giro){
                            if($i==3){ ?>
                                <li class="hidden"></li>
                            <?php } ?>
                                <li class="alt-font line-height-20 padding-eight-top wow fadeInRight"> <?php
                                    if( $format === 'sprite' ) {
                                        $posicion = $giro['posicion'];
                                        if($posicion && is_array($posicion) && 
                                            array_key_exists('x', $posicion) &&
                                            array_key_exists('y', $posicion)) {
                                            $x = $posicion['x'];
                                            $y = $posicion['y'];
                                        } else {
                                            $x = $y = 0;
                                        }?>
                                        <div class="gradient-icon-sprite" data-style="background-position: <?= $x ?>px <?= $y ?>px;"></div> <?php
                                    } else { ?>
                                        <img class="gradient-icon" src="<?= $giro['icono']['url']; ?>" alt="<?= $giro['icono']['alt']; ?>" title="<?= $giro['icono']['title']; ?>"> <?php
                                    } ?>
                                    <?= $giro['texto']; ?>
                                </li>
                      <?php  $i++;
                        }
                    endif;
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="wow fadeIn no-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-3 position-relative"></div>
            <div class="col-md-9 position-relative">
        	   <h2 class="gradient-oh border-bottom alt-font font-weight-700 width-25 no-margin-bottom md-width-90 sm-width-100 xs-width-100 xs-text-center"><?= get_field('titulo_servicios'); ?></h2>
        	   <div class="xs-text-justify padding-two-tb margin-35px-bottom">
                    <?= get_field('texto_servicios'); ?>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="container">
                <div class="filter-content overflow-hidden">
                    <ul class="portfolio-grid portfolio-metro-grid work-4col hover-option5 gutter-medium">
                        <li class="grid-sizer"></li>
                        <?php
                        if( isset($services) ):
                            $item = 1;
                            foreach($services as $service){ 
                            if($item==2){ $item_size="grid-item-double";} else {$item_size="";}
                            if(!is_array($service['imagen_preview']) && empty($service['imagen_preview'])) continue;
                            ?>
                            <li class="grid-item <?= $item_size; ?> wow zoomIn">
                                <a href="/servicios">
                                    <figure>
                                        <div class="portfolio-img"><img src="<?= $service['imagen_preview']['url']; ?>" alt="<?= $service['imagen_preview']['alt']; ?>" title="<?= $service['imagen_preview']['title']; ?>"/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main text-center">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-hover-content position-relative last-paragraph-no-margin">
                                                        <span class="font-weight-600 letter-spacing-1 alt-font text-white margin-5px-bottom display-block"><?= $service['servicios']; ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                             <?php
                            $item ++;
                            }
                        endif;
                        ?>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="wow fadeIn no-padding-bottom padding-100px-top">
    <div class="container">
        <div class="row padding-two-tb margin-25px-bottom">
        	<div class="col-md-4 position-relative"></div>
        	<div class="col-md-8 border-left position-relative">
                <h2 class="gradient-oh alt-font font-weight-700 no-margin-bottom md-width-90 sm-width-100 xs-width-100 xs-text-center"><?= get_field('titulo_portafolio'); ?></h2>
                <div class="display-table-cell vertical-align-middle sm-padding-ten-left xs-no-padding-left xs-text-justify">
                    <?= get_field('texto_portafolio'); ?>
                    <a href="<?= get_field('link_portafolio'); ?>" class="alt-font font-weight-600 text-link-extra-dark-gray text-deep-pink-hover"><?= get_field('texto_link_portafolio'); ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="position-relative">
        <div class="swiper-blog-2 blog-slider hidden-xs">
            <div class="swiper-wrapper">
                <?php get_template_part('loop-portfolio-home'); ?>                           
            </div>                        
            <div class="hidden swiper-pagination swiper-pagination-four-slides"></div>
        </div>
        <div class="swiper-blog-3 blog-slider visible-xs">
            <div class="swiper-wrapper">
                <?php get_template_part('loop-portfolio-home'); ?>                           
            </div>                        
            <div class="hidden swiper-pagination swiper-pagination-four-slides"></div>
        </div>
    </div>
</section>
<section class="wow fadeIn">
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="xs-text-justify">
                    
                	<h2 class="gradient-oh border-top alt-font font-weight-700 width-25 no-margin-bottom md-width-90 sm-width-100 xs-width-100">
                        <?= get_field('titulo_clientes'); ?> 
                    </h2>
                    <div class="padding-two-top padding-two-bottom">
                	    <?= get_field('texto_clientes'); ?>
                    </div>
                </div>
                <div class="hidden-xs container wow fadeIn">
                    <div class="row">
                        <?php
                        if( isset($clientes) ):
                            foreach($clientes as $cliente){ ?>
                            <div class="col-md-2 col-sm-4 hidden-xs wow fadeInUp">
                                <div class="bg-white clients-list text-center display-table width-100">
                                    <div class="display-table-cell vertical-align-middle">
                                        <a class="quitar-manita" >
                                            <img src="<?= $cliente['logo_cliente']['url']; ?>" alt="<?= $cliente['logo_cliente']['alt']; ?>" title="<?= $cliente['logo_cliente']['title']; ?>"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                        endif;
                        ?>
                    </div>
                </div>
            	<div class="visible-xs swiper-slider-clients swiper-container black-move">
                    <div class="swiper-wrapper">
                        <?php
                        if( isset($clientes) ):
                            foreach($clientes as $cliente){ ?>
                            <div class="swiper-slide text-center">
                                <img src="<?= $cliente['logo_cliente']['url']; ?>" alt="<?= $cliente['logo_cliente']['alt']; ?>" title="<?= $cliente['logo_cliente']['title']; ?>">
                            </div>
                            <?php
                            }
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
