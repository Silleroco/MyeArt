<template>
    
<div>
    
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-contents d-flex justify-content-center">
                        <h2 class="page-title">Pinturas 22</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="author-profile-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <Gallery />
                </div>
                <div class="col-lg-4 col-12">
                    <Specs />
                </div>
                <div class="col-lg-8 col-12">
                    <ContentTabs />
                </div>
            </div>
        </div>
    </section>
    
</div>
</template>
<script>
    import LayoutDefault from '../../Layouts/Default/LayoutDefault.vue'

    // Sections
    import Gallery from './Sections/Gallery.vue'
    import ContentTabs from './Sections/ContentTabs.vue'
    import Specs from './Sections/Specs.vue'

    export default {
        layout: LayoutDefault,
        
        data(){
            return {

            }
        },
        components: {
            Gallery,
            ContentTabs,
            Specs
        }
    }
</script>
