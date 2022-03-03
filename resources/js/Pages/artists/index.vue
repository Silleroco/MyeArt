<template>  
    <div>
        <Header title="Artistas" />
        <div style="background: #E3E9F3;">
            <section class="latest-product section--padding">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-lg-12">
                            <div class="product-list">
                                <div class="tab-content" id="lp-tab-content">
                                    <div
                                        class="tab-pane fade show active"
                                        id="tab1"
                                        role="tabpanel"
                                        aria-labelledby="tab-one"
                                    >
                                        <div class="mb-5">
                                            <div class="row">
                                                <!-- <div class="col-6 d-flex align-items-center">
                                                    <h4 class="text-muted">Buscar Obra por Categoria</h4>
                                                </div> -->
                                                <div class="col-md-6 ">
                                                    <input type="text" 
                                                        :placeholder="`Buscar por ${field}`"
                                                        v-model="search"
                                                    >
                                                </div>
                                                <div class="col-3">
                                                    <div class="row">
                                                        <div
                                                            class="col-9 search__select select-wrap p-0 m-0"
                                                        >
                                                            <select
                                                                name="category"
                                                                class="select--field btn-primary "
                                                                v-model="field"
                                                            >
                                                                <option 
                                                                    v-for="f in fields" :key="f.id"
                                                                    :value="f.label" 
                                                                >
                                                                    {{ f.label }}
                                                                </option>
                                                            </select>
                                                            <span
                                                                class="icon-arrow-down"
                                                            ></span>
                                                        </div>
                                                        <!-- <div class="col-3 m-0 p-0">
                                                            <button
                                                                type="submit"
                                                                class="search-btn btn--lg btn-primary"
                                                            >
                                                                Buscar
                                                            </button>
                                                        </div> -->
                                                   
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div
                                                class="col-md-6 col-lg-4 my-2"
                                                v-for="doc in displayByDocs"
                                                :key="doc.id"
                                            >
                                                <CardBIOArtist 
                                                    :doc="doc"
                                                />
                                            </div>
                                        </div>
                                        <Pagination 
                                            :size="artists.length"
                                            :porPage="porPage"
                                            v-bind:page="currentPage"
                                            v-on:update="currentPage = $event"
                                        />
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</template>

<script>
import Layout from "@/Layouts/Default/LayoutDefault"
import Header from "@/Layouts/Header"
import CardBIOArtist from "@/Components/CardBIOArtist";
import Pagination from "@/Components/Pagination";

export default {
    layout: Layout,
    props: ['artists'],
    components: {
        Header,
        CardBIOArtist,
        Pagination
    },
    created(){
        console.log('props', this.artists)
    },
    data(){
        return {
            fields: [
                { id: 'name', label: 'Nombre' },
                { id: 'nameArtistic', label: 'Nombre Artistico' }
            ],
            field: "Nombre",
            search: "",
            currentPage: 1,
            porPage: 6,
        }
    },
    computed: {
        displayDocs(){
            return this.artists.filter(a => this.field === 'Nombre' ?
               a.seller.user.name.toLowerCase().includes(this.search)
               :
               a.artistic_name.toLowerCase().includes(this.search)
            )
        },
        displayByDocs(){
            let chunk = window._.chunk(this.displayDocs, this.porPage);
            
            return chunk[this.currentPage -1];
        }
    
    }
}
</script>

<style scoped>
    .product-single {
        background: none;
        height: auto;
    }

    .select--field {
        color: white;
    }
</style>