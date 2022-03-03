<template>
    <section class="login_area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                    <form action="#">
                        <div class="cardify login">
                            <div class="login--header">
                                <h3>Welcome Back</h3>
                                <p>You can sign in with your username</p>
                            </div>
                            <div class="login--form">
                                <div class="form-group">
                                    <label for="user_name">Username</label>
                                    <input id="user_name" type="text" class="text_field" placeholder="Enter your username...">
                                </div>
                                <div class="form-group">
                                    <label for="pass">Password</label>
                                    <input id="pass" type="text" class="text_field" placeholder="Enter your password...">
                                </div>
                                <div class="form-group">
                                    <div class="custom_checkbox">
                                        <input type="checkbox" id="ch2">
                                        <label for="ch2">
                                            <span class="shadow_checkbox"></span>
                                            <span class="label_text">Remember me</span>
                                        </label>
                                    </div>
                                </div>
                                <button class="btn btn--md btn-primary" type="submit">Login Now</button>
                                <div class="login_assist">
                                    <p class="recover">Lost your
                                        <a href="recover-pass.html">username</a> or
                                        <a href="recover-pass.html">password</a>?
                                    </p>
                                    <p class="signup">Don't have an
                                        <a href="signup.html">account</a>?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</template>