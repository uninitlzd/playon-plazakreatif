<template>
    <div class="card-slider">
        <div class="d-flex w-100 flex-column align-self-center">
            <vue-glide>
                <vue-glide-slide v-for="i in 10" :key="i">
                    <card @click.native="focusTo(i - 1)">

                    </card>
                </vue-glide-slide>
            </vue-glide>

            <div class="card-slider__button-group">
                <a @click="previous">Prev</a>
                <a @click="next">Next</a>
            </div>
        </div>
    </div>
</template>

<script>
    const feather = require('feather-icons');
    feather.replace();

    export default {
        data() {
            return {
                slide: {}
            }
        },
        mounted() {
            this.slide = this.$children[0];

            $()
        },
        methods: {
            focusTo: function (i) {
                this.slide.go('='+i)
            },
            next: function () {
                this.slide.go('>')
            },
            previous: function () {
                this.slide.go('<')
            }
        }
    }
</script>
