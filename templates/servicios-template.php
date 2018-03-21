<?php /* Template Name: Servicios Template */ get_header(); ?>
<?php $services = get_field('servicios', 'option'); ?>

	<!-- start slider section -->
        <section class="no-padding width-100 height-100 top-0">
            <div class="swiper-auto-width swiper-container white-move">
                <div class="swiper-wrapper">
                    <?php
                    if( isset($services) ):
                        foreach($services as $service){ ?>
                        <div class="swiper-slide cover-background" data-style="background-image:url('<?= $service['imagen_interna']['url']; ?>');">
                            <div class="bg-black"></div>
                            <div class="position-relative height-100" >
                                <div class="padding-one-all service-content position-absolute line-height-normal bottom-213 text-white width-100" >
                                    <div >
                                        <center><h2 class="text-white alt-font font-weight-600 parallax-text-shadow">
                                            <?= $service['servicios']; ?>
                                        </h2></center>
                                        <?= $service['descripcion']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                    endif;
                    ?>
                </div>
                <!-- swiper pagination -->
                <div class="swiper-pagination swiper-pagination-square swiper-pagination-white"></div>
                <div class="swiper-scrollbar xs-display-none"></div>
                <div class="swiper-next-style2 text-small alt-font xs-display-none">Next <i class="fa fa-long-arrow-right icon-very-small position-relative text-extra-dark-gray top-2 margin-5px-left" aria-hidden="true"></i></div>
                <div class="swiper-prev-style2 text-small alt-font xs-display-none"><i class="fa fa-long-arrow-left icon-very-small position-relative text-extra-dark-gray top-2 margin-5px-right" aria-hidden="true"></i> Prev</div>
            </div>
        </section>
        <!-- end slider section -->

<?php get_footer(); ?>
