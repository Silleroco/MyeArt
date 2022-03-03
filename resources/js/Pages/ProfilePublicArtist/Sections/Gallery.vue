<template>
    <div>
        <div class="">
            <div>
                <img 
                    class="img" 
                    src="/img/product1.png" 
                    alt="author image"
                >
            </div>
        </div>

        <div class="d-flex card-primary mt-4">
            <div v-for="(item, i) in items" :key="i" class="m-1">
                <div class="">
                    <img src="/img/pur1.jpg" alt="" class="img" />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  data() {
    return {
      items: [1, 2, 3, 4, 5, 6],
    };
  },
};
</script>

<style scoped>
    .img {
        width: 100%;
    }
</style>