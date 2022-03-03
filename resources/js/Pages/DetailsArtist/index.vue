<template>
    <div>

        <section class="breadcrumb-area">
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
                                        <img src="img/author.jpg" alt="">
                                        <div class="infos">
                                            <h4>Peter Crenshaw</h4>
                                            <span>Member Since May 2014</span>
                                            <ul>
                                                <li>
                                                    <a href="" class="btn btn-danger btn--xs" data-toggle="modal" data-target="#author-contact">
                                                        <span class="icon-envelope-open"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="btn btn-secondary btn--xs">
                                                        <span class="icon-globe"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 order-lg-1 col-md-12 order-md-2">
                                    <div class="author-social social social--color--filled">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <span class="fa fa-facebook"></span> Facebook
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="fa fa-twitter"></span> Twitter
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 order-lg-2 col-md-5 order-md-1">
                                    <div class="author-stats">
                                        <ul>
                                            <li class="t_items">
                                                <span>146</span>
                                                <p>Articulos totales</p>
                                            </li>
                                            <li class="t_sells">
                                                <span>2426</span>
                                                <p>Ventas totales</p>
                                            </li>
                                            <li class="t_reviews">
                                                <div>
                                                    <span class="ratings">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                    <span class="avg_r">  5.0 </span>
                                                    <span>(226 opiniones)</span>
                                                </div>
                                                <p>Calificaciones de autor</p>
                                            </li>
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
                                        <span>soy Peter Crenshaw</span>
                                    </h3>
                                    <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque
                                        the mattisleo quam aliquet congue. Nunc placerat mi id nisi interdum mollis.
                                        Praesent pharetra, justo ut scelerisque the mattisleo quam aliquet congue. Nunc
                                        placerat mi id nisi interdum mollis. Prae sent pharetra, justo ut scelerisque
                                        the mattisleo quam aliquet congue.</p>
                                    <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque
                                        the mattisleo quam aliquet congue. Nunc placerat mi id nisi interdum mollis.
                                        Praesent pharetra.</p>
                                </div>
                                <div class="author_featured_items">
                                    <h3>Productos
                                        <span>destacados del autor.</span>
                                    </h3>
                                    <div class="row">
                                        <!-- <div class="col-lg-4 col-md-6">
                                            <div class="product-single latest-single">
                                                <div class="product-thumb">
                                                    <figure>
                                                        <img src="img/product1.png" alt="" class="img-fluid">
                                                        <figcaption>
                                                            <ul class="list-unstyled">
                                                                <li><a href=""><span class="icon-basket"></span></a></li>
                                                                <li><a href="">Live Demo</a></li>
                                                            </ul>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="product-excerpt">
                                                    <h5>
                                                        <a href="">E-commerce Shopping Cart</a>
                                                    </h5>
                                                    <ul class="titlebtm">
                                                        <li>
                                                            <img class="auth-img" src="img/auth-img.png" alt="author image">
                                                            <p><a href="#">Theme-Valley</a></p>
                                                        </li>
                                                        <li class="product_cat">
                                                            in
                                                            <a href="#">WordPress</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="product-facts clearfix">
                                                        <li class="price">$24</li>
                                                        <li class="sells">
                                                            <span class="icon-basket"></span>141
                                                        </li>
                                                        <li class="product-fav">
                                                            <span class="icon-heart" title="Add to collection" data-toggle="tooltip"></span>
                                                        </li>
                                                        <li class="product-rating">
                                                            <ul class="list-unstyled">
                                                                <li><span class="rate_active"></span></li>
                                                                <li><span class="rate_active"></span></li>
                                                                <li><span class="rate_active"></span></li>
                                                                <li><span class="rate_active"></span></li>
                                                                <li><span class="rate_disabled"></span></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div
                                            v-for="(item, index) in [1,2,3]"
                                            :key="index"
                                            class="col-lg-4 col-md-6"
                                        >
                                            <CardWordArtModel />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="items" role="tabpanel" aria-labelledby="items-tab">
                                <div class="row">
                                    <div
                                        v-for="(item, index) in [1,2,3,4,5,6]"
                                        :key="index"
                                        class="col-lg-4 col-md-6"
                                    >
                                        <CardWordArtModel />
                                    </div>
                                </div>


                                <nav class="pagination-default ">
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
                                </nav>
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="thread thread_review thread_review2">
                                            <ul class="media-list thread-list">
                                                <li class="single-thread">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="#">
                                                                <img class="media-object" src="img/m1.png" alt="Commentator Avatar">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="d-flex flex-wrap">
                                                                <div class="">
                                                                    <div class="media-heading">
                                                                        <a href="author.html">
                                                                            <h4>Themexylum</h4>
                                                                        </a>
                                                                        <a href="#" class="rev_item">Mini - Responsive Bootstrap Dashboard</a>
                                                                    </div>
                                                                    <div class="rating product--rating">
                                                                        <ul>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star-half-o"></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <span class="review_tag">support</span>
                                                                </div>
                                                                <div class="rev_time">9 Hours Ago</div>
                                                            </div>
                                                            <p>Nunc placerat mi id nisi interdum mollis. Praesent
                                                                pharetra,
                                                                justo ut sceleris que the mattis, leo quam aliquet
                                                                congue placerat mi id nisi interdum mollis.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="single-thread">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="#">
                                                                <img class="media-object" src="img/m2.png" alt="Commentator Avatar">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="d-flex flex-wrap">
                                                                <div class="">
                                                                    <div class="media-heading">
                                                                        <a href="author.html">
                                                                            <h4>Jhon Oliver</h4>
                                                                        </a>
                                                                        <a href="#" class="rev_item">Beidea - One Page Parallax</a>
                                                                    </div>
                                                                    <div class="rating product--rating">
                                                                        <ul>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star-half-o"></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <span class="review_tag">Code Quality</span>
                                                                </div>
                                                                <div class="rev_time">18 Hours Ago</div>
                                                            </div>
                                                            <p>Nunc placerat mi id nisi interdum mollis. Praesent
                                                                pharetra,
                                                                justo ut sceleris que the mattis, leo quam aliquet
                                                                congue placerat mi id nisi interdum mollis.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="single-thread">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="#">
                                                                <img class="media-object" src="img/m3.png" alt="Commentator Avatar">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="d-flex flex-wrap">
                                                                <div class="">
                                                                    <div class="media-heading">
                                                                        <a href="author.html">
                                                                            <h4>Adam Smith</h4>
                                                                        </a>
                                                                        <a href="#" class="rev_item">Carlos - Creative Agency Template</a>
                                                                    </div>
                                                                    <div class="rating product--rating">
                                                                        <ul>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star-half-o"></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <span class="review_tag">Design</span>
                                                                </div>
                                                                <div class="rev_time">3 Days Ago</div>
                                                            </div>
                                                            <p>Nunc placerat mi id nisi interdum mollis. Praesent
                                                                pharetra,
                                                                justo ut sceleris que the mattis, leo quam aliquet
                                                                congue placerat mi id nisi interdum mollis.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="single-thread">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="#">
                                                                <img class="media-object" src="img/m4.png" alt="Commentator Avatar">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="d-flex flex-wrap">
                                                                <div class="">
                                                                    <div class="media-heading">
                                                                        <a href="author.html">
                                                                            <h4>EcoTheme</h4>
                                                                        </a>
                                                                        <a href="#" class="rev_item">Appspress - applanding page</a>
                                                                    </div>
                                                                    <div class="rating product--rating">
                                                                        <ul>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star-half-o"></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <span class="review_tag">support</span>
                                                                </div>
                                                                <div class="rev_time">1 Week Ago</div>
                                                            </div>
                                                            <p>Nunc placerat mi id nisi interdum mollis. Praesent
                                                                pharetra,
                                                                justo ut sceleris que the mattis, leo quam aliquet
                                                                congue placerat mi id nisi interdum mollis.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="single-thread">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="#">
                                                                <img class="media-object" src="img/m5.png" alt="Commentator Avatar">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="d-flex flex-wrap">
                                                                <div class="">
                                                                    <div class="media-heading">
                                                                        <a href="author.html">
                                                                            <h4>Aazztech</h4>
                                                                        </a>
                                                                        <a href="#" class="rev_item">Rida-Onepage vcard portfolio theme</a>
                                                                    </div>
                                                                    <div class="rating product--rating">
                                                                        <ul>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star-half-o"></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <span class="review_tag">support</span>
                                                                </div>
                                                                <div class="rev_time">2 Weeks Ago</div>
                                                            </div>
                                                            <p>Nunc placerat mi id nisi interdum mollis. Praesent
                                                                pharetra,
                                                                justo ut sceleris que the mattis, leo quam aliquet
                                                                congue placerat mi id nisi interdum mollis.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="single-thread">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="#">
                                                                <img class="media-object" src="img/m6.png" alt="Commentator Avatar">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="d-flex flex-wrap">
                                                                <div class="">
                                                                    <div class="media-heading">
                                                                        <a href="author.html">
                                                                            <h4>MR9</h4>
                                                                        </a>
                                                                        <a href="#" class="rev_item">Tamabill - Multi-Purpose HTML Template</a>
                                                                    </div>
                                                                    <div class="rating product--rating">
                                                                        <ul>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="fa fa-star-half-o"></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <span class="review_tag">Flexibility</span>
                                                                </div>
                                                                <div class="rev_time">1 Month Ago</div>
                                                            </div>
                                                            <p>Nunc placerat mi id nisi interdum mollis. Praesent
                                                                pharetra,
                                                                justo ut sceleris que the mattis, leo quam aliquet
                                                                congue placerat mi id nisi interdum mollis.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>


                                        <nav class="pagination-default ">
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
                                        </nav>
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

export default {
    layout: Layout,
    components: {
        Header,
        CardWordArtModel
    },
    data(){
        return {

        }
    }
}
</script>
