<template>
    <div>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><inertia-link :href="route('dashboard')">Home</inertia-link></li>
                <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
            </ol>
        </nav>
        <h1>Listado de usuarios</h1>

        <div class="card">

            <table class="product_archive table table-striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <tr v-for="item in items" :key="item.key"> -->
                    <tr v-for="(item, index) in items" :key="item.key">
                        <th scope="row">{{item.id}}</th>
                        <td>{{item.name}}</td>
                        <td>{{item.email}}</td>
                        <td>
                            <inertia-link class="btn btn-primary btn-sm" :href="route('users.show', item.id)" role="button">ver</inertia-link>
                            <inertia-link class="btn btn-primary btn-sm" :href="route('users.edit', item.id)" role="button">editar</inertia-link>
                            <button class="btn btn-primary btn-sm" @click="deleteUser(item.id, index)" role="button">eliminar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- <div class="product_archive">
                <div class="row">

                    <div class="col-md-12">
                        <Pagination
                        :size="items.length"
                        :porPage="porPage"
                        v-bind:page="currentPage"
                        v-on:update="currentPage = $event"
                        />
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</template>

<script>
import Layout from '@/Layouts/Authenticated'
import Pagination from '@/Components/Pagination'

export default{
    name: "Home",
    components: {
        Pagination,
    },
    props:['users'],
    data() {
        return {
            items: this.users,
            currentPage: 1,
            porPage: 5
        }
    },
    // Using a render function
    layout: (h, page) => h(Layout, [page]),
    metaInfo() {
        return {
            title: `Panel - Inicio`
        }
    },
    methods: {
        deleteUser(id, index){
            this.items.splice(index, 1);
            this.$inertia.delete(route('users.destroy', id))
        }
    },
    // computed: {
    //     displayDocsByPage(){
    //         let chunk = window._.chunk(this.items, this.porPage);
    //         console.log('chunk', chunk)
    //         return chunk[this.currentPage -1];
    //     }
    // }
}

</script>
