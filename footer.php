
			<!-- start footer --> 
			<footer class="footer-modern-dark bg-extra-dark-gray">
            <div class="footer-widget-area bg-black padding-one-tb padding-40px-bottom xs-padding-30px-bottom padding-one-tb ">
                <div class="container">
                    <div class="row equalize xs-equalize-auto">
                        <!-- start logo -->
                        <div class="col-md-2 col-sm-6 col-xs-12 text-center display-table xs-margin-10px-bottom">
                            <div class="display-table-cell vertical-align-middle">
                                <img class="footer-logo" src="<?= get_field('logo_blanco', 'option')['url']; ?>" alt="<?= get_field('logo_blanco', 'option')['alt']; ?>" title="<?= get_field('logo_blanco', 'option')['title']; ?>">
                            </div>
                        </div>
                        <!-- end logo -->
                        <!-- start slogan -->
                        <div class="col-md-3 col-sm-6 col-xs-12 alt-font xs-text-center sm-text-center xs-margin-15px-bottom text-white display-table">
                            <div class="display-table-cell vertical-align-middle text-white">
                                <div><?= get_field('texto_telefono', 'option'); ?> <a  href="tel:<?= preg_replace('/\D/', '', get_field('telefono', 'option')); ?>"><?= get_field('telefono', 'option'); ?></a></div>
                                <?= get_field('texto_email', 'option'); ?> <a href="mailto:<?= get_field('email', 'option'); ?>"><?= get_field('email', 'option'); ?></a>
                            </div>
                        </div>
                        <!-- end slogan -->
                        <!-- -->
                        <div class="col-md-4 col-sm-6 col-xs-12 xs-text-center sm-text-center display-table no-padding">
                            <div class="display-table-cell vertical-align-middle text-white">
                                <span class="alt-font text-large text-white sm-no-margin-top display-inline-block width-100 margin-8px-bottom"><?= get_field('texto_call_to_action', 'option'); ?></span>
                                <a href="<?= get_field('link_call_to_action', 'option'); ?>" class="btn btn-small btn-rounded btn-transparent-dark-gray sm-text-center" data-wow-delay="0.4s"><?= get_field('texto_boton_call_to_action', 'option'); ?> <i class="ti-arrow-right" aria-hidden="true"></i></a>
                            </div>    
                        </div>
                        <!-- -->
                        <!-- start social media -->
                        <div class="col-md-3 col-sm-6 col-xs-12 col-xs-12 xs-text-center sm-text-center display-table">
                            <div class="display-table-cell vertical-align-middle">
                                <span class="text-white alt-font margin-20px-right" data-style="display: block;"><?= get_field('texto_redes_sociales', 'option'); ?></span>
                                <div class="social-icon-style-8 display-inline-block vertical-align-middle">
                                    <ul class="small-icon no-margin-bottom">
                                        <?php $social_media = get_field('social_media', 'option') ;
                                            if($social_media && is_array($social_media)){
                                                foreach($social_media as $social_media){ 
                                                    $class_media = ($social_media['social_icon'] == 'fa-facebook')? 'facebook': '';
                                                    $class_media = ($social_media['social_icon'] == 'fa-twitter')? 'twitter': '';
                                                    $class_media = ($social_media['social_icon'] == 'fa-instagram')? 'instagram': '';
                                                    ?>
                                                    <li>
                                                        <a class="<?= $class_media; ?> text-white" href="<?= $social_media['link_social'] ?>" target="_blank">
                                                            <i class="fa <?= $social_media['social_icon'] ?>" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                <?php
                                                }
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end social media -->
                    </div>
                </div>
            </div>
            <div class="footer-widget-area padding-five-top padding-30px-bottom xs-padding-30px-top color-white">
                <div class="container">
                    <div class="row">
                        <!-- start about -->
                        <div class="col-md-3 col-sm-6 col-xs-12 widget sm-margin-30px-bottom xs-text-left">
                            <div class="text-white margin-15px-bottom font-weight-600 xs-text-center"><?= get_field('texto_oficinas', 'option'); ?></div>
                                <ul class="nav nav-partner nav-tabs">
                                 <?php
                                 $oficinas = get_field('oficinas_footer', 'option');
                                 $active = "active";
                                    if( isset($oficinas) ):
                                        foreach($oficinas as $oficina){ ?>
                                            <li class="<?= $active ?>"><a data-toggle="tab" href="#<?= toSlug($oficina['ubicacion']) ?>"><?= $oficina['ubicacion'] ?></a></li>
                                        <?php
                                        $active = "";
                                        }
                                    endif;
                                  ?>
                                </ul>
                                <div class="tab-content">
                                    <?php
                                     $oficinas = get_field('oficinas_footer', 'option');
                                     $active = "active";
                                        if( isset($oficinas) ):
                                            foreach($oficinas as $oficina){ ?>
                                                <div id="<?= toSlug($oficina['ubicacion']) ?>" class="tab-pane fade in <?= $active ?>">
                                                    <div class="text-small width-95 xs-width-100 no-margin"><?= $oficina['informacion'] ?></div>
                                                </div>
                                            <?php
                                            $active = "";
                                            }
                                        endif;
                                      ?>
                                </div>
                        </div>
                        <!-- end about -->
                        <!-- start blog post -->
                        <div class="col-md-3 col-sm-6 col-xs-12 widget sm-margin-30px-bottom">
                            <div class="text-white margin-15px-bottom font-weight-600 xs-text-center"><?= get_field('titulo_blog_footer', 'option'); ?></div>
                            <?php get_template_part('loop-footer'); ?>
                        </div>
                        <!-- end blog post -->
                        <!-- start newsletter -->
                        <div class="col-md-3 col-sm-6 col-xs-12 widget sm-margin-30px-bottom xs-text-center">
                            <div class="text-white margin-15px-bottom font-weight-600"><?= get_field('titulo_newsletter', 'option'); ?></div>
                            <div class="text-small width-90 xs-width-100"><?= get_field('texto_newsletter', 'option'); ?></div>
                            <?= do_shortcode('[mc4wp_form id="5072"]'); ?>
                        </div>
                        <!-- end newsletter -->
                        <!-- start instagram -->
                        <div class="col-md-3 col-sm-6 col-xs-12 widget xs-margin-5px-bottom xs-text-center">
                            <div class="text-white margin-15px-bottom font-weight-600"><?= get_field('titulo_instagram_footer', 'option'); ?></div>
                            <div class="instagram-follow-api">
                                <ul id="instaFeed-footer"></ul>
                            </div>
                        </div>
                        <!-- end instagram -->
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="footer-bottom text-white border-top-default border-color-medium-dark-gray padding-10px-bottom">
                    <div class="row">
                        <!-- start copyright -->
                        <div class="col-sm-6 col-xs-12 text-left text-small xs-text-center"><?= get_field('copyright', 'option'); ?></div>
                        <div class="col-sm-6 hidden-xs nav-footer text-small text-right xs-text-center"><?php oh_nav(); ?></div>
                        <!-- end copyright -->
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->

		<!-- /wrapper -->
		<a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top  -->
        <!-- javascript libraries -->
		<?php wp_footer(); ?>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        </body>
        
</html>
