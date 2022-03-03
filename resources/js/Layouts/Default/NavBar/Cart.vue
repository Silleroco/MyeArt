<template>
    <div>
        <div class="icon_wrap">
            <span
                class="icon-basket-loaded"
            ></span>
            <span
                class="notification_count purch"
                >2</span
            >
        </div>
        <div
            class="dropdown dropdown--cart"
        >
            <div class="cart_area">
                <div class="cart_list">
                    <CardArtworkCart />
                </div>
                <div class="total">
                    <p>
                        <span
                            >Total
                            :</span
                        >$80
                    </p>
                </div>
                <div
                    class="cart_action"
                >
                    <a
                        class="btn btn-primary"
                        href="cart.html"
                        >Ver Carrito</a
                    >
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import CardArtworkCart from '../../../Components/CardArtworkCart.vue'

export default ({
    components: {
        CardArtworkCart
    },
    data() {
        
    },
})
</script>
