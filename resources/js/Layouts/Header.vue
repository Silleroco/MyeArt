<template>
    <div class="header-bg">
        <div class="header-title d-flex justify-content-center align-items-end">
            <div class="">
                <h2 class="header-text text-white font-weight-bolder">
                    {{ title }}
                </h2>
            </div>
        </div>
        <div class="header-content">
        </div>
    </div>
</template>

<script>
export default {
    props: ['title']
}
</script>

<style scoped>
    .header-bg {
        background-color: #2566AE;
    }

    .header-title {
        height: 10vh;
    }

    .header-content{
        height: 5vh;
        background-color: #125CA0;
    }

    .header-text {
        font-size: 2.5rem;
    }

</style>