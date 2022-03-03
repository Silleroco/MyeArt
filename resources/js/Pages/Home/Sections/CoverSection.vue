<template>
    <section 
        class="hero-area bgimage"
        style="
            background-image: url('imagenes/Banner-home.jpg'); 
            background-size: cover;
            background-position:center;
        "
    >
        
        <div class="hero-content content_above">
            <div class="content-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="hero__content__title">
                                <h1 class="display-3">
                                    El arte que todos
                                    <br />
                                    llevamos dentro.
                                </h1>
                                <p class="tagline">
                                    Convierte tu arte en una comunidad.
                                </p>
                            </div>
                            
                            <div class="search-area">
                                <div class="row">
                                    <div class="col-md-10 offset-md-1">
                                        <div class="search_box">
                                            <div class="d-lg-flex align-items-center">
                                                <h4 class="text-muted m-0 flex-1">Buscar Obra</h4>
                                                <div
                                                    class="search__select select-wrap"
                                                >
                                                    <select
                                                        name="category"
                                                        class="select--field "
                                                        v-model="form.category"
                                                    >
                                                        <option value="">
                                                           Categorias
                                                        </option>
                                                        <option 
                                                            v-for="category in categories" :key="category.id"
                                                            :value="category.id" 
                                                        >
                                                            {{ category.name }}
                                                        </option>
                                                    </select>
                                                    <span
                                                        class="icon-arrow-down"
                                                    ></span>
                                                </div>
                                                <inertia-link :href="`/obras`" class="btn btn-lg btn-primary">
                                                        Buscar
                                                </inertia-link>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
    </section>
</template>

<script>
export default ({
    props: ['categories'],
    data(){
        return {
            form: this.$inertia.form({
                category: ""
            })
        }
    },
    methods: {
        submit() {
            this.$inertia.get(`/obras?category=${this.form.category}`)
            // this.form.get(this.route('search'))
        }
    }
})
</script>

