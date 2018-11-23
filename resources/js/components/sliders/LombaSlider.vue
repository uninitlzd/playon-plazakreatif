<template>
    <div class="card-slider d-flex flex-column homepage-talkshow justify-content-center  acara_items">
        <mq-layout mq="mobile">
            <h1 class="shadowed-text" style="padding-left: 52px" name="Lomba">Lomba</h1>
            <div class="d-flex w-100 flex-row align-self-center" style="padding-left: 52px">
                <div class="d-flex flex-column w-50 align-self-center">
                    <ul class="list-inline d-flex flex-row mt-3">
                        <li class="list-inline-item d-flex">
                            <p class="event-detail__speaker align-self-center"> {{ speakerDetail.name}} <br>
                                <span class="event-detail__speaker__detail">{{ speakerDetail.price }}</span>
                            </p>
                        </li>
                    </ul>
                    <p class="event-detail__time w-50">
                        {{ speakerDetail.date }} &mdash; <br> {{ speakerDetail.time }}
                    </p>
                    <a class="text-black-50 mt-4" :href="link(speakerDetail.id)">Detail</a>
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
                                        <p class="text-white">{{ speaker.date }}</p>
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
                                        <p class="text-white">{{ speaker.date }}</p>
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
                    {
                        id: 1,
                        name: 'Mewarnai Ibu dan Anak',
                        price: 'Rp35.000',
                        images: 'background: url("/images/lomba-slider/mewarnai.jpg")',
                        date: '22 Des',
                        time: '11.00-14.00',
                        points: [
                            'Tingkat TK-SD, usia 4-8 tahun',
                            'Tema: Dolanan dan Cerita Rakyat',
                            'Kuota tersedia 50 peserta',
                            'Biaya pendaftaran Rp35.000 (including crayon)',
                            'Pembayaran dapat melalui guru sekolah atau di tempat (On the Spot)',
                            'Membawa meja lipat/alas gambar',
                            'Diselenggarakan di Atrium LG Ciputra World'
                        ]
                    },
                    {
                        id: 2,
                        name: 'Komik Strip',
                        price: 'Rp30.000',
                        images: 'background: url("/images/lomba-slider/komik.jpg")',
                        date: '21 Des',
                        time: '15.30-17.30',
                        points: [
                            'Untuk umum',
                            'Tema: Permainan Tradisional dan Cerita Rakyat',
                            'Jumlah 2 lembar A4',
                            'Kuota tersedia 30 peserta',
                            'Pembayaran via transfer atau di tempat (On the Spot)',
                            'Peralatan yang disediakan berupa kertas dan marker oleh pihak sponsor',
                            'Diselenggarakan di Atrium LG Ciputra World'
                        ]
                    },
                    {
                        id: 3,
                        name: 'Lukis Tempat Pensil',
                        price: 'Rp40.000',
                        images: 'background: url("/images/lomba-slider/tepak.jpg")',
                        date: '23 Des',
                        time: '11.30 - 14.30',
                        points: [
                            'Tingkat SMA/SMK Sederajat',
                            'Tema: Cerita Rakyat atau Dolanan Tradisional',
                            'Kuota tersedia 30 peserta',
                            'Media tempat pensil disediakan oleh pihak sponsor',
                            'Panitia hanya menyediakan 3 spidol berwarna',
                            'Diperbolehkan membawa alat tambahan yang dibutuhkan',
                            'Pembayaran via transfer atau di tempat (On the Spot)',
                            'Diselenggarakan di Atrium LG Ciputra World'
                        ]
                    },
                    {
                        id: 4,
                        name: 'Lukis Celengan Gerabah',
                        price: 'Rp30.000',
                        images: 'background: url("/images/lomba-slider/lukis-gerabah.jpg")',
                        date: '23 Des',
                        time: '11.30-14.30',
                        points: [
                            'Tingkat SMA/SMK sederajat',
                            'Tema: Dolanan tradisional dan Cerita Rakyat',
                            'Kuota tersedia 30 peserta',
                            'Media celengan gerabah oleh panitia',
                            'Cat akrilik disediakan panitia, boleh membawa alat dan bahan tambahan yang dibutuhkan',
                            'Pembayaran via transfer atau di tempat (On the Spot)',
                            'Diselenggarakan di Atrium LG Ciputra World'
                        ]
                    },
                    {
                        id: 5,
                        name: 'Poster Infografis',
                        price: 'Rp30.000',
                        images: 'background: url("/images/lomba-slider/infografis.jpg")',
                        date: 'Deadline 15 Desember 2018',
                        time: '',
                        points: [
                            'Tingkat SMA/SMK Sederajat dan umum',
                            'Poster berukuran A3. Karya manual, digital atau mix media',
                            'Tema: Dolanan tradisional',
                            'Pembayaran via transfer',
                            'Upload pada Instagram pribadi dan wajib tag ke @plazakreatifupn dengan tagar #MasaKecilKu #PKPlayon #PlazaKreatif13 #PlazaKreatifUPN',
                            'Kirim karya ke email plazakreatif.dkvupn@gmail.com paling lambat 15 Desember 2018',
                            'Keputusan juri tidak dapat diganggu gugat'
                        ]
                    }
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
                return '/competition/' + id;
            }
        },
        computed: {
        },
        watch: {

        }
    }
</script>
