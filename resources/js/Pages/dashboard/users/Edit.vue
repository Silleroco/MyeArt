<template id="">
    <div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><inertia-link :href="route('dashboard')">Home</inertia-link></li>
            <li class="breadcrumb-item"><inertia-link :href="route('users.index')">Usuarios</inertia-link></li>
            <li class="breadcrumb-item active" aria-current="page">Editar</li>
          </ol>
        </nav>
        <h1>Editar Usuario</h1>
        <div class="card">
            <div class="row">
                <form
                    @submit.prevent="submit" class="setting_form"
                >
                    <div class="row">
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
                                                <input type="text" id="lastName" class="text_field" v-model="form.lastName">
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
                                                <input type="text" id="usrname" class="text_field" v-model="form.name">
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="password">Clave
                                                    <sup>*</sup>
                                                </label>
                                                <input type="password" id="password" class="text_field" >
                                            </div>
                                        </div> -->
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
                                                <input type="text" id="prohead" class="text_field" v-model="form.biography">
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
                                                    <label for="first">Dirección
                                                        <sup>*</sup>
                                                    </label>
                                                    <input type="text" id="first" class="text_field" v-model="form.address">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="country">País
                                                        <sup>*</sup>
                                                    </label>
                                                    <input type="text" id="country" class="text_field" v-model="form.country">
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
                                                    <input type="text" id="address1" class="text_field" v-model="form.city">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="regiton">Región</label>
                                                    <input type="text" id="regiton" class="text_field" v-model="form.region">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="">
                                                    <label for="zipcode">Código postal
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
                                                    <input type="text" id="full_name" class="text_field" v-model="form.full_name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="card_brand">Número de tarjeta
                                                        <sup>*</sup>
                                                    </label>
                                                    <input type="text" id="card_brand" class="text_field" v-model="form.card_brand">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="card_last_four">Codigo de seguridad</label>
                                                    <input type="text" id="card_last_four" class="text_field" v-model="form.card_last_four">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="trial_ends_at">Fecha de vencimiento</label>
                                                    <input type="text" id="trial_ends_at" class="text_field" v-model="form.trial_ends_at">
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
                                                <input type="text" class="text_field" v-model="form.facebook">
                                            </div>
                                        </div>
                                        <div class="social__single">
                                            <div class="social_icon">
                                                <span class="fa fa-twitter"></span>
                                            </div>
                                            <div class="link_field">
                                                <input type="text" class="text_field" v-model="form.twitter">
                                            </div>
                                        </div>
                                        <div class="social__single">
                                            <div class="social_icon">
                                                <span class="fa fa-google-plus"></span>
                                            </div>
                                            <div class="link_field">
                                                <input type="text" class="text_field" v-model="form.google">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="dashboard_setting_btn">
                                <button
                                    class="btn btn--md btn-primary"
                                    type="submit"
                                >
                                    Guardar Cambios
                                </button>
                                <!-- <button class="btn btn-md btn-danger">Cancelar</button> -->
                            </div>
                        </div>
                    </div>
                </form>
            </div>



        </div>
    </div>
</template>
<script>
import Layout from '@/Layouts/Authenticated'

export default {
    props: ['user'],
    data() {
      return {
        form: {}
        }
    },
    created(){
        this.init()
    },
    methods: {
        init(){
            this.form = this.$inertia.form({
                _method: 'put',
                firstName: this.user.profile.firstName,
                lastName: this.user.profile.lastName,
                email: this.user.email,
                name: this.user.name,
                biography: this.user.profile.biography,
                address: this.user.profile.address,
                country: this.user.profile.country,
                city: this.user.profile.city,
                region: this.user.profile.region,
                zip_code: this.user.profile.zip_code,
                full_name: this.user.full_name,
                card_brand: this.user.card_brand,
                card_last_four: this.user.card_last_four,
                trial_ends_at: this.user.trial_ends_at,
                facebook: this.user.profile.facebook,
                twitter: this.user.profile.twitter,
                google: this.user.profile.google
            })
        },
        submit(evt) {
          evt.preventDefault()
          //this.form.post(route('users.update'))

          this.form.post(route('users.update', this.user.id), {
            //   preserveScroll: true,
              onSuccess: () => {
                  this.init();
              }
          })
        },
    },
    // Using a render function
    layout: (h, page) => h(Layout, [page]),
    metaInfo() {
      return {
        title: `Panel - Inicio`
      }
    },
}
</script>
