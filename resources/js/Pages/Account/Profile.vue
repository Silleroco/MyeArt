<template>
    <div>
        <HeaderAccount />

        <div class="container my-5">
            <form 
                @submit.prevent="submit" class="setting_form"
            >
                <div class="row">
                    <div class="col-md-12">
                        <div class="information_module">
                            <div class="information__set profile_images">
                                <div class="information_wrapper">
                                    <div class="profile_image_area">
                                        <div>
                                            <img src="/img/authplc.png" alt="Author profile area">
                                            <div class="img_info">
                                                <p class="bold">Agregar tu foto de perfil</p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="information_module">
                            <div class="toggle_title">
                                <h4>Informatión Personal</h4>
                            </div>
                            <div class="information__set">
                                <div class="information_wrapper form--fields row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstName">Nombre
                                                <sup>*</sup>
                                            </label>
                                            <input type="text" id="firstName" class="text_field" v-model="form.firstName">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastName">Apellido
                                                <sup>*</sup>
                                            </label>
                                            <input type="text" id="lastName" class="text_field" v-model="form.LastName">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailad">Mail
                                                <sup>*</sup>
                                            </label>
                                            <input type="text" id="emailad" class="text_field" v-model="form.email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="usrname">Nombre de Usuario
                                                <sup>*</sup>
                                            </label>
                                            <input type="text" id="usrname" class="text_field">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Clave
                                                <sup>*</sup>
                                            </label>
                                            <input type="password" id="password" class="text_field" >
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="conpassword">Confirm Password
                                                <sup>*</sup>
                                            </label>
                                            <input type="password" id="conpassword" class="text_field" placeholder="re-enter password">
                                        </div>
                                    </div> -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="prohead">Rellena tu biografía</label>
                                            <input type="text" id="prohead" class="text_field">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="information_module">
                            <div class="toggle_title">
                                <h4>Facturación</h4>
                            </div>
                            <div class="information__set">
                                <div class="information_wrapper form--fields">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="first_name">Dirección
                                                    <sup>*</sup>
                                                </label>
                                                <input type="text" id="first_name" class="text_field">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="country1">País
                                                    <sup>*</sup>
                                                </label>
                                                <input type="text" id="country1" class="text_field">
                                                <!-- <div class="select-wrap select-wrap2">
                                                    <select name="country" id="country1" class="text_field">
                                                        <option value="">Select one</option>
                                                        <option value="bangladesh">Bangladesh</option>
                                                        <option value="india">India</option>
                                                        <option value="uruguye">Uruguye</option>
                                                        <option value="australia">Australia</option>
                                                        <option value="neverland">Neverland</option>
                                                        <option value="atlantis">Atlantis</option>
                                                    </select>
                                                    <span class="lnr icon-arrow-down"></span>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="address1">Ciudad Provincia</label>
                                                <input type="text" id="address1" class="text_field">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="address2">Región</label>
                                                <input type="text" id="address2" class="text_field">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="">
                                                <label for="zipcode">Código postal
                                                    <sup>*</sup>
                                                </label>
                                                <input type="text" id="zipcode" class="text_field" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="information_module">
                            <div class="toggle_title">
                                <h4>Metodos de Pago</h4>
                            </div>
                            <div class="information__set">
                                <div class="information_wrapper form--fields">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="first_name">Nombre Completo
                                                    <sup>*</sup>
                                                </label>
                                                <input type="text" id="first_name" class="text_field">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="country1">Numero de tarjeta
                                                    <sup>*</sup>
                                                </label>
                                                <input type="text" id="country1" class="text_field">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="address1">Codigo de seguridad</label>
                                                <input type="text" id="address1" class="text_field">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="address2">Fecha de vencimiento</label>
                                                <input type="text" id="address2" class="text_field">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="information_module">
                            <div class="toggle_title">
                                <h4>Redes sociales</h4>
                            </div>
                            <div class="information__set social_profile">
                                <div class="information_wrapper">
                                    <div class="social__single">
                                        <div class="social_icon">
                                            <span class="fa fa-facebook"></span>
                                        </div>
                                        <div class="link_field">
                                            <input type="text" class="text_field">
                                        </div>
                                    </div>
                                    <div class="social__single">
                                        <div class="social_icon">
                                            <span class="fa fa-twitter"></span>
                                        </div>
                                        <div class="link_field">
                                            <input type="text" class="text_field">
                                        </div>
                                    </div>
                                    <div class="social__single">
                                        <div class="social_icon">
                                            <span class="fa fa-google-plus"></span>
                                        </div>
                                        <div class="link_field">
                                            <input type="text" class="text_field">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="dashboard_setting_btn">
                            <button class="btn btn--md btn-primary">Guardar Cambios</button>
                            <button class="btn btn-md btn-danger">Cancelar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
import layout from "@/Layouts/Default/LayoutDefault.vue"
import HeaderAccount from './HeaderMenu.vue'

export default {
    layout,
    components: {
        HeaderAccount
    },
    data(){
        return {
            form: this.$inertia.form({
                campo: ''
            })            
        }
    },
    methods: {
        submit() {
            // this.form.post(this.route('register'), {
            //     onFinish: () => this.form.reset('password', 'password_confirmation'),
            // })
        }
  }
}

</script>


<style scoped>
    .table-custom th{
        font-size: 1.2rem;
    }

    .table-custom td{
        font-weight: bolder;
        font-size: 1.2rem;
    }
</style>
