<template>
  <div class="card-body">

    <breeze-validation-errors class="mb-3" />

    <form @submit.prevent="submit">
      <div class="form-group">
        <breeze-label for="email" value="Correo electrónico" />
        <breeze-input id="email" type="email" v-model="form.email" required autofocus />
      </div>

      <div class="form-group">
        <breeze-label for="password" value="Contraseña" />
        <breeze-input id="password" type="password" v-model="form.password" required autocomplete="new-password" />
      </div>

      <div class="form-group">
        <breeze-label for="password_confirmation" value="Confirmar contraseña" />
        <breeze-input id="password_confirmation" type="password" v-model="form.password_confirmation" required autocomplete="new-password" />
      </div>

      <div class="mb-0">
        <div class="d-flex justify-content-end">
          <breeze-button :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
            Resetear Contraseña
          </breeze-button>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
import BreezeButton from '@/Components/Button'
import BreezeGuestLayout from "@/Layouts/Guest"
import BreezeInput from '@/Components/Input'
import BreezeLabel from '@/Components/Label'
import BreezeValidationErrors from '@/Components/ValidationErrors'

export default {
  layout: BreezeGuestLayout,

  components: {
    BreezeButton,
    BreezeInput,
    BreezeLabel,
    BreezeValidationErrors,
  },

  props: {
    email: String,
    token: String,
  },

  data() {
    return {
      form: this.$inertia.form({
        token: this.token,
        email: this.email,
        password: '',
        password_confirmation: '',
      })
    }
  },

  methods: {
    submit() {
      this.form.post(this.route('password.update'), {
        onFinish: () => this.form.reset('password', 'password_confirmation'),
      })
    }
  }
}
</script>
