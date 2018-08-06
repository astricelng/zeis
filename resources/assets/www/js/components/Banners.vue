<template>
    <div id="banners" v-if="banners.length > 0">
        <div class="banners_elements">
            <!--slick ref="slick" :options="slickOptions"-->
                <template v-for="banner in banners">
                    <img :src="url + 'storage/' + banner.filename"> 
                </template>
            <!--/slick-->
        </div>
    </div>
</template>

<script>

    import 'slick-carousel';

    export default {

        data() {
            return {
                url: window.i18n.endpoints.url,
                endpoint: window.i18n.endpoints.banners_list,
                banners: [],
            };
        },

        created() {
            this.fetch();
        },
        methods: {
           fetch(page = 1) {
                axios.get(this.endpoint + page)
                    .then(({data}) => {
                        this.banners = data.data;
                        //this.pageCount = data.meta.last_page;
                    }).catch(function (error) {
                        // handle error
                        console.log(error);
                    });
            },
        },

        updated: function () {
          

          this.$container = $('.banners_elements');

          let windowW = $(window).width();

          $(window).resize(() => {
            $(".banners_elements").width($(window).width());

          });
          
          // Carrusel de imageens para los logos de compañias
          this.$container.slick({
                dots: false,
                infinite: true,
                slidesToShow: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: false,
                responsive: [
                    {
                      breakpoint: 4000,
                      settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                      }
                    },
                ]

          });
          
        $(".banners_elements").width(windowW);



        }

    }
</script>