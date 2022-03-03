<template>
    <section class="latest-product section--padding pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title pb-2">
                        <h2 class="title">Obras</h2>
                    </div>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="m-1">
                            <Buttom
                                text="obras destacadas"
                                :active="!lastest"
                                @click="handleChange"
                            />
                        </div>
                        <div class="m-1">
                            <Buttom
                                text="ultimas obras"
                                variant="secondary"
                                size="lg"
                                :active="lastest"
                                @click="handleChange"
                            />
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-12">
                    <div class="product-list">
                        <div class="tab-content" id="lp-tab-content">
                            <div
                                class="tab-pane fade show active"
                                id="tab1"
                                role="tabpanel"
                                aria-labelledby="tab-one"
                            >
                                <div class="row">
                                    <div
                                        class="col-md-6 col-lg-6 p-3"
                                        v-for="doc in docs"
                                        :key="doc.id"
                                    >
                                        <CardWorkArtModel 
                                            color="color-pink"
                                            :doc="doc"
                                        />
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="text-center m-top-20">
                            <inertia-link
                                :href="
                                    route('search')
                                "
                                class="btn btn--lg btn-primary"
                            >
                                Ver mas
                            </inertia-link>
                            <!-- <a href="" class="btn btn--lg btn-primary"
                                >Ver mas</a
                            > -->
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import CardWorkArtModel from "../../../Components/CardWorkArtModel1";
import Buttom from '../../../Components/ButtonCustom'

export default {
    props: ['docsLastest', 'docsPopulate'],
    components: {
        CardWorkArtModel,
        Buttom
    },
    created(){
        console.log('worksARtsSection', this.docs)
    },
    data() {
        return {
            lastest: true
        };
    },
    computed: {
        docs(){
            return this.lastest ? this.docsLastest : this.docsPopulate;
        }
    },
    methods: {
        handleChange(){
            this.lastest = !this.lastest;
        }
    }
};
</script>
