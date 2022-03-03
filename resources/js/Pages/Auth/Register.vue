<template>
<div>
  <Header title="Registrarse" />
  <section class="signup_area section--padding">
    <div class="container">
      <div class="row justify-content-center my-5">
        <div class="col-sm-12 col-md-8 col-lg-6">
          <div class="card shadow-sm px-3">
            <div class="card-body p-0 px-4">

              <breeze-validation-errors class="mb-3" />

              <form @submit.prevent="submit">
                  <div class="form-group text-center">
                      <h3 class="font-weight-bolder"> Crea tu cuenta </h3>
                      <p class="text-muted px-4">Y podras disponer de un sin fin de obras a tu disposicion o vender las tuyas propias.</p>
                  </div>

                  <div class="form-group">
                    <breeze-label for="firstName" value="Nombres *" />
                    <breeze-input id="firstName" type="text" v-model="form.firstName" required autofocus autocomplete="Nombres"/>
                  </div>

                  <div class="form-group">
                    <breeze-label for="lastName" value="Apellidos *" />
                    <breeze-input id="lastName" type="text" v-model="form.lastName" required autofocus autocomplete="Apellidos" />
                  </div>

                <div class="form-group">
                  <breeze-label for="email" value="Correo electrónico *" />
                  <breeze-input id="email" type="email" v-model="form.email" required />
                </div>

                <div class="form-group">
                    <breeze-label for="name" value="Nombre de usuario *" />
                    <breeze-input id="name" type="text" v-model="form.name" required autofocus autocomplete="name" />
                </div>

                <div class="form-group">
                  <breeze-label for="password" value="Clave *" />
                  <breeze-input id="password" type="password" v-model="form.password" required autocomplete="new-password" />
                </div>

                <div class="form-group">
                  <breeze-label for="password_confirmation" value="Confirmar Clave *" />
                  <breeze-input id="password_confirmation" type="password" v-model="form.password_confirmation" required autocomplete="new-password" />
                </div>

                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <breeze-checkbox name="terms" id="terms" v-model:checked="form.terms" />

                    <label class="custom-control-label" for="terms">
                      He leído y acepto los términos y condición de uso
                    </label>
                  </div>
                </div>

                <div class="mb-0">
                  <div class="d-flex justify-content-start align-items-baseline">
                    <button @click="submit" class="mr-4 btn  btn--lg btn-primary" :class="{ 'text-white-50': form.processing }"
                      :disabled=" form.processing || !form.terms"
                    >
                      Registrate
                    </button>
                    <inertia-link :href="route('login')" class="text-muted mr-3 text-decoration-none">
                      ya tienes una cuenta ?
                    </inertia-link>

                  </div>
                </div>

                <div class="d-flex justify-content-center mt-3">
                  <div>
                    <label>O inicia sesion con</label>
                    <div class="row justify-content-center">
                        <a class="btn btn-social-icon btn-facebook ml-2 mr-2" :href="route('redirectFacebook')">
                            <span class="fa fa-facebook"></span>
                        </a>
                        <a class="btn btn-social-icon btn-google ml-2 mr-2" :href="route('redirectFacebook')">
                            <span class="fa fa-google"></span>
                        </a>
                    </div>
                  </div>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
</div>

</template>

<script>
import Layout from "@/Layouts/Default/LayoutDefault"
import Header from '@/Layouts/Header'

import BreezeButton from '@/Components/Button'
import BreezeCheckbox from "@/Components/Checkbox";
import BreezeInput from '@/Components/Input'
import BreezeLabel from '@/Components/Label'
import BreezeValidationErrors from '@/Components/ValidationErrors'

export default {
  layout: Layout,

  components: {
    Header,
    BreezeButton,
    BreezeCheckbox,
    BreezeInput,
    BreezeLabel,
    BreezeValidationErrors,
  },

  data() {
    return {
      form: this.$inertia.form({
        firstName: '',
        lastName: '',
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
        terms: false,
      })
    }
  },

  methods: {
    submit() {
      this.form.post(this.route('register'), {
        onFinish: () => this.form.reset('password', 'password_confirmation'),
      })
    }
  }
}
</script>
