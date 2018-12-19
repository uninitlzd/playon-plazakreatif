<template>
    <div class="timeline-homepage" data-section-name="timeline">
        <div class="row">
            <div class="col-md-12 d-flex flex-column">
                <div class="timeline__content__wrapper">
                    <h1 class="timeline__content__wrapper__title shadowed-text" name="Timeline">Timeline</h1>
                    <ul class="list-inline mt-5 ml-1 timeline__dates">
                        <li class="list-inline-item timeline__date" @click="timelineOrder = 1" v-bind:class="{active: (timelineOrder == 1)}">21 DES</li>
                        <li class="list-inline-item timeline__date" @click="timelineOrder = 2" v-bind:class="{active: (timelineOrder == 2)}">22 DES</li>
                        <li class="list-inline-item timeline__date" @click="timelineOrder = 3" v-bind:class="{active: (timelineOrder == 3)}">23 DES</li>
                    </ul>
                    <div class="row">
                        <div class="col-md-12">
                            <div v-if="timelineOrder == 1">
                                <ul class="timeline">
                                    <li class="timeline__item d-flex flex-row">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--salmon"></div>
                                        </div>
                                        <div class="timeline__time mr-3">
                                            11.00 - 11.30
                                        </div>
                                        <ul class="timeline_contents d-flex flex-column">
                                            <li class="timeline__content">
                                                <div class="timeline__title">
                                                    Opening Ceremony
                                                </div>
                                                <ul class="timeline__points">
                                                    <li>Sambutan ketua pelaksana</li>
                                                </ul>
                                            </li>
                                            <li class="timeline__content">
                                                <div class="timeline__title">
                                                    Registrasi Ulang
                                                </div>
                                                <ul class="timeline__points">
                                                    <li>Registrasi ulang lomba komik strip</li>
                                                </ul>
                                            </li>
                                            <li class="timeline__content">
                                                <div class="timeline__title">
                                                    Pendaftaran Workshop
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="timeline__item d-flex flex-row">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--salmon"></div>
                                        </div>
                                        <div class="timeline__time mr-3">
                                            13.00 - 15.30
                                        </div>
                                        <ul class="timeline_contents d-flex flex-column">
                                            <li class="timeline__content">
                                                <div class="timeline__title">
                                                    Workshop Fasyari
                                                </div>
                                            </li>
                                            <li class="timeline__content">
                                                <div class="timeline__title">
                                                    Registrasi Ulang Lomba Komik Strip
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="timeline__item d-flex flex-row">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--salmon"></div>
                                        </div>
                                        <div class="timeline__time mr-3">
                                            15.30 - 17.30
                                        </div>
                                        <ul class="timeline_contents d-flex flex-column">
                                            <li class="timeline__content">
                                                <div class="timeline__title">
                                                    Lomba Komik
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="timeline__item d-flex flex-row">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--salmon"></div>
                                        </div>
                                        <div class="timeline__time mr-3">
                                            17.30 - 18.30
                                        </div>
                                        <div class="timeline__content">
                                            <div class="timeline__title-break">
                                                ISHOMA
                                            </div>
                                        </div>
                                    </li>

                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--salmon"></div>
                                        </div>
                                        <div class="timeline__time mr-3">
                                            18.30 - 19.15
                                        </div>
                                        <ul class="">
                                            <li class="timeline__content">
                                                <div class="timeline__title">
                                                    Campaign
                                                </div>
                                                <ul class="timeline__points">
                                                    <li>Campaign DKV 5 Kelompok 1-3</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--salmon"></div>
                                        </div>
                                        <div class="timeline__time mr-3">
                                            19.15 - 20.15
                                        </div>
                                        <ul class="">
                                            <li class="timeline__content">
                                                <div class="timeline__title">
                                                    Live Music Performance
                                                </div>
                                                <ul class="timeline__points">
                                                    <li>Putri Depuci</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--salmon"></div>
                                        </div>
                                        <div class="timeline__time mr-3">
                                            20.15 - 21.00
                                        </div>
                                        <ul class="">
                                            <li class="timeline__content">
                                                <div class="timeline__title">
                                                    Campaign
                                                </div>
                                                <ul class="timeline__points">
                                                    <li>Campaign DKV5 Kelompok 4-6</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--salmon"></div>
                                        </div>
                                        <div class="timeline__time mr-3">
                                            21.30 - 22.00
                                        </div>
                                        <ul class="">
                                            <li class="timeline__content">
                                                <div class="timeline__title">
                                                    Penutupan
                                                </div>
                                                <ul class="timeline__points">
                                                    <li>Penutupan Hari 1</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                            <div v-if="timelineOrder == 2">
                                <ul class="timeline">
                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--salmon"></div>
                                        </div>
                                        <div class="timeline__time mr-3">
                                            11.00 - 11.15
                                        </div>
                                        <ul class="timeline_contents d-flex flex-column">
                                            <li class="timeline__content">
                                                <div class="timeline__title">
                                                    Open Gate
                                                </div>
                                            </li>
                                            <li class="timeline__content">
                                                <div class="timeline__title">
                                                    Registrasi Ulang
                                                </div>
                                                <ul class="timeline__points">
                                                    <li>Registrasi ulang lomba mewarnai</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--salmon"></div>
                                        </div>
                                        <div class="timeline__time mr-3">
                                            11.15 - 14.15
                                        </div>
                                        <ul class="timeline_contents d-flex flex-column">
                                            <li class="timeline__content">
                                                <div class="timeline__title">
                                                    Lomba Mewarnai Bersama Ibu dan Anak
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--salmon"></div>
                                        </div>
                                        <div class="timeline__time mr-3">
                                            14.15 – 16.00
                                        </div>
                                        <ul class="timeline_contents d-flex flex-column">
                                            <li class="timeline__content">
                                                <div class="timeline__title">
                                                    Panggon Dolan
                                                </div>
                                            </li>
                                            <li class="timeline__content">
                                                <div class="timeline__title">
                                                    Talkshow Artmagic
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--salmon"></div>
                                        </div>
                                        <div class="timeline__time mr-3">
                                            16.20 - 17.30
                                        </div>
                                        <ul class="timeline_contents d-flex flex-column">
                                            <li class="timeline__content">
                                                <div class="timeline__title">
                                                    Talkshow “Lintang Pandu” – Buku ilustrasi Anak
                                                </div>
                                            </li>
                                            <li class="timeline__content">
                                                <div class="timeline__title">
                                                    Bedah Karya
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--salmon"></div>
                                        </div>
                                        <div class="timeline__time mr-3">
                                            17.30 - 18.30
                                        </div>
                                        <div class="timeline__content">
                                            <div class="timeline__title-break">
                                                ISHOMA
                                            </div>
                                        </div>
                                    </li>

                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--salmon"></div>
                                        </div>
                                        <div class="timeline__time mr-3">
                                            18.30 - 19.00
                                        </div>
                                        <ul class="">
                                            <li class="timeline__content">
                                                <div class="timeline__title">
                                                    Live Music Performance “The Different”
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--salmon"></div>
                                        </div>
                                        <div class="timeline__time mr-3">
                                            19.00 - 20.00
                                        </div>
                                        <ul class="">
                                            <li class="timeline__content">
                                                <div class="timeline__title">
                                                    Art Performance Teater “Simpang”
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--salmon"></div>
                                        </div>
                                        <div class="timeline__time mr-3">
                                            20.00 – 22.00
                                        </div>
                                        <ul class="">
                                            <li class="timeline__content">
                                                <div class="timeline__title">
                                                    Art Performance Nirmana 1 “DKV18” dan Penutupan
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                            <div v-if="timelineOrder == 3">
                                <ul class="timeline">
                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--salmon"></div>
                                        </div>
                                        <div class="timeline__time mr-3">
                                            11.00 – 11.20
                                        </div>
                                        <ul class="timeline_contents d-flex flex-column">
                                            <li class="timeline__content">
                                                <div class="timeline__title">
                                                    Open Gate
                                                </div>
                                            </li>
                                            <li class="timeline__content">
                                                <div class="timeline__title">
                                                    Registrasi Ulang
                                                </div>
                                                <ul class="timeline__points">
                                                    <li>Registrasi ulang Lomba Melukis Gerabah</li>
                                                    <li>Registrasi ulang Lomba Kotak Pensil</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--salmon"></div>
                                        </div>
                                        <div class="timeline__time mr-3">
                                            11.20 – 11.30
                                        </div>
                                        <ul class="timeline_contents d-flex flex-column">
                                            <li class="timeline__content">
                                                <div class="timeline__title">
                                                    Persiapan Lomba
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--salmon"></div>
                                        </div>
                                        <div class="timeline__time mr-3">
                                            11.30 – 14.30
                                        </div>
                                        <ul class="timeline_contents d-flex flex-column">
                                            <li class="timeline__content">
                                                <div class="timeline__title">
                                                    Lomba Melukis Gerabah
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--salmon"></div>
                                        </div>
                                        <div class="timeline__time mr-3">
                                            14.30 – 17.30
                                        </div>
                                        <ul class="timeline_contents d-flex flex-column">
                                            <li class="timeline__content">
                                                <div class="timeline__title">
                                                    Lomba Kotak Pensil
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--salmon"></div>
                                        </div>
                                        <div class="timeline__time mr-3">
                                            17.50 – 18.30
                                        </div>
                                        <div class="timeline__content">
                                            <div class="timeline__title-break">
                                                ISHOMA
                                            </div>
                                        </div>
                                    </li>

                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--salmon"></div>
                                        </div>
                                        <div class="timeline__time mr-3">
                                            18.30 – 20.00
                                        </div>
                                        <ul class="">
                                            <li class="timeline__content">
                                                <div class="timeline__title">
                                                    Talkshow “Dunia Kreatif”
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--salmon"></div>
                                        </div>
                                        <div class="timeline__time mr-3">
                                            20.00 – 21.00
                                        </div>
                                        <ul class="">
                                            <li class="timeline__content">
                                                <div class="timeline__title">
                                                    Talkshow Bedah Karya
                                                </div>
                                            </li>
                                            <li class="timeline__content">
                                                <div class="timeline__title">
                                                    Awarding Lomba Melukis Gerabah dan Kotak Pensil
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--salmon"></div>
                                        </div>
                                        <div class="timeline__time mr-3">
                                            21.00 – 22.00
                                        </div>
                                        <ul class="">
                                            <li class="timeline__content">
                                                <div class="timeline__title">
                                                    Live Performance Sinleto dan Penutupan
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </div>
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
                timelineOrder: 1,
                timeline1: [
                    {time: '', }
                ]
            }
        }
    }
</script>

<style>

</style>
