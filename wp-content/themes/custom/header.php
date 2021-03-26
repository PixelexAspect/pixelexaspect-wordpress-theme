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
