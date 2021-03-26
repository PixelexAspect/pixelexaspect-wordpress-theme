<?php get_header();
if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="relative grads-light-blue overflow-hidden">
        <div class="mw-page mlauto mrauto pt8 pb6 pt10-l pb10-l pagutter relative">
            <svg class="pixel" xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 200 200">
                <rect x="0" y="100" rx="0" ry="0" width="100" height="100" fill="navy"></rect>
                <rect x="100" y="0" rx="0" ry="0" width="100" height="100" fill="navy"></rect>
                <rect x="100" y="100" rx="0" ry="0" width="100" height="100" fill="royalblue"></rect>
            </svg>
            <svg class="pixel-big dn db-ns" xmlns="http://www.w3.org/2000/svg" width="150" height="150"
                viewBox="0 0 200 200">
                <rect x="0" y="100" rx="0" ry="0" width="100" height="100" fill="navy"></rect>
                <rect x="100" y="0" rx="0" ry="0" width="100" height="100" fill="navy"></rect>
                <rect x="100" y="100" rx="0" ry="0" width="100" height="100" fill="royalblue"></rect>
            </svg>
            <svg class="pixel-super dn db-l" xmlns="http://www.w3.org/2000/svg" width="150" height="150"
                viewBox="0 0 200 200">
                <rect x="0" y="100" rx="0" ry="0" width="100" height="100" fill="navy"></rect>
                <rect x="100" y="0" rx="0" ry="0" width="100" height="100" fill="navy"></rect>
                <rect x="100" y="100" rx="0" ry="0" width="100" height="100" fill="royalblue"></rect>
            </svg>
            <h1 class="fw8 lh5 blue-primary mb2 relative">
                <span class="mw-large type-heading mb2 db lh3 blue-primary-xlight f-medium">Pixelex&nbsp;Aspect</span>
                <span class="mw-large mw-super-l type-heading f-xxlarge db mb2 ls-small"><?php the_field('hero_title'); ?></span>
                <span class="mw-large mw-super-l type-heading db lh3 blue-dark f-medium">
                    <?php the_field('hero_subheading'); ?>
                    <span class="blue-primary-light">
                        &nbsp;
                        <?php the_field('hero_subheading_highlight'); ?>
                    </span>
                </span>
            </h1>
            <a href="/rentals">
                <button
                    class="relative bg-action pa2 cursor-p lh2 pl3 pr3 f-base blue-light type-heading ls1">
                    <?php the_field('hero_cta_text'); ?>
                </button>
            </a>
        </div>
    </section>

    <section class="relative overflow-hidden">
        <div class="mw-page-ns relative-ns plgutter-l prgutter-l mlauto-ns mrauto-ns mt3-l mb3-l">
            <div class="b0-ns r0-ns dn-ns">
                <a class="db bg-blue-primary relative">
                    <div class="gatsby-image-outer-wrapper" style="position:relative;">
                        <div v-if="mobileBanner" class="w-100 gatsby-image-wrapper"
                            style="position:relative;overflow:hidden;">
                            <div style="width:100%;padding-bottom:75%;">
                                <img alt
                                    style="position:absolute;top:0;left:0;transition:opacity 0.5s;transition-delay:0.5s;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center"
                                    class="w-100" v-bind:src="mobileBanner">
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="dn db-ns" ref="slider">
                <div v-bind:key="index" v-for="(banner, index) in desktopBanner">
                    <a v-bind:href="banner.link ? banner.link : null">
                        <img alt class="w-100" v-bind:src="banner.image.url">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section v-if="showVideo" class="plgutter-l prgutter-l h-100--nav mh-xxxlarge hauto-m mw-page mrauto mlauto">
        <div v-on:click="$store.commit('video/show', videoId)"
            class="bg-blue-dark pagutter h-100 relative df ai-c jc-c flexd-c">
            <img src="https://s3.eu-west-2.amazonaws.com/bignorth.production.kisumu-cms.pixelex/2018/06/study-room.jpg"
                class="absolute t0 l0 r0 h-100 w-100 op70 obj-cov mbm-luminosity">
            <svg class="fill-action-light h8 w8 relative" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M1312 896q0 37-32 55l-544 320q-15 9-32 9-16 0-32-8-32-19-32-56v-640q0-37 32-56 33-18 64 1l544 320q32 18 32 55zm128 0q0-148-73-273t-198-198-273-73-273 73-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273zm224 0q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                </path>
            </svg>
            <h3 class="f-medium type-heading action-light fw8 mt1 relative">How we work</h3>
        </div>
    </section>

    <div class="mw-page mlauto mrauto overflow-hidden plgutter-l prgutter-l mt3-l">
        <div v-if="camera" class="fl-ns w-50-ns w-third-l">
            <nuxt-link class="db bg-blue-light-lc ar-4x3 h0 w-100 relative overflow-hidden" to="/rentals/camera">
                <div class="b0 l0 w-100 mbm-darken mw-none gatsby-image-outer-wrapper" style="position: initial;">
                    <div class="absolute obj-cov b0 l0 w-100 h-100 mbm-darken mw-none gatsby-image-wrapper"
                        style="position: absolute; overflow: hidden;">
                        <div style="width: 100%; padding-bottom: 100%;"></div>
                        <img alt v-bind:src="camera.sizes.medium_large"
                            style="position: absolute; top: 0px; left: 0px; transition: opacity 0.5s ease 0s; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1;">
                        <no-ssr>
                            <noscript>
                                <img v-bind:src="camera.sizes.medium_large" alt
                                    style="position:absolute;top:0;left:0;transition:opacity 0.5s;transition-delay:0.5s;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center">
                            </noscript>
                        </no-ssr>
                    </div>
                </div>
                <span class="absolute type-heading b2 f-medium lgutter action fw8">Rent cameras</span>
            </nuxt-link>
        </div>
        <div v-if="lens" class="fl-ns w-50-ns w-third-l">
            <nuxt-link class="db bg-blue-vlight ar-4x3 h0 w-100 relative overflow-hidden" to="/rentals/lens">
                <div class="absolute obj-cov b0 l0 w-100 h-100 mbm-darken mw-none gatsby-image-outer-wrapper"
                    style="position: initial;">
                    <div class="absolute obj-cov b0 l0 w-100 h-100 mbm-darken mw-none gatsby-image-wrapper"
                        style="position: absolute; overflow: hidden;">
                        <div style="width: 100%; padding-bottom: 100%;"></div>
                        <img alt v-bind:src="lens.sizes.medium_large"
                            style="position: absolute; top: 0px; left: 0px; transition: opacity 0.5s ease 0s; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1;">
                        <no-ssr>
                            <noscript>
                                <img v-bind:src="lens.sizes.medium_large" alt
                                    style="position:absolute;top:0;left:0;transition:opacity 0.5s;transition-delay:0.5s;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center">
                            </noscript>
                        </no-ssr>
                    </div>
                </div>
                <span class="absolute type-heading b2 f-medium lgutter action fw8">Rent lenses</span>
            </nuxt-link>
        </div>
        <div v-if="sound" class="fl-ns w-50-ns w-third-l">
            <nuxt-link
                class="db bg-blue-light-lc bg-blue-vlight-ns bg-blue-light-lc-l ar-4x3 h0 w-100 relative overflow-hidden"
                to="/rentals/sound">
                <div class="absolute obj-cov b0 l0 w-100 h-100 mbm-darken mw-none gatsby-image-outer-wrapper"
                    style="position: initial;">
                    <div class="absolute obj-cov b0 l0 w-100 h-100 mbm-darken mw-none gatsby-image-wrapper"
                        style="position: absolute; overflow: hidden;">
                        <div style="width: 100%; padding-bottom: 75%;"></div>
                        <img alt v-bind:src="sound.sizes.medium_large"
                            style="position: absolute; top: 0px; left: 0px; transition: opacity 0.5s ease 0s; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1;">
                        <no-ssr>
                            <noscript>
                                <img v-bind:src="sound.sizes.medium_large" alt
                                    style="position:absolute;top:0;left:0;transition:opacity 0.5s;transition-delay:0.5s;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center">
                            </noscript>
                        </no-ssr>
                    </div>
                </div>
                <span class="absolute type-heading b2 f-medium lgutter action fw8">Rent audio</span>
            </nuxt-link>
        </div>
        <div class="fl-ns w-50-ns w-third-l">
            <nuxt-link
                class="db bg-blue-vlight bg-blue-light-lc-ns bg-blue-vlight-l ar-4x3 h0 w-100 relative overflow-hidden"
                to="/rentals/light">
                <div class="absolute obj-cov b0 l0 w-100 h-100 mbm-darken mw-none gatsby-image-outer-wrapper"
                    style="position: initial;">
                    <div class="absolute obj-cov b0 l0 w-100 h-100 mbm-darken mw-none gatsby-image-wrapper"
                        style="position: absolute; overflow: hidden;">
                        <div style="width: 100%; padding-bottom: 75%;"></div>
                        <img alt v-bind:src="light.sizes.medium_large"
                            style="position: absolute; top: 0px; left: 0px; transition: opacity 0.5s ease 0s; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1;">

                        <no-ssr>
                            <noscript>
                                <img v-bind:src="light.sizes.medium_large" alt
                                    style="position:absolute;top:0;left:0;transition:opacity 0.5s;transition-delay:0.5s;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center">
                            </noscript>
                        </no-ssr>
                    </div>
                </div>
                <span class="absolute type-heading b2 f-medium lgutter action fw8">Rent lights</span>
            </nuxt-link>
        </div>
        <div class="fl-ns w-50-ns w-third-l">
            <nuxt-link class="db bg-blue-light-lc ar-4x3 h0 w-100 relative overflow-hidden" to="/rentals/accessory">
                <div class="absolute obj-cov b0 l0 w-100 h-100 mbm-darken mw-none gatsby-image-outer-wrapper"
                    style="position: initial;">
                    <div class="absolute obj-cov b0 l0 w-100 h-100 mbm-darken mw-none gatsby-image-wrapper"
                        style="position: absolute; overflow: hidden;">
                        <div style="width: 100%; padding-bottom: 56.25%;"></div>
                        <img alt v-bind:src="accessories.sizes.medium_large"
                            style="position: absolute; top: 0px; left: 0px; transition: opacity 0.5s ease 0s; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1;">
                        <no-ssr>
                            <noscript>
                                <img v-bind:src="accessories.sizes.medium_large" alt
                                    style="position:absolute;top:0;left:0;transition:opacity 0.5s;transition-delay:0.5s;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center">
                            </noscript>
                        </no-ssr>
                    </div>
                </div>
                <span to="/" class="absolute type-heading b2 f-medium lgutter action fw8">Rent
                    accessories</span>
            </nuxt-link>
        </div>
        <div class="fl-ns w-50-ns w-third-l">
            <nuxt-link
                class="db bg-blue-vlight bg-blue-vlight-ns bg-blue-vlight-l ar-4x3 h0 w-100 relative overflow-hidden"
                to="/sales">
                <div class="absolute obj-cov b0 l0 w-100 h-100 mbm-darken mw-none gatsby-image-outer-wrapper"
                    style="position: initial;">
                    <div class="absolute obj-cov b0 l0 w-100 h-100 mbm-darken mw-none gatsby-image-wrapper"
                        style="position: absolute; overflow: hidden;">
                        <div style="width: 100%; padding-bottom: 100%;"></div>
                        <img alt v-bind:src="sales.sizes.medium_large"
                            style="position: absolute; top: 0px; left: 0px; transition: opacity 0.5s ease 0s; width: 100%; height: 100%; object-fit: cover; object-position: center center; opacity: 1;">
                        <no-ssr>
                            <noscript>
                                <img v-bind:src="sales.sizes.medium_large" alt
                                    style="position:absolute;top:0;left:0;transition:opacity 0.5s;transition-delay:0.5s;opacity:1;width:100%;height:100%;object-fit:cover;object-position:center">
                            </noscript>
                        </no-ssr>
                    </div>
                </div>
                <span to="/" class="absolute type-heading b2 f-medium lgutter action fw8">Sales</span>
            </nuxt-link>
        </div>
    </div>


<?php endwhile; endif;
get_footer();
