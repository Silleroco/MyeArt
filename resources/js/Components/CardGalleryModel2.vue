<template>
    <div class="product-single latest-single">
        <div class="product-thumb">
            <figure>
                <img 
                    :src="doc.seller.artworks[0].artwork_images[0].location" 
                    alt="" 
                    class="img-fluid" 
                />
            </figure>
        </div>
        
        <div class="product-excerpt">
            <div class="d-flex justify-content-between align-items-center">
                <div class="col-8">
                    <h5 class="mb-1">
                        {{ doc.name }}
                    </h5>
                    <div class="titlebtm">
                        {{ doc.seller.user.name }}
                    </div>
                </div>

            </div>
            <div class="row-cardWorkArt mt-2 pt-3 d-flex justify-content-between">
                <div class="d-flex align-items-center">
                    <!-- <span
                        class="icon-heart icon-cardWorkArt"
                        title="Add to collection"
                        data-toggle="tooltip"
                    />
                    <span class="ml-1"> 0 </span> -->
                    <HeartLikes 
                        :artwork="doc.seller.artworks[0]"
                    />
                </div>
                <div class="">
                    <div class="price text-primary"> 
                        {{ doc.seller.artworks[0].price }}$
                    </div>
                </div>

                <!-- <div class="d-flex align-items-center">
                    <div class="mr-2">
                        4/5
                    </div>
                    <div>
                        <ul class="product-facts clearfix m-0 p-0  border-none">
                            <li class="product-rating">
                                <ul class="list-unstyled">
                                    <li>
                                        <span class="rate_active"></span>
                                    </li>
                                    <li>
                                        <span class="rate_active"></span>
                                    </li>
                                    <li>
                                        <span class="rate_active"></span>
                                    </li>
                                    <li>
                                        <span class="rate_active"></span>
                                    </li>
                                    <li>
                                        <span class="rate_disabled"></span>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>

    </div>
</template>

<script>
import HeartLikes from '@/Components/HeartLikes.vue'
export default {
    props: ['doc'],
    components:{
        HeartLikes
    },
    created(){ 
  
    },
    data(){
        return {

        }
    },
    methods: {

    }
}
</script>

<style scoped>
    .row-cardWorkArt {
        border-top: 1px solid #ebedf2;
        font-size: 22px;
    }
    
    .icon-cardWorkArt {
        font-size: 25px;
    }

    .price {
        /* padding: 0 10px; */
        line-height: 30px;
        border-radius: 3px; 
        font-size: 25px;
    }

</style>