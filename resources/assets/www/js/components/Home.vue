<template>

    <div class="padre">
        <div class="area_derecha areaHome" v-on:click.once="setHome(1)"></div>
        <div class="area_izquierda areaHome" v-on:click.once="setHome(2)"></div>
        <div class="texto_intro">
            <img :src="url + 'assets/www/images/letras_intro_'+lng+'.png'">  
        </div>
        <div class="texto_intro_inte">
            <img :src="url + 'assets/www/images/letras_inte_'+lng+'.png'">  
        </div>
        <div class="derecha">
            <div class="background" :style="{ backgroundImage: 'url(' + url + 'assets/www/images/derecha_home_comp.jpg' + ')' }"></div>
        </div>
        <div class="izquierda">
            <div class="background" :style="{ backgroundImage: 'url(' + url + 'assets/www/images/izquierda_home_comp.jpg' + ')' }"></div>
        </div>
        <div class="fondo_completo" :style="{ backgroundImage: 'url(' + url + 'assets/www/images/zeis_home.jpg' + ')' }"></div>
    </div>

</template>

<script>

    export default {

         data() {
            return { 
                url: window.i18n.endpoints.url,
                lng: window.i18n.endpoints.language,
                contentT0: new TimelineMax(),
                contentT1: new TimelineMax({paused: true, onComplete: this.emitEvent}),
                completed: false,
                home: 1,
            }
        },

        methods: {
            setHome(home) {

                if (!this.completed){

                    this.home = home;
                    this.contentT1.play();
                    this.setAreaHome(home);
                    this.disabledClick();
                }

            },

            setAreaHome(home) {

                let $intro = $('.padre');
                const controller = new ScrollMagic.Controller();

                this.area           = (home == 1) ? $intro.find('.izquierda div') : $intro.find('.derecha div');
                this.text_intro     = (home == 1) ? $intro.find('.texto_intro_inte') : $intro.find('.texto_intro');

                this.contentT1
                .to(this.text_intro, 0.1, {zIndex:100})
                .fromTo(this.area, 1.5,
                    {autoAlpha: "0"},
                    {autoAlpha: "1", ease: RoughEase.ease.config({ template:  Power0.easeNone, strength: 0.5, points: 30, taper: "none", randomize: false, clamp: true})}
                )

            },

            disabledClick(){

                let $intro = $('.areaHome');

                this.completed = true;
                
                this.contentT1
                .set($intro, {className: "+=nopointer"})
            },

            emitEvent(){

                if(this.home == 1)
                    this.$emit('showhome','right');
                else
                    this.$emit('showhome','left');
            }

        },

        mounted () { 

            let $intro      = $('.padre');
            this.derecha    = $intro.find('.derecha div');
            this.izquierda  = $intro.find('.izquierda div');

            this.contentT0
            .set(this.derecha, { autoAlpha: 0 })
            .set(this.izquierda, { autoAlpha: 0 });

    
        } //Close Mounted

    }
</script>