<template>
    <div class="card my-4 shadow-sm">
        <div class="card-body">
            <ul>
                <li>
                    <inertia-link :href="route('users.index')">Usuarios</inertia-link>
                </li>
                <li>
                    <inertia-link :href="route('artworks.index')">Obras</inertia-link>
                </li>
                <li>
                    <inertia-link :href="route('transactions.index')">Transacciones</inertia-link>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
import Layout from '@/Layouts/Authenticated'

export default{
    name: "Home",
    // Using a render function
    layout: (h, page) => h(Layout, [page]),
    metaInfo() {
      return {
        title: `Panel - Inicio`
      }
    },
}

</script>
