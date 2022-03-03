<template>
    <div>
        <HeaderAccount />
        <div class="dashboard_contents mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="filter-bar clearfix filter-bar2 ">
                            <div class="dashboard__title d-flex align-items-center">
                                <span class="title">Historial de ventas</span>
                            </div>
                            <div class="filter__items m-4 col-6">
                                <div class="filter__option filter--search w-100">
                                    <div>
                                        <input type="text" placeholder="Buscar Productos" v-model="search">
                                        <!-- <button type="submit"><span class="icon-magnifier"></span></button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div v-if="sales.length">
                    <div
                        class="product_archive table-responsive table-custom"
                        >
                        <table class="table">
                            <thead>
                                <th class="text-muted">Producto</th>
                                <th class="text-muted">Info</th>
                                <th class="text-muted">Precio</th>
                                <th class="text-primary">Certificado</th>
                                <th class="text-primary text-center">Estado</th>
                            </thead>
                            <tbody>
                                <tr v-for="item in itemsDisplay" :key="item.key">
                                    <td>
                                        <div class="d-flex">
                                            <img
                                                :src="item.artwork.artwork_images[0].location"
                                                alt="Purchase image"
                                                style="width: 100px; height: 80px;"
                                            >
                                            <div class="ml-3">
                                                <span>
                                                    {{ item.artwork.name }}
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div>{{ moment(item.created_at).format('DD/MM/YYYY') }}</div>
                                        <!-- <div>Daniel Lewis</div> -->
                                    </td>
                                    <td>
                                        <div class="">
                                            <span>{{ item.total }}€</span>
                                        </div>
                                    </td>
                                    <td>
                                        <img
                                            src="/imagenes/icons/fl_downloader.png"
                                            alt=""
                                            style="width: 30px; height: 30px; cursor:pointer;"
                                            @click="downloader(item.id)"
                                        >
                                    </td>
                                    <td class="text-primary">
                                        <div>
                                            {{ item.finished ? 'En Progreso' : 'Finalizado'}}
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="product_archive">
                        <div class="row">
                            <div class="col-12">
                                <Pagination
                                    :size="itemsDisplay.length"
                                    :porPage="porPage"
                                    v-bind:page="currentPage"
                                    v-on:update="currentPage = $event"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <div v-else class="product_archive py-4 mb-3">
                    <div class="text-muted text-center">
                        <h4>Sin Ventas</h4>
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

export default {
    props: ['sales'],
    layout,
    components: {
        HeaderAccount,
        Pagination
    },
    data(){
        return {
            search: '',
            currentPage: 1,
            porPage: 5,
        }
    },
    created(){
        console.log('sales', this.sales)
    },
    computed: {
        itemsDisplay(){
            return !this.search.length ?
                this.sales ?? []
                :
                this.sales.filter(b => b.artwork.name
                    .toLowerCase()
                    .includes(this.search.toLowerCase()));
        },
        displayDocsByPage(){
            let chunk = window._.chunk(this.itemsDisplay, this.porPage);
            return chunk[this.currentPage -1];
        }
    },
    methods: {
        downloader(buyId){
            this.$inertia.get(`/cuenta/compra/certificado/${buyId}`);
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

</style>
