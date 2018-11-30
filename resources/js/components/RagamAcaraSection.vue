<template>
    <div class="" data-section-name="acara">
        <div class="row">
            <div class="col-md-4 col-xs-0">
                <div class="d-flex flex-column justify-content-center" style="height: 100vh; margin-left: 52px" v-sticky
                     sticky-offset="offset" sticky-side="top">
                    <div class="navigation_content__wrapper" style="position: relative">
                        <scrollactive class="align-self-center">
                            <h1 class="w-100 heading-1 mb-4" name="Ragam Acara">Ragam Acara</h1>
                            <h4><a href="#exhibition" class="navigation_content__items active scrollactive-item" v-smooth-scroll="{offset: 10}">Exhibition</a></h4>
                            <h4><a href="#talkshow" class="navigation_content__items scrollactive-item" v-smooth-scroll="{offset: 10}">Talkshow</a></h4>
                            <h4><a href="#workshop" class="navigation_content__items scrollactive-item" v-smooth-scroll="{offset: 10}">Workshop</a></h4>
                            <h4><a href="#lomba" class="navigation_content__items scrollactive-item" v-smooth-scroll="{offset: 10}">Lomba-lomba</a></h4>
                        </scrollactive>
                    </div>
                </div>
            </div>
            <div class="col-md-8 overflow-hidden">

                <homepage-countdown id="exhibition"
                                    class="acara_items playon-section"
                                    style="height: 100vh; position: relative"></homepage-countdown>

                <talkshow-slider id="talkshow"
                             class=""
                             style="height: 100vh; position: relative"></talkshow-slider>

                <workshop-slider id="workshop"
                                 class=""
                                 style="height: 100vh; position: relative"></workshop-slider>

                <lomba-slider id="lomba"
                             class="d-flex flex-row  homepage-lomba acara_items"
                             style="height: 100vh; position: relative; z-index: 99"></lomba-slider>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                linkActived: 0,
                fromTop: 0,
                links: [],
                sections: []
            }
        },
        mounted() {
        },
        methods: {
        },
        created() {
        }
        ,

        destroyed() {
        }
    }
</script>
