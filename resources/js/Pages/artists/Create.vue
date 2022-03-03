<template>
  <div>
    <HeaderAccount />
      <div class="dashboard_contents mt-5">
          <div class="container">
            <div class="information_module">
              <div class="row pt-4 pb-3 px-4">

                <div class="col-12">
                  <h3 class='subtitle'>Crea tu perfil como Artista</h3>
                </div>

                <div class="col-12">
                  <label class="mb-0">Nombre Artístico</label>
                  <input type="text" class="" v-model="form.artistic_name" required>
                </div>

                <div class="col-12 my-2">
                  <h3 class="subtitle">Categorías</h3>
                  <div>
                    <SelectTagsCustom
                      :tags="tags"
                      v-on:update="form.tags = $event"
                    />
                  </div>
                </div>

                <div class="col-12">
                  <div class="dashboard_setting_btn">
                      <button
                          class="btn btn--md btn-primary-dark"
                          @click="submit"
                      >
                          Guardar Cambios
                      </button>
                  </div>
                </div>

              </div>
            </div>
          </div>
      </div>
  </div>
</template>

<script>
import layout from "@/Layouts/Default/LayoutDefault.vue"
import HeaderAccount from '@/Layouts/HeaderMenu'
import SelectTagsCustom from '@/Components/SelectTagsCustom'

export default {
  layout,
  props: ['tags', 'type'],

  components: {
    HeaderAccount,
    SelectTagsCustom
  },
  created(){
    console.log('this', this)
  },
  data() {
    return {
      itemSelected: [],
      form: this.$inertia.form({
          artistic_name: '',
          tags: [],
        }),
      }
  },
  methods: {
      submit(evt) {
        evt.preventDefault()
        // console.log('form', this.form)
        // console.log('query', route().params.type)
        this.form.post(route(`${route().params.type}.store`))
      },
  }
}
</script>
