<template>
    <div class="card-slider d-flex flex-column homepage-talkshow justify-content-center  acara_items">
        <mq-layout mq="mobile">
            <h1 class="shadowed-text mb-5" name="Talkshow" style="padding-left: 52px; position:relative;">Talkshow</h1>
            <div class="d-flex w-100 flex-row align-self-center" style="padding-left: 52px">
                <div class="d-flex flex-column w-50 align-self-center">
                    <h6 class="event-detail__title mr-auto">Talkshow</h6>
                    <ul class="list-inline d-flex flex-row align-self-center mt-3">
                        <li class="list-inline-item d-flex align-self-center">
                            <img src="/images/venom.jpg" alt=""
                                 class="rounded-circle mr-2" height="50px" width="50px"
                                 style="object-fit: cover">
                        </li>
                        <li class="list-inline-item d-flex">
                            <p class="event-detail__speaker align-self-center">Venom<br>
                                <span class="event-detail__speaker__detail">Villain from <i>Surabaya</i></span>
                            </p>
                        </li>
                    </ul>
                    <p class="event-detail__time">
                        21 Des at 10.00
                    </p>
                </div>
                <div class="d-flex w-50">
                    <vue-glide :classes="classes" :breakpoints="breakpoints" ref="slide">
                        <vue-glide-slide v-for="i in 10" :key="i">
                            <card @click.native="focusTo(i - 1)">
                                <div class="card__image h-100" style="background: url('/images/four.jpg')">

                                </div>
                            </card>
                        </vue-glide-slide>
                    </vue-glide>
                </div>
            </div>
            <div class="card-slider__button-group" style="padding-left: 52px">
                <a @click="previous">Prev</a>
                <a class="">/</a>
                <a @click="next">Next</a>
            </div>
        </mq-layout>

        <mq-layout mq="tablet+">
            <div class="d-flex w-100 flex-column align-self-center">
                <vue-glide :breakpoints="breakpoints" ref="slide">
                    <vue-glide-slide v-for="i in 10" :key="i">
                        <card @click.native="focusTo(i - 1)" v-if="i-1 != slide.currentSlide">
                            <div class="card__image" style="background: url('/images/four.jpg')">

                            </div>
                            <div class="card__info d-flex flex-column">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h1 class="text-white">lorem ipsum dolor sit amet</h1>
                                        <p class="text-white">by Speaker Name</p>
                                    </div>
                                </div>
                            </div>
                        </card>

                        <card v-if="i-1 == slide.currentSlide">
                            <a href="/talkshow">
                                <div class="card__image" style="background: url('/images/four.jpg')">

                                </div>
                                <div class="card__info d-flex flex-column">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h1 class="text-white">lorem ipsum dolor sit amet</h1>
                                            <p class="text-white">by Speaker Name</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </card>
                    </vue-glide-slide>
                </vue-glide>

                <div class="card-slider__button-group">
                    <a @click="previous">Prev</a>
                    <a>/</a>
                    <a @click="next">Next</a>
                </div>
            </div>
        </mq-layout>
    </div>
</template>

<script>
    const feather = require('feather-icons');
    feather.replace();

    export default {
        data() {
            return {
                classes: {},
                slide: {},
                breakpoints: {
                    576: {
                        perView: 1,
                    }
                }
            }
        },
        mounted() {
            this.slide = this.$refs['slide'];
            console.log(this.$refs['slide'])
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
