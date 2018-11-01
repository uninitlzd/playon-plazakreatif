<template>
    <div class="homepage-countdown">
        <img src="/images/playon-circle-bg.png" alt="" class="container-bg">

        <div class="d-flex w-100 flex-row align-self-center">
            <img src="/images/countdown-deco-2.png" class="homepage-countdown__deco align-self-start col-xs-0" alt="">
            <div class="d-flex flex-column justify-content-center text-center mx-auto">
                <countdown :time=time class="d-flex">
                    <template slot-scope="props">
                        <p class="homepage-countdown__time">{{ pad(props.days, 2) }} <span>H</span> {{ pad(props.hours, 2) }} <span>J</span> {{ pad(props.minutes, 2) }} <span>M</span> {{ pad(props.seconds, 2) }} <span>D</span></p>
                    </template>
                </countdown>
                <p>21&mdash;23 Desember 2018 <br> Ciputra Mall World</p>
            </div>
            <img src="/images/countdown-deco-1.png" class="homepage-countdown__deco align-self-start col-xs-0" alt="">
        </div>
    </div>
</template>

<script>
    export default  {
        mounted() {

        },
        data : () => {
          return {
              time: new Date(2018, 11, 21).getTime() - new Date().getTime()

          }
        },
        methods: {
            pad(num, size) {
                var s = num+"";
                while (s.length < size) s = "0" + s;
                return s;
            }
        },
    }
</script>

<style>
    .container-bg {
        right: -10em;
    }
</style>
