<template>
    <div>
        <section class="breadcrumb-area banner-author" style="height: 30vh;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-contents d-flex justify-content-center">
                            <h2 class="page-title">Perfil del Autor</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="author-profile-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="author-profile">
                            <div class="row">
                                <div class="col-lg-5 col-md-7">
                                    <div class="author-desc">
                                        <div style="width: 150px; height: 150px;">
                                            <Avatar
                                                :path="artist.seller.user.profile.avatar"
                                            />
                                        </div>
                                        <div class="infos">
                                            <h4>{{artist.seller.user.name}}</h4>
                                            <span>Miembro desde {{moment(artist.seller.user.created_at).format('MM/YYYY')}}</span>
                                            <ul>
                                                <li>
                                                    <a href="" class="btn btn-danger btn--xs" data-toggle="modal" data-target="#author-contact">
                                                        <span class="icon-envelope-open"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        :class="`btn btn-secondary btn--xs ${!artist.seller.user.profile.google && 'disabled'}`"
                                                        :href="artist.seller.user.profile.google"
                                                        target="_blank"
                                                        >
                                                        <span class="icon-globe"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 order-lg-1 col-md-12 order-md-2">
                                    <div class="author-social social social--color--filled">
                                        <ul class="">
                                            <li>
                                                <a :class="`btn ${!artist.seller.user.profile.facebook && 'disabled'}`"
                                                    :href="artist.seller.user.profile.facebook"
                                                    target="_blank"
                                                >
                                                    <span class="fa fa-facebook"></span>
                                                    <span class="text-dark"> Facebook </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a :class="`btn ${!artist.seller.user.profile.facebook && 'disabled'}`"
                                                    :href="artist.seller.user.profile.twitter"
                                                    target="_blank"
                                                    >
                                                    <span class="fa fa-twitter"></span>
                                                    <span class="text-dark"> Twitter </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 order-lg-2 col-md-5 order-md-1">
                                    <div class="author-stats">
                                        <ul>
                                            <li class="t_items">
                                                <span>{{ popular_artworks ? popular_artworks.length : 0}}</span>
                                                <p>Articulos totales</p>
                                            </li>
                                            <li class="t_sells">
                                                <span>{{sales_finished ? sales_finished.length : 0}}</span>
                                                <p>Ventas totales</p>
                                            </li>
                                            <!-- <li class="t_reviews">
                                                <div>
                                                    <span class="ratings">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                    <span class="avg_r">  0 </span>
                                                    <span>({{ artist.seller.user.comments.length || 0 }} opiniones)</span>
                                                </div>
                                                <p>Calificaciones de autor</p>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 author-info-tabs">
                        <ul class="nav nav-tabs" id="author-tab" role="tablist">
                            <li>
                                <a class="active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Perfil</a>
                            </li>
                            <li>
                                <a id="items-tab" data-toggle="tab" href="#items" role="tab" aria-controls="items" aria-selected="false">Obras Destacadas</a>
                            </li>
                            <li>
                                <a id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reseñas</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="author-tab-content">
                            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="author_module about_author">
                                    <h3>Hola,
                                        <span>soy {{ artist.seller.user.name }}</span>
                                    </h3>
                                    <p>{{ artist.seller.user.profile.biography}}</p>
                                </div>
                                <div class="author_featured_items" v-if="artworks">
                                    <h3>Productos
                                        <span>destacados del autor.</span>
                                    </h3>
                                    <div class="row">
                                        <div
                                            v-for="doc in [...artworks].slice(0, 3)"
                                            :key="doc.id"
                                            class="col-lg-4 col-md-6"
                                        >
                                            <CardWordArtModel :doc="doc"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="items" role="tabpanel" aria-labelledby="items-tab">
                                <div class="row"
                                    v-if="popular_artworks && popular_artworks.length"
                                >
                                    <div
                                        v-for="doc in popular_artworks"
                                        :key="doc.id"
                                        class="col-lg-4 col-md-6"
                                    >
                                        <CardWordArtModel :doc="doc" />
                                    </div>
                                </div>
                                <div v-else>
                                    <div class="not-info">
                                        <h4> Sin Obras </h4>
                                    </div>
                                </div>


                                <!-- <nav class="pagination-default ">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true"><i class="fa fa-long-arrow-left"></i></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                                        <li class="page-item"><a class="page-link" href="#">10</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav> -->
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="row" v-if="sales_finished">
                                    <div class="col-md-12">
                                        <div class="thread thread_review thread_review2">
                                            <ul class="media-list thread-list">
                                                <li
                                                    class="single-thread border-secondary"
                                                    v-for="item in sales_finished"
                                                        :key="item.id"
                                                    >
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <div style="width: 60px; height: 60px;">
                                                                <Avatar

                                                                />
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="d-flex flex-wrap">
                                                                <div class="d-flex">
                                                                    <div class="media-heading">

                                                                        <!-- <a href="author.html"> -->
                                                                        <h4>{{ item.name }}</h4>
                                                                        <!-- </a> -->
                                                                        <!-- <a href="#" class="rev_item">Mini - Responsive Bootstrap Dashboard</a> -->
                                                                    </div>
                                                                    <div class="ml-3 rating product--rating">
                                                                        <ul v-for="star in [1,2,3,4,5]" :key="star">
                                                                            <li>
                                                                                <span class="fa fa-star" v-if="star <= item.rating"/>
                                                                                <span class="fa fa-star-o" v-else/>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                    <!-- <span class="review_tag">support</span> -->
                                                                </div>
                                                                <div class="rev_time">{{ moment(item.created_at).fromNow() }}</div>
                                                            </div>
                                                            <p class="p-0">{{ item.comment }}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>


                                        <!-- <nav class="pagination-default ">
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true"><i class="fa fa-long-arrow-left"></i></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                                                <li class="page-item"><a class="page-link" href="#">10</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav> -->
                                    </div>
                                </div>
                                <div v-else>
                                    <div class="not-info">
                                        <h4> Sin Reseñas </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import Layout from "@/Layouts/Default/LayoutDefault"
import Header from "@/Layouts/Header"
import CardWordArtModel from "@/Components/CardWorkArtModel1"
import Avatar from '@/Components/Avatar'

export default {
    layout: Layout,
    props: ['artist', 'artworks', 'popular_artworks', 'sales_finished'],
    components: {
        Header,
        CardWordArtModel,
        Avatar
    },
    created(){
        console.log('artist', this.artist)
        console.log('artworks', this.artworks)
        console.log('popular_artworks', this.popular_artworks)
        console.log('sales_finished', this.sales_finished)
    },
    data(){
        return {

        }
    }
}
</script>

<style scoped>
    .banner-author {
        background-image: url('/imagenes/Banner-author.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }
    .not-info {
        background: white;
        padding: 20px;
    }

    .btn-social .fa{
        padding: 7px 10px;
        color: white;
    }

    .btn-social{
        display: "flex";
        flex-direction: column;
    }

    .disabled {
        pointer-events: none;
        cursor: default;
    }
</style>
