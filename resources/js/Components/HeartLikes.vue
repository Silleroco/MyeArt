<template>
    <span @click="onClickfavorite()" 
        :class="active ?  'icon-heart-custom-active' :'icon-heart-custom'">
        <span class="material-icons">
            favorite
        </span>
    </span>
</template>

<script>
export default {
    props: ['artwork'],
    computed: {
        user(){
            return this.$page.props.auth.user;
        },
        active(){
            return this.user ? this.artwork.likes.find(l => l.user_id === this.user.id) : false;
        }
    },
    methods: {
        onClickfavorite(){
            if (!this.user)
                return;

            if (!this.active){
                this.$inertia.post(route('likes.store'), {
                    user_id: this.user.id,
                    artwork_id: this.artwork.id
                }, {preserveScroll: true,})
            }else {
                this.$inertia.delete(route('likes.destroy', [this.active.id]), {preserveScroll: true,});
            }
                
        }
    }
}
</script>

<style scoped>
    .icon-heart-custom {
        cursor: pointer;
    }

    .icon-heart-custom-active {
        color: red;
        cursor: pointer;
    }
</style>