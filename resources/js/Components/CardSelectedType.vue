<template>
    <div class="card-selected-type px-2 py-3">
        <div class="row text-center">
            <div class="col-12 d-flex justify-content-center">
                <div style="width: 70%;">
                    <h3 class="title">{{ title }}</h3>
                    <p>{{ desc }}</p>
                </div>
            </div>

            <div class="col-12">
                <img
                    :src="`/imagenes/icons/auth/${icon}.png`"
                    alt=""
                    class="img-fluid"
                >
            </div>

            <div class="col-12 my-3">
                <Link :href="route('artists.create')" :data="{type}"
                    class="mr-4 btn  btn--lg btn-primary"
                >
                    Regístrate
                </Link>
            </div>
        </div>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'

export default {
    props: ['type','title', 'desc', 'icon'],
    components: {
        Link
    }
}
</script>

<style scoped>
    .card-selected-type {
        background: white;
    }

    .card-selected-type h3 {
        font-weight: bold;
    }

    .card-selected-type img{
        height: 35vh;
    }

    .card-selected-type p {
        font-size: 1.2rem;
        line-height: 1;
        font-weight: lighter;
    }
</style>
