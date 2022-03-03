<template>
    <div class="d-flex flex-wrap">
        <div 
            class="d-flex"
            v-for="(item, i) in tags" :key="i"
            >
            <span 
                :class="`item ${selected.find(s => s.id === item.id) && 'active'} m-1`" 
                @click="handleChange(item)"
            >
                {{ item.name }}
            </span>
        </div>
    </div>
</template>

<script>

export default ({
    props: ["tags", 'dataInitial'],
    data() {
        return {
            selected: []
        }
    },
    created(){
        console.log('dataInitial', this.dataInitial)
        if (this.dataInitial){
            this.selected = [...this.dataInitial];
        }
    },
    methods: {
        handleChange(item){
            if (this.selected.find(s => s.id === item.id)){
                this.selected = this.selected.filter(s => s.id !==  item.id)
            }else {
                this.selected = [...this.selected, item];
            }

            console.log('selected', this.selected)

            this.$emit('update', this.selected.map(s => s.id))
        }
    }
})
</script>

<style scoped>
    .item {
        cursor: pointer;
        background: rgba(82, 161, 225, 0.5);
        color: white;
        border-radius: 30px;
        padding: 5px 30px;
    }

    .item.active {
        background: #2566AE;
    }

    .item:hover {
        opacity: .6;
    }
</style>