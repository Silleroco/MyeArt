<template id="">

</template>
<script>
export default {
    props: ['attribute'],
    data() {
      return {
        form: this.$inertia.form({
            //
            }),
        }
    },
    methods: {
        submit(evt) {
          evt.preventDefault()
          this.form.post(route('elements.update'))
        },
    }
}
</script>
