<template>
    <section class="subscribe"
        style="                    
        background-image: url('/imagenes/banner-newsletter.jpg');
        background-size: cover;
        "
    >
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="subcribe-title">El newsletter para grandes artistas.</p>
                </div>
                <div class="col-lg-6 offset-lg-3 col-md-12 subscribe-inner">
                    <form action="#" class="subscribe-form">
                        <div class="form-group">
                            <input type="text" placeholder="Correo Electrónico" required />
                            <button
                                type="submit"
                                class="btn btn--sm btn-primary"
                            >
                                Subscribete
                            </button>
                        </div>
                    </form>
                </div>

                <div class="col-12">
                    <p class="mt-4 subcribe-subtitle">
                        100% arte, 0% spam, lo prometemos.
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
    .subcribe-title {
        font-size: calc(.8rem + 1vw);
        text-align: center;
    }
</style>
