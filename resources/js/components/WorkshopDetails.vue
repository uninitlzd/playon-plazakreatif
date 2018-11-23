<template>
    <div class="main-container" style="padding-left: 50px;">
        <mq-layout mq="mobile">
            <div class="row" style="height: 100vh;">
                <div class="col-md-7 h-100 d-flex flex-column right-side-background"
                     :style="workshop.images">
                </div>
            </div>
            <div class="row py-5">
                <div class="col-md-5 h-100 d-flex flex-column">
                    <div class="d-flex h-100 justify-content-center event-detail flex-column">
                        <div class="event-detail__greet pr-5">
                            <h1 class="event-detail__title mr-auto">{{ workshop.name }}</h1>
                            <ul class="list-inline d-flex flex-row align-self-center mt-5">
                                <li class="list-inline-item event-detail__time">
                                    21 Des &mdash;<br>10.00
                                </li>
                            </ul>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab atque autem commodi
                                cupiditate, delectus excepturi illo nemo nihil nobis pariatur provident quam quia rem
                                sapiente, suscipit tempore velit veniam voluptas.
                            </p>
                            <ul class="list-inline d-flex flex-row align-self-center mt-3">
                                <li class="list-inline-item d-flex align-self-center">
                                    <span class="event-detail__price">FREE</span>
                                </li>
                                <li class="list-inline-item ml-auto align-self-center">
                                    <a href="" class="btn btn-green px-5">Daftar</a>
                                </li>
                            </ul>
                            <a href="/" class="text-orange-primary mt-5"><i data-feather="arrow-left"></i> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </mq-layout>
        <mq-layout mq="tablet+">
            <div class="playon-section" data-section-name="home">
            <div class="row h-100">
                <div class="col-md-5 h-100 d-flex flex-column">
                    <div class="d-flex h-100 justify-content-center event-detail flex-column">
                        <div class="event-detail__greet pr-5">
                            <h1 class="event-detail__title mr-auto">{{ workshop.name }}</h1>
                            <ul class="list-inline d-flex flex-row align-self-center mt-5">
                                <li class="list-inline-item d-flex align-self-center">
                                    <img src="/images/venom.jpg" alt=""
                                         class="rounded-circle mr-2" height="50px" width="50px"
                                         style="object-fit: cover">
                                </li>
                                <li class="list-inline-item d-flex">
                                    <p class="event-detail__speaker align-self-center">{{ workshop.name }}<br>
                                        <span class="event-detail__speaker__detail">{{ workshop.field }}</span>
                                    </p>
                                </li>
                                <li class="list-inline-item ml-auto event-detail__time">
                                    21 Des &mdash;<br>10.00
                                </li>
                            </ul>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab atque autem commodi
                                cupiditate, delectus excepturi illo nemo nihil nobis pariatur provident quam quia rem
                                sapiente, suscipit tempore velit veniam voluptas.
                            </p>
                            <ul class="list-inline d-flex flex-row align-self-center mt-3">
                                <li class="list-inline-item d-flex align-self-center">
                                    <span class="event-detail__price">FREE</span>
                                </li>
                                <li class="list-inline-item ml-auto align-self-center">
                                    <a href="" class="btn btn-green px-5">Daftar</a>
                                </li>
                            </ul>
                            <a href="/" class="text-orange-primary mt-5"><i data-feather="arrow-left"></i> Back</a>
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
</template>

<script>
    export default {
        name: "WorkshopDetails",
        data: () => {
            return {
                workshops: [
                    {id: 1, name: 'Wastana Haikal', field: 'Ilustrasi Cerita Anak', images: 'background: url("/images/workshop/wastana.jpg")'},
                    {id: 2, name: 'Fasyari', field: 'Basic Watercolor', images: 'background: url("/images/talkshow/lintang.jpg")'},
                ],
            }
        },
        computed: {
            workshop() {
                return this.workshops[this.$route.params.id - 1]
            }
        }
    }
</script>

<style scoped>

</style>
