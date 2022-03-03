<template>
    <div>
        <HeaderAccount />
        <div class="dashboard_contents my-5">
            <div class="dashboard_contents">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <form @submit.prevent="submit" enctype="multipart/form-data">
                                <div class="upload_modules">
                                    <div class="modules__title">
                                        <h4 class="title">{{artwork ? 'Actualizar' : 'Subir' }} Obra</h4>
                                    </div>
                                    <div class="modules__content">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="product_name">Nombre</label>
                                                    <input type="text" id="product_name" class="text_field" v-model="form.name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="category">Categoría</label>
                                                    <div class="select-wrap select-wrap2">
                                                        <select name="country" id="category" class="text_field" v-model="form.category_id">
                                                            <option
                                                                v-for="category in categories" :key="category.id"
                                                                :value="category.id"
                                                            >
                                                                {{ category.name }}
                                                            </option>
                                                        </select>
                                                        <span class="lnr icon-arrow-down"></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                    v-for="attrib in listAttributes"
                                                    :key="attrib.id"
                                                    class="col-md-4"
                                                >
                                                <div class="form-group">
                                                    <label for="attribute1">{{ attrib.name }}</label>
                                                    <div class="select-wrap select-wrap2">
                                                        <select name="attribute1" id="attribute1" class="text_field" v-model="form.attributes[attrib.name]" required>
                                                            <option
                                                                v-for="elem in attrib.elements"
                                                                :key="elem.id"
                                                                :value="elem.id"
                                                            >
                                                                {{ elem.name }}
                                                            </option>
                                                        </select>
                                                        <span class="lnr icon-arrow-down"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="m-bottom-20 no-margin">
                                                    <p class="label">Descripción</p>
                                                    <textarea v-model="form.description" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upload_modules module--upload">
                                    <div class="modules__title">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h4 class="title">Galería</h4>
                                            </div>
                                            <div class="custom_upload" v-if="!imagenesOnlyRead">
                                                <label for="thumbnail">
                                                    <input type="file" id="thumbnail" class="files" @change="newFile" required>
                                                    <b-button class="btn btn-primary btn--md">Subir Imagen</b-button>
                                                </label>
                                            </div>
                                            <div v-else>
                                                <b-button class="btn btn-primary btn--md" @click="changeImagenes()">Cambiar imagenes</b-button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modules__content" v-if="previewFiles.length">
                                        <div class="row">
                                            <div
                                                :class="`${imagenesOnlyRead ? 'row' : 'col-12'} mb-3`"
                                                v-for="(preview, i) in previewFiles " :key="i"
                                                >
                                                <div
                                                    class="row d-flex align-items-center"
                                                    v-if="!imagenesOnlyRead"
                                                    >
                                                    <div class="col-3">
                                                        <img :src="preview.url" alt="" style="width: 100px; height: 100px">
                                                    </div>
                                                    <div class="col-3">
                                                        {{ preview.name }}
                                                    </div>
                                                    <div class="col-3">
                                                        {{ preview.size }} PX
                                                    </div>
                                                    <div class="col-3 d-flex justify-content-center btn-cancel">
                                                        <span class="material-icons" @click="removeFile(preview)">
                                                            do_not_disturb_on
                                                        </span>
                                                    </div>

                                                </div>
                                                <div class="col-3 ml-2" v-else>
                                                    <div class="">
                                                        <img :src="preview.url" alt="" style="width: 100px; height: 100px">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>

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
                                        :disabled="!previewFiles.length"
                                        >
                                        Guardar Cambios
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import layout from "@/Layouts/Default/LayoutDefault.vue"
import HeaderAccount from '@/Layouts/HeaderMenu.vue'

export default {
    props: ['categories', 'artwork'],
    layout,
    components: {
        HeaderAccount
    },
    created(){
        console.log('props', this);

        if (this.artwork){
            let attrs = this.artwork.elements
                .reduce((acc, value)=>{
                    acc[value.attribute.name] = value.id
                    return acc;
                }, []);

            this.form = this.$inertia.form({
                category_id: this.artwork.category_id,
                attributes: attrs,
                elements: this.artwork.elements.map(e => e.id),
                name: this.artwork.name,
                description: this.artwork.description,
                price: this.artwork.price,
                offer: this.artwork.offer,
                weight: this.artwork.weight,
                width: this.artwork.width,
                height: this.artwork.height,
                image: []
            });

            this.previewFiles = this.artwork.artwork_images.map( img => ({ url: img.location }));
            this.imagenesOnlyRead = true;
        }
    },
    data(){
        return {
            previewFiles: [],
            imagenesOnlyRead: false,
            form: this.$inertia.form({
                _method : this.artwork ? 'patch' : 'post',
                category_id: this.categories[0].id,
                attributes: [],
                elements: [],
                name: "",
                description: "",
                price: 100,
                offer: 0,
                weight: 100,
                width: 100,
                height: 100,
                image: []
            })
        }
    },
    computed: {
        listAttributes(){

            return this.categories.find(c => c.id === this.form.category_id)?.attributes ?? []
        }
    },
    methods: {
      submit(evt) {
        evt.preventDefault()

        this.form.elements = Object.keys(this.form.attributes).map(a => this.form.attributes[a]);
        if (!this.imagenesOnlyRead) {
            this.form.image = this.previewFiles.map(p => p.file)
        }

        console.log('form', this.form)

        // console.log('query', route().params.type)
        this.artwork ?
            this.$inertia.post(route('my-artworks.update', [this.artwork.id]), {
                id: this.artwork.id,
                _method: 'put',
                ...this.form
            })
            // this.form.post(route('my-artworks.update', { id: this.artwork.id, _method: 'put'}))
            //this.form.patch(route('my-artworks.update', this.artwork.id))
            :
            this.form.post(route('my-artworks.store'))
      },
      newFile(event){
        let file = event.target.files[0];
        let preview = {
            file,
            url: URL.createObjectURL(file),
            name: file.name,
            size: Number(file.size / 1024).toFixed(0)
        };

        let previewFiles = [...this.previewFiles, preview]
        // this.form.image = [this.form.image, file];

        this.previewFiles = previewFiles;
        console.log('file', file)
      },
      removeFile(preview){
        this.previewFiles = this.previewFiles.filter(p => p.name !== preview.name);
        // this.form.image = this.form.image.filter(p => p.name !== preview.name);
      },
      changeImagenes(){
          this.imagenesOnlyRead = false;
          this.previewFiles = [];
      }
  }
}

</script>


<style scoped>
    .btn-cancel {
        cursor: pointer;
        color: red;
    }

    .btn-cancel img {
        width: 10px;
        height: 10px;
    }

</style>
