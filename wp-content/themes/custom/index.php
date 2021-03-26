<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="icon" href="<?= esc_url(get_template_directory_uri() . '/favicon.ico') ?>" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Questrial|Brawler" rel="stylesheet" />
    <link rel="stylesheet"
        href="<?= esc_url(get_template_directory_uri() . '/dist/main.css') ?>"
        type="text/css" />
    <?php wp_head(); ?>
</head>

<body>
    <div id="container">
        <header class="dn db-m">
            <div class="bg-blue-dark">
                <div
                    class="relative mw-page mlauto mrauto blue-light type-heading f-default plgutter prgutter pttiny pbtiny df jc-sb ai-c">
                    <span class="dn dib-l lh3">Pixelex Aspect</span>
                    <span class="dib lh3">Shipping to the southeast</span>
                    <nuxt-link to="/basket">
                        <span class="db absolute r5 tr blue-light mr1">{{ itemsInBasket }}</span>
                        <svg class="dib mb-n-xtiny" width="27" height="27" viewBox="0 0 1792 1792"
                            xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-action-light"
                                d="M1757 1408l35 313q3 28-16 50-19 21-48 21h-1664q-29 0-48-21-19-22-16-50l35-313h1722zm-93-839l86 775h-1708l86-775q3-24 21-40.5t43-16.5h256v128q0 53 37.5 90.5t90.5 37.5 90.5-37.5 37.5-90.5v-128h384v128q0 53 37.5 90.5t90.5 37.5 90.5-37.5 37.5-90.5v-128h256q25 0 43 16.5t21 40.5zm-384-185v256q0 26-19 45t-45 19-45-19-19-45v-256q0-106-75-181t-181-75-181 75-75 181v256q0 26-19 45t-45 19-45-19-19-45v-256q0-159 112.5-271.5t271.5-112.5 271.5 112.5 112.5 271.5z">
                            </path>
                        </svg>
                    </nuxt-link>
                </div>
            </div>
            <div class="bg-blue-vlight">
                <div class="mw-page mlauto mrauto plgutter prgutter df jc-sb ai-fe pttiny pbtiny">
                    <nuxt-link class="db w4 h4" to="/">
                        <img alt="Pixelex Aspect Homepage" src="<?= get_template_directory_uri() ?>/img/pixelexaspect-c.png">
                    </nuxt-link>
                    <ul class="type-heading f-default ma0 pa0 mbtiny">
                        <nuxt-link class="blue-dark ml3" to="/">Home</nuxt-link>
                        <nuxt-link class="blue-dark ml3" to="/rentals">Rentals</nuxt-link>
                        <nuxt-link class="blue-dark ml3 dn dib-l" to="/about-us">About us</nuxt-link>
                        <nuxt-link class="blue-dark ml3 dn dib-l" to="/registration">Account registration</nuxt-link>
                        <nuxt-link class="blue-dark ml3" to="/contact">Contact us</nuxt-link>
                    </ul>
                </div>
            </div>
        </header>

        <header v-bind:class="['fixed w-100 bg-blue-vlight pbsmall ptsmall z2 h-auto dn-m', menu ? 'h-100' : '']">
            <div class="dn relative df pl2 pr2 jc-sb ai-c">
                <svg v-if="!menu" v-on:click="menu = true" class="db" width="40px" height="40px" viewBox="0 0 48 48">
                    <path class="fill-action-light" d="M6 36h36v-4H6v4zm0-10h36v-4H6v4zm0-14v4h36v-4H6z"></path>
                </svg>
                <svg v-if="menu" v-on:click="menu = false" class="db" width="40" height="40" viewBox="0 0 1792 1792"
                    xmlns="http://www.w3.org/2000/svg">
                    <path class="fill-action-light"
                        d="M1490 1322q0 40-28 68l-136 136q-28 28-68 28t-68-28l-294-294-294 294q-28 28-68 28t-68-28l-136-136q-28-28-28-68t28-68l294-294-294-294q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 294 294-294q28-28 68-28t68 28l136 136q28 28 28 68t-28 68l-294 294 294 294q28 28 28 68z">
                    </path>
                </svg>
                <nuxt-link class="db w4 h4" to="/">
                    <img alt="Pixelex Aspect Homepage" src="/img/pixelexaspect-c.png">
                </nuxt-link>
                <nuxt-link to="/basket">
                    <span class="db absolute r5 tr blue-dark mr1">{{ itemsInBasket }}</span>
                    <svg class="dib mb-n-xtiny" width="27" height="27" viewBox="0 0 1792 1792"
                        xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-action-light"
                            d="M1757 1408l35 313q3 28-16 50-19 21-48 21h-1664q-29 0-48-21-19-22-16-50l35-313h1722zm-93-839l86 775h-1708l86-775q3-24 21-40.5t43-16.5h256v128q0 53 37.5 90.5t90.5 37.5 90.5-37.5 37.5-90.5v-128h384v128q0 53 37.5 90.5t90.5 37.5 90.5-37.5 37.5-90.5v-128h256q25 0 43 16.5t21 40.5zm-384-185v256q0 26-19 45t-45 19-45-19-19-45v-256q0-106-75-181t-181-75-181 75-75 181v256q0 26-19 45t-45 19-45-19-19-45v-256q0-159 112.5-271.5t271.5-112.5 271.5 112.5 112.5 271.5z">
                        </path>
                    </svg>
                </nuxt-link>
            </div>
            <div v-if="menu"
                class="dn absolute bg-blue-light action t-nav w-100 h-100--nav z1 tc type-heading f-base overflow-auto">
                <ul class="pa0 ma0">
                    <li class="ba0 bb1 bs-s bc-blue-light-lc">
                        <nuxt-link class="pl2 pr2 pt1 pb1 db blue-primary" aria-current="true" to="/">Home</nuxt-link>
                    </li>
                    <li class="ba0 bb1 bs-s bc-blue-light-lc">
                        <nuxt-link class="pl2 pr2 pt1 pb1 db" aria-current="false" to="/rentals/lens">Lenses</nuxt-link>
                    </li>
                    <li class="ba0 bb1 bs-s bc-blue-light-lc">
                        <nuxt-link class="pl2 pr2 pt1 pb1 db" aria-current="false" to="/rentals/camera">Cameras
                        </nuxt-link>
                    </li>
                    <li class="ba0 bb1 bs-s bc-blue-light-lc">
                        <nuxt-link class="pl2 pr2 pt1 pb1 db" aria-current="false" to="/rentals/light">Lights
                        </nuxt-link>
                    </li>
                    <li class="ba0 bb1 bs-s bc-blue-light-lc">
                        <nuxt-link class="pl2 pr2 pt1 pb1 db" aria-current="false" to="/rentals/sound">Sound</nuxt-link>
                    </li>
                    <li class="ba0 bb1 bs-s bc-blue-light-lc">
                        <nuxt-link class="pl2 pr2 pt1 pb1 db" aria-current="false" to="/rentals/accessory">Accessories
                        </nuxt-link>
                    </li>
                    <li class="ba0 bb1 bs-s bc-blue-light-lc">
                        <nuxt-link class="pl2 pr2 pt1 pb1 db" aria-current="false" to="/about-us">About us</nuxt-link>
                    </li>
                    <li class="ba0 bb1 bs-s bc-blue-light-lc">
                        <nuxt-link class="pl2 pr2 pt1 pb1 db" aria-current="false" to="/registration">Registration
                        </nuxt-link>
                    </li>
                    <li class="ba0 bs-s bc-blue-light-lc">
                        <nuxt-link class="pl2 pr2 pt1 pb1 db" aria-current="false" to="/contact">Contact Us</nuxt-link>
                    </li>
                </ul>
            </div>
        </header>

        <span class="db h-nav w-100 dn-m"></span>

        <div id="page">
            <section class="relative grads-light-blue overflow-hidden">
                <div class="mw-page mlauto mrauto pt8 pb6 pt10-l pb10-l pagutter relative">
                    <svg class="pixel" xmlns="http://www.w3.org/2000/svg" width="150" height="150"
                        viewBox="0 0 200 200">
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
                        <span
                            class="mw-large type-heading mb2 db lh3 blue-primary-xlight f-medium">Pixelex&nbsp;Aspect</span>
                        <span
                            class="mw-large mw-super-l type-heading f-xxlarge db mb2 ls-small">{{ heroTitle }}</span>
                        <span class="mw-large mw-super-l type-heading db lh3 blue-dark f-medium">
                            {{ heroSubHeading }}
                            <span class="blue-primary-light">
                                &nbsp;
                                {{ heroSubheadingHighlight }}
                            </span>
                        </span>
                    </h1>
                    <a v-bind:href="heroCtaLink" class>
                        <button
                            class="relative bg-action pa2 cursor-p lh2 pl3 pr3 f-base blue-light type-heading ls1">{{ heroCtaText }}</button>
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

            <section v-if="showVideo"
                class="dn plgutter-l prgutter-l h-100--nav mh-xxxlarge hauto-m mw-page mrauto mlauto">
                <div v-on:click="$store.commit('video/show', videoId)"
                    class="bg-blue-dark pagutter h-100 relative df ai-c jc-c flexd-c">
                    <img src="https://s3.eu-west-2.amazonaws.com/bignorth.production.kisumu-cms.pixelex/2018/06/study-room.jpg"
                        class="absolute t0 l0 r0 h-100 w-100 op70 obj-cov mbm-luminosity">
                    <svg class="fill-action-light h8 w8 relative" viewBox="0 0 1792 1792"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1312 896q0 37-32 55l-544 320q-15 9-32 9-16 0-32-8-32-19-32-56v-640q0-37 32-56 33-18 64 1l544 320q32 18 32 55zm128 0q0-148-73-273t-198-198-273-73-273 73-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273zm224 0q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                        </path>
                    </svg>
                    <h3 class="f-medium type-heading action-light fw8 mt1 relative">How we work</h3>
                </div>
            </section>

            <div class="mw-page mlauto mrauto overflow-hidden plgutter-l prgutter-l mt3-l">
                <div v-if="camera" class="fl-ns w-50-ns w-third-l">
                    <nuxt-link class="db bg-blue-light-lc ar-4x3 h0 w-100 relative overflow-hidden"
                        to="/rentals/camera">
                        <div class="b0 l0 w-100 mbm-darken mw-none gatsby-image-outer-wrapper"
                            style="position: initial;">
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
                    <nuxt-link class="db bg-blue-light-lc ar-4x3 h0 w-100 relative overflow-hidden"
                        to="/rentals/accessory">
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
        </div>

        <span class="cb fl w-100"></span>

        <section class="cb fl w-100">
            <div class="mw-page mlauto mrauto df-l overflow-hidden pagutter pt6 pb6 ptlarge-l pblarge-l">
                <div class="w-50-l fl-l">
                    <span class="fw8 mw-large type-heading db lh3 blue-dark f-medium mb1">Keep in touch.</span>
                    <p class="mb2 f-base blue-dark">We'd love to keep in touch with deals and updates.</p>
                    <form method="GET" action="https://pixelexaspect.us18.list-manage.com/subscribe/post?">
                        <input type="hidden" name="u" value="a4f134f43ebd57bff8c726c9b">
                        <input type="hidden" name="id" value="8e193e26b3">
                        <input type="email" name="MERGE0" placeholder="Enter your email address"
                            class="w-100 pa2 f-base lh-2 bg-blue-light-lc mb2">
                        <button class="bg-action blue-vlight fw8 f-base pl2 pr2 pa1">Join</button>
                    </form>
                </div>
                <div class="w-50-l fl-l relative">
                    <svg class="pixel-big dn db-ns" xmlns="http://www.w3.org/2000/svg" width="150" height="150"
                        viewBox="0 0 200 200">
                        <rect x="0" y="100" rx="0" ry="0" width="100" height="100" fill="navy"></rect>
                        <rect x="100" y="0" rx="0" ry="0" width="100" height="100" fill="navy"></rect>
                        <rect x="100" y="100" rx="0" ry="0" width="100" height="100" fill="royalblue"></rect>
                    </svg>
                    <svg class="pixel" xmlns="http://www.w3.org/2000/svg" width="150" height="150"
                        viewBox="0 0 200 200">
                        <rect x="0" y="100" rx="0" ry="0" width="100" height="100" fill="navy"></rect>
                        <rect x="100" y="0" rx="0" ry="0" width="100" height="100" fill="navy"></rect>
                        <rect x="100" y="100" rx="0" ry="0" width="100" height="100" fill="royalblue"></rect>
                    </svg>
                </div>
            </div>
        </section>

        <footer class="relative cb fl w-100 bg-blue-dark">
            <div class="bg-near-black white-80 plgutter prgutter ph3 mw-page mrauto mlauto">
                <div class="pt4 df-m jc-sb">
                    <ul class="pa0 mb4">
                        <li>
                            <a class="action-light fw8" href="/">Home</a>
                        </li>
                        <li>
                            <a class="action-light fw8" href="/contact">Contact us</a>
                        </li>
                        <li>
                            <a class="action-light fw8" href="/about-us">About us</a>
                        </li>
                        <li>
                            <a class="action-light fw8" href="/services">Services</a>
                        </li>
                        <li>
                            <a class="action-light fw8" href="/registration">Registration</a>
                        </li>
                    </ul>
                    <ul class="pa0 mb4">
                        <li>
                            <a class="action-light fw8" href="/rentals">Rentals</a>
                        </li>
                        <li>
                            <a class="action-light fw8" href="/rentals/camera">Cameras</a>
                        </li>
                        <li>
                            <a class="action-light fw8" href="/rentals/lens">Lenses</a>
                        </li>
                        <li>
                            <a class="action-light fw8" href="/rentals/light">Lights</a>
                        </li>
                        <li>
                            <a class="action-light fw8" href="/rentals/sound">Sound</a>
                        </li>
                        <li>
                            <a class="action-light fw8" href="/rentals/accessory">Accessory</a>
                        </li>
                    </ul>
                    <ul class="pa0 mb4">
                        <li>
                            <a href="https://www.facebook.com/PixelexAspect/" target="_blank"
                                class="action-light fw8">Facebook</a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/user/ThePixelex" target="_blank"
                                class="action-light fw8">Youtube</a>
                        </li>
                        <li>
                            <a href="https://twitter.com/PixelexAspect" target="_blank"
                                class="action-light fw8">Twitter</a>
                        </li>
                        <li>
                            <a href="https://vimeo.com/user12929079" target="_blank" class="action-light fw8">Vimeo</a>
                        </li>
                    </ul>
                </div>
                <div class="df-m ai-c jc-sb-m mb4">
                    <p class="f6 lh-copy">
                        <span class="dib mr4 mr5-ns blue-vlight">Pixelex Aspect &copy; <?= (new \DateTime())->format('Y') ?> </span>
                    </p>
                    <ul class="df-m f-small pl0">
                        <li>
                            <a class="blue-light fw8 mr2" href="/terms-and-conditions">Terms and conditions</a>
                        </li>
                        <li>
                            <a class="blue-light fw8" href="/privacy-policy">Privacy policy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>

        <div v-if="showVideo" class="dn fixed t0 l0 w-100 h-100 z3 db">
            <div v-on:click="$store.commit('video/hide')" class="absolute t0 l0 w-100 h-100 bg-black-80"></div>
            <div class="mw-super mw-page-l prgutter-m plgutter-m t-50 trans-translate-y--50 relative mlauto mrauto">
                <no-ssr>
                    <div class="s-responsive-video">
                        <youtube :video-id="videoId" ref="youtube"></youtube>
                    </div>
                </no-ssr>
            </div>
        </div>
    </div>
    <h1><?php bloginfo('name'); ?></h1>
    <h2><?php bloginfo('description'); ?></h2>

    <?php if (have_posts()):
        while (have_posts()):
            the_post(); ?>

    <h3><?php the_title(); ?></h3>

    <?php the_content(); ?>
    <?php wp_link_pages(); ?>
    <?php edit_post_link(); ?>

    <?php
        endwhile; ?>

    <?php if (get_next_posts_link()) {
        next_posts_link();
    } ?>
    <?php if (get_previous_posts_link()) {
        previous_posts_link();
    } ?>

    <?php
    else:
         ?>

    <p>No posts found. :(</p>

    <?php
    endif; ?>
    <?php wp_footer(); ?>
</body>

</html>
