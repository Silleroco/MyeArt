<template>
    <div>
        <Header title="Pago" />
        <section class="dashboard-area p-top-100 p-bottom-70">
            <div class="dashboard_contents">
                <div class="container">
                    <form action="#" class="setting_form">
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
                                                        <label for="first_name">Nombre
                                                            <sup>*</sup>
                                                        </label>
                                                        <input type="text" id="first_name" class="text_field" placeholder="" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="last_name">Apellido
                                                            <sup>*</sup>
                                                        </label>
                                                        <input type="text" id="last_name" class="text_field" placeholder="" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Nombre de Compañia
                                                    <sup>*</sup>
                                                </label>
                                                <input type="text" id="nameCompany" class="text_field" placeholder="" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="email1">Correo
                                                    <sup>*</sup>
                                                </label>
                                                <input type="email" id="email1" class="text_field" placeholder="" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="country1">Pais
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
                                            </div>
                                            <div class="form-group">
                                                <label for="address1">Dirección</label>
                                                <input type="text" id="address1" class="text_field" placeholder="">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
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
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <label for="zipcode">Codigo Postal
                                                            <sup>*</sup>
                                                        </label>
                                                        <input type="text" id="zipcode" class="text_field" placeholder="">
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
                                                <div class="col-10">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <img src="img/buyr1.png" alt="">
                                                        </div>
                                                        <div class="col-9">
                                                            <a>Cuadro oleo verde Daniel Lewis.</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <span>$55</span>
                                                </div>
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <p>Tasas e impuestos estimados:</p>
                                            <span> 2 $</span>
                                        </li>
                                        <li class="total_ammount">
                                            <p class="font-weight-bolder">Total:</p>
                                            <span> 110 $</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="information_module payment_options">
                                    <div class="toggle_title">
                                        <h4>Seleccionar método de pago</h4>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="custom-radio">
                                                <input type="radio" id="opt1" class="" name="filter_opt">
                                                <label for="opt1">
                                                    <span class="circle"></span>Tarjeta de credito</label>
                                            </div>
                                            <img src="img/cards.png" alt="Visa Cards">
                                        </li>
                                        <li>
                                            <div class="custom-radio">
                                                <input type="radio" id="opt2" class="" name="filter_opt">
                                                <label for="opt2">
                                                    <span class="circle"></span>Paypal</label>
                                            </div>
                                            <img src="img/paypal.png" alt="Visa Cards">
                                        </li>
                                    </ul>
                                    <div class="payment_info modules__content">
                                        <div class="form-group">
                                            <label for="card_number">N de Tarjeta</label>
                                            <input id="card_number" type="text" class="text_field" placeholder="">
                                        </div>
                                        
                                        <label for="name">Fecha de Vencimiento</label>
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
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="cv_code">CVV Codigo</label>
                                                    <input id="cv_code" type="text" class="text_field" placeholder="">
                                                </div>
                                                <button type="submit" class="btn btn--md btn-primary">Proceder Compra</button>
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

export default {
    layout: Layout,
    components: {
        Header
    }
}

</script>
