<template>
    <div class="" data-section-name="acara">
        <div class="row">
            <div class="col-md-4">
                <div class="d-flex flex-column justify-content-center" style="height: 100vh" v-sticky
                     sticky-offset="offset" sticky-side="top">
                    <div class="navigation_content__wrapper" style="position: relative">
                        <h1 class="gray-text-behind w-50" v-if="linkActived == 0">Exhi <br>bition&mdash;</h1>
                        <h1 class="gray-text-behind w-50" v-if="linkActived == 1">Talk <br>show&mdash;</h1>
                        <h1 class="gray-text-behind w-50" v-if="linkActived == 2">Work <br>shop&mdash;</h1>
                        <h1 class="gray-text-behind w-50" v-if="linkActived == 3">Compe <br>tition&mdash;</h1>

                        <div class="align-self-center">
                            <h1 class="w-75 heading-1 mb-4" name="Ragam Acara">Ragam Acara</h1>
                            <h4><a href="#exhibition" class="navigation_content__items active" v-smooth-scroll="{offset: 10}">Exhibition</a>
                            </h4>
                            <h4><a href="#talkshow" class="navigation_content__items" v-smooth-scroll="{offset: 10}">Talkshow</a></h4>
                            <h4><a href="#workshop" class="navigation_content__items" v-smooth-scroll="{offset: 10}">Workshop</a></h4>
                            <h4><a href="#lomba" class="navigation_content__items" v-smooth-scroll="{offset: 10}">Lomba-lomba</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 overflow-hidden">

                <homepage-countdown id="exhibition"
                                    class="d-flex align-self-center acara_items"
                                    style="height: 100vh; position: relative"></homepage-countdown>

                <card-slider id="talkshow"
                             class="d-flex flex-row homepage-talkshow acara_items"
                             style="height: 100vh; position: relative"></card-slider>

                <workshop-slider id="workshop"
                             class="d-flex flex-row  homepage-worhskop acara_items"
                             style="height: 100vh; position: relative"></workshop-slider>

                <lomba-slider id="lomba"
                             class="d-flex flex-row  homepage-lomba acara_items"
                             style="height: 100vh; position: relative"></lomba-slider>

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
            this.$nextTick(() => {
                this.sections = this.$el.querySelectorAll('.acara_items');
                this.links = this.$el.querySelectorAll('.navigation_content__items');
            })

        },
        methods: {
            scrollHandler: _.debounce(function (e) {
                this.fromTop = window.scrollY;
                //console.log("window scrolld: " + this.fromTop)
                this.links.forEach((link, index) => {
                    let section = this.sections[index]
                    //console.log()
                    //console.log("plus: " + (section.offsetTop + section.offsetHeight))
                    if (
                        section.offsetTop + section.offsetHeight <= this.fromTop - (section.offsetHeight / 2) &&
                        $(section).offset().top > this.fromTop - (section.offsetHeight / 2)
                    ) {
                        // console.log('add');
                        // console.log(link.classList)
                        link.classList.add("active");
                        this.linkActived = index;
                    } else {
                        // console.log('remove')
                        // console.log(link.classList)
                        link.classList.remove("active");
                    }

                })
            }, 250)
        },
        created() {
            window.addEventListener('scroll', this.scrollHandler);
        }
        ,

        destroyed() {
            window.removeEventListener('scroll', this.scrollHandler);
        }
    }
</script>
