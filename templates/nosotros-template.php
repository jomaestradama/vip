<?php /* Template Name: Nosotros Template */ get_header(); ?>
<?php $viajamos = get_field('giros', 'option'); ?>
<?php $premios = get_field('premios');
$partners = get_field('partners', 'option'); ?>
<!-- start page title section -->
<div class="wow fadeIn cover-background" data-style="background-image: url('<?= get_field('cover')['url']; ?>')">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 display-table extra-small-screen">
                <div class="display-table-cell vertical-align-middle text-center">
                    <!-- start page title -->
                    <h1 class="alt-font text-white font-weight-600 no-margin text-uppercase letter-spacing-1"><?= the_title(); ?></h1>
                    <!-- end page title -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page title section -->
<!-- start about section -->
<section class="wow fadeIn ">
    <div class="container">
        <div class="row equalize sm-equalize-auto">
            <div class="col-md-3 col-sm-12 col-xs-12 display-table sm-height-auto sm-margin-40px-bottom xs-margin-30px-bottom wow fadeIn">
                <div class="display-table-cell vertical-align-middle sm-text-center">
                    <h2 class="gradient-oh border-top alt-font font-weight-700 width-75 no-margin-bottom md-width-90 sm-width-100 xs-width-100"><?= get_field('titulo_nosotros'); ?></h2>
                </div>
            </div>
            <div class="col-md-9 col-sm-12 col-xs-12 display-table wow fadeIn" data-wow-delay="0.4s">
                <div class="display-table-cell vertical-align-middle sm-padding-ten-left xs-no-padding-left xs-text-justify">
                    <?= get_field('texto_1_nosotros'); ?>
                </div>
            </div>
        </div>
        <div class="row wow padding-six-tb fadeIn">
        <?php
        if( isset($premios) ):
            foreach($premios as $premio){ ?>
            <div class="col-md-4 col-sm-4 col-xs-12 team-block text-left feature-box-15 xs-margin-15px-bottom last-paragraph-no-margin wow fadeInUp" data-wow-delay="0.2s">
                <figure>
                    <div class="feature-box-content xs-width-100">
                        <div class="feature-box-image text-center">
                            <p class="text-doublextra-large margin-20px-bottom text-black font-weight-600"><?= $premio['posicion']; ?></p>
                            <p class="text-medium"><?= $premio['mencion']; ?></p>
                            <div class="text-bottom-line border-color-deep-pink"></div>
                        </div>
                        <div class="hover-content img-awards text-center">
                            <img src="<?= $premio['logo']['url']; ?>" alt="<?= $premio['logo']['alt']; ?>" title="<?= $premio['logo']['title']; ?>">
                        </div> 
                    </div>
                </figure>
            </div>
            <?php
            }
        endif;
        ?>
        </div>
        <div class="row wow fadeIn padding-one-tb" data-stellar-background-ratio="0.6">
            <div class="xs-text-justify col-md-12">
                <?= get_field('texto_2_nosotros'); ?>
            </div>
        </div>
    </div>
</section>

<section class="wow fadeIn small-section">
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
                                <li class="alt-font line-height-20 padding-eight-top wow fadeInRight" > <?php
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

<section class="wow fadeIn">
    <div class="container">
        <div class="row equalize sm-equalize-auto">
            <div class="col-md-3 col-sm-12 col-xs-12 display-table sm-height-auto sm-margin-40px-bottom xs-margin-30px-bottom wow fadeIn">
                <div class="display-table-cell vertical-align-middle sm-text-center">
                    <h2 class="gradient-oh border-top alt-font font-weight-700 width-75 no-margin-bottom md-width-90 sm-width-100 xs-width-100">
                        <?= get_field('titulo_partners')?>
                    </h2>
                </div>
            </div>
            
            <div class="col-md-9 col-sm-12 col-xs-12 display-table wow fadeIn" data-wow-delay="0.4s">
                <div class="display-table-cell vertical-align-middle sm-padding-ten-left xs-no-padding-left xs-text-justify">
                    <?= get_field('texto_partners')?>
                </div>
            </div>
            <div class="hidden-xs container wow fadeIn">
                <div class="row">
                    <?php
                    if( isset($partners) && is_array($partners)):
                        foreach($partners as $partner){ ?>
                        <div class="col-md-2 col-sm-4 hidden-xs wow fadeInUp">
                            <div class="bg-white clients-list text-center display-table width-100">
                                <div class="display-table-cell vertical-align-middle">
                                    <a class="quitar-manita" ><img src="<?= $partner['imagen_partner']['url']; ?>" alt="<?= $partner['imagen_partner']['alt']; ?>" title="<?= $partner['imagen_partner']['title']; ?>"/></a>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                    endif;
                    ?>
                </div>
            </div>
            <div class="visible-xs col-xs-12 swiper-slider-clients swiper-container black-move padding-two-top padding-five-bottom">
                <div class="swiper-wrapper">
                    <?php
                    if( isset($partners) && is_array($partners) ):
                        foreach($partners as $partner){ ?>
                        <div class="swiper-slide text-center">
                            <a class="quitar-manita" >
                                <img src="<?= $partner['imagen_partner']['url']; ?>" alt="<?= $partner['imagen_partner']['alt']; ?>" title="<?= $partner['imagen_partner']['title']; ?>">
                            </a>
                        </div>
                        <?php
                        }
                    endif;
                    ?>
                </div>
            </div>
            
            <div class="col-md-12 col-sm-12 col-xs-12 display-table wow fadeIn" data-wow-delay="0.4s">
                <div class="display-table-cell vertical-align-middle sm-padding-ten-left xs-no-padding-left xs-text-justify">
                    <?= get_field('texto_partners_2')?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
