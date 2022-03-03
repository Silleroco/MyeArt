<template id="">
    <div class="">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><inertia-link :href="route('dashboard')">Home</inertia-link></li>
            <li class="breadcrumb-item"><inertia-link :href="route('users.index')">Usuarios</inertia-link></li>
            <li class="breadcrumb-item active" aria-current="page">Ver</li>
          </ol>
        </nav>
        <h1>Detalles de Usuario</h1>
        <div class="card">
            <div class="row">
                <div class="col-sm-9"></div>
                <div class="col-sm-3 align-items-end">
                    <inertia-link class="btn btn-primary btn-sm" :href="route('users.edit', user.id)" role="button">editar</inertia-link>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8"><h4>Datos del usuario {{user.name}} {{user.surname}}</h4></div>
                <div class="col-sm-4"><img :src="profile.avatar" alt="..." class="rounded" style="max-width:80px"></div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <h5>Datos de Usuario</h5>
                    <p>Nombre: {{user.name}}</p>
                    <p>Email: {{user.email}}</p>
                    <p>Roles:</p>
                    <span v-for="role in user.roles" :key="role.key">{{role.name}} - </span>
                </div>
                <div class="col-sm">
                    <h5>Datos de perfil</h5>
                    <p>Nombre completo: {{profile.firstName}} {{profile.lastName}}</p>
                    <p>Biografía: {{profile.biography}}</p>
                    <p>Dirección: {{profile.address}}</p>
                    <p>País: {{profile.country}}</p>
                    <p>Ciudad: {{profile.city}}</p>
                    <p>Región: {{profile.region}}</p>
                    <p>Código postal: {{profile.zip_code}}</p>
                    <p>Facebook: {{profile.facebook}}</p>
                    <p>Twitter: {{profile.twitter}}</p>
                    <p>Google: {{profile.google}}</p>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import Layout from '@/Layouts/Authenticated'

export default {
    props: ['user'],
    // Using a render function
    layout: (h, page) => h(Layout, [page]),
    metaInfo() {
        return {
            title: `Panel - Inicio`
        }
    },
    data() {
        return {
            user: this.user,
            profile: this.user.profile,
        };
    }
}
</script>
