<template>
    <div>
        <mq-layout mq="mobile">
            <div class="row" style="height: 100vh;">
                <div class="col-md-7 h-100 d-flex flex-column right-side-background"
                     :style="competition.images">
                </div>
            </div>
            <div class="row py-5" style="padding-left: 50px;">
                <div class="col-md-5 h-100 d-flex flex-column">
                    <div class="d-flex h-100 justify-content-center event-detail flex-column">
                        <div class="event-detail__greet pr-5">
                            <h1 class="event-detail__title mr-auto">{{ competition.name }}</h1>
                            <ul class="list-inline d-flex flex-row align-self-center mt-5">
                                <li class="list-inline-item event-detail__time">
                                    {{ competition.date }} &mdash;<br>{{ competition.time }}
                                </li>
                            </ul>
                            <ul class="bullets pl-4">
                                <li v-for="point in competition.points">{{ point }}</li>
                            </ul>

                            <ul class="list-inline d-flex flex-row align-self-center mt-3">
                                <li class="list-inline-item d-flex align-self-center">
                                    <span class="event-detail__price">{{ competition.price }}</span>
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
                                    <h1 class="event-detail__title mr-auto">{{ competition.name }}</h1>
                                    <ul class="list-inline d-flex flex-row align-self-center mt-5">
                                        <li class="list-inline-item event-detail__time">
                                            {{ competition.date }} &mdash;<br> {{ competition.time }}
                                        </li>
                                    </ul>

                                    <ul class="bullets pl-4">
                                        <li v-for="point in competition.points">{{ point }}</li>
                                    </ul>

                                    <ul class="list-inline d-flex flex-row align-self-center mt-3">
                                        <li class="list-inline-item d-flex align-self-center">
                                            <span class="event-detail__price">{{ competition.price }}</span>
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
                             :style="competition.images">
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
                competitions: [
                    {
                        id: 1,
                        name: 'Mewarnai Ibu dan Anak',
                        price: 'Rp35.000',
                        images: 'background: url("/images/lomba/1-Mewarnai-Keluarga.jpg")',
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
                        ],
                    },
                    {
                        id: 2,
                        name: 'Komik Strip',
                        price: 'Rp30.000',
                        images: 'background: url("/images/lomba/2-Komik-Strip.jpg")',
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
                        images: 'background: url("/images/lomba/4-Kotak-Pensil.jpg")',
                        date: 'Minggu 23 Des',
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
                        images: 'background: url("/images/lomba/3-Lukis-Ayam.jpg")',
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
                        images: 'background: url("/images/lomba/6-Infografis.jpg")',
                        date: 'Deadline 15 Desember 2018',
                        time: 'Submit ke plazakreatif.dkvupn@gmail.com',
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
            }
        },
        computed: {
            competition() {
                return this.competitions[this.$route.params.id - 1]
            },
            linkDaftar() {
                let competition = this.competitions[this.$route.params.id - 1]
                return "https://wa.me/6285236066445?text=Halo, saya ingin ikutan lomba " + competition.name + " Plaza Kreatif 13"
            }
        }
    }
</script>

<style scoped>

</style>
