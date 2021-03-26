<?php

use Uposcar\Pixelex\Util\AcfImage;

get_header();
if (have_posts()):
while (have_posts()):
the_post(); ?>


<div class="bg-blue-light overflow-visible relative">
    <div class="mw-page mlauto mrauto relative plgutter prgutter">
        <span class="db h-nav w-100 dn-m"></span>
        <span class="db h2 h3-m w-100"></span>
        <h1 class="mb3">
            <span class="type-heading b2 f-medium lgutter blue-dark fw8">About us</span>
        </h1>
        <div class="type-body mb2 f-base lh3 blue-dark mw-super">
            <?php the_field('blurb'); ?>
        </div>
        <span class="db h2 h3-m w-100"></span>
        <section class="relative overflow-hidden">
            <div class="b0-ns r0-ns dn db-l mb3">
                <div class="gatsby-image-outer-wrapper" style="position: relative;">
                    <div class="gatsby-image-wrapper" style="position: relative; overflow: hidden;">
                        <div style="width: 100%; padding-bottom: 66.6667%;"></div>
                        <img alt="image.caption" src="<?= AcfImage::instance()->url('hero_image') ?>"
                            style="position: absolute; top: 0px; left: 0px; transition: opacity 0.5s ease 0s; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1;">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="plg--h prg--h mw-page mlauto mrauto">
        <div class="df-m flexw-w">
            <?php if (have_rows('about_services')): ?>
            <?php while (have_rows('about_services')) : the_row(); ?>
            <div v-bind:key="index" v-for="(service, index) in services" class="mb3 w-50-m plg--h prg--h w-third-l">
                <div class="gatsby-image-outer-wrapper" style="position: relative;">
                    <div class="mb3 gatsby-image-wrapper" style="position: relative; overflow: hidden;">
                        <div style="width: 100%; padding-bottom: 75%;"></div>
                        <img
                            src="<?= AcfImage::instance()->sub()->url('image'); ?>"
                            v-bind:src="service.image.sizes.medium_large" alt="service.image.caption"
                            style="position:absolute;top:0;left:0;transition:opacity 0.5s;transition-delay:0.5s;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center">
                    </div>
                </div>
                <h3 class="mb1">
                    <span class="type-heading b2 f-base lgutter blue-dark fw8"><?php the_sub_field('service'); ?></span>
                </h3>
                <p class="type-body mb2 f-base lh3 blue-dark">
                    <?php the_sub_field('blurb'); ?>
                </p>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
    endwhile;
endif;
get_footer();
