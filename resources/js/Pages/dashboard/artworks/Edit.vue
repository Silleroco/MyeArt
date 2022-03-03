<template id="">
    <div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><inertia-link :href="route('dashboard')">Home</inertia-link></li>
            <li class="breadcrumb-item"><inertia-link :href="route('artworks.index')">Obras</inertia-link></li>
            <li class="breadcrumb-item active" aria-current="page">Editar</li>
          </ol>
        </nav>
        <h1>Editar Obra</h1>
        <div class="card">
            <div class="row">
                <form
                    @submit.prevent="submit" class="setting_form"
                >









                <div class="upload_modules">
                    <div class="modules__content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="product_name">Nombre</label>
                                    <input type="text" id="product_name" class="text_field" v-model="form.name" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="m-bottom-20 no-margin">
                                    <p class="label">Description</p>
                                    <textarea v-model="form.description" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="upload_modules mb-0">
                    <div class="modules__title">
                        <h4 class="title">Informacion adicional</h4>
                    </div>
                    <div class="modules__content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="dimension">Peso</label>
                                    <input type="number" id="dimension" class="text_field" v-model="form.weight" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="dimension">Ancho</label>
                                    <input type="number" id="dimension" class="text_field" v-model="form.width" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="dimension">Alto</label>
                                    <input type="number" id="dimension" class="text_field" v-model="form.height" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="upload_modules pricing--info">
                    <div class="modules__title">
                        <h4 class="title">Precio</h4>
                    </div>
                    <div class="modules__content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="rlicense">Precio Regular</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">$</span>
                                        <input type="number" id="rlicense" class="text_field" v-model="form.price" min="0">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exlicense">Precio de oferta</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">$</span>
                                        <input type="number" id="exlicense" class="text_field" v-model="form.offer" min="0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btns m-top-40">
                    <button
                        type="submit"
                        class="btn btn-lg btn-primary m-right-15"
                        >
                        Guardar Cambios
                    </button>
                </div>













                </form>
            </div>
        </div>
    </div>
</template>
<script>
import Layout from '@/Layouts/Authenticated'

export default {
    props: ['artwork'],
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
                //_method: 'put',
                name: this.artwork.name,
                description: this.artwork.description,
                price: this.artwork.price,
                offer: this.artwork.offer,
                weight: this.artwork.weight,
                width: this.artwork.width,
                height: this.artwork.height,
            })
        },
        submit(evt) {
          evt.preventDefault()
          this.form.post(route('dashboard.artworks.update', this.artwork.id), {
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
        title: `Panel - Editar Obra`
      }
    },
}
</script>
