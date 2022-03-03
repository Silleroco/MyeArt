<template>
  <div>
    <Header title="Iniciar Sesión" />
    <section class="login_area section--padding">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                <breeze-validation-errors class="mb-3" />
                  <form @submit.prevent="submit">
                      <div class="cardify login">
                          <div class="login--header">
                              <h3>Iniciar Sesión</h3>
                              <p>Y podrás dispoiner de un sin fin de obras a tu desposición o vender las tuyas propias</p>
                          </div>
                          <div class="login--form">
                              <div class="form-group">
                                  <label for="email">Email</label>
                                  <input id="email" type="email" v-model="form.email" required autofocus>
                              </div>
                              <div class="form-group">
                                  <label for="password">Contraseña</label>
                                  <input id="password" type="password" v-model="form.password" required autocomplete="current-password">
                              </div>
                              <!-- <div class="form-group">
                                  <div class="custom_checkbox">
                                      <input type="checkbox" id="ch2">
                                      <label for="ch2">
                                          <span class="shadow_checkbox"></span>
                                          <span class="label_text text-muted">
                                            He leido y acepto los terminos y condición de uso
                                          </span>
                                      </label>
                                  </div>
                              </div> -->
                                <b-button
                                  @click="submit"
                                  class="ml-4 btn--lg btn btn-primary mr-2"
                                  :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
                                  Iniciar
                                </b-button>
                                <inertia-link :href="route('password.request')" class="text-muted mr-3">
                                    Olvide mi contraseña
                                </inertia-link>
                                <inertia-link :href="route('register')" class="text-muted mr-3">
                                    ¿ No tienes una cuenta?
                                </inertia-link>
                                <div class="d-flex justify-content-center mt-3">
                                  <div>
                                    <label>O inicia sesion con</label>
                                    <div class="row justify-content-center">
                                        <a class="btn btn-social-icon btn-facebook ml-2 mr-2" :href="route('redirectFacebook')">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                        <a class="btn btn-social-icon btn-google ml-2 mr-2" :href="route('redirectGoogle')">
                                            <span class="fa fa-google"></span>
                                        </a>
                                    </div>
                                  </div>
                                </div>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
    </section>
  </div>

  <!-- <div class="card-body">

    <breeze-validation-errors class="mb-3" />

    <div v-if="status" class="alert alert-success mb-3 rounded-0" role="alert">
      {{ status }}
    </div>

    <form @submit.prevent="submit">
      <div class="form-group">
        <breeze-label for="email" value="Email" />
        <breeze-input id="email" type="email" v-model="form.email" required autofocus />
      </div>

      <div class="form-group">
        <breeze-label for="password" value="Password" />
        <breeze-input id="password" type="password" v-model="form.password" required autocomplete="current-password" />
      </div>

      <div class="form-group">
        <div class="custom-control custom-checkbox">
          <breeze-checkbox id="remember_me" name="remember" v-model:checked="form.remember" />

          <label class="custom-control-label" for="remember_me">
            Remember Me
          </label>
        </div>
      </div>

      <div class="mb-0">
        <div class="d-flex justify-content-end align-items-baseline">
          <inertia-link v-if="canResetPassword" :href="route('password.request')" class="text-muted mr-3">
            Forgot your password?
          </inertia-link>

          <breeze-button class="ml-4" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
            Log in
          </breeze-button>
        </div>
      </div>

      <div class="flex items-center justify-end mt-4">
          <a class="ml-1 btn btn-primary" href="/redirect" style="margin-top: 0px !important;background: #4c6ef5;color: #ffffff;padding: 5px;border-radius:7px;" id="btn-fblogin">
              <i class="fa fa-facebook-square" aria-hidden="true"></i> Login with Facebook
          </a>
      </div>



    </form>
  </div> -->
</template>

<script>
import layout from "@/Layouts/Default/LayoutDefault.vue"
import Header from "@/Layouts/Header.vue"

import BreezeButton from '@/Components/Button'
import BreezeGuestLayout from "@/Layouts/Guest"
import BreezeInput from '@/Components/Input'
import BreezeCheckbox from '@/Components/Checkbox'
import BreezeLabel from '@/Components/Label'
import BreezeValidationErrors from '@/Components/ValidationErrors'

export default {
  layout: layout,

  components: {
    BreezeButton,
    BreezeInput,
    BreezeCheckbox,
    BreezeLabel,
    BreezeValidationErrors,
    Header
  },

  props: {
    canResetPassword: Boolean,
    status: String
  },

  data() {
    return {
      form: this.$inertia.form({
        email: '',
        password: '',
        remember: false
      })
    }
  },

  methods: {
    submit() {
      this.form
          .transform(data => ({
            ... data,
            remember: this.form.remember ? 'on' : ''
          }))
          .post(this.route('login'), {
            onFinish: () => this.form.reset('password'),
          })
    }
  }
}
</script>
