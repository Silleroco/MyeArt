<template>
    <div>
        <Header title="Resumen de la Compra" />
        <section class="dashboard-area p-top-100 p-bottom-70">
            <div class="d-flex justify-content-center">
                <div class="col-8">
                    <div class="dashboard_contents">
                        <div class="information_module order_summary">
                            <div class="toggle_title">
                                <h4>Resumen de la orden</h4>
                            </div>
                            <ul>
                                <li class="item">
                                    <div class="d-flex justify-content-between">
                                        <div class="col-10">
                                            <div class="row">
                                                <div class="col-8">
                                                    <a>{{ artwork.name }}</a>
                                                </div>
                                                <div class="col-12">
                                                    <img
                                                        :src="artwork.artwork_images[0].location"
                                                        alt=""
                                                        style="width: 100%;"
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <p>Precio: </p>
                                    <span class="font-weight-bold"> {{ artwork.price }}€ </span>
                                    <div v-if="artwork.offer">
                                        <p>Oferta: </p>
                                        <span class="font-weight-bold"> {{ artwork.offer }}€ </span>
                                    </div>
                                </li>

                                <li>
                                    <p>Tasas e impuestos estimados:</p>
                                    <span class="font-weight-bold"> {{ discount_rate }} €</span>
                                </li>
                                <li class="total_ammount">
                                    <p class="font-weight-bolder">Total:</p>
                                    <span>  {{ ' ' + total_amount }} €</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div>
                            <inertia-link
                                :href="route('my-account.shopping')"
                                class="btn btn-primary"
                            >
                                Mis Compras
                            </inertia-link>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import Layout from "@/Layouts/Default/LayoutDefault"
import Header from "@/Layouts/Header"

export default ({
    props: ['artwork', 'buy', 'discount_rate', 'total_amount'],
    layout: Layout,
    components: {
        Header
    },
    created(){
        console.log('artwork', this.artwork)
        console.log('buy', this.buy)
    },
    data() {
        return {

        }
    },
})
</script>
