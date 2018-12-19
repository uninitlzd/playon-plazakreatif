<template>
    <div class="main-container pt-5 mt-5" style="padding-left: 52px" id="sponsors">
        <div class="row h-100">
            <div class="col-md-12 h-100 d-flex flex-column">
                <div class="sponsors__content mb-5">
                    <h1 class="sponsors__content__title" name="Contacts">Our Patron</h1>
                </div>
                <div>
                    <h4>Supported by</h4>
                    <ul class="list-inline sponsors-list">
                        <li class="list-inline-item px-3 py-3" v-for="(supporter, index) in supporters">
                            <img :src="supporter" alt="">
                        </li>
                    </ul>
                </div>
                <div>
                    <h4>Sponsors</h4>
                    <ul class="list-inline sponsors-list">
                        <li class="list-inline-item px-3 py-3" v-for="(sponsor, index) in sponsors" :class="{ mainSponsor: (index === 0), secondMainSponsor }">
                            <img :src="sponsor" alt="">
                        </li>
                    </ul>
                </div>
                <div class="mt-5">
                    <h4>Media Partners</h4>
                    <ul class="list-inline sponsors-list">
                        <li class="list-inline-item px-3 py-3" v-for="media in mediaPartners">
                            <img :src="media" alt="">
                        </li>
                    </ul>
                </div>
                <div class="mt-5">
                    <h4>Community Partners</h4>
                    <ul class="list-inline sponsors-list">
                        <li class="list-inline-item px-3 py-3" v-for="community in communityPartners">
                            <img :src="community" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "SponsorsList",
        data: () => {
            return {
                supporters: [
                    '/images/supported/DEKAVE.png',
                    '/images/supported/HIMA.png',
                    '/images/supported/UPN.png',
                ],
                sponsors: [
                    '/images/sponsors/Djarum.png',
                    '/images/sponsors/Emakde.png',
                    '/images/sponsors/Faber.png',
                    '/images/sponsors/Laritta.png',
                    '/images/sponsors/Leeven.png',
                    '/images/sponsors/Medash.png',
                    '/images/sponsors/Premier.png',
                    '/images/sponsors/Prodima.png',
                    '/images/sponsors/Rina.png',
                    '/images/sponsors/Surya Fancy.png',
                    '/images/sponsors/Surya Jaya.png',
                    '/images/sponsors/Telkomsel.png',
                ],
                mediaPartners: [
                    '/images/media-partner/DiskomSTD.png',
                    '/images/media-partner/Event Kampus.png',
                    '/images/media-partner/Event Mahasiswa.png',
                    '/images/media-partner/Event Pemuda.png',
                    '/images/media-partner/Hai.png',
                    '/images/media-partner/Narema.png',
                    '/images/media-partner/Provoke.png',
                    '/images/media-partner/Seputar Event.png',
                    '/images/media-partner/UPN Radio.png',
                    '/images/media-partner/UPN Tipi.png'
                ],
                communityPartners: [
                    '/images/community-partner/Artmagic.png',
                    '/images/community-partner/Gardacatha.png',
                ]
            }
        }
    }
</script>

<style scoped>
    .mainSponsor {
        width: 30%;
        max-width: 100%;
        margin: 10px 0;
    }

    .secondMainSponsor {
        width: 20%;
        max-width: 100%;
        margin: 10px 0;
    }

    @media (max-width: 900px) {
        .mainSponsor {
            width: 100%;
        }
    }
</style>
