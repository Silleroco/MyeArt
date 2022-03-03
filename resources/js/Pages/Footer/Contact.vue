<template>
    <div>
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-contents">
                        <h2 class="page-title">Contact Us</h2>
                        <div class="breadcrumb">
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li class="active">
                                    <a href="#">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end .col-md-12 -->
            </div><!-- end .row -->
        </div><!-- end .container -->
    </section><!-- ends: .breadcrumb-area -->
    <section class="contact-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h1>How can We <span class="highlighted">Help?</span></h1>
                                <p>Laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis
                                    fugats. Lid est laborum dolo rumes fugats untras.</p>
                            </div>
                        </div><!-- ends: .col-md-12 -->
                    </div><!-- ends: .row -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="contact_tile">
                                <span class="tiles__icon icon-location-pin"></span>
                                <h4 class="tiles__title">Office Address</h4>
                                <div class="tiles__content">
                                    <p>202 New Hampshire Avenue , Northwest #100, New York-2573</p>
                                </div>
                            </div><!-- ends: .contact_tile -->
                        </div><!-- ends: col-md-4 -->
                        <div class="col-md-4">
                            <div class="contact_tile">
                                <span class="tiles__icon icon-earphones"></span>
                                <h4 class="tiles__title">Phone Number</h4>
                                <div class="tiles__content">
                                    <p>
                                    <p>1-800-643-4500</p>
                                    <p>1-800-643-4500</p>
                                    </p>
                                </div>
                            </div><!-- ends: .contact_tile -->
                        </div><!-- ends: col-md-4 -->
                        <div class="col-md-4">
                            <div class="contact_tile">
                                <span class="tiles__icon icon-envelope-open"></span>
                                <h4 class="tiles__title">Phone Number</h4>
                                <div class="tiles__content">
                                    <p>
                                    <p>support@aazztech.com</p>
                                    <p>support@aazztech.com</p>
                                    </p>
                                </div>
                            </div><!-- ends: .contact_tile -->
                        </div><!-- ends: .col-md-4 -->
                        <div class="col-md-12">
                            <div class="contact_form cardify">
                                <div class="contact_form__title">
                                    <h2>Leave Your Messages</h2>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-2">
                                        <div class="contact_form--wrapper">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <textarea cols="30" rows="10" placeholder="Yout text here"></textarea>
                                                <div class="sub_btn">
                                                    <button type="button" class="btn btn--md btn-primary">Send Request
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!-- ends: .col-md-8 -->
                                </div><!-- ends: .row -->
                            </div><!-- ends: .contact_form -->
                        </div><!-- ends: .col-md-12 -->
                    </div>
                </div>
            </div>
        </div><!-- ends: .container -->
    </section><!-- ends: .contact-area -->
    </div>
</template>

<script>
import Layout from "@/Layouts/Default/LayoutDefault"
import Header from "@/Layouts/Header"

export default {
    layout: Layout,
    components: {
        Header
    },

    data() {
        return {

        }
    },
}
</script>