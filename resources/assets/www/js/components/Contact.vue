<template>
  <div id="contact" class="text-center">
    <div class="container">
      <div class="section-title center">
        <h2><span>{{ trans('home.contact.title') }}</span></h2>
        <hr class="decoration">
      </div>
      <div class="col-md-10 col-md-offset-1 contact__text_1">
        <h2 class="capitalize">México</h2>

        <h3>+ Ciudad de México +</h3>
        <div class="col-md-4">
          <div class="contact-item"> <i class="fa fa-map-marker fa-2x"></i>
            <p v-html="trans('home.contact.info.mexico.cdmx.address')"></p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-item"> <i class="fa fa-envelope-o fa-2x"></i>
            <p v-html="trans('home.contact.info.mexico.cdmx.email')"></p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-item"> <i class="fa fa-phone fa-2x"></i>
            <p v-html="trans('home.contact.info.mexico.cdmx.phone')"></p>
          </div>
        </div>
        <div class="clearfix"></div>

        <h3>+ Cancún +</h3>
        <div class="col-md-4">
          <div class="contact-item"> <i class="fa fa-map-marker fa-2x"></i>
            <p v-html="trans('home.contact.info.mexico.cancun.address')"></p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-item"> <i class="fa fa-envelope-o fa-2x"></i>
            <p v-html="trans('home.contact.info.mexico.cancun.email')"></p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-item"> <i class="fa fa-phone fa-2x"></i>
            <p v-html="trans('home.contact.info.mexico.cancun.phone')"></p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>

      <div class="col-md-10 col-md-offset-1 contact__text_2">
        <h2 class="capitalize">USA</h2>

        <h3>+ Texas +</h3>
        <div class="col-md-4">
          <div class="contact-item"> <i class="fa fa-map-marker fa-2x"></i>
            <p v-html="trans('home.contact.info.usa.texas.address')"></p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-item"> <i class="fa fa-envelope-o fa-2x"></i>
            <p v-html="trans('home.contact.info.usa.texas.email')"></p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-item"> <i class="fa fa-phone fa-2x"></i>
            <p v-html="trans('home.contact.info.usa.texas.phone')"></p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>

      <div class="col-md-8 col-md-offset-2 contact__text_3">
        <h3>{{ trans('home.contact.text_form') }}</h3>

        <form action="#" method="post"  id="formContact" class="formContact" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
          <input type="hidden" name="_token" :value="csrf" >
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" name="name" class="form-control" :placeholder="trans('home.contact.name_form')" v-model="form.name">
                <span class="help is-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="email" name="email" class="form-control" :placeholder="trans('home.contact.email_form')" v-model="form.email">
                <span class="help is-danger" v-if="form.errors.has('email')" v-text="form.errors.get('email')"></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="4" :placeholder="trans('home.contact.message_form')" v-model="form.message"></textarea>
            <span class="help is-danger" v-if="form.errors.has('message')" v-text="form.errors.get('message')"></span>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-default btn_send">{{ trans('home.contact.btn_form') }}</button>

          <div class="loading_icon">
              <img :src="url + 'assets/www/images/loading.gif'" width="40px" height="40px">
          </div>

          <div class="form-group">
            <div class="mensaje text bold" v-model="send_message" v-html="send_message"></div>
          </div>

        </form>
        <div class="social">
          <h3>{{ trans('home.contact.follow_text') }}</h3>
          <ul>
            <li><a href="https://www.facebook.com/ZeisProducciones/" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/zeismex/" target="_blank"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>


<script>

  import Form from '../core/Form';

      export default {

        data() {
            return {

                url: window.i18n.endpoints.url,
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                endpoint: window.i18n.endpoints.contact_store,
                contentT1: new TimelineMax(),
                send_message: '',

                form: new Form({
                    name: '',
                    email: '',
                    message: '',
                    _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                })

            };
        },
        methods: {
           
            onSubmit() {

                $('.loading_icon').show();
                $('.btn_send').hide();

                this.form.post(this.endpoint)
                    .then(response => {
                    
                        this.send_message = window.i18n.home.contact.mail_respond_message;
                        $('.loading_icon').hide();
                        $('.btn_send').show();
                    })
                    .catch(error => {

                        $('.loading_icon').hide();
                        $('.btn_send').show();
                        if (error.errors === undefined)
                            this.send_message = window.i18n.home.contact.mail_respond_error;
                    });
            }

        },

        mounted: function(){

          let $contact = $('#contact');
          const controller = new ScrollMagic.Controller();

          this.$contactTitle        = $contact.find('.section-title span');
          this.$contactDecoration   = $contact.find('.decoration');      
          this.$contactText1        = $contact.find('.contact__text_1');   
          this.$contactText2        = $contact.find('.contact__text_2');   
          this.$contactText3        = $contact.find('.contact__text_3');      

          this.$contactTitle.html( this.$contactTitle.html().replace(/./g, "<span>$&</span>").replace(/\s/g, "&nbsp;"));


          this.contentT1
          .staggerFromTo(this.$contactTitle.find("span"),
              0.5, 
              {autoAlpha:0, rotationX:-90, top:"-30px"}, 
              {autoAlpha:1, rotationX:0, top:"0px"}, 
              0.1
          )
          .fromTo(this.$contactDecoration, 0.3,
              {width: 0, autoAlpha: 0},
              {width: "70px", autoAlpha: 1, ease: Power0.easeInOut, delay: .1}
          ) 
          .fromTo(this.$contactText1, 0.3,
              {autoAlpha: 0},
              {autoAlpha: 1, ease: Circ.easeInOut}
          )  
          .fromTo(this.$contactText2, 0.3,
              {autoAlpha: 0},
              {autoAlpha: 1, ease: Circ.easeInOut}, "=+0.2"
          )  
          .fromTo(this.$contactText3, 0.3,
              {autoAlpha: 0},
              {autoAlpha: 1, ease: Circ.easeInOut}, "=+0.4"
          )   


          let scene = new ScrollMagic.Scene({
                triggerElement: '#contact',
                triggerHook: 0.8
            })
            .setTween(this.contentT1)
            .addTo(controller);

        }
    }
</script>
