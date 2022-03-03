<template>
    <div class="d-flex">
        <div class="qualify-icon-star m-1" 
            v-for="s in [1, 2, 3, 4, 5]" :key="s"
            @click="selectedStar(s)"
            >
            <i :class="`fa fa-star ${s <= star && 'active'}`"></i>
        </div>
    </div>
</template>

<script>
export default {
    model: {
        prop: 'currentStar',
        event: 'update'
    },
    props: {
        currentStar: {
            type: Number,
            default: 0
        }
    },
    computed: {
        star(){
            return this.currentStar;
        }
    },
    methods: {
        selectedStar(star){
            // this.currentStar = star;
            this.$emit('update:currentStar', star);
        }
    }
}
</script>

<style scoped>
    .qualify-icon-star {
        cursor: pointer;
        color: #ddd;
        font-size: 25px;
    }

    .qualify-icon-star .active {
         cursor: pointer;
        color: #D9BF8F;
        font-size: 25px;
    }
</style>