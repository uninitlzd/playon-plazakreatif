<template>
    <div class="row">
        <div class="col-md-4 d-flex flex-column justify-content-center" style="height: 100vh">
            <div class="navigation_content__wrapper align-self-center w-100">
                <h1 class="w-100 heading-1 mb-4" name="Ragam Acara">Ragam Acara</h1>
                <h4><a href="#" class="navigation_content__items active">Exhibition</a></h4>
                <h4><a href="" class="navigation_content__items" @click="moveNext">Talkshow</a></h4>
                <h4><a href="#" class="navigation_content__items">Workshop</a></h4>
                <h4><a href="#" class="navigation_content__items">Lomba-lomba</a></h4>
            </div>
        </div>
        <fullpage-wrapper class="col-md-8" style="height: 100vh; overflow: hidden;">

        </fullpage-wrapper>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                windowHeight: window.innerHeight,
            }
        },

        mounted() {
            console.log('mounted');
            this.$nextTick(() => {
                window.addEventListener('resize', () => {
                    this.windowHeight = window.innerHeight
                });
            })

            console.log(this.$refs.fullPageWrapper)
        },

        methods : {
            moveNext: function () {
                alert('clicked')
            }
        }
    }
</script>
