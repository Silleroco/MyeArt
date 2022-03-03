<template>

<div>
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-contents">
                        <h2 class="page-title">Author Purchases</h2>
                        <div class="breadcrumb">
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li class="active">
                                    <a href="#">Author Purchases</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="dashboard-area dashboard_purchase">
        <div class="dashboard_menu_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button class="menu-toggler d-md-none">
                            <span class="icon-menu"></span> Dashboard Menu
                        </button>
                        <ul class="dashboard_menu">
                            <li>
                                <a href="dashboard.html"><span class="lnr icon-home"></span>Dashboard</a>
                            </li>
                            <li>
                                <a href="dashboard-setting.html"><span class="lnr icon-settings"></span>Setting</a>
                            </li>
                            <li class="active">
                                <a href="dashboard-purchase.html"><span class="lnr icon-basket"></span>Purchase</a>
                            </li>
                            <li>
                                <a href="dashboard-add-credit.html"><span class="lnr icon-credit-card"></span>Add Credits</a>
                            </li>
                            <li>
                                <a href="dashboard-statement.html"><span class="lnr icon-chart"></span>Statements</a>
                            </li>
                            <li>
                                <a href="dashboard-upload.html"><span class="lnr icon-cloud-upload"></span>Upload Items</a>
                            </li>
                            <li>
                                <a href="dashboard-manage-item.html"><span class="lnr icon-note"></span>Manage Items</a>
                            </li>
                            <li>
                                <a href="dashboard-withdrawal.html"><span class="lnr icon-briefcase"></span>Withdrawals</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="dashboard_contents section--padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="filter-bar clearfix filter-bar2">
                            <div class="dashboard__title">
                                <h3>230 Product Purchased</h3>
                            </div>
                            <div class="filter__items">
                                <div class="filter__option filter--search">
                                    <form action="#">
                                        <input type="text" placeholder="Search products">
                                        <button type="submit"><span class="icon-magnifier"></span></button>
                                    </form>
                                </div>
                                <div class="filter__option filter--select">
                                    <div class="select-wrap">
                                        <select name="price">
                                            <option>All Categories</option>
                                            <option>Wordpress</option>
                                            <option>HTML</option>
                                            <option>PSD</option>
                                        </select>
                                        <span class="lnr icon-arrow-down"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product_archive">
                    <div class="title_area">
                        <div class="row">
                            <div class="col-md-5 col-sm-6">
                                <h5>Product Details</h5>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <h5 class="add_info">Additional Info</h5>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <h5>Price</h5>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <h5>Download</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="single_product clearfix col-md-12">
                            <div class="row">
                                <div class="col-lg-5 col-sm-12">
                                    <div class="product__description">
                                        <img src="img/pur1.jpg" alt="Purchase image">
                                        <div class="short_desc">
                                            <h5>
                                                <a href="">Finance and Consulting Business Theme</a>
                                            </h5>
                                            <p>Wordpress</p>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="col-lg-3 col-sm-6">
                                    <div class="product__additional_info">
                                        <ul>
                                            <li>
                                                <p>
                                                    <span>Date: 26 Jun 2016</span>
                                                </p>
                                            </li>
                                            <li class="license">
                                                <p>
                                                    <span>Licence:</span> Regular
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <span>Author:</span> AazzTech
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                </div>
                                
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product__price_download">
                                        <div class="item_price v_middle">
                                            <span>$59</span>
                                        </div>
                                        <div class="item_action v_middle">
                                            <a href="#" class="btn btn-sm btn-primary">Download Item</a>
                                            <a href="#" class="btn btn-sm rating--btn not--rated" data-toggle="modal" data-target="#myModal1">
                                                <P class="rate_it">Rate Now</P>
                                                <div class="rating product--rating">
                                                    <ul>
                                                        <li>
                                                            <span class="fa fa-star-o"></span>
                                                        </li>
                                                        <li>
                                                            <span class="fa fa-star-o"></span>
                                                        </li>
                                                        <li>
                                                            <span class="fa fa-star-o"></span>
                                                        </li>
                                                        <li>
                                                            <span class="fa fa-star-o"></span>
                                                        </li>
                                                        <li>
                                                            <span class="fa fa-star-o"></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product clearfix col-md-12">
                            <div class="row">
                                <div class="col-lg-5 col-ms-12">
                                    <div class="product__description">
                                        <img src="img/pur2.jpg" alt="Purchase image">
                                        <div class="short_desc">
                                            <h5>
                                                <a href="">Visibility Manager Subscriptions</a>
                                            </h5>
                                            <p>HTML</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="product__additional_info">
                                        <ul>
                                            <li>
                                                <p>
                                                    <span>Date: 26 Jun 2016</span>
                                                </p>
                                            </li>
                                            <li class="license">
                                                <p>
                                                    <span>Licence:</span> Regular
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <span>Author:</span> Taklatheme
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product__price_download">
                                        <div class="item_price v_middle">
                                            <span>$39</span>
                                        </div>
                                        <div class="item_action v_middle">
                                            <a href="#" class="btn btn-sm btn-primary">Download Item</a>
                                            <a href="#" class="btn btn-sm rating--btn">
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
                                                            <span class="fa fa-star"></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product clearfix col-md-12">
                            <div class="row">
                                <div class="col-lg-5 col-sm-12">
                                    <div class="product__description">
                                        <img src="img/pur1.jpg" alt="Purchase image">
                                        <div class="short_desc">
                                            <h5>
                                                <a href="">Product Enquiry Extension</a>
                                            </h5>
                                            <p>Template</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="product__additional_info">
                                        <ul>
                                            <li>
                                                <p>
                                                    <span>Date: 23 oct 2016</span>
                                                </p>
                                            </li>
                                            <li class="license">
                                                <p>
                                                    <span>Licence:</span> Regular
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <span>Author:</span> Themexylum
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product__price_download">
                                        <div class="item_price v_middle">
                                            <span>$59</span>
                                        </div>
                                        <div class="item_action v_middle">
                                            <a href="#" class="btn btn-sm btn-primary">Download Item</a>
                                            <a href="#" class="btn btn-sm rating--btn not--rated" data-toggle="modal" data-target="#myModal1">
                                                <P class="rate_it">Rate Now</P>
                                                <div class="rating product--rating">
                                                    <ul>
                                                        <li>
                                                            <span class="fa fa-star-o"></span>
                                                        </li>
                                                        <li>
                                                            <span class="fa fa-star-o"></span>
                                                        </li>
                                                        <li>
                                                            <span class="fa fa-star-o"></span>
                                                        </li>
                                                        <li>
                                                            <span class="fa fa-star-o"></span>
                                                        </li>
                                                        <li>
                                                            <span class="fa fa-star-o"></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product clearfix col-md-12">
                            <div class="row">
                                <div class="col-lg-5 col-sm-12">
                                    <div class="product__description">
                                        <img src="img/pur2.jpg" alt="Purchase image">
                                        <div class="short_desc">
                                            <h5>
                                                <a href="">Appspress Multipurpose Applanding page</a>
                                            </h5>
                                            <p>HTML</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="product__additional_info">
                                        <ul>
                                            <li>
                                                <p>
                                                    <span>Date: 14 Feb 2016</span>
                                                </p>
                                            </li>
                                            <li class="license">
                                                <p>
                                                    <span>Licence:</span> Extended
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <span>Author:</span> Liontech
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product__price_download">
                                        <div class="item_price v_middle">
                                            <span>$59</span>
                                        </div>
                                        <div class="item_action v_middle">
                                            <a href="#" class="btn btn-sm btn-primary">Download Item</a>
                                            <a href="#" class="btn btn-sm rating--btn not--rated" data-toggle="modal" data-target="#myModal1">
                                                <P class="rate_it">Rate Now</P>
                                                <div class="rating product--rating">
                                                    <ul>
                                                        <li>
                                                            <span class="fa fa-star-o"></span>
                                                        </li>
                                                        <li>
                                                            <span class="fa fa-star-o"></span>
                                                        </li>
                                                        <li>
                                                            <span class="fa fa-star-o"></span>
                                                        </li>
                                                        <li>
                                                            <span class="fa fa-star-o"></span>
                                                        </li>
                                                        <li>
                                                            <span class="fa fa-star-o"></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            
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
    </section>
    
    <div class="modal fade rating_modal" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="rating_modal">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title" id="rating_modal">Rating this Item</h3>
                    <h4>Product Enquiry Extension</h4>
                    <p>by
                        <a href="author.html">AazzTech</a>
                    </p>
                </div>
                
                <div class="modal-body">
                    <form action="#">
                        <ul>
                            <li>
                                <p>Your Rating</p>
                                <div class="right_content btn btn--round btn--white btn--md">
                                    <select name="rating" class="give_rating">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <p>Rating Causes</p>
                                <div class="right_content">
                                    <div class="select-wrap">
                                        <select name="review_reason" id="rev">
                                            <option value="design">Design Quality</option>
                                            <option value="customization">Customization</option>
                                            <option value="support">Support</option>
                                            <option value="performance">Performance</option>
                                            <option value="documentation">Well Documented</option>
                                        </select>
                                        <span class="icon-arrow-down"></span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="rating_field">
                            <label for="rating_field">Comments</label>
                            <textarea name="rating_field" id="rating_field" class="text_field" placeholder="Please enter your rating reason to help the author"></textarea>
                            <p class="notice">Your review will be ​publicly visible​ and the author may reply to your
                                comments. </p>
                        </div>
                        <div class="button-group m-n1">
                            <button type="submit" class="btn btn-md btn-primary m-1">Submit Rating</button>
                            <button class="btn modal_close m-1" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                    
                </div>
                
            </div>
        </div>
    </div>

    
</div>

</template>