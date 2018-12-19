<template>
    <div>
        <mq-layout mq="mobile">
            <div class="row" style="height: 100vh;">
                <div class="col-md-7 h-100 d-flex flex-column right-side-background"
                     :style="talkshow.images">
                </div>
            </div>
            <div class="row py-5" style="padding-left: 50px;">
                <div class="col-md-5 h-100 d-flex flex-column">
                    <div class="d-flex h-100 justify-content-center event-detail flex-column">
                        <div class="event-detail__greet pr-5">
                            <h1 class="event-detail__title mr-auto">{{ talkshow.name }}</h1>
                            <p>{{ talkshow.field }}</p>
                            <ul class="list-inline d-flex flex-row align-self-center mt-5">
                                <li class="list-inline-item event-detail__time">
                                    {{ talkshow.date }} &mdash;<br>
                                </li>
                            </ul>
                            <p class="mb-5">
                                {{ talkshow.profile }}
                            </p>
                            <a href="/#talkshow" class="text-orange-primary mt-5"><i data-feather="arrow-left"></i> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </mq-layout>
        <div class="main-container" style="padding-left: 50px;">
            <mq-layout mq="tablet+">
                <div class="playon-section" data-section-name="home">
                    <div class="row h-100">
                        <div class="col-md-5 h-100 d-flex flex-column">
                            <div class="d-flex h-100 justify-content-center event-detail flex-column">
                                <div class="event-detail__greet pr-5">
                                    <h1 class="event-detail__title mr-auto">{{ talkshow.name }}</h1>
                                    <ul class="list-inline d-flex flex-row align-self-center">
                                        <li class="list-inline-item d-flex">
                                            <p class="event-detail__speaker align-self-center">{{ talkshow.field }}<br>
                                            </p>
                                        </li>
                                        <li class="list-inline-item ml-auto event-detail__time">
                                            {{ talkshow.date }} &mdash;<br>
                                        </li>
                                    </ul>
                                    <p class="mb-5 mt-3">
                                        {{ talkshow.profile }}
                                    </p>
                                    <a href="/#talkshow" class="text-orange-primary"><i data-feather="arrow-left"></i>
                                        Back</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 h-100 d-flex flex-column right-side-background"
                             :style="talkshow.images">
                        </div>
                    </div>
                </div>
            </mq-layout>
        </div>
    </div>
</template>

<script>
    export default {
        name: "TalkshowDetails",
        data: () => {
            return {
                talkshows: [
                    {
                        id: 1,
                        name: 'Lintang Pandu',
                        field: 'Ilustrator & Penulis',
                        images: 'background: url("/images/talkshow/lintang-pandu.jpg")',
                        date: '22 Des',
                        profile: 'Gadis cantik asal kota batu ini sangat menyukai bunga matahari. Dia memiliki ketertarikan ilustrasi sejak ia kecil dan mencintai dunia anak-anak khususnya pendidikan, dia mendedikasikan ilmunya untuk berkarya menjadi illustrator buku cerita anak. Dia tak hanya terkenal di dalam negeri, di luar negeripun karyanya sudah diakui'
                    },
                    {
                        id: 2,
                        name: 'Agus San',
                        field: 'Desain Packaging',
                        images: 'background: url("/images/talkshow/agus-san.jpg")',
                        date: '',
                        profile: ''
                    },
                    {
                        id: 3,
                        name: 'Rian Tank',
                        field: 'Illustrator',
                        images: 'background: url("/images/talkshow/tank.jpg")',
                        date: '',
                        profile: 'Gadis cantik asal kota batu ini sangat menyukai bunga matahari. Dia memiliki ketertarikan ilustrasi sejak ia kecil dan mencintai dunia anak-anak khususnya pendidikan, dia mendedikasikan ilmunya untuk berkarya menjadi illustrator buku cerita anak. Dia tak hanya terkenal di dalam negeri, di luar negeripun karyanya sudah di akui'
                    },
                    {
                        id: 4,
                        name: 'Bayu Prasetya',
                        field: 'Graphic Chapter Surabaya',
                        images: 'background: url("/images/talkshow/pak-bayu.jpg")',
                        date: '',
                        profile: 'Lulusan S1 DKV ITS, S2 MM UGM. Managing Director Graphicapter. Sekretaris Jenderal ADGI Surabaya Chapter.'
                    }
                ]
            }
        },
        computed: {
            talkshow() {
                return this.talkshows[this.$route.params.id - 1]
            }
        },
    }
</script>

<style scoped>

</style>
