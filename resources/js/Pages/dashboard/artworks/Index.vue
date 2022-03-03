<template>
    <div>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><inertia-link :href="route('dashboard')">Home</inertia-link></li>
                <li class="breadcrumb-item active" aria-current="page">Obras</li>
            </ol>
        </nav>
        <h1>Listado de obras</h1>

        <div class="card">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Vendedor</th>
                        <th scope="col">Status</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in items" :key="item.key">
                        <th scope="row">{{item.id}}</th>
                        <td>{{item.name}}</td>
                        <td>
                            <inertia-link :href="route('users.show', item.seller.user.id)">
                                {{item.seller.user.name}}
                            </inertia-link>
                        </td>
                        <td>
                            <p v-if="item.buy">Vendida</p>
                            <p v-else>Disponible</p>
                        </td>
                        <td>
                            <inertia-link class="btn btn-primary btn-sm" :href="route('artworks.show', item.id)" role="button">ver</inertia-link>
                            <inertia-link class="btn btn-primary btn-sm" :href="route('dashboard.artworks.edit', item.id)" role="button">editar</inertia-link>
                            <button class="btn btn-primary btn-sm text-white" @click="destroy(item.id, index)" role="button">eliminar</button>
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
    name: "panel-arworks",
    props:['artworks'],
    // Using a render function
    layout: (h, page) => h(Layout, [page]),
    metaInfo() {
        return {
            title: `Panel - Obras`
        }
    },
    data() {
        return {
            items: this.artworks
        }
    },
    methods: {
        destroy(id, index) {
            this.items.splice(index, 1);
            this.$inertia.delete(route('dashboard.artworks.destroy', id))
        }
    },
}

</script>
