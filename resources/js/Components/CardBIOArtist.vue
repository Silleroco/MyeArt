<template>
        <div class="product-single latest-single text-center shadow-none">
    <inertia-link
        :href="
            route('home.artist', { id: doc.seller_id })
        "
        class="d-inline-block rounded-circle"
    >
            <div class="product-thumb card-artist">
                <figure class="position-relative artist-image" >
                    <Avatar 
                        :path="doc.seller.user.profile.avatar"
                    />
                    <!-- <img :src="doc.seller.user.profile.avatar || '/img/speaker1.jpg'" alt="" style="width: 100%; height: 100%" /> -->
                    <figcaption
                        style="
                            border-radius: 50%;
                            width: 100%;
                            height: 100%;
                            cursor: pointer;
                        "
                    >
                        <div
                            class="p-5 text-center d-flex flex-column justify-content-between"
                            style="color: white; height: 100%"
                        >
                            <div class="cardBIO-text"> {{ doc.artistic_name }} </div>
                            <div class="cardBIO-text"> {{ doc.seller.user.name }} </div>
                            <div class="d-flex justify-content-center">
                                <div class="product-excerpt m-0 p-0 border-none">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <ul
                                                class="product-facts clearfix m-0 p-0 border-none position-relative"
                                                style="width: 100px"
                                            >
                                                <li class="product-rating">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <span
                                                                class="rate_active"
                                                            ></span>
                                                        </li>
                                                        <li>
                                                            <span
                                                                class="rate_active"
                                                            ></span>
                                                        </li>
                                                        <li>
                                                            <span
                                                                class="rate_active"
                                                            ></span>
                                                        </li>
                                                        <li>
                                                            <span
                                                                class="rate_active"
                                                            ></span>
                                                        </li>
                                                        <li>
                                                            <span
                                                                class="rate_disabled"
                                                            ></span>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <span
                                            class="icon-user icon-cardWorkArt"
                                            title="Add to collection"
                                            data-toggle="tooltip"
                                        />
                                        <span class="ml-1"> 30 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
    </inertia-link>
        </div>
</template>

<script>
import Avatar from '@/Components/Avatar'
export default {
    props: ['doc'],
    components: {
        Avatar
    },
    created(){
        // console.log('doc', this.doc);
    },
    methods: {

    }
};
</script>

<style scoped>
    .cardBIO-text {
        font-weight: bold;
        font-size: 18px;
    }

    .product-thumb.product-thumb {
        overflow: revert;
    }

    .product-single .product-thumb figure img {
        border-radius: 50%;
        width: 100%;
        height: auto;
    }

    .artist-image, .card-artist {
        width: 200px;
        height: 200px;
        display: block;
        margin: auto;
        border-radius: 50%;
        overflow: hidden;
    }

</style>
