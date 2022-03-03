<template>
    <div>
        <HeaderAccount />
        <div class="dashboard_contents mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="filter-bar clearfix filter-bar2 ">
                            <div class="dashboard__title d-flex align-items-center">
                                <span class="title">Historial de compras</span>
                            </div>
                            <div class="filter__items m-4 col-6">
                                <div class="filter__option filter--search w-100">
                                    <div>
                                        <input type="text" placeholder="Buscar Productos" v-model="search">
                                        <!-- <button ><span class="icon-magnifier"></span></button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div v-if="buys.length">
                    <div class="product_archive table-responsive table-custom">
                        <table class="table mx-3">
                            <thead>
                                <th class="text-muted">Producto</th>
                                <th class="text-muted">Info</th>
                                <th class="text-muted">Precio</th>
                                <th class="text-primary">Certificado</th>
                                <th class="text-primary text-center">Estado</th>
                            </thead>
                            <tbody>
                                <tr v-for="item in displayDocsByPage" :key="item.id">
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
                                        <a :href="route('buys.certificate', item.id)">
                                            <img
                                                src="/imagenes/icons/fl_downloader.png"
                                                alt=""
                                                style="width: 30px; height: 30px; cursor:pointer;"
                                            >
                                        </a>

                                    </td>
                                    <td class="text-primary p-3 text-center">
                                        <div v-if="!item.finished">
                                            <div>
                                                En Progreso
                                            </div>
                                            <div  @click="finalizeBuy(item)" class="btn-end">
                                                Finalizar
                                            </div>
                                        </div>
                                        <div v-else>
                                            Finalizado
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
                        <h4>Sin Compras</h4>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="height: 20px;">
                        <div class="d-flex justify-content-between">
                            <h5 class="modal-title" id="exampleModalLabel">Valoracion</h5>
                            <div type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <h5 class="modal-title pb-0">Deja un comentario</h5>
                        <div>
                            <Qualify
                                v-bind:currentStar="currentStar"
                                v-on:update:currentStar="currentStar = $event"
                            />
                        </div>
                        <div class="">
                            <div class="form-group">
                                <textarea
                                    name="reply-comment"
                                    placeholder="Escribe tu comentario..."
                                    v-model="textComment"
                                    class="form-control"
                                />
                            </div>
                            <div class="mt-2">
                                <button
                                    class="btn btn--sm btn-primary"
                                    @click="sendComment"
                                    >
                                    Enviar
                                </button>
                            </div>
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
import Qualify from '@/Components/Qualify'

import Pagination from '@/Components/Pagination'

export default {
    props: ['buys'],
    layout,
    components: {
        HeaderAccount,
        Qualify,
        Pagination
    },
    created(){
        console.log('myshopping', this.buys)
    },
    data(){
        return {
            currentPage: 1,
            porPage: 5,

            search: "",
            currentBuy: null,
            textComment: "",
            currentStar: 0
        }
    },
    computed: {
        itemsDisplay(){
            return !this.search.length ?
                this.buys ?? []
                :
                this.buys.filter(b => b.artwork.name
                    .toLowerCase()
                    .includes(this.search.toLowerCase()));
        },
        displayDocsByPage(){
            let chunk = window._.chunk(this.itemsDisplay, this.porPage);
            return chunk[this.currentPage -1];
        }
    },
    methods: {
        finalizeBuy(item){
            this.currentBuy = item;
            this.currentStar = 0;
            this.textComment = "";

            window.$('#exampleModal').modal('toggle')

        },
        sendComment(){
            console.log('send', {
                textComment: this.textComment,
                currentStar: this.currentStar
            })

            this.$inertia.put(
                route('buys.update', [this.currentBuy.id]),
                {
                    rating: this.currentStar,
                    comment: this.textComment
                },
                {
                    preserveScroll: true,
                    onSuccess: (res) => {
                        this.currentBuy = null;
                        this.currentStar = 0;
                        this.textComment = "";

                        window.$('#exampleModal').modal('toggle')
                    }
                },
            );

        },
        downloader(buyId){
            console.log(buyId);
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

    .btn-end {
        color: white;
        background: #F8CF58;
        border-radius: 10px;
        text-align: center;
        cursor:pointer;
    }

    .btn-end:hover {
        opacity: .8;
    }

    textarea {
        min-height: 50px !important;
        resize: vertical !important;
    }
</style>
