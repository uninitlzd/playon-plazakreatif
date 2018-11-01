<template>
    <div>
        <nav class="position-fixed main-nav navbar__desktop">
            <div class="main-nav__button d-flex justify-content-center" @click="overlayActive = !overlayActive">
                <i data-feather="menu" class="text-white align-self-center"></i>
            </div>
            <div class="main-nav__social-media-icon-wrapper d-flex h-50 pb-3">
                <a href="#" class="align-self-end mx-auto text-orange-primary" v-smooth-scroll><i data-feather="home" class=""></i></a>
            </div>
            <div class="main-nav__social-media-icon-wrapper d-flex h-50 pb-3">
                <a href="https://www.instagram.com/plazakreatifupn/" class="align-self-end mx-auto mb-5 text-orange-primary"><i data-feather="instagram"
                                                                                       class=""></i></a>
            </div>
        </nav>

        <nav class="position-fixed main-nav navbar__mobile d-flex" v-if="$md === 'mobile'">
            <div class="main-nav__button d-flex justify-content-center" @click="overlayActive = !overlayActive" style="width: 60px">
                <i data-feather="menu" class="text-white align-self-center"></i>
            </div>
            <div class="main-nav__social-media-icon-wrapper d-flex w-100 pr-3">
                <a href="#" class="align-self-center mx-auto text-orange-primary text-right" v-smooth-scroll style="font-weight: 600; letter-spacing: 2px">PLAYON</a>
            </div>
        </nav>

        <transition :css="false" @enter="handleEnter" @leave="handleLeave">
            <div class="nav__overlay" id="main-overlay" v-if="overlayActive">
                <div class="nav__overlay__button d-flex justify-content-center" @click="overlayActive = !overlayActive">
                    <i data-feather="x" class="text-white align-self-center"></i>
                </div>
                <div class="d-flex flex-column h-100 nav__overlay__items">
                    <div class="d-flex flex-column justify-content-center h-100">
                        <ul class="">
                            <li><a href="/" @click="to('home')" v-bind:class="{navActive: (navActive == 'home')}">Home</a></li>
                            <li><a href="/#exhibition" @click="to('exhibition')" v-bind:class="{navActive: (navActive == 'exhibition')}">Exhibition</a></li>
                            <li><a href="/#talkshow" @click="to('talkshow')" v-bind:class="{navActive: (navActive == 'talkshow')}">Talkshow</a></li>
                            <li><a href="/#workshop" @click="to('workshop')" v-bind:class="{navActive: (navActive == 'workshop')}">Workshop</a></li>
                            <li><a href="/#contest" @click="to('contest')" v-bind:class="{navActive: (navActive == 'contest')}">Contest</a></li>
                            <li>
                                <div class="nav__overlay__items__divider"></div>
                            </li>
                            <li><a href="/#timeline" @click="to('timeline')" v-bind:class="{navActive: (navActive == 'timeline')}">Timeline</a></li>
                            <li><a href="#" @click="overlayActive = !overlayActive">Registration</a></li>
                        </ul>
                    </div>
                    <div class="d-flex h-25 pb-5">
                        <ul class="list-inline align-self-center nav__overlay__items__end">
                            <li class="list-inline-item"><a href="https://www.instagram.com/plazakreatifupn/"><i data-feather="instagram"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.facebook.com/PlazaKreatif/"><i data-feather="facebook"></i></a></li>
                            <li class="list-inline-item"><a href="" class="mt-3">Contacts</a></li>
                            <li class="list-inline-item"><a href="/#sponsors" class="mt-3" @click="to('sponsors')" v-bind:class="{navActive: (navActive == 'sponsors')}">Sponsor</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </transition>
    </div>
</template>

<script>
    const options = {
        delay: (el, i) =>  i * 100,
        duration: 400,
        easing: "easeOutCubic"
    }

    export default {
        data () {
            return {
                nav__overlay: true,
                overlayActive: false,
                navActive: 'home'
            }
        },
        methods: {
            to: function (element) {
                this.overlayActive = false;
                this.navActive = element;
                let el = window.querySelector("/#"+element);
                window.scrollTo(0, el.offsetTop);
            },
            handleEnter: (el, done) => {
                const sections = Array.from(el.querySelectorAll("li"))
                let timeline = anime.timeline();
                timeline
                    .add({
                        targets: el,
                        translateX: [-2000, 0],
                        ...options,
                    })
                    .add({
                        targets: sections,
                        translateX: [-20, 0],
                        opacity: [0, 1],
                        ...options,
                        complete: done
                    });

                feather.replace();
            },
            handleLeave: (el, done) => {
                const sections = Array.from(el.querySelectorAll("li"))
                let timeline = anime.timeline();
                timeline
                    .add({
                        targets: sections.reverse(),
                        translateX: -20,
                        opacity: 0,
                        ...options,
                    })
                    .add({
                        targets: el,
                        translateX: -2000,
                        options: {
                            duration: 200000000,
                            easing: "easeInCubic"
                        },
                        complete: done
                    })
            }
        },
        mounted () {
            feather.replace()
        }
    }
</script>
