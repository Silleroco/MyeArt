<template>
    <div>
        <Header :title="artwork.name" />
        <section class="single-product-desc">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12" id="content">
                        <div class="item-preview border-none">
                            <div class="item-prev-area">
                                <div class="preview-img-wrapper">
                                    <div class="item__preview-img">
                                        <div class="item__preview-slider">
                                            <div class="prev-slide">
                                                <img :src="preview().location"
                                                    alt="Preview Image"
                                                    class="w-100"
                                                >
                                            </div>
                                        </div>
                                        <div class="prev-nav thumb-nav">
                                            <div>
                                                <span
                                                    v-if="preview().index !== 0"
                                                    class="lnr nav-left icon-arrow-left"
                                                    @click="changeTo('prev')"
                                                />
                                            </div>
                                            <div>
                                                <span
                                                    v-if="preview().index !== items.length -1"
                                                    class="lnr nav-right icon-arrow-right"
                                                    @click="changeTo('next')"
                                                />
                                            </div>

                                        </div>
                                    </div>
                                    <div class="item__preview-thumb pb-4 mt-4 border-primary">
                                        <div class="prev-thumb ">
                                            <div
                                                class="thumb-slider d-flex justify-content-around"

                                                >
                                                <div class="item-thumb"
                                                    v-for="(item, i) in items" :key="i">
                                                    <img
                                                        :src="item.location"
                                                        alt="Thumbnail Image"
                                                        style="width: 100px;"
                                                        @click="changeToPreview(item)"
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-info border-primary">
                            <div class="item-navigation">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li>
                                        <a href="#product-details" class="active" id="tab1" aria-controls="product-details" role="tab" data-toggle="tab" aria-selected="true">
                                            Detalles del producto</a>
                                    </li>
                                    <li>
                                        <a href="#product-comment" id="tab2" aria-controls="product-comment" role="tab" data-toggle="tab">
                                            Comentarios </a>
                                    </li>
                                    <li>
                                        <a href="#product-review" id="tab3" aria-controls="product-review" role="tab" data-toggle="tab">
                                            <span> Autor </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="fade show tab-pane product-tab active" id="product-details" role="tabpanel" aria-labelledby="tab1">
                                    <div class="tab-content-wrapper">
                                        <h3 class="text-primary">Información:</h3>
                                        <p class="p-bottom-30">{{ artwork.description }}</p>
                                    </div>
                                </div>
                                <div class="fade tab-pane product-tab" id="product-comment" role="tabpanel" aria-labelledby="tab2">
                                    <div>
                                        <CardComments
                                            :comments="artwork.comments"
                                            :artwork="artwork"
                                        />
                                    </div>
                                </div>
                                <div class="fade tab-pane product-tab" id="product-review" role="tabpanel" aria-labelledby="tab3">
                                    <div class="thread thread_review">
                                        <ul class="media-list thread-list">
                                            <li class="single-thread">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <div style="width: 80px; height: 80px;">
                                                            <Avatar
                                                                :path="artwork.seller.user.profile.avatar"
                                                            />
                                                        </div>

                                                    </div>
                                                    <div class="media-body">
                                                        <div class="clearfix">
                                                            <div class="pull-left">
                                                                <div class="media-heading">
                                                                        <h4 class="text-primary mb-0 font-weight-border">
                                                                            Autor:
                                                                        </h4>
                                                                        <h4>
                                                                            {{ artwork.seller.user.name }}
                                                                            <span v-if="artwork.seller.artist != null">({{ artwork.seller.artist.artistic_name }})</span>
                                                                            <span v-if="artwork.seller.gallery != null">({{ artwork.seller.gallery.name }})</span>
                                                                        </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-4">
                                                    <p>{{ artwork.seller.user.profile.biography }}</p>
                                                </div>

                                            </li>

                                            <div class="ml-5">
                                                <inertia-link
                                                    :href="
                                                        route('home.artist', [artwork.seller_id ])
                                                    "
                                                >
                                                    <div class="btn btn--md btn-primary">
                                                        Ver Autor
                                                    </div>
                                                </inertia-link>
                                                <!-- <button
                                                    class="btn btn--md btn-primary"
                                                    >
                                                </button> -->
                                            </div>

                                        </ul>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <aside id="sidebar" ref="sidebar" class="sidebar sidebar--single-product card-specs position-relative">
                            <div class="sidebar-card card-pricing bg-primary text-white">
                                <div class="my-1 border-none d-flex justify-content-between mb-0">
                                    <HeartLikes
                                        :artwork="artwork"
                                    />
                                    <h1 class="text-white">
                                        {{ artwork.price }} <sup>€</sup>
                                    </h1>
                                </div>
                                <div class="row d-flex justify-content-around">
                                    <div
                                        class="col-5 btn-list buy"
                                        v-if="artwork.seller.user_id !== user?.id"
                                        >
                                        <inertia-link
                                            :href="route('buys.create', [ artwork.id ])"
                                            method="get"
                                            as="button"
                                            class="btn btn-link"
                                        >
                                            Comprar
                                        </inertia-link>
                                        <!-- <span class="">Comprar</span> -->
                                    </div>
                                    <!-- <button class="col-5 btn-list add" v-on:click="addToCart(artwork.id)">
                                        <span class=" ">Agregar a carrito</span>
                                    </button> -->
                                </div>

                                <ul class="border-bottom">
                                    <li>
                                        <div class="custom-radio d-flex">
                                            <div class="mt-2 mr-2 img-list">
                                                <img
                                                    class="media-object rounded-circle"
                                                    src="/imagenes/icons/detailsWorkArtist/User.png"
                                                    alt=""
                                                >
                                            </div>
                                            <div class="mt-2">

                                                    <div class="list-bold">Autor</div>
                                                    <p>
                                                    {{ artwork.seller.user.name }}
                                                    <span v-if="artwork.seller.artist != null">({{ artwork.seller.artist.artistic_name }})</span>
                                                    <span v-if="artwork.seller.gallery != null">({{ artwork.seller.gallery.name }})</span>
                                                    </p>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="border-none">
                                        <div class="custom-radio d-flex">
                                            <div class="mt-2 mr-2 img-list">
                                                <img
                                                    class="media-object rounded-circle"
                                                    src="/imagenes/icons/detailsWorkArtist/Desc.png"
                                                    alt=""
                                                >
                                            </div>
                                            <div class="mt-2">
                                                <div class="mb-0">Titulo de la obra:</div>
                                                <p class="">{{ artwork.name }}</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <div class="mt-3">
                                    <div class="ml-4">
                                        <h3 class="list-bold text-white">Atritutos.</h3>
                                    </div>

                                    <ul class="list-specs mb-0 border-bottom">
                                        <li class="border-none">
                                            <div class="custom-radio d-flex align-items-center">
                                                <div class="mt-2 mr-2 img-list">
                                                    <img
                                                        class="media-object rounded-circle"
                                                        src="/imagenes/icons/detailsWorkArtist/Size.png"
                                                        alt=""
                                                    >
                                                </div>
                                                <div class="mt-2">
                                                   {{artwork.width}} cm x {{artwork.height}} cm
                                                </div>
                                            </div>
                                        </li>
                                        <li class="border-none">
                                            <div class="custom-radio d-flex align-items-center">
                                                <div class="mt-2 mr-2 img-list">
                                                    <img
                                                        class="media-object rounded-circle"
                                                        src="/imagenes/icons/detailsWorkArtist/Weight.png"
                                                        alt=""
                                                    >
                                                </div>
                                                <div class="mt-2">
                                                   {{ artwork.weight }} kg
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="border-none"
                                            v-for="element in artwork.elements"
                                            :key="element.id"
                                        >
                                            <div class="custom-radio d-flex align-items-center">
                                                <div class="mt-2 mr-2 img-list">
                                                    <img
                                                        class="media-object rounded-circle"
                                                        :src="iconElement(element.attribute.name)"
                                                        alt=""
                                                    >
                                                </div>
                                                <div class="mt-2">
                                                   {{ element.attribute.name }}: {{ element.name }}
                                                </div>
                                            </div>
                                        </li>
                                        <li class="border-none mb-2">
                                            <div class="custom-radio d-flex align-items-center">
                                                <div class="mt-2 mr-2 img-list">
                                                    <img
                                                        class="media-object rounded-circle"
                                                        src="/imagenes/icons/detailsWorkArtist/Calendar.png"
                                                        alt=""
                                                    >
                                                </div>
                                                <div class="m-2">
                                                   {{ moment(artwork.created_at).format('DD/MM/YYYY')}}
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>


                            </div>

                        </aside>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import Layout from "@/Layouts/Default/LayoutDefault"
import Header from "@/Layouts/Header"
import CardComments from "@/Components/CardComments.vue"
import Avatar from '@/Components/Avatar'
import HeartLikes from '@/Components/HeartLikes.vue'

const mapIconElements = {
    'Temática': "/imagenes/icons/detailsWorkArtist/Thematic.png",
    "Estilo": "/imagenes/icons/detailsWorkArtist/Style.png",
    "Material": "/imagenes/icons/detailsWorkArtist/Thematic.png",
    "Tecnica": "/imagenes/icons/detailsWorkArtist/Technique.png"
};

export default {
    layout: Layout,
    props: ['artwork'],
    components: {
        Header,
        CardComments,
        Avatar,
        HeartLikes
    },
    destroyed () {
        window.removeEventListener('scroll', this.handleScroll);
    },
    created(){
        console.log('artwork', this.artwork)

        window.addEventListener('scroll', this.handleScroll);

        let newItems = this.artwork.artwork_images.map((item, index) => ({
            ...item,
            index
        }))

        console.log(newItems)

        this.items = newItems;
        this.currentItem = newItems[0];
    },
    data(){
        return {
            items: [],
            currentItem: null
        }
    },
    computed: {
        user(){
            return this.$page.props.auth.user ?? null;
        }
    },
    methods: {
        preview(){
            return this.currentItem;
        },
        changeToPreview(item){
            console.log(item)
            this.currentItem = item;
        },
        changeTo(type){
            let index =  this.currentItem.index;

            let newIndex = type === 'prev' ? index - 1 : index +1;

            if (index === -1 || index === this.items.length){
                return ;
            }
            let newItem = {
                ...[...this.items].splice(newIndex, 1)[0]
            };

            this.currentItem = newItem;
        },
        handleScroll(event){
            // console.log('scrollFn', event)
            if (window.innerWidth < 1000 || window.innerHeight < 500){
                return;
            }

            let maxHeight = document.getElementById('content').clientHeight;

            let elem = document.getElementById('sidebar');

            if (!elem){
                return;
            }

            if (window.scrollY > 270 && window.scrollY < maxHeight-280){
                // let { sidebar: refSidebar } = this.$refs;
                // if (refSidebar){
                    // console.log('ele', elem)
                    elem.style.top = `${window.scrollY -280}px`;
                    // ele = 500;
                    // this.$refs.sidebar.top = 300;
                    // console.log('refs', this.$refs.sidebar)
                // }

            }
            // console.log('scrrol', window.scrollY)
        },
        addToCart(id){
            Inertia.get(route('add-to-cart', id))
        },
        iconElement(nameElement){
            let icon = mapIconElements[nameElement];

            return icon ?
                icon
                :
                "/imagenes/icons/detailsWorkArtist/Thematic.png";
        },
        favorite(){
            if (!this.user)
                return;

            this.$inertia.post(route('likes.store'), {
                user_id: this.user.id,
                artwork_id: this.artwork.id
            })
        }

    }
}
</script>

<style scoped>

    .card-specs {
        max-height: 95vh;
        overflow: hidden;
    }

    .list-specs li {
        margin-top: 5px;
        font-size: 1.1rem;
    }

    .list-bold {
        font-weight: border;
        font-size: 1.2rem;
    }

    .img-list {
        display: flex;
        align-items: center;
    }
    .img-list img {
        width: 30px;
    }

    .btn-list {
        background: red;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 90%;
        height: 50px;
        cursor: pointer;
    }

    .btn-list:hover {
        opacity: .6;
    }

    .btn-list.buy {
        background: #79F013;
        color: black;
    }

    .btn-list.add {
        background: #F5B731;
    }


    /* @media (min-width: 768px){

    } */
</style>
