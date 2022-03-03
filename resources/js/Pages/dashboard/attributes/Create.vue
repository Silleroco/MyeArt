<template id="">

</template>
<script>
export default {
    props: ['category_id'],
    data() {
      return {
        form: this.$inertia.form({
            }),
        }
    },
    methods: {
        submit(evt) {
          evt.preventDefault()
          this.form.post(route('artists.store'))
        },
    }
}
</script>
