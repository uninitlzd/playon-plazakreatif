<template>
    <div>
        <mq-layout mq="mobile">
            <div class="row" style="height: 100vh;">
                <div class="col-md-7 h-100 d-flex flex-column right-side-background"
                     :style="workshop.images">
                </div>
            </div>
            <div class="row py-5" style="padding-left: 50px;">
                <div class="col-md-5 h-100 d-flex flex-column">
                    <div class="d-flex h-100 justify-content-center event-detail flex-column">
                        <div class="event-detail__greet pr-5">
                            <h1 class="event-detail__title mr-auto">{{ workshop.name }}</h1>
                            <h5 class="event-detail__title mr-auto text-black-50">{{ workshop.speaker }}</h5>
                            <ul class="list-inline d-flex flex-row align-self-center mt-5">
                                <li class="list-inline-item event-detail__time">
                                    {{ workshop.date }} &mdash;<br>{{ workshop.time }}
                                </li>
                            </ul>
                            <ul class="bullets pl-4">
                                <li v-for="point in workshop.points">{{ point }}</li>
                            </ul>

                            <ul class="list-inline d-flex flex-row align-self-center mt-3">
                                <li class="list-inline-item d-flex align-self-center">
                                    <span class="event-detail__price">{{ workshop.price }}</span>
                                </li>
                                <li class="list-inline-item ml-auto align-self-center">
                                    <a :href=linkDaftar class="btn btn-green px-5">Daftar</a>
                                </li>
                            </ul>
                            <a href="/#lomba" class="text-orange-primary mt-5"><i data-feather="arrow-left"></i>
                                Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </mq-layout>
        <div class="main-container" style="padding-left: 50px;">
            <mq-layout mq="table+">
                <div class="playon-section" data-section-name="home">
                    <div class="row h-100">
                        <div class="col-md-5 h-100 d-flex flex-column">
                            <div class="d-flex h-100 justify-content-center event-detail flex-column">
                                <div class="event-detail__greet pr-5">
                                    <h1 class="event-detail__title mr-auto">{{ workshop.name }}</h1>
                                    <p class="mr-auto text-black-50">by {{ workshop.speaker }}</p>
                                    <ul class="list-inline d-flex flex-row align-self-center mt-5">
                                        <li class="list-inline-item event-detail__time">
                                            {{ workshop.date }} &mdash;<br> {{ workshop.time }}
                                        </li>
                                    </ul>

                                    <ul class="bullets pl-4">
                                        <li v-for="point in workshop.points">{{ point }}</li>
                                    </ul>

                                    <ul class="list-inline d-flex flex-row align-self-center mt-3">
                                        <li class="list-inline-item d-flex align-self-center">
                                            <span class="event-detail__price">{{ workshop.price }}</span>
                                        </li>
                                        <li class="list-inline-item ml-auto align-self-center">
                                            <a :href=linkDaftar class="btn btn-green px-5">Daftar</a>
                                        </li>
                                    </ul>
                                    <a href="/#lomba" class="text-orange-primary mt-5"><i data-feather="arrow-left"></i>
                                        Back</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 h-100 d-flex flex-column right-side-background"
                             :style="workshop.images">
                        </div>
                    </div>
                </div>
            </mq-layout>
        </div>
    </div>

</template>

<script>
    export default {
        name: "WorkshopDetails",
        data: () => {
            return {
                workshops: [
                    {
                        id: 1,
                        name: 'Workshop Fasyari',
                        speaker: 'Fahmy A - @fasyari',
                        price: 'Rp100.000',
                        images: 'background: url("/images/workshop/fasyari.jpg")',
                        date: '',
                        time: '',
                        points: [
                            'Workshop untuk umum',
                            'Peserta mendaftar pada panitia',
                            'Pendaftaran bisa dilakukan  dengan menghubungi cp yang tersedia (danna) dengan mengisi form data, dan melakukan pembayaran via transfer:',
                            'Peserta membawa alat tambahanya sendiri',
                            'Kertas disediakan panitia',
                            'Kertas disediakan panitia'
                        ],
                    }
                ],
            }
        },
        computed: {
            workshop() {
                return this.workshops[this.$route.params.id - 1]
            },
            linkDaftar() {
                let workshop = this.workshops[this.$route.params.id - 1]
                return "https://wa.me/6282264755533?text=Halo, saya ingin ikutan workshop " + workshop.name + " Plaza Kreatif 13"
            }
        }
    }
</script>

<style scoped>

</style>
