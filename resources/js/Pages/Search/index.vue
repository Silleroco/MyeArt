<template>
    <div style="background: white;">
        
        <section class="hero-area2 hero-area3 bgimage">
            <div class="bg_image_holder">
                <img src="img/hero-image01.png" alt="background-image">
            </div>
            <div class="hero-content content_above">
                <div class="content-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="hero__content__title">
                                    <h1>Busca tu obra favorita</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="filter-area product-filter-area filter-area2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>
            </div>
        </div>
        <section class="product-grid p-bottom-100 p-4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-12 order-lg-0 order-md-1 order-sm-1 order-1 pl-5 pr-5">
                        <aside class="sidebar product--sidebar">
                            
                            <div>
                                <h2 class="text-primary">Categoria</h2>
                                <div class="sidebar-card card--category border-primary mb-2">
                                
                                    <!-- <a class="card-title" href="#collapse1" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse1">
                                        <h5 class="mb-0">Pintura
                                            <span class="icon-arrow-down text-primary"></span>
                                        </h5>
                                    </a> -->
                                    <!-- <div class="collapse collapsible-content" id="collapse1">
                                        <ul class="card-content">
                                            <li>
                                                <a href="#">
                                                    option 1
                                                </a>
                                            </li>
                                        </ul>
                                    </div> -->
                                </div>
                                <div class="sidebar-card card--category border-primary mb-2">
                                
                                    <a class="card-title" href="#category" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="category">
                                        <h5 class="mb-0">{{ form.category.name ? form.category.name : 'Categoria de Pintura'}}
                                            <span class="icon-arrow-down text-primary"></span>
                                        </h5>
                                    </a>
                                    <div class="collapse collapsible-content" id="category">
                                        <ul 
                                            class="card-content">
                                            <li
                                                v-for="category in displayCategories"
                                                :key="category.id"
                                            >
                                                <a 
                                                    style="cursor:pointer"
                                                    @click="handleChange('category', category)"
                                                    >
                                                    {{ category.name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="mt-4">
                                <div                                 
                                    v-for="attribute in attributes"
                                    :key="attribute.id">
                                    <h2 class="text-primary">{{ attribute.name }}</h2>
                                    <div class="sidebar-card card--category border-primary mb-2">
                                    
                                        <a class="card-title" :href="`#collaps-${attribute.name}`" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse3">
                                            <h5 class="mb-0">{{ 
                                                    form.elements[attribute.id]?.name
                                                }}
                                                <span class="icon-arrow-down text-primary"></span>
                                            </h5>
                                        </a>
                                        <div class="collapse collapsible-content" :id="`collaps-${attribute.name}`">
                                            <ul class="card-content">
                                                <li v-for="element in attribute.elements" :key="element.id">
                                                    <a
                                                        style="cursor:pointer"
                                                        @click="handleChangeElement(attribute, element)"
                                                    >
                                                        {{ element.name }}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="mt-4">
                                    <ItemRange 
                                        title="Precio"
                                        prefix=" €"
                                        :min="0"
                                        :max="1000"
                                        :handleChange="value => form.price = value"
                                    />
                                </div>

                                <!-- <div class="mt-4">
                                    <h2 class="text-primary">Orientacion</h2>
                                    <div class="row">
                                        <div 
                                            v-for="(item, i) in [1,2,3]" :key="i"
                                            class="col-4">
                                            <img src="img/buyr1.png" alt="" style="width: 100%">
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="mt-4"> -->
                                    <!-- <h2 class="text-primary">Tamaño</h2> -->
                                    <!-- <div class="row">
                                        <div class="col-4">
                                            <img src="img/buyr1.png" alt="" style="width: 100%">
                                        </div>
                                        <div class="col-4">
                                            <img src="img/buyr1.png" alt="" style="width: 100%">
                                        </div>
                                        <div class="col-4">
                                            <img src="img/buyr1.png" alt="" style="width: 100%">
                                        </div>
                                    </div> -->
                                <!-- </div> -->
                                <div class="mt-4">
                                    <ItemRange 
                                        title="Altura"
                                        prefix=" + CM"
                                        :min="0"
                                        :max="500"
                                        :handleChange="value => form.height = value"
                                    />
                                </div>
                                <div class="mt-4">
                                    <ItemRange 
                                        title="Ancho"
                                        prefix=" + CM"
                                        :min="0"
                                        :max="500"
                                        :handleChange="value => form.width = value"
                                    />
                                </div>
                                <div class="mt-4">
                                    <button class="btn btn-primary" @click="print()">Buscar</button>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div 
                        class="col-xl-9 col-lg-8 col-md-12 order-lg-1 order-md-0 order-sm-0 order-0 product-list"
                        v-if="displayDocs.length"
                        >
                        <div class="row">
                            <div 
                                class="col-xl-4 col-lg-6 col-md-6"
                                v-for="doc in displayDocsByPage"
                                :key="doc.id"                                
                            >
                                <CardWordArtModel :doc="doc" />
                            </div>
                        </div>

                        <Pagination 
                            :size="displayDocs.length"
                            :porPage="porPage"
                            v-bind:page="currentPage"
                            v-on:update="updateHandler"
                        />
                            <!-- @update:modelValue="currentPage = value" -->
                            <!-- v-on:update:currentPage="currentPage = $event" -->
              
                    </div>
                    <div v-else class="col-xl-9 col-lg-8 col-md-12 mt-5">
                        <div class="text-muted text-center">
                            Sin Resultados
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="mt-5">
                <NewsletterSection />
            </div>
        </section>

    </div>

</template>

<script>
import layout from "@/Layouts/Default/LayoutDefault"
import Header from "@/Layouts/Header"
import CardWordArtModel from "@/Components/CardWorkArtModel1"
import NewsletterSection from "@/Pages/Home/Sections/NewsletterSection"
import ItemRange from '@/Components/ItemRange'

import Pagination from '@/Components/Pagination'

export default {
    layout,
    props: ['categories', 'artworks'],
    components: {
        Header,
        CardWordArtModel,
        NewsletterSection,
        ItemRange,
        Pagination
    },
    created(){
        console.log('props', {
            categories: this.categories,
            artworks: this.artworks
        })

        this.form.category = this.displayCategories[0];
    },
    data(){
        return {
            currentPage: 1,
            porPage: 5,
            form: {
                category: {},
                elements: {},
                price: [],
                height: [],
                width: []
            }
        }
    },
    computed: {
        displayCategories(){
            let categoryAll = {
                id: null,
                name: "Todas"
            }

            return [
                categoryAll,
                ...this.categories
            ]
        },
        attributes(){
            return this.categories ? this.categories
                .find( c => c.id === this.form.category.id)
                ?.attributes : []
        },
        displayDocs(){
            return this.artworks ? 
                this.artworks.filter(artwork => this.filterByForm(artwork))
                : 
                [];
        },
        displayDocsByPage(){
            let chunk = window._.chunk(this.displayDocs, this.porPage);
            console.log('chunk', chunk)
            return chunk[this.currentPage -1];
        }
    },
    methods: {
        updateHandler(event){
            console.log('update', event)
            this.currentPage = event;
        },
        filterByForm(artwork){
            let valid = true;

            // Verificar Categoria
            if (this.form.category.id !== null && (artwork.category_id !== this.form.category.id)){
                valid = false;
            }

            // Verificar Precios
            if (this.form.price.length 
                && !(Number(artwork.price) >= this.form.price[0] 
                && Number(artwork.price) <= this.form.price[1] )
            ){
                valid = false;
            }

            // Verficar Altura

            if (this.form.height.length 
                && !(Number(artwork.height) >= this.form.height[0] 
                && Number(artwork.height) <= this.form.height[1] )
            ){
                valid = false;
            }

            // Verficar Ancho

            if (this.form.width.length 
                && !(Number(artwork.width) >= this.form.width[0] 
                && Number(artwork.width) <= this.form.width[1] )
            ){
                valid = false;
            }

            let elems = Object.values(this.form.elements).map(e => e.id);
            console.log('elems', elems)
            // Verificar elementos

            let elemConc = elems.filter(e => artwork.elements.find( elem => elem.id === e))
            console.log('elemsConc', elemConc)
            
            if (elems.length && !elemConc.length){
                valid = false;
            }

            return valid;
        },
        handleChange(field, value){
            console.log('event', {
                field,
                value
            })
            this.form[field] = value;

            if (field === 'category'){
                this.form.elements = [];
                window.$('#category').removeClass('show')
            }

            // let div = document.getElementById(`collaps-${value.name}`);
            // console.log('div', div)
        },
        handleChangeElement(attribute, element){
            this.form.elements = {
                ...this.form.elements,
                [attribute.id]: element
            }

            window.$(`#collaps-${attribute.name}`).removeClass('show');

            console.log('attribute', {
                attribute, element
            })
            

        },
        print(){
            console.log('print', this.form)
        }

    },
}
</script>
