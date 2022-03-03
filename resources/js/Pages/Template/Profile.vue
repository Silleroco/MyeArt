<template>
    
<div class="preload">
    
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-contents">
                        <h2 class="page-title">Author Profile</h2>
                        <div class="breadcrumb">
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li class="active">
                                    <a href="#">Author Profile</a>
                                </li>
                            </ul>
                        </div>
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
                                                <a href="" class="btn btn-primary btn--xs">Follow</a>
                                            </li>
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
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-dribbble"></span> Dribble
                                            </a>
                                        </li>
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
                                        <li>
                                            <a href="#">
                                                <span class="fa fa-dribbble"></span> Dribble
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
                                            <p>Total Items</p>
                                        </li>
                                        <li class="t_sells">
                                            <span>2426</span>
                                            <p>Total Sales</p>
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
                                                <span class="avg_r">5.0</span>
                                                <span>(226 reviews)</span>
                                            </div>
                                            <p>Author Ratings</p>
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
                            <a class="active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
                        </li>
                        <li>
                            <a id="items-tab" data-toggle="tab" href="#items" role="tab" aria-controls="items" aria-selected="false">Author Items</a>
                        </li>
                        <li>
                            <a id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
                        </li>
                        <li>
                            <a id="followers-tab" data-toggle="tab" href="#followers" role="tab" aria-controls="followers" aria-selected="false">Followers</a>
                        </li>
                        <li>
                            <a id="following-tab" data-toggle="tab" href="#following" role="tab" aria-controls="following" aria-selected="false">Following</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="author-tab-content">
                        <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="author_module about_author">
                                <h3>Hi,
                                    <span>I am Peter Crenshaw</span>
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
                                <h3>Author
                                    <span>Featured Items</span>
                                </h3>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
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
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="product-single latest-single">
                                            <div class="product-thumb">
                                                <figure>
                                                    <img src="img/product2.png" alt="" class="img-fluid">
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
                                                    <a href="">TheBizz Wordpress Theme</a>
                                                </h5>
                                                <ul class="titlebtm">
                                                    <li>
                                                        <img class="auth-img" src="img/auth-img2.png" alt="author image">
                                                        <p><a href="#">Aazztech</a></p>
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
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="product-single latest-single">
                                            <div class="product-thumb">
                                                <figure>
                                                    <img src="img/product3.png" alt="" class="img-fluid">
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
                                                    <a href="">Directory Wordpress Plugin</a>
                                                </h5>
                                                <ul class="titlebtm">
                                                    <li>
                                                        <img class="auth-img" src="img/auth-img3.png" alt="author image">
                                                        <p><a href="#">EcoTheme</a></p>
                                                    </li>
                                                    <li class="product_cat">
                                                        in
                                                        <a href="#">Plugin</a>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="items" role="tabpanel" aria-labelledby="items-tab">
                            <h3>All Items By
                                <span>Peter Crenshow</span>
                            </h3>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
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
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="img/product2.png" alt="" class="img-fluid">
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
                                                <a href="">TheBizz Wordpress Theme</a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="img/auth-img2.png" alt="author image">
                                                    <p><a href="#">Aazztech</a></p>
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
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="img/product3.png" alt="" class="img-fluid">
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
                                                <a href="">Directory Wordpress Plugin</a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="img/auth-img3.png" alt="author image">
                                                    <p><a href="#">EcoTheme</a></p>
                                                </li>
                                                <li class="product_cat">
                                                    in
                                                    <a href="#">Plugin</a>
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
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="img/product4.png" alt="" class="img-fluid">
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
                                                <a href="">AppPress PSD Template</a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="img/auth-img2.png" alt="author image">
                                                    <p><a href="#">TheDesign</a></p>
                                                </li>
                                                <li class="product_cat">
                                                    in
                                                    <a href="#">PSD</a>
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
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="img/product5.png" alt="" class="img-fluid">
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
                                                <a href="">Ecommerce Shopping Cart</a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="img/auth-img3.png" alt="author image">
                                                    <p><a href="#">Aazztech</a></p>
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
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="img/product6.png" alt="" class="img-fluid">
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
                                                <a href="">Directoria Wordpress Theme</a>
                                            </h5>
                                            <ul class="titlebtm">
                                                <li>
                                                    <img class="auth-img" src="img/auth-img.png" alt="author image">
                                                    <p><a href="#">EcoTheme</a></p>
                                                </li>
                                                <li class="product_cat">
                                                    in
                                                    <a href="#">Wordpress</a>
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
                                    <div class="product-title-area">
                                        <div class="product__title">
                                            <h3><span class="bold">226</span> Customer Reviews</h3>
                                        </div>
                                    </div>
                                    <div class="thread thread_review thread_review2">
                                        <ul class="media-list thread-list">
                                            <li class="single-thread">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" src="img/m1.png" alt="Commentator Avatar">
                                                        </a>
                                                    </div>
                                                    <div class="media-div">
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
                                            <li class="single-thread">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" src="img/m7.png" alt="Commentator Avatar">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex flex-wrap">
                                                            <div class="">
                                                                <div class="media-heading">
                                                                    <a href="author.html">
                                                                        <h4>Tueld T</h4>
                                                                    </a>
                                                                    <a href="#" class="rev_item">Khadim - Extension Bundle</a>
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
                                                            <div class="rev_time">3 Months Ago</div>
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
                                                            <img class="media-object" src="img/m8.png" alt="Commentator Avatar">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex flex-wrap">
                                                            <div class="">
                                                                <div class="media-heading">
                                                                    <a href="author.html">
                                                                        <h4>Visual Eggs</h4>
                                                                    </a>
                                                                    <a href="#" class="rev_item">Elpis - A Simple Design For Bloggers</a>
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
                                                                <span class="review_tag">Features</span>
                                                            </div>
                                                            <div class="rev_time">4 Months Ago</div>
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
                                                            <img class="media-object" src="img/m9.png" alt="Commentator Avatar">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex flex-wrap">
                                                            <div class="">
                                                                <div class="media-heading">
                                                                    <a href="author.html">
                                                                        <h4>Mr. Potato</h4>
                                                                    </a>
                                                                    <a href="#" class="rev_item">Dhalua - WordPress Theme for Personal Blog</a>
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
                                                                <span class="review_tag">Documentation</span>
                                                            </div>
                                                            <div class="rev_time">6 Months Ago</div>
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
                                                            <img class="media-object" src="img/m10.png" alt="Commentator Avatar">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex flex-wrap">
                                                            <div class="">
                                                                <div class="media-heading">
                                                                    <a href="author.html">
                                                                        <h4>BumbleBee</h4>
                                                                    </a>
                                                                    <a href="#" class="rev_item">Transform - Flexible Transform Plugin</a>
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
                                                                <span class="review_tag">customization</span>
                                                            </div>
                                                            <div class="rev_time">1 Year Ago</div>
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
                        <div class="tab-pane fade" id="followers" role="tabpanel" aria-labelledby="followers-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="product-title-area">
                                        <div class="product__title">
                                            <h3><span class="bold">167</span> Followers</h3>
                                        </div>
                                    </div>
                                    <div class="user_area">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <div class='user-single card '>
                                                    <div class="card-body">
                                                        <img src="img/c1.png" alt="" class="rounded-circle">
                                                        <h6>Chris Bent</h6>
                                                        <p>Member Since: February 2018</p>
                                                        <div class="ratings">
                                                            <span>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                            <span>(52)</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="stats">
                                                            <p><span>868</span> Items</p>
                                                            <p><span>9864</span> Sales</p>
                                                        </div>
                                                        <div class="user__status user--following"><a href="#" class="btn btn-sm btn-secondary">Following</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class='user-single card '>
                                                    <div class="card-body">
                                                        <img src="img/c2.png" alt="" class="rounded-circle">
                                                        <h6>Jhon Doe</h6>
                                                        <p>Member Since: February 2018</p>
                                                        <div class="ratings">
                                                            <span>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                            <span>(52)</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="stats">
                                                            <p><span>868</span> Items</p>
                                                            <p><span>9864</span> Sales</p>
                                                        </div>
                                                        <div class="user__status"><a href="#" class="btn btn-sm btn-primary">Follow</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class='user-single card '>
                                                    <div class="card-body">
                                                        <img src="img/c4.png" alt="" class="rounded-circle">
                                                        <h6>Toni Starc</h6>
                                                        <p>Member Since: February 2018</p>
                                                        <div class="ratings">
                                                            <span>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                            <span>(52)</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="stats">
                                                            <p><span>868</span> Items</p>
                                                            <p><span>9864</span> Sales</p>
                                                        </div>
                                                        <div class="user__status"><a href="#" class="btn btn-sm btn-primary">Follow</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class='user-single card '>
                                                    <div class="card-body">
                                                        <img src="img/c3.png" alt="" class="rounded-circle">
                                                        <h6>James Plant</h6>
                                                        <p>Member Since: February 2018</p>
                                                        <div class="ratings">
                                                            <span>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                            <span>(52)</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="stats">
                                                            <p><span>868</span> Items</p>
                                                            <p><span>9864</span> Sales</p>
                                                        </div>
                                                        <div class="user__status"><a href="#" class="btn btn-sm btn-primary">Follow</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class='user-single card '>
                                                    <div class="card-body">
                                                        <img src="img/c5.png" alt="" class="rounded-circle">
                                                        <h6>Mat Hamels</h6>
                                                        <p>Member Since: February 2018</p>
                                                        <div class="ratings">
                                                            <span>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                            <span>(52)</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="stats">
                                                            <p><span>868</span> Items</p>
                                                            <p><span>9864</span> Sales</p>
                                                        </div>
                                                        <div class="user__status user--following"><a href="#" class="btn btn-sm btn-secondary">Following</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class='user-single card '>
                                                    <div class="card-body">
                                                        <img src="img/c1.png" alt="" class="rounded-circle">
                                                        <h6>R Milford</h6>
                                                        <p>Member Since: February 2018</p>
                                                        <div class="ratings">
                                                            <span>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                            <span>(52)</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="stats">
                                                            <p><span>868</span> Items</p>
                                                            <p><span>9864</span> Sales</p>
                                                        </div>
                                                        <div class="user__status"><a href="#" class="btn btn-sm btn-primary">Follow</a></div>
                                                    </div>
                                                </div>
                                            </div>
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
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="following" role="tabpanel" aria-labelledby="following-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="product-title-area">
                                        <div class="product__title">
                                            <h3><span class="bold">143</span> Following</h3>
                                        </div>
                                    </div>
                                    <div class="user_area">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <div class='user-single card '>
                                                    <div class="card-body">
                                                        <img src="img/c1.png" alt="" class="rounded-circle">
                                                        <h6>Chris Bent</h6>
                                                        <p>Member Since: February 2018</p>
                                                        <div class="ratings">
                                                            <span>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                            <span>(52)</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="stats">
                                                            <p><span>868</span> Items</p>
                                                            <p><span>9864</span> Sales</p>
                                                        </div>
                                                        <div class="user__status user--following"><a href="#" class="btn btn-sm btn-secondary">Following</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class='user-single card '>
                                                    <div class="card-body">
                                                        <img src="img/c2.png" alt="" class="rounded-circle">
                                                        <h6>Jhon Doe</h6>
                                                        <p>Member Since: February 2018</p>
                                                        <div class="ratings">
                                                            <span>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                            <span>(52)</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="stats">
                                                            <p><span>868</span> Items</p>
                                                            <p><span>9864</span> Sales</p>
                                                        </div>
                                                        <div class="user__status user--following"><a href="#" class="btn btn-sm btn-secondary">Following</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class='user-single card '>
                                                    <div class="card-body">
                                                        <img src="img/c4.png" alt="" class="rounded-circle">
                                                        <h6>Toni Starc</h6>
                                                        <p>Member Since: February 2018</p>
                                                        <div class="ratings">
                                                            <span>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                            <span>(52)</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="stats">
                                                            <p><span>868</span> Items</p>
                                                            <p><span>9864</span> Sales</p>
                                                        </div>
                                                        <div class="user__status user--following"><a href="#" class="btn btn-sm btn-secondary">Following</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class='user-single card '>
                                                    <div class="card-body">
                                                        <img src="img/c3.png" alt="" class="rounded-circle">
                                                        <h6>James Plant</h6>
                                                        <p>Member Since: February 2018</p>
                                                        <div class="ratings">
                                                            <span>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                            <span>(52)</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="stats">
                                                            <p><span>868</span> Items</p>
                                                            <p><span>9864</span> Sales</p>
                                                        </div>
                                                        <div class="user__status user--following"><a href="#" class="btn btn-sm btn-secondary">Following</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class='user-single card '>
                                                    <div class="card-body">
                                                        <img src="img/c5.png" alt="" class="rounded-circle">
                                                        <h6>Mat Hamels</h6>
                                                        <p>Member Since: February 2018</p>
                                                        <div class="ratings">
                                                            <span>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                            <span>(52)</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="stats">
                                                            <p><span>868</span> Items</p>
                                                            <p><span>9864</span> Sales</p>
                                                        </div>
                                                        <div class="user__status user--following"><a href="#" class="btn btn-sm btn-secondary">Following</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class='user-single card '>
                                                    <div class="card-body">
                                                        <img src="img/c1.png" alt="" class="rounded-circle">
                                                        <h6>R Milford</h6>
                                                        <p>Member Since: February 2018</p>
                                                        <div class="ratings">
                                                            <span>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                            <span>(52)</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="stats">
                                                            <p><span>868</span> Items</p>
                                                            <p><span>9864</span> Sales</p>
                                                        </div>
                                                        <div class="user__status user--following"><a href="#" class="btn btn-sm btn-secondary">Following</a></div>
                                                    </div>
                                                </div>
                                            </div>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</template>