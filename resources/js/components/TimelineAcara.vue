<template>
    <div class="timeline-homepage" data-section-name="timeline">
        <div class="row h-100">
            <div class="col-md-6 h-100 d-flex flex-column">
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
                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--red"></div>
                                        </div>
                                        <div class="timeline__time">
                                            10.00
                                        </div>
                                        <div class="timeline__content">
                                            <div class="timeline__title">
                                                Opening
                                            </div>
                                            <ul class="timeline__points">
                                                <li>Mr. Alan Bach</li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--blue"></div>
                                        </div>
                                        <div class="timeline__time">
                                            11.00
                                        </div>
                                        <div class="timeline__content">
                                            <div class="timeline__title">
                                                Design Stand Up
                                            </div>
                                            <ul class="timeline__points">
                                                <li>Hangouts</li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--salmon"></div>
                                        </div>
                                        <div class="timeline__time">
                                            12.00
                                        </div>
                                        <div class="timeline__content">
                                            <div class="timeline__title-break">
                                                Break
                                            </div>
                                        </div>
                                    </li>

                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--blue"></div>
                                        </div>
                                        <div class="timeline__time">
                                            13.00
                                        </div>
                                        <div class="timeline__content">
                                            <div class="timeline__title">
                                                Talkshow
                                            </div>
                                            <ul class="timeline__points">
                                                <li>How to train your dragon</li>
                                            </ul>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <div v-if="timelineOrder == 2">
                                <ul class="timeline">
                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--red"></div>
                                        </div>
                                        <div class="timeline__time">
                                            10.00
                                        </div>
                                        <div class="timeline__content">
                                            <div class="timeline__title">
                                                Opening
                                            </div>
                                            <ul class="timeline__points">
                                                <li>Mr. Alan Poe</li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--blue"></div>
                                        </div>
                                        <div class="timeline__time">
                                            11.00
                                        </div>
                                        <div class="timeline__content">
                                            <div class="timeline__title">
                                                Design Stand Up
                                            </div>
                                            <ul class="timeline__points">
                                                <li>Hangouts</li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--salmon"></div>
                                        </div>
                                        <div class="timeline__time">
                                            12.00
                                        </div>
                                        <div class="timeline__content">
                                            <div class="timeline__title-break">
                                                Break
                                            </div>
                                        </div>
                                    </li>

                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--blue"></div>
                                        </div>
                                        <div class="timeline__time">
                                            13.00
                                        </div>
                                        <div class="timeline__content">
                                            <div class="timeline__title">
                                                Talkshow
                                            </div>
                                            <ul class="timeline__points">
                                                <li>How to train your dragon</li>
                                            </ul>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <div v-if="timelineOrder == 3">
                                <ul class="timeline">
                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--red"></div>
                                        </div>
                                        <div class="timeline__time">
                                            10.00
                                        </div>
                                        <div class="timeline__content">
                                            <div class="timeline__title">
                                                Opening
                                            </div>
                                            <ul class="timeline__points">
                                                <li>Mr. Alan Bach</li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--blue"></div>
                                        </div>
                                        <div class="timeline__time">
                                            11.00
                                        </div>
                                        <div class="timeline__content">
                                            <div class="timeline__title">
                                                Design Stand Up
                                            </div>
                                            <ul class="timeline__points">
                                                <li>Hangouts</li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--salmon"></div>
                                        </div>
                                        <div class="timeline__time">
                                            12.00
                                        </div>
                                        <div class="timeline__content">
                                            <div class="timeline__title-break">
                                                Break
                                            </div>
                                        </div>
                                    </li>

                                    <li class="timeline__item">
                                        <div class="timeline__step">
                                            <div class="timeline__step__marker timeline__step__marker--blue"></div>
                                        </div>
                                        <div class="timeline__time">
                                            13.00
                                        </div>
                                        <div class="timeline__content">
                                            <div class="timeline__title">
                                                Talkshow
                                            </div>
                                            <ul class="timeline__points">
                                                <li>How to train your dragon</li>
                                            </ul>
                                        </div>
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
                timelineData: [
                    ['21 Des', 'Opening', '1789-04-29', '1797-03-03'],
                    ['21 Des', 'Talkshow', '1797-03-03', '1801-03-03']
                ]
            }
        }
    }
</script>

<style>

</style>
