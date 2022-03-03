<template>
    <div class="product-single latest-single">
        <div class="product-thumb">
            <figure>
                <img src="img/product1.png" alt="" class="img-fluid" />
                <figcaption>
                    <ul class="list-unstyled">
                        <li>
                            <a href=""><span class="icon-basket"></span></a>
                        </li>
                        <li>
                            <a href="">Live Demo</a>
                        </li>
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
                    <img
                        class="auth-img"
                        src="img/auth-img.png"
                        alt="author image"
                    />
                    <p>
                        <a href="#">Theme-Valley</a>
                    </p>
                </li>
                <li class="product_cat">
                    in
                    <a href="#">WordPress</a>
                </li>
            </ul>
            <ul class="product-facts clearfix">
                <li class="price">$24</li>
                <li class="sells"><span class="icon-basket"></span>141</li>
                <li class="product-fav">
                    <span
                        class="icon-heart"
                        title="Add to collection"
                        data-toggle="tooltip"
                    ></span>
                </li>
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
        
    </div>
</template>

<script>

export default ({
    props: ['doc']
})
</script>
