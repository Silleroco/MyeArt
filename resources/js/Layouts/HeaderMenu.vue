<template>
    <div class="header-bg">
        <div class="header-title container d-flex flex-column justify-content-end">
            <div class="row">
                <div class="col-12 position-relative btn-warning">
                    <div class="container col-12 position-absolute d-flex justify-content-end">
                        <inertia-link
                            v-if="!user.roles.find(r => r.name === 'seller')"
                            class="btn btn--xs btn-toArtist"
                            :href="route('artist-or-gallery')"
                        >
                            Quiero ser Artista
                        </inertia-link>
                    </div>
                </div>
                <div class="col-12 text-center pt-4 pb-3">
                    <h2 class="header-text text-white">
                        ¡Hola {{ user.name }}!
                    </h2>
                </div>
            </div>
        </div>
        <div class="header-content">
            <div class="container">
                <div class="d-flex align-items-baseline flex-column align-items-lg-center flex-lg-row justify-content-center py-1">
                    <div 
                        class="p-2 w-100 w-lg-auto"
                        v-for="item in itemsMenu" :key="item.title"
                    >
                        <inertia-link
                            :href="
                                route(item.path)
                            "
                            class="text-decoration-none"
                        >
                            <div class="item-menu">
                                <span class="mr-1">
                                    <img 
                                        :src="item.icon" 
                                        alt=""
                                        class="w-25-px"
                                    >
                                </span>
                                <span>
                                    {{ item.title }}
                                </span>
                            </div>
                        </inertia-link>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
const itemsMenu = [
    {
        title: "Historial de compras",
        icon: "/imagenes/icons/AccountMenu/Shopping.png",
        path: "my-account.shopping",
        roles: ["buyer","seller"]
    },
    {
        title: "Historial de ventas",
        icon: "/imagenes/icons/AccountMenu/Setting.png",
        path: "my-account.sales",
        roles: ["seller"]
    },
    {
        title: "Informacion de la cuenta",
        icon: "/imagenes/icons/AccountMenu/Setting.png",
        path: "account-profile",
        roles: ["buyer"]
    },
    {
        title: "Obras",
        icon: "/imagenes/icons/AccountMenu/Obras.png",
        path: "my-artworks.index",
        roles: ["seller"]
    },
    {
        title: "Subir Obras",
        icon: "/imagenes/icons/AccountMenu/Obras.png",
        path: "my-artworks.create",
        roles: ["seller"]
    }
];
export default {
    data(){
        return {
            itemsMenu: []
        }
    },
    created(){
        this.itemsMenu = itemsMenu.filter(item => {
            let rolesUser = this.user.roles.map(r => r.name);
            let isRoles = rolesUser.filter(r => item.roles.includes(r))

            // console.log('isRoles',isRoles)
            return !isRoles.length ? false : true;
        });
    },
    computed: {
        user() {
            return this.$page.props.auth.user
        }
    }
    
}
</script>

<style scoped>
    .header-bg {
        background-color: #2566AE;
    }

    .header-title {
        height: 12vh;
    }

    .header-content{
        /* height: auto; */
        background-color: #125CA0;
    }

    .header-text {
        font-size: 2.5rem;
    }

    .item-menu {
        color: white;
        cursor: pointer;
    }

    .item-menu:hover {
        opacity: .8;
    }


    .btn-toArtist {
        background: white; 
        color: #F4B731;
        z-index: 1;
    }
</style>