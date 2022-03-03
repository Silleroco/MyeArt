<template>
    <div>
        <div class="icon_wrap">
            <span
                class="icon-bell"
            ></span>
            <span class="notification_count purch" v-if="notifications.length > 0">
                {{notifications.length }}
            </span>
        </div>
        <div
            class="dropdown notification--dropdown"
        >
            <div
                class="dropdown_module_header"
            >
                <div class="d-flex justify-content-between">
                    <h6>
                        Mis Notificaciones
                    </h6>
                        <button 
                            class="btn btn-outline-dark btn-sm"
                            @click="deleteNotifications"
                            >
                            <i class="fa fa-trash"></i>
                        </button>
                </div>
            </div>
            <div
                class="notifications_module"
                v-for="notif in notifications"
                :key="notif.id"
            >
                <div class="notification">
                    <inertia-link :href="notif.data.data.url">
                        <div class="notification__info">
                            <div class="info_avatar">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <div class="info">
                                <p>
                                    <!-- <span>Anderson</span> -->
                                    {{ notif.data.data.greeting }}
                                </p>
                                <p class="time mt-2">
                                    {{ moment(notif.created_at).fromNow() }}
                                </p>
                            </div>
                        </div>
                    </inertia-link>

                    <!-- <div
                        class="notification__icons"
                    >
                        <span
                            class="icon-heart loved noti_icon"
                        ></span>
                    </div> -->

                </div>

                <!-- <div
                    class="text-center m-top-30 p-left-20 p-right-20"
                >
                    <a
                        href="notification.html"
                        class="btn btn-primary btn-md btn-block"
                        >View All</a
                    >
                </div> -->

            </div>

        </div>
    </div>
</template>

<script>

export default ({
    data() {
        return {
            
        } 
    },
    computed: {
        notifications() {
            return this.$page.props.auth.user ?  this.$page.props.auth.user.unread_notifications : [];
        }
    },
    methods: {
        deleteNotifications(){
            console.log('deleteNotif')
            this.$inertia.get(route('my-account.notifications-mark-as-read'));
        }
    }
})
</script>


<style scoped>
    .notification {
        cursor: pointer;
    }
</style>