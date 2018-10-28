<template>
    <div class="card aspectRatioSizer">
        <svg viewBox="0 0 5 8"></svg>
        <div class="bg-orange-gradient">
            <div class="card__image" style="background: url('/images/four.jpg')">

            </div>
            <div class="card__info">
                <div class="row">
                    <div class="col-md-9">
                        <h1 class="text-white">lorem ipsum dolor sit amet</h1>
                        <p class="text-white">by Speaker Name</p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-white pl-2">21 Des &mdash;<br>10.00</p>
                    </div>
                </div>
                <a href="#" class="text-white">Details</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'card'
    }
</script>
