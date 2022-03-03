<template>
    <div class="header-bg">
        <div class="header-title d-flex justify-content-center align-items-end">
            <div class="">
                <h2 class="header-text text-white font-weight-bolder">
                    Hola {{ user.name }}
                </h2>
            </div>
        </div>
        <div class="header-content d-flex align-items-center">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center py-1">
                    <div 
                        class="p-2"
                        v-for="item in itemsMenu" :key="item.title"
                    >
                        <inertia-link
                            :href="
                                route(item.path)
                            "
                        >
                            <div class="item-menu">
                                <span class="mr-1">
                                    <img 
                                        :src="item.icon" 
                                        alt=""
                                        class=""
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
        userType: ["buyer"]
    },
    {
        title: "Historial de ventas",
        icon: "/imagenes/icons/AccountMenu/Setting.png",
        path: "my-account.sales",
        userType: ["seller"]
    },
    {
        title: "Informacion de la cuenta",
        icon: "/imagenes/icons/AccountMenu/Setting.png",
        path: "account-profile",
        userType: ["buyer","seller"]
    },
    // {
    //     title: "Obras",
    //     icon: "/imagenes/icons/AccountMenu/Obras.png",
    //     path: "account-worksArtist"
    // }
];
export default {
    data(){
        return {
            itemsMenu: []
        }
    },
    created(){
        this.itemsMenu = itemsMenu;
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
        height: 10vh;
    }

    .header-content{
        min-height: 8vh;
        height: auto;
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

</style>