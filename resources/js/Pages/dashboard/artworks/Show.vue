<template id="">
    <div class="">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><inertia-link :href="route('dashboard')">Home</inertia-link></li>
            <li class="breadcrumb-item"><inertia-link :href="route('artworks.index')">Obras</inertia-link></li>
            <li class="breadcrumb-item active" aria-current="page">Ver</li>
          </ol>
        </nav>
        <h1>Detalles de Obra</h1>
        <div class="card">
            <div class="row">
                <div class="col-sm-9"></div>
                <div class="col-sm-3 align-items-end">
                    <inertia-link class="btn btn-primary btn-sm" :href="route('dashboard.artworks.edit', artwork.id)" role="button">editar</inertia-link>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <h5>Datos de Obra</h5>
                    <p>Nombre: {{artwork.name}}</p>
                    <p>Descripción: {{artwork.description}}</p>
                    <p>Precio: {{artwork.price}}</p>
                    <p>Oferta: {{artwork.offer}}</p>
                    <p>Alto: {{artwork.weight}}</p>
                    <p>Ancho: {{artwork.width}}</p>
                    <p>Peso: {{artwork.height}}</p>
                </div>
                <div class="col-sm">
                </div>
            </div>
            <h4>Imágenes</h4>
            <div class="row">
                <div class="col-sm" v-for="image in images" :key="image.key">
                    <img :src="image.location" alt="" style="max-width:200px">
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import Layout from '@/Layouts/Authenticated'

export default {
    props: ['artwork'],
    // Using a render function
    layout: (h, page) => h(Layout, [page]),
    metaInfo() {
        return {
            title: `Panel - Obra`
        }
    },
    data() {
        return {
            artwork: this.artwork,
            images: this.artwork.artwork_images
        };
    },
    created(){
        console.log(this.artwork.artwork_images)
    }
}
</script>
