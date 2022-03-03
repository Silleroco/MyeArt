<template>

    <div class="menu-area position-sticky" style="top:0; z-index:5;">
        <div class="top-menu-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-fullwidth">
                            <div class="logo-wrapper">
                                <div class="logo logo-top">
                                    <a href="/"
                                        ><img
                                            src="/imagenes/Logo.png"
                                            alt="logo image"
                                            class="img-fluid"
                                    /></a>
                                </div>
                            </div>
                            <div class="menu-container">
                                <div class="d_menu">
                                    <nav
                                        class="navbar navbar-expand-lg mainmenu__menu"
                                    >
                                        <button
                                            class="navbar-toggler"
                                            type="button"
                                            data-toggle="collapse"
                                            data-target="#bs-example-navbar-collapse-1"
                                            aria-controls="bs-example-navbar-collapse-1"
                                            aria-expanded="false"
                                            aria-label="Toggle navigation"
                                        >
                                            <span
                                                class="navbar-toggler-icon icon-menu"
                                            ></span>
                                        </button>

                                        <div
                                            class="collapse navbar-collapse"
                                            id="bs-example-navbar-collapse-1"
                                        >
                                            <ul class="navbar-nav">
                                                <li>
                                                    <inertia-link
                                                        :href="
                                                            route('search')
                                                        "
                                                    >
                                                        Obras
                                                    </inertia-link>
                                                </li>
                                                <li>

                                                    <inertia-link
                                                        :href="
                                                            route('artists.list')
                                                        "
                                                    >
                                                        Artistas
                                                    </inertia-link>
                                                </li>
                                                <!-- <li>

                                                    <inertia-link
                                                        :href="
                                                            route('dashboard')
                                                        "
                                                    >
                                                        Panel
                                                    </inertia-link>
                                                </li> -->


                                            </ul>
                                        </div>

                                    </nav>
                                </div>
                            </div>
                            <div class="author-menu">
                                <div class="d-flex align-items-center d-lg-none">
                                    <div class="author__notification_area p-0">
                                        <ul class="align-items-center">
                                            <li class="has_dropdown p-0">
                                                <Notifications />
                                            </li>
                                            <inertia-link
                                            :href="route('login')"
                                            v-if="!user">
                                                Ingresa
                                            </inertia-link>
                                        </ul>
                                    </div>
                                    <div
                                        class="author-author__info has_dropdown ml-3 p-0"
                                        v-if="user"
                                    >
                                        <div class="author__avatar online">
                                            <div style="width: 30px;">
                                                <Avatar
                                                    :path="user.profile.avatar"
                                                />
                                            </div>
                                        </div>
                                        <div class="dropdown dropdown--author">
                                            <ul>
                                                <li>
                                                    <inertia-link
                                                        :href="
                                                            route('account-profile')
                                                        "
                                                    >
                                                        <span
                                                            class="icon-user"
                                                        ></span
                                                        >Perfil
                                                    </inertia-link>

                                                </li>
                                                <li>
                                                    <inertia-link :href="route('logout')">
                                                        <span
                                                            class="icon-logout"
                                                        ></span
                                                        >Salir
                                                    </inertia-link>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="author-area">
                                    <div class="author__notification_area">
                                        <ul>
                                            <li class="has_dropdown">
                                                <Notifications />
                                            </li>
                                            <!-- <li class="has_dropdown">
                                                <CardCart />
                                            </li> -->
                                        </ul>
                                    </div>

                                    <div
                                        class="author-author__info has_dropdown"
                                        v-if="user"
                                    >
                                        <div class="author__avatar online">
                                            <div style="width: 50px;">
                                                <Avatar
                                                    :path="user.profile.avatar"
                                                />
                                            </div>
                                        </div>
                                        <div class="dropdown dropdown--author">
                                            <ul>
                                                <li>
                                                    <inertia-link
                                                        :href="
                                                            route('account-profile')
                                                        "
                                                    >
                                                        <span
                                                            class="icon-user"
                                                        ></span
                                                        >Perfil
                                                    </inertia-link>

                                                </li>
                                                <li>
                                                    <inertia-link :href="route('logout')">
                                                        <span
                                                            class="icon-logout"
                                                        ></span
                                                        >Salir
                                                    </inertia-link>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div v-else>
                                        <inertia-link
                                            :href="
                                                route('register')
                                            "
                                            class="btn--xs btn btn-primary"
                                        >
                                            Registrarse
                                        </inertia-link>
                                        <inertia-link
                                            :href="
                                                route('login')
                                            "
                                            class="ml-1 btn--xs btn btn-warning"
                                            style="border-color:#ff453a;background: #ff453a; color: white;"
                                        >
                                            Iniciar Sesion
                                        </inertia-link
                                        >
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</template>

<script>
import Avatar from '@/Components/Avatar.vue'
import CardCart from './Cart'
import Notifications from './Notifications.vue'

export default ({
    components: {
        CardCart,
        Notifications,
        Avatar
    },
    created(){
        console.log('notification', this.$page.props.auth)
    },
    computed: {
        user() {
            return this.$page.props.auth.user
        }
    }

})
</script>
