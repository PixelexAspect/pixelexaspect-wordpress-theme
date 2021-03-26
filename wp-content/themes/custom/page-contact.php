<?php get_header(); ?>

<div class="relative z-0 h-100">
    <div class="relative overflow-hidden mw-page mrauto mlauto relative mb4-ns">
      <div class="relative vh-50 w-50-m absolute-m h-100-m w-60-l plgutter-m prgutter-m pt4-m">
        <div class="relative w-100 h-100 bg-black-10">
          <iframe
            id="gmap_canvas"
            width="100%"
            height="100%"
            frameborder="0"
            style="border:0"
            src="https://www.google.com/maps/embed/v1/place?q=Devonshire+Business+Centre +Manor+way +Borehamwood +WD6+1QQ&key=AIzaSyDUmlwP1ojw5T34trHMEoD6q0I3RqNOivM"
            allowfullscreen
          ></iframe>
        </div>
      </div>

      <div class="fr-m ph3 ph5-l pt4 pb1 pt5-l pb3-l f5 blue-dark w-50-m w-40-l plgutter prgutter">
        <div class="mb3 mb4-l s-article s-article--small">
            <?php the_field('side_information'); ?>
        </div>
      </div>
    </div>
    <div class="blue-dark min-h-100 pt4 pt6-l pb3 pb6-m relative overflow-hidden">
      <div class="prgutter plgutter mw-page mrauto mlauto center mauto df-m">
        <div class="w-100 w-70-m mb4 prgutter-m">
          <p class="mb4">
            <span class="f4 mb1 db lh-title blue-dark mw-xlarge"><?php the_field('form_blurb'); ?></span>
          </p>
            <div autocomplete="off" v-on:submit="false" class="blue-dark measure">
              <div>
                <div class="mb4">
                  <label class="blue-dark f5 b db mb2" for="name">Name</label>
                  <input
                    v-model="form.name"
                    name="ronsik"
                    class="h4 w-100 pl2 pr2 f-base blue-dark type-body bg-white"
                    value
                  />
                  <span class="red i"></span>
                </div>
                <div class="mb4">
                  <label class="blue-dark f5 b db mb2" for="name">Email</label>
                  <input
                    name="valde"
                    v-model="form.email"
                    v-bind:class="['h4 w-100 pl2 pr2 f-base blue-dark type-body bg-white', errors.email ? 'ba1 bc-error bs-s' : '']"
                    class="h4 w-100 pl2 pr2 f-base blue-dark type-body bg-white"
                    value
                  />
                  <span class="red i"></span>
                </div>
                <div class="mb4">
                  <label class="blue-dark f5 b db mb2" for="name">Telephone</label>
                  <input
                    name="asd"
                    v-model="form.telephone"
                    class="h4 w-100 pl2 pr2 f-base blue-dark type-body bg-white"
                    value
                  />
                  <span class="red i"></span>
                </div>
                <div class="mb4">
                  <label class="blue-dark f5 b db mb2" for="name">Message</label>
                  <textarea
                    v-model="form.message"
                    class="b--black-20 input-reset bg-white pa2 mb2 db w-100 minh-medium fs4"
                  ></textarea>
                  <span class="red i"></span>
                </div>
              </div>
              <span class="bg-red white i fw8"></span>
              <div class>
                <input
                  v-on:click="submit"
                  class="['relative bg-action pa2 lh2 pl3 pr3 f-base blue-light type-heading ls1']"
                  type="submit"
                  value="Send message"
                />
              </div>
              <div
                v-if="thankyou"
                class="pa2 bg-blue-dark blue-light mt4"
              >Thank you for contacting us. We'll respond to you as soon as possible.</div>
            </div>
        </div>
      </div>
    </div>
    <div class="fl"></div>
  </div>

<?php get_footer();
