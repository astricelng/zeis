<template>
	<div id="services-inte" class="text-left">
		<div class="container">
			<div class="section-title center text-center">
		      <h2><span class="morado-inte">{{ trans('integracion.services.title') }}</span></h2>
		      <hr class="decoration integracion-line">
		    </div>
		    <div class="space"></div>
		    <div class="service__wrapper" style="width:100%; height:100%; display: inline-block;">
		    	<div class="service__item">
	            	<div class="service__item-image">
	            		<img :src="url + trans('integracion.services.s1.img')">
	            	</div>
	            	<div class="service__item-content-texto">
	            		<h3><span>{{ trans('integracion.services.s1.title') }}</span></h3>
	            		<div class="service__item-texto">
	            			<p v-html="trans('integracion.services.s1.text')"></p>
	            		</div>
	            	</div>
	            </div>

	            <div class="service__item">
	            	<div class="service__item-content-texto">
	            		<h3 class="even"><span>{{ trans('integracion.services.s2.title') }}</span></h3>
	            		<div class="service__item-texto even">
	            			<p v-html="trans('integracion.services.s1.text')"></p>
	            		</div>
	            	</div>
	            	<div class="service__item-image even">
	            		<img :src="url + trans('integracion.services.s2.img')">
	            	</div>
	            </div>

	            <div class="service__item">
	            	<div class="service__item-image">
	            		<img :src="url + trans('integracion.services.s3.img')">
	            	</div>
	            	<div class="service__item-content-texto">
	            		<h3><span>{{ trans('integracion.services.s3.title') }}</span></h3>
		            	<div class="service__item-texto">
		            		<p v-html="trans('integracion.services.s3.text')"></p>
		            	</div>
		            </div>
	            </div>

	            <div class="service__item">
	            	<div class="service__item-content-texto">
	            		<h3 class="even"><span>{{ trans('integracion.services.s4.title') }}</span></h3>
		            	<div class="service__item-texto even">
		            		<p v-html="trans('integracion.services.s4.text')"></p>
		            	</div>
		            </div>
	            	<div class="service__item-image even">
	            		<img :src="url + trans('integracion.services.s4.img')">
	            	</div>
	            </div>

	            <div class="service__item">
	            	<div class="service__item-image">
	            		<img :src="url + trans('integracion.services.s5.img')">
	            	</div>
	            	<div class="service__item-content-texto">
	            		<h3><span>{{ trans('integracion.services.s5.title') }}</span></h3>
		            	<div class="service__item-texto">
		            		<p v-html="trans('integracion.services.s5.text')"></p>
		            	</div>
		            </div>
	            </div>

	            <div class="service__item">
	            	<div class="service__item-content-texto">
	            		<h3 class="even"><span>{{ trans('integracion.services.s6.title') }}</span></h3>
		            	<div class="service__item-texto even">
		            		<p v-html="trans('integracion.services.s6.text')"></p>
		            	</div>
		            </div>
	            	<div class="service__item-image even">
	            		<img :src="url + trans('integracion.services.s6.img')">
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

           

        }

    }
</script>