<template>
    <div id="about">
        <div class="container">
            <div class="section-title text-center center">
              <h2><span>{{ trans('home.about.title') }}</span></h2>
              <hr class="decoration">
            </div>
            <div class="about-section">
                <div class="about-first">
                    <div class="about-img" :style="{backgroundImage: `url('/assets/www/images/about_us2.png')`}"></div>
                </div>
                <div class="about-second">
                    <div class="about-second-first-row">
                        <div class="about-first-text" v-html="trans('home.about.first-text')"></div>
                        <div class="about-second-text" v-html="trans('home.about.second-text')"></div>
                    </div>
                    <div class="about-second-second-row">
                        <div class="about-third-text" v-html="trans('home.about.third-text')"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {

        data() {
            return {
                url: window.i18n.endpoints.url,
                contentT1: new TimelineMax(),
            };
        },
        methods: {
           
        },

        mounted: function(){

            let $about = $('#about');
            let windowW = $(window).width();
            const controller = new ScrollMagic.Controller();
            

            this.$aboutTitle        = $about.find('.section-title span');
            this.$aboutDecoration   = $about.find('.decoration');
            this.$aboutImg          = $about.find('.about-img');
            this.$aboutText         = $about.find('.about-second');

            let delayText = (windowW > 768) ? "=0" : "+=0.5";


            this.$aboutTitle.html( this.$aboutTitle.html().replace(/./g, "<span>$&</span>").replace(/\s/g, "&nbsp;"));

            this.contentT1
            .staggerFromTo(this.$aboutTitle.find("span"),
                0.5, 
                {autoAlpha:0, rotationX:-90, top:"-30px"}, 
                {autoAlpha:1, rotationX:0, top:"0px"}, 
                0.1
            )
            .fromTo(this.$aboutDecoration, 0.3,
                {width: 0, autoAlpha: 0},
                {width: "70px", autoAlpha: 1, ease: Power0.easeInOut, delay: .1}
            )
            .fromTo(this.$aboutImg, 0.3,
                {y: 20, scale: 1.2, autoAlpha: 0},
                {y: 0, scale: 1, autoAlpha: 1, ease:Power0.easeNone}, "-=0.1"
            )
            .fromTo(this.$aboutText, 1,
                {autoAlpha: "0"},
                {autoAlpha: "1", ease: Circ.easeInOut}, delayText
            );


            let scene = new ScrollMagic.Scene({
                triggerElement: '#about',
                triggerHook: 0.8
            })
            .setTween(this.contentT1)
            .addTo(controller);

        }

    }
</script>