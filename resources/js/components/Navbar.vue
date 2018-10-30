<template>
    <div>
        <nav class="position-fixed main-nav navbar__desktop">
            <div class="main-nav__button d-flex justify-content-center" @click="active = !active">
                <i data-feather="menu" class="text-white align-self-center"></i>
            </div>
            <div class="main-nav__social-media-icon-wrapper d-flex h-50 pb-3">
                <a href="#" class="align-self-end mx-auto text-orange-primary"><i data-feather="home" class=""></i></a>
            </div>
            <div class="main-nav__social-media-icon-wrapper d-flex h-50 pb-3">
                <a href="#" class="align-self-end mx-auto mb-5 text-orange-primary"><i data-feather="instagram"
                                                                                       class=""></i></a>
            </div>
        </nav>

        <div v-bind:class="{nav__overlay, active}">
            <div class="nav__overlay__button d-flex justify-content-center" @click="active = !active">
                <i data-feather="x" class="text-white align-self-center"></i>
            </div>
            <div class="d-flex flex-column h-100 nav__overlay__items">
                <div class="d-flex flex-column justify-content-center h-100">
                    <ul class="">
                        <li><a href="/" class="active">Home</a></li>
                        <li><a href="/#exhibition" @click="active = !active">Exhibition</a></li>
                        <li><a href="/#talkshow" @click="active = !active">Talkshow</a></li>
                        <li><a href="/#workshop" @click="active = !active">Workshop</a></li>
                        <li><a href="/#contest" @click="active = !active">Contest</a></li>
                        <li>
                            <div class="nav__overlay__items__divider"></div>
                        </li>
                        <li><a href="/#timeline" @click="active = !active">Timeline</a></li>
                        <li><a href="#" @click="active = !active">Registration</a></li>
                    </ul>
                </div>
                <div class="d-flex h-25 pb-5">
                    <ul class="list-inline align-self-end nav__overlay__items__end">
                        <li class="list-inline-item"><a href=""><i data-feather="instagram"></i></a></li>
                        <li class="list-inline-item"><a href=""><i data-feather="facebook"></i></a></li>
                        <li class="list-inline-item"><a href="" class="mt-3">Contacts</a></li>
                        <li class="list-inline-item"><a href="" class="mt-3">Sponsor</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                nav__overlay: true,
                active: false
            }
        }
    }
</script>
