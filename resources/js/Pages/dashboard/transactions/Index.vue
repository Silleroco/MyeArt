<template>
    <div>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><inertia-link :href="route('dashboard')">Home</inertia-link></li>
                <li class="breadcrumb-item active" aria-current="page">Transacciones</li>
            </ol>
        </nav>
        <h1>Listado de Transacciones</h1>

        <div class="card">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Comprador</th>
                        <th scope="col">Vendedor</th>
                        <th scope="col">Obra</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="item in items" :key="item.key">
                        <th scope="row">{{item.id}}</th>
                        <td>
                            <inertia-link :href="route('users.show', item.user.id)">
                                {{item.user.name}}
                            </inertia-link>
                        </td>
                        <td>
                            <inertia-link :href="route('users.show', item.artwork.seller.user.id)">
                                {{item.artwork.seller.user.name}}
                            </inertia-link>
                        </td>
                        <td>
                            <inertia-link :href="route('artworks.show', item.artwork.id)">
                                {{item.artwork.name}}
                            </inertia-link>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
import Layout from '@/Layouts/Authenticated'

export default{
    name: "panel-transactions",
    props:['buys'],
    data() {
        return {
            items: this.buys
        }
    },
    // Using a render function
    layout: (h, page) => h(Layout, [page]),
    metaInfo() {
        return {
            title: `Panel - Inicio`
        }
    },
}

</script>
