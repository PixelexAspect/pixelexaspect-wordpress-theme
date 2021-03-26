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
                <a href="/"><span class="dn dib-l lh3">Pixelex Aspect</span></a>
                <span class="dib lh3">Shipping to the southeast</span>
                <a href="/basket">
                    <span class="db absolute r5 tr blue-light mr1">{{ itemsInBasket }}</span>
                    <svg class="dib mb-n-xtiny" width="27" height="27" viewBox="0 0 1792 1792"
                        xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-action-light"
                            d="M1757 1408l35 313q3 28-16 50-19 21-48 21h-1664q-29 0-48-21-19-22-16-50l35-313h1722zm-93-839l86 775h-1708l86-775q3-24 21-40.5t43-16.5h256v128q0 53 37.5 90.5t90.5 37.5 90.5-37.5 37.5-90.5v-128h384v128q0 53 37.5 90.5t90.5 37.5 90.5-37.5 37.5-90.5v-128h256q25 0 43 16.5t21 40.5zm-384-185v256q0 26-19 45t-45 19-45-19-19-45v-256q0-106-75-181t-181-75-181 75-75 181v256q0 26-19 45t-45 19-45-19-19-45v-256q0-159 112.5-271.5t271.5-112.5 271.5 112.5 112.5 271.5z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
        <div class="bg-blue-vlight">
            <div class="mw-page mlauto mrauto plgutter prgutter df jc-sb ai-fe pttiny pbtiny">
                <a class="db w4 h4" href="/">
                    <img alt="Pixelex Aspect Homepage" src="<?= get_template_directory_uri() ?>/img/pixelexaspect-c.png">
                </a>
                <ul class="type-heading f-default ma0 pa0 mbtiny">
                    <a class="blue-dark ml3" href="/">Home</a>
                    <a class="blue-dark ml3" href="/rentals">Rentals</a>
                    <a class="blue-dark ml3 dn dib-l" href="/about-us">About us</a>
                    <a class="blue-dark ml3 dn dib-l" href="/registration">Account registration</a>
                    <a class="blue-dark ml3" href="/contact">Contact us</a>
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
                <a class="db w4 h4" href="/">
                    <img alt="Pixelex Aspect Homepage" src="/img/pixelexaspect-c.png">
                </a>
                <a href="/basket">
                    <span class="db absolute r5 tr blue-dark mr1">{{ itemsInBasket }}</span>
                    <svg class="dib mb-n-xtiny" width="27" height="27" viewBox="0 0 1792 1792"
                        xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-action-light"
                            d="M1757 1408l35 313q3 28-16 50-19 21-48 21h-1664q-29 0-48-21-19-22-16-50l35-313h1722zm-93-839l86 775h-1708l86-775q3-24 21-40.5t43-16.5h256v128q0 53 37.5 90.5t90.5 37.5 90.5-37.5 37.5-90.5v-128h384v128q0 53 37.5 90.5t90.5 37.5 90.5-37.5 37.5-90.5v-128h256q25 0 43 16.5t21 40.5zm-384-185v256q0 26-19 45t-45 19-45-19-19-45v-256q0-106-75-181t-181-75-181 75-75 181v256q0 26-19 45t-45 19-45-19-19-45v-256q0-159 112.5-271.5t271.5-112.5 271.5 112.5 112.5 271.5z">
                        </path>
                    </svg>
                </a>
            </div>
            <div v-if="menu"
                class="dn absolute bg-blue-light action t-nav w-100 h-100--nav z1 tc type-heading f-base overflow-auto">
                <ul class="pa0 ma0">
                    <li class="ba0 bb1 bs-s bc-blue-light-lc">
                        <a class="pl2 pr2 pt1 pb1 db blue-primary" aria-current="true" href="/">Home</a>
                    </li>
                    <li class="ba0 bb1 bs-s bc-blue-light-lc">
                        <a class="pl2 pr2 pt1 pb1 db" aria-current="false" href="/rentals/lens">Lenses</a>
                    </li>
                    <li class="ba0 bb1 bs-s bc-blue-light-lc">
                        <a class="pl2 pr2 pt1 pb1 db" aria-current="false" href="/rentals/camera">Cameras
                        </a>
                    </li>
                    <li class="ba0 bb1 bs-s bc-blue-light-lc">
                        <a class="pl2 pr2 pt1 pb1 db" aria-current="false" href="/rentals/light">Lights
                        </a>
                    </li>
                    <li class="ba0 bb1 bs-s bc-blue-light-lc">
                        <a class="pl2 pr2 pt1 pb1 db" aria-current="false" href="/rentals/sound">Sound</a>
                    </li>
                    <li class="ba0 bb1 bs-s bc-blue-light-lc">
                        <a class="pl2 pr2 pt1 pb1 db" aria-current="false" href="/rentals/accessory">Accessories
                        </a>
                    </li>
                    <li class="ba0 bb1 bs-s bc-blue-light-lc">
                        <a class="pl2 pr2 pt1 pb1 db" aria-current="false" href="/about-us">About us</a>
                    </li>
                    <li class="ba0 bb1 bs-s bc-blue-light-lc">
                        <a class="pl2 pr2 pt1 pb1 db" aria-current="false" href="/registration">Registration
                        </a>
                    </li>
                    <li class="ba0 bs-s bc-blue-light-lc">
                        <a class="pl2 pr2 pt1 pb1 db" aria-current="false" href="/contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </header>

        <span class="db h-nav w-100 dn-m"></span>

        <div id="page">
