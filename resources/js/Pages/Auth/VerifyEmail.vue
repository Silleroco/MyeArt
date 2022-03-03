<template>

  <div class="card-body">
    <div class="mb-3 small text-muted">
      Gracias por registrarte! Antes de comenzar, ¿podría verificar su dirección de correo electrónico haciendo clic en el enlace que le acabamos de enviar? Si no recibió el correo electrónico, con gusto le enviaremos otro.
    </div>

    <div class="alert alert-success" role="alert" v-if="verificationLinkSent" >
      Se ha enviado un nuevo enlace de verificación a la dirección de correo electrónico que proporcionó durante el registro.
    </div>

    <form @submit.prevent="submit">
      <div class="mt-4 d-flex justify-content-between">
        <b-button 
          @click="submit"
          class="btn btn-primary" :disabled="form.processing"
          >
          Reenviar
        </b-button>

        <inertia-link :href="route('logout')" method="post" as="button" class="btn btn-link">
          Cerrar Sesión
        </inertia-link>
      </div>
    </form>
  </div>
</template>

<script>
    import BreezeButton from '@/Components/Button'
    import BreezeGuestLayout from "@/Layouts/Guest"

    export default {
        layout: BreezeGuestLayout,

        components: {
            BreezeButton,
        },

        props: {
            status: String
        },

        data() {
            return {
                form: this.$inertia.form()
            }
        },

        methods: {
            submit() {
                this.form.post(this.route('verification.send'))
            },
        },

        computed: {
            verificationLinkSent() {
                return this.status === 'verification-link-sent';
            }
        }
    }
</script>
