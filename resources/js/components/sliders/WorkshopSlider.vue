<template>
    <div class="card-slider d-flex flex-column homepage-talkshow justify-content-center  acara_items">
        <mq-layout mq="mobile">
            <h1 class="shadowed-text" style="padding-left: 52px" name="Talkshow">Workshop</h1>
            <div class="d-flex w-100 flex-row align-self-center" style="padding-left: 52px">
                <div class="d-flex flex-column w-50 align-self-center">
                    <ul class="list-inline d-flex flex-row mt-3">
                        <li class="list-inline-item d-flex">
                            <p class="event-detail__speaker align-self-center"> {{ speakerDetail.name}} <br>
                                <span class="event-detail__speaker__detail">{{ speakerDetail.field }}</span>
                            </p>
                        </li>
                    </ul>
                    <p class="event-detail__time">
                        21 Des at 10.00
                    </p>
                </div>
                <div class="d-flex w-50">
                    <vue-glide :classes="classes" :breakpoints="breakpoints" ref="slide" :rewind="rewind">
                        <vue-glide-slide v-for="speaker in speakers" :key="speaker.id">
                            <card>
                                <div class="card__image h-100" :style='speaker.images'>

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
                    <vue-glide-slide v-for="speaker in speakers" :key="speaker.id">
                        <card @click.native="focusTo(speaker.id - 1)" v-if="speaker.id - 1 != slide.currentSlide">
                            <div class="card__image" :style="speaker.images">

                            </div>
                            <div class="card__info d-flex flex-column">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h1 class="text-white">{{ speaker.name }}</h1>
                                        <p class="text-white">{{ speaker.field }}</p>
                                        <a :href=link(speaker.id) class="text-white"><u>Detail</u></a>
                                    </div>
                                </div>
                            </div>
                        </card>
                        <card v-if="speaker.id - 1 == slide.currentSlide">
                            <div class="card__image" :style="speaker.images">

                            </div>
                            <div class="card__info d-flex flex-column">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h1 class="text-white">{{ speaker.name }}</h1>
                                        <p class="text-white">{{ speaker.field }}</p>
                                        <a :href="link(speaker.id)" class="text-white"><u>Detail</u></a>
                                    </div>
                                </div>
                            </div>
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
                currentSlide: 0,
                speakerDetail: {
                    name: ''
                },
                speakers: [
                    {id: 1, name: 'Lintang Pandu', field: 'Ilustrator & Penulis', images: 'background: url("/images/talkshow/lintang.jpg")'},
                    {id: 2, name: 'Pak Agus', field: 'Desain Packaging', images: 'background: url("/images/talkshow/lintang.jpg")'},
                    {id: 3, name: 'Rian Tank', field: 'Illustrator', images: 'background: url("/images/talkshow/lintang.jpg")'},
                    {id: 4, name: 'Graphic Chapter Surabaya', field: 'Asosiasi Desain Grafis Indonesia', images: 'background: url("/images/talkshow/lintang.jpg")'}
                ],
                rewind: false,
                classes: {},
                slide: {},
                breakpoints: {
                    576: {
                        perView: 1,
                        rewind: false,
                    }
                }
            }
        },
        mounted() {
            this.slide = this.$refs['slide'];

            if (this.speakerDetail.name === '') {
                this.speakerDetail = this.speakers[0]
            }

            this.$watch(() => this.$refs['slide'].currentSlide, (value) => {
                this.speakerDetail = this.speakers[value]
            })
        },
        methods: {
            slideChanged(e) {
                console.log(e)
            },
            focusTo: function (i) {
                this.slide.go('=' + i)
            },
            next: function () {
                this.slide.go('>')
            },
            previous: function () {
                this.slide.go('<')
            },
            link(id) {
                return '/workshop/' + id;
            }
        },
        computed: {
        },
        watch: {

        }
    }
</script>
