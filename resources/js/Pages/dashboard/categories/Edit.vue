<template id="">

</template>
<script>
export default {
    props: ['tags'],
    data() {
      return {
        form: this.$inertia.form({
            artistic_name: '',
            tags: [],
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
