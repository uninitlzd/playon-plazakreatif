<template>
    <div class="card-slider">
        <div class="d-flex w-100 flex-column align-self-center">
            <vue-glide :classes="classes">
                <vue-glide-slide v-for="i in 10" :key="i">
                    <card @click.native="focusTo(i - 1)">
                        <div class="card__image" style="background: url('/images/four.jpg')">

                        </div>
                        <div class="card__info d-flex flex-column">
                            <div class="row">
                                <div class="col-md-9">
                                    <h1 class="text-white">lorem ipsum dolor sit amet</h1>
                                    <p class="text-white">by Speaker Name</p>
                                </div>
                                <div class="col-md-3">
                                    <p class="text-white pl-2">21 Des &mdash;<br>10.00</p>
                                </div>
                            </div>
                            <a href="/talkshow" class="text-white mt-3">Details <i data-feather="arrow-right"></i></a>
                        </div>
                    </card>
                </vue-glide-slide>
            </vue-glide>

            <div class="card-slider__button-group">
                <a @click="previous">Prev</a>
                <a class="">/</a>
                <a @click="next">Next</a>
            </div>
        </div>
    </div>
</template>

<script>
    const feather = require('feather-icons');
    feather.replace();

    export default {
        data() {
            return {
                classes: {},
                slide: {}
            }
        },
        mounted() {
            this.slide = this.$children[0];

        },
        methods: {
            focusTo: function (i) {
                this.slide.go('=' + i)
            },
            next: function () {
                this.slide.go('>')
            },
            previous: function () {
                this.slide.go('<')
            }
        }
    }
</script>
