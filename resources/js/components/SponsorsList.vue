<template>
    <div class="main-container pt-5 mt-5" style="padding-left: 52px" id="sponsors">
        <div class="row h-100">
            <div class="col-md-12 h-100 d-flex flex-column">
                <div class="sponsors__content mb-5">
                    <h1 class="sponsors__content__title" name="Contacts">Our Patron</h1>
                </div>
                <div>
                    <h4>Sponsors</h4>
                    <ul class="list-inline sponsors-list">
                        <li class="list-inline-item px-3 py-3" v-for="sponsor in sponsors">
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
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "SponsorsList",
        data: () => {
            return {
                sponsors: [
                    '/images/sponsors/ciputra-world.png',
                    '/images/sponsors/premier.png',
                    '/images/sponsors/faber-caster.png',
                    '/images/sponsors/emakde-catering.jpg',
                    '/images/sponsors/larita.png',
                ],
                mediaPartners: [
                    '/images/sponsors/provoke.png',
                    '/images/sponsors/event-mahasiswa.jpg',
                    '/images/sponsors/event-narema.png',
                    '/images/sponsors/event-pemuda.jpg',
                    '/images/sponsors/hai-event.png',
                    '/images/sponsors/seputar-event.png',
                    '/images/sponsors/studio-diskom.jpg',
                    '/images/sponsors/upn-radio.jpg',
                    '/images/sponsors/upn-tv.png',
                ]
            }
        }
    }
</script>

<style scoped>

</style>
