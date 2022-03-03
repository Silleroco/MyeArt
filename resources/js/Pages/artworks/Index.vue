<template>
    <div>
        <HeaderAccount />
        <div class="dashboard_contents mt-5 mb-5">
            <div class="container" style="background:white;">
                <div class="px-2 pt-3">
                    <div>
                        <h4 class="title">Obras</h4>
                    </div>
                </div>
                <div v-if="artworks.length">
                    <div class="product_archive table-responsive table-custom">
                        <table class="table">
                            <thead>
                                <th class="text-muted">Nombre</th>
                                <th class="text-muted">ID</th>
                                <th class="text-muted">Precio</th>
                                <th class="text-muted">Categoria</th>
                                <th class="text-muted">Fecha</th>
                                <th class="text-muted border-none"></th>
                            </thead>
                            <tbody>
                                <tr v-for="(item, i) in displayDocsByPage" :key="i">
                                    <td>
                                        <inertia-link
                                            :href="`/obras/${item.id}`"
                                        >
                                            <div class="d-flex justify-content-center">
                                                <img 
                                                    :src="`${item?.artwork_images[0]?.location}`"
                                                    alt="Purchase image"
                                                    style="width: 60px; height: 60px; border-radius: 50%;"
                                                >
                                                <div class="ml-2 d-flex align-items-center">
                                                    <span class="text-primary">
                                                        {{ item.name }}
                                                    </span>
                                                </div>
                                            </div>
                                        </inertia-link>
                                    </td>
                                    <td class="text-muted">
                                        {{ item.id }}
                                    </td>
                                    <td class="text-muted">
                                        <div class="">
                                            <span>{{ item.price }} $</span>
                                        </div>
                                    </td>
                                    <td class="text-muted">
                                        {{ item.category.name }}
                                    </td>
                                    <td class="text-muted">
                                        <div>
                                            {{ new Date(item.created_at).getDate() }}/
                                            {{ new Date(item.created_at).getMonth() + 1}}/
                                            {{ new Date(item.created_at).getFullYear() }}
                                        </div>
                                    </td>
                                    <td class="border-none" style="width: 90px;">
                                        <div class="icons">
                                                <!-- method="delete" -->
                                            <inertia-link
                                                class="routerLink"
                                                :href="
                                                    route('my-artworks.edit', {id: item.id})
                                                "
                                            >
                                                <span class="material-icons">
                                                    edit
                                                </span>
                                            </inertia-link>  

                                            <inertia-link
                                                class="routerLink"
                                                method="delete"
                                                :href="
                                                    route('my-artworks.destroy', {id: item.id})
                                                "
                                            >
                                                <span class="material-icons">
                                                    delete
                                                </span>
                                            </inertia-link>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="product_archive">
                        <div class="row">
                            
                            <div class="col-md-12">                             
                                <Pagination 
                                    :size="artworks.length"
                                    :porPage="porPage"
                                    v-bind:page="currentPage"
                                    v-on:update="currentPage = $event"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <div v-else class="text-center border-top">
                    <div class="my-5">
                        <div class="text-muted mt-2">
                            <h3>Sin Obras</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import layout from "@/Layouts/Default/LayoutDefault.vue"
import HeaderAccount from '@/Layouts/HeaderMenu.vue'
import Pagination from '@/Components/Pagination'
import { Link } from '@inertiajs/inertia-vue3'

export default {
    props: ['artworks'],
    layout,
    created(){
        console.log('artworks', this.artworks)
    },
    components: {
        HeaderAccount,
        Pagination,
        Link
    },
    data(){
        return {
            currentPage: 1,
            porPage: 5
        }
    },
    computed: {
        displayDocsByPage(){
            let chunk = window._.chunk(this.artworks, this.porPage);
            console.log('chunk', chunk)
            return chunk[this.currentPage -1];
        }
    }
}

</script>

<style scoped>

    .table-custom th{
        font-size: 1.2rem;
        font-family: "GalanoGrotesqueAltSemiBold";
        text-align: center;
    }

    .table-custom td{
        font-weight: bolder;
        font-size: 1.2rem;
        text-align: center;
    }

    .icons span {
        margin: 2px;
        cursor: pointer;
    }
</style>