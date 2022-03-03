<template>
    <div :class="`product-single ${color} mt-4`">
        <div class="product-thumb">
            <figure>
                <img 
                    :src="doc?.artwork_images[0]?.location" 
                    alt="" 
                    class="img-fluid" 
                />
                <figcaption>
                    <ul class="list-unstyled">
                        <li>
                            <inertia-link
                                class="routerLink"
                                :href="`/obras/${doc.id}`"
                            >
                                Ver Detalle
                            </inertia-link>
                        </li>
                    </ul>
                </figcaption>
            </figure>
        </div>
        
        <div class="descCardWorkArt">
            <h5 class="mb-1 title-author-workArt">
                {{ doc.name }}
            </h5>
            <div class="subtitle-author-workArt">
                {{ doc.seller.user.name || 'Nombre Autor'}}
            </div>
            <div class="row-cardWorkArt my-2 pt-3 d-flex justify-content-between">
                
                <div class="d-flex align-items-center">
                    <HeartLikes 
                        :artwork="doc"
                    />

                    <span class="ml-1"> {{ doc.likes.length ?? 0 }} </span>
                </div>
                <div class="price"> {{ doc.price }}€</div>
            </div>
        </div>

    </div>
</template>

<script>
import HeartLikes from '@/Components/HeartLikes.vue'

export default {
    props: ['doc'],
    components: {
        HeartLikes
    }
}
</script>

<style scoped>
    .product-single.color-pink {
        background: #F3EAEE;
    }

    .product-single {
        padding: 10px;

    }

    .descCardWorkArt {
        padding: 10px;
        color: #3490dc;
    }

    .descCardWorkArt:hover {
        text-decoration: none;
    }

    .title-author-workArt {
        font-size: 1.5rem;
        color: black;
        font-weight: bolder;
    }
    .subtitle-author-workArt {
        font-size: 1.2rem;
        color: black;
        font-weight: bolder;
    }
    .row-cardWorkArt {
        border-top: 2px solid #3490dc;
        font-size: 22px;
    }
    
    .icon-cardWorkArt {
        font-size: 25px;
    }

    .row-cardWorkArt .price {
        padding: 0 10px;
        line-height: 30px;
        border-radius: 3px; 
        background: rgba(110, 79, 246, 0.08);
    }

    .product-thumb {
        /* width: 100%; */
        max-height: 35vh;
        overflow:  hidden;
    }
</style>