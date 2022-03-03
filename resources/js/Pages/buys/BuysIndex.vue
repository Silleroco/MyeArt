<template>
    <div>
        <Header title="Pago" />
        <section class="dashboard-area p-top-100 p-bottom-70">
            <div class="dashboard_contents">
                <div class="container">
                    <form @submit.prevent="submit" class="setting_form">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="information_module">
                                    <div class="toggle_title">
                                        <h4 class=""> Información de Pago </h4>
                                    </div>
                                    <div class="information__set">
                                        <div class="information_wrapper form--fields">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">Nombre
                                                            <sup>*</sup>
                                                        </label>
                                                        <input type="text" id="name" class="text_field" placeholder="" v-model="form.name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="last_name">Apellido
                                                            <sup>*</sup>
                                                        </label>
                                                        <input type="text" id="last_name" class="text_field" placeholder="" v-model="form.lastname">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group">
                                                <label for="nameCompany">Nombre de Compañia
                                                    <sup>*</sup>
                                                </label>
                                                <input type="text" id="nameCompany" class="text_field" placeholder="" v-model="nameCompany">
                                            </div> -->
                                            <div class="form-group">
                                                <label for="email">Correo
                                                    <sup>*</sup>
                                                </label>
                                                <input type="email" id="email" class="text_field" placeholder="" v-model="form.email">
                                            </div>
                                            <div class="form-group">
                                                <label for="country">Pais
                                                    <sup>*</sup>
                                                </label>
                                                <input type="text" id="country" class="text_field" placeholder="" v-model="form.country">
                                            </div>
                                            <!-- <div class="form-group">
                                                <label for="country">Pais
                                                    <sup>*</sup>
                                                </label>
                                                <div class="select-wrap select-wrap2">
                                                    <select name="country" id="country1" class="text_field">
                                                        <option value="">Select one</option>
                                                        <option value="bangladesh">Bangladesh</option>
                                                        <option value="india">India</option>
                                                        <option value="uruguye">Uruguye</option>
                                                        <option value="australia">Australia</option>
                                                        <option value="neverland">Neverland</option>
                                                        <option value="atlantis">Atlantis</option>
                                                    </select>
                                                    <span class="icon-arrow-down"></span>
                                                </div>
                                            </div> -->
                                            <div class="form-group">
                                                <label for="address">Dirección</label>
                                                <input type="text" id="address" class="text_field" v-model="form.address">
                                            </div>
                                            <div class="row">
                                                <!-- <div class="col-md-6">
                                                    <div class="m-bottom-sm">
                                                        <label for="city">Ciudad / Estado
                                                            <sup>*</sup>
                                                        </label>
                                                        <div class="select-wrap select-wrap2">
                                                            <select name="city" id="city" class="text_field">
                                                                <option value="">Seleccione uno</option>
                                                                <option value="dhaka">Dhaka</option>
                                                                <option value="sydney">Sydney</option>
                                                                <option value="newyork">New York</option>
                                                                <option value="london">London</option>
                                                                <option value="mexico">New Mexico</option>
                                                            </select>
                                                            <span class="icon-arrow-down"></span>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <label for="city">Ciudad / Estado
                                                            <sup>*</sup>
                                                        </label>
                                                        <input type="text" id="city" class="text_field" v-model="form.city">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <label for="zipcode">Codigo Postal
                                                            <sup>*</sup>
                                                        </label>
                                                        <input type="text" id="zipcode" class="text_field" v-model="form.zip_code">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="information_module order_summary">
                                    <div class="toggle_title">
                                        <h4>Resumen de la orden</h4>
                                    </div>
                                    <ul>
                                        <li class="item">
                                            <div class="d-flex justify-content-between">
                                                <div class="col-8">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <img
                                                                :src="artwork.artwork_images[0].location"
                                                                alt=""
                                                                style="width: 80px"
                                                            >
                                                        </div>
                                                        <div class="col-8">
                                                            <a>{{ artwork.name }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <span> {{ ' ' + artwork.price }}€ </span>
                                                    <p v-if="artwork.offer">Oferta: {{ artwork.offer }}€</p>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <p>Tasas e impuestos estimados:</p>
                                            <span> {{' ' + discount_rate}} %</span>
                                        </li>
                                        <li class="total_ammount">
                                            <p class="font-weight-bolder">Total: </p>
                                            <span>  {{' ' +  total_amount}} €</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="information_module payment_options">
                                    <div class="toggle_title">
                                        <h4>Realizar pago</h4>
                                    </div>
                                    <!-- <ul>
                                        <li>
                                            <div class="custom-radio">
                                                <input type="radio" id="opt1" class="" name="filter_opt">
                                                <label for="opt1">
                                                    <span class="circle"></span>Tarjeta de credito</label>
                                            </div>
                                            <img src="/img/cards.png" alt="Visa Cards">
                                        </li>
                                        <li>
                                            <div class="custom-radio">
                                                <input type="radio" id="opt2" class="" name="filter_opt">
                                                <label for="opt2">
                                                    <span class="circle"></span>Paypal</label>
                                            </div>
                                            <img src="/img/paypal.png" alt="Visa Cards">
                                        </li>
                                    </ul> -->
                                    <div class="payment_info modules__content">
                                        <div class="form-group">
                                            <label for="card-element">Datos de tarjeta</label>
                                            <div id="card-element"></div>
                                        </div>



                                        <!-- <div class="form-group">
                                            <label for="card_number">N de Tarjeta</label>
                                            <input id="card_number" type="number" class="text_field" placeholder="0000000000000000">
                                        </div>

                                        <div class="form-group">
                                            <label for="date_v">Fecha de Vencimiento</label>
                                            <input id="date_V" type="text" class="text_field" v-model="form.date">
                                        </div>

                                        <div class="form-group">
                                            <label for="cv_code">CVV Codigo</label>
                                            <input id="cv_code" type="text" class="text_field" v-model="form.vc_code">
                                        </div>


                                    -->

                                        <!-- <label for="name">Fecha de Vencimiento</label>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <div class="select-wrap select-wrap2">
                                                        <select name="months" id="name">
                                                            <option value="">Month</option>
                                                            <option value="jan">jan</option>
                                                            <option value="feb">Feb</option>
                                                            <option value="mar">Mar</option>
                                                            <option value="apr">Apr</option>
                                                            <option value="may">May</option>
                                                            <option value="jun">Jun</option>
                                                            <option value="jul">Jul</option>
                                                            <option value="aug">Aug</option>
                                                            <option value="sep">Sep</option>
                                                            <option value="oct">Oct</option>
                                                            <option value="nov">Nov</option>
                                                            <option value="dec">Dec</option>
                                                        </select>
                                                        <span class="icon-arrow-down"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <div class="select-wrap select-wrap2">
                                                        <select name="years" id="years">
                                                            <option value="">Year</option>
                                                            <option value="28">2028</option>
                                                            <option value="27">2027</option>
                                                            <option value="26">2026</option>
                                                            <option value="25">2025</option>
                                                            <option value="24">2024</option>
                                                            <option value="23">2023</option>
                                                            <option value="22">2022</option>
                                                            <option value="21">2021</option>
                                                            <option value="20">2020</option>
                                                            <option value="19">2019</option>
                                                            <option value="18">2018</option>
                                                            <option value="17">2017</option>
                                                        </select>
                                                        <span class="icon-arrow-down"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="row pt-5">
                                            <div class="col-md-6">
                                                <button type="button" @click="processPayment" class="btn btn--md btn-primary">Proceder Compra</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

</template>

<script>
import Layout from "@/Layouts/Default/LayoutDefault"
import Header from "@/Layouts/Header"
import { loadStripe } from "@stripe/stripe-js"
export default {
    props: ['artwork', 'total_amount', 'discount_rate'],
    layout: Layout,
    components: {
        Header
    },
    created(){
        console.log('buysIndex', this)
    },
    async mounted(){
        this.stripe = await loadStripe(process.env.MIX_STRIPE_KEY);
        const element = this.stripe.elements();
        this.cardElement = element.create('card', {
            classes: {
                base: ''
            }
        });
        this.cardElement.mount('#card-element');
    },
    data(){
        return {
            stripe : {},
            cardElement : {},
            form: this.$inertia.form({
                artwork_id: this.artwork.id,

                name: this.$page.props.auth.user.profile.firstName,
                lastname: this.$page.props.auth.user.profile.lastName,
                email: this.$page.props.auth.user.email,
                country: this.$page.props.auth.user.profile.country,
                address: this.$page.props.auth.user.profile.address,
                zip_code: this.$page.props.auth.user.profile.zip_code,
                city: this.$page.props.auth.user.profile.city,
                region: this.$page.props.auth.user.profile.region,
                amount: this.total_amount,
                payment_method_id: ''
            })
        }
    },
    methods: {
        submit(evt) {
            evt.preventDefault()

            console.log('form', this.form)

            this.form.post(route('buys.store'));
        },
        async processPayment() {
            //Enviar informacion de pago al controlador
            this.paymentProcessing = true;

            const {paymentMethod, error} = await this.stripe.createPaymentMethod(
                'card', this.cardElement, {
                    billing_details: {
                        name: this.form.firstName + ' ' + this.form.lastName,
                        email: this.form.email,
                        address: {
                            line1: this.form.adress,
                            city: this.form.city,
                            state: this.form.state,
                            postal_code: this.form.zip_code
                        }
                    }
                }
            );

            if ( error ) {
                this.paymentProcessing = false;
                alert('hello');
                console.log(error);
            } else {
                this.form.payment_method_id = paymentMethod.id;
                // this.customer.amount = this.cart.reduce((acc, item) => acc + (item.price * item.quantity), 0);
                // this.customer.cart = JSON.stringify(this.cart);

                this.form.post(route('buys.store'));
            }
        }
    }
}

</script>

<style scoped>

</style>
