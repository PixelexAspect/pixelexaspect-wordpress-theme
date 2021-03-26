



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
                <button class="bg-action blue-vlight fw8 f-base pl2 pr2 pa1 pointer">Join</button>
            </form>
        </div>
        <div class="w-50-l fl-l relative">
            <svg class="pixel-big dn db-ns" xmlns="http://www.w3.org/2000/svg" width="150" height="150"
                viewBox="0 0 200 200">
                <rect x="0" y="100" rx="0" ry="0" width="100" height="100" fill="navy"></rect>
                <rect x="100" y="0" rx="0" ry="0" width="100" height="100" fill="navy"></rect>
                <rect x="100" y="100" rx="0" ry="0" width="100" height="100" fill="royalblue"></rect>
            </svg>
            <svg class="pixel" xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 200 200">
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


</div>
    <?php wp_footer(); ?>
</body>

</html>
