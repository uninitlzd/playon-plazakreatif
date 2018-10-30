<template>
    <div class="card aspectRatioSizer">
        <svg viewBox="0 0 5 8"></svg>
        <div class="bg-orange-gradient">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'card'
    }
</script>
