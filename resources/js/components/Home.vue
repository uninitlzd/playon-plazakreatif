<template>
    <div>
        <div class="main-container" id="home">
            <div class="playon-section" data-section-name="home">
                <div class="row h-100">
                    <div class="col-md-5 h-100 d-flex flex-column">
                        <div class="d-flex h-100 align-items-center justify-content-center hero flex-column">
                            <img src="/images/playon-logo.png" class="hero__logo mx-auto mb-5 w-75" alt="">
                            <div class="hero__greet">
                                <h2 class="hero__greet__title mr-auto">Pameran Karya</h2>
                                <h2 class="hero__greet__campus mr-auto">Akhir Semester ke-13 DKV UPN Jawa Timur</h2>
                                <div class="d-flex flex-row">
                                    <div>
                                        <h2 class="hero__greet__date">21&mdash;23</h2>
                                    </div>
                                    <div style="margin-left: 10px">
                                        <h2 class="hero__greet__month">Desember 2018</h2>
                                        <h2 class="hero__greet__place">Ciputra Mall World</h2>
                                        <a href="#" class="hero__greet__maps-link">Lihat Peta <i
                                            data-feather="arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 h-100 d-flex flex-column right-side-background"
                         style="background: url('/images/homepage-bg.png')">
                    </div>
                </div>
            </div>
        </div>
        <div class="main-container" data-section-name="about" id="tentang" style="padding-left: 52px">
            <mq-layout mq="tablet+">
                <div class="row h-100 mt-5">
                    <div
                        class="col-md-6 col-xs-0 h-100 d-flex flex-column align-self-center justify-content-center tentang__left-side">
                        <img src="/images/playon-mozaik.png" class="img-fluid align-self-center" alt="">
                    </div>
                    <div class="col-md-6 h-100 d-flex flex-column justify-content-center">
                        <div class="tentang__content">
                            <h1 class="w-100 tentang__content__title mb-5 mt-5" name="Tentang Playon">
                                Tentang Playon</h1>
                            <p class="w-75 tentang__content__text">Plaza Kreatif 13 berjudul “Playon” yang diambil
                                dari
                                salah satu bahasa
                                jawa yang berarti berlarian. “Playon” sendiri merupakan salah satu kegiatan
                                bermain yang paling sering dilakukan oleh anak-anak. “Playon” merupakan salah
                                satu kalimat yang mewakili dari gambaran sebuah permainan dan “Playon”
                                merupakan permainan yang mengasyikan serta selalu memberikan kesan yang
                                paling menyenangkan bagi anak-anak ketika bermain bersama. Sama seperti
                                sebuah permainan, suatu desain juga ingin memberikan dan meninggalkan
                                sebuah kesan yang selalu melekat bagi yang menikmatinya, seperti karya-karya
                                yang dihasilkan oleh mahasiswa DKV UPN. Serta dengan dipilihnya kata “Playon”
                                sebagai judul Plaza Kreatif 13 , maka Plaza Kreatif 13 mampu dijadikan tempat
                                bermain, berkumpul, dan bertemu bersama untuk memberikan kesan yang
                                menyenangkan dan berkesan bagi seluruh penikmatnya.</p>
                            <p class="vertical-text__scroll-down col-xs-0">Scroll Down <i
                                data-feather="arrow-down"></i></p>
                        </div>
                    </div>
                </div>
            </mq-layout>
            <mq-layout mq="mobile">
                <div class="row mb-5 px-4">
                    <div class="col-md-12 h-100 d-flex flex-column justify-content-center">
                        <div class="tentang__content">
                            <h1 class="w-100 tentang__content__title shadowed-text mb-5" name="Tentang Playon">Tentang
                                <br> Playon</h1>
                            <p class="w-75 tentang__content__text">Plaza Kreatif 13 berjudul “Playon” yang diambil dari
                                salah satu bahasa
                                jawa yang berarti berlarian. “Playon” sendiri merupakan salah satu kegiatan
                                bermain yang paling sering dilakukan oleh anak-anak. “Playon” merupakan salah
                                satu kalimat yang mewakili dari gambaran sebuah permainan dan “Playon”
                                merupakan permainan yang mengasyikan serta selalu memberikan kesan yang
                                paling menyenangkan bagi anak-anak ketika bermain bersama. Sama seperti
                                sebuah permainan, suatu desain juga ingin memberikan dan meninggalkan
                                sebuah kesan yang selalu melekat bagi yang menikmatinya, seperti karya-karya
                                yang dihasilkan oleh mahasiswa DKV UPN. Serta dengan dipilihnya kata “Playon”
                                sebagai judul Plaza Kreatif 13 , maka Plaza Kreatif 13 mampu dijadikan tempat
                                bermain, berkumpul, dan bertemu bersama untuk memberikan kesan yang
                                menyenangkan dan berkesan bagi seluruh penikmatnya.</p>
                            <p class="vertical-text__scroll-down col-xs-0">Scroll Down <i data-feather="arrow-down"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </mq-layout>
        </div>
        <div class="main-container mb-5" sticky-container style="padding-left: 0px">
            <ragam-acara></ragam-acara>
        </div>
        <div class="main-container mt-5 pt-5" style="padding-left: 52px" id="timeline">
            <div class="" data-section-name="timeline">
                <div class="row">
                    <div class="col-md-6 h-100 d-flex flex-column">
                        <timeline-acara></timeline-acara>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-container pt-5 mt-5" style="padding-left: 52px" id="contacts">
            <div class="row h-100">
                <div class="col-md-12 h-100 d-flex flex-column">
                    <div class="sponsors__content mb-5">
                        <h1 class="sponsors__content__title " name="Contacts">Contacts</h1>
                    </div>
                    <div>
                        <h6>Plaza Kreatif 13 OA</h6>
                        <ul class="">
                            <li class="">Instagram: <a
                                href="https://www.instagram.com/plazakreatifupn/">PlazaKreatifUPN</a>
                            </li>
                            <li class="mt-1">
                                <div class="line-it-button align-middle" data-lang="en" data-type="friend"
                                     data-lineid="@yqu4706u" data-count="true" data-home="true"
                                     style="display: none;"></div>
                            </li>
                        </ul>
                        <h6>Mbak Eky</h6>
                        <ul class="">
                            <li class="">LINE: @ekyima_</li>
                            <li class="">WA: 085236066445</li>
                        </ul>
                    </div>
                    <div>
                        <h6>Mbak Danna</h6>
                        <ul class="">
                            <li class="">LINE: @danna.np</li>
                            <li class="">WA: 082264755533</li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
        <sponsors></sponsors>
    </div>
</template>

<script>
    export default {
        name: "Home"
    }
</script>

<style scoped>

</style>
