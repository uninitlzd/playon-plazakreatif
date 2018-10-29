<template>
    <div class="timeline-homepage" data-section-name="timeline">
        <div class="row h-100">
            <div class="col-md-6 h-100 d-flex flex-column">
                <div class="tentang__content">
                    <h1 class="tentang__content__title shadowed-text" name="Timeline">Timeline</h1>
                    <ul class="list-inline mt-5 ml-1">
                        <li class="list-inline-item">21 DES</li>
                        <li class="list-inline-item">23 DES</li>
                        <li class="list-inline-item">24 DES</li>
                    </ul>
                    <div class="row">
                        <div class="col-md-12">
                            <timeline :data="timelineData">

                            </timeline>
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
                timelineData: [
                    ['21 Des', 'Opening', '1789-04-29', '1797-03-03'],
                    ['21 Des', 'Talkshow', '1797-03-03', '1801-03-03']
                ]
            }
        }
    }
</script>
