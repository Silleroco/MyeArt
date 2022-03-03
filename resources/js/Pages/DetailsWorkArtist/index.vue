<template>
    <div>
        <Header title="Pintura 22" />
        <section class="single-product-desc">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="item-preview border-none">
                            <div class="item-prev-area">
                                <div class="preview-img-wrapper">
                                    <div class="item__preview-img">
                                        <div class="item__preview-slider">
                                            <div class="prev-slide">
                                                <img :src="preview().photo" 
                                                    alt="Preview Image" 
                                                    class="w-100"
                                                >
                                            </div>
                                        </div>
                                        <div class="prev-nav thumb-nav">
                                            <div>
                                                <span 
                                                    v-if="preview().index !== 0"
                                                    class="lnr nav-left icon-arrow-left" 
                                                    @click="changeTo('prev')"
                                                />
                                            </div>
                                            <div>
                                                <span 
                                                    v-if="preview().index !== items.length -1"
                                                    class="lnr nav-right icon-arrow-right" 
                                                    @click="changeTo('next')"
                                                />
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="item__preview-thumb pb-4 mt-4 border-primary">
                                        <div class="prev-thumb ">
                                            <div 
                                                class="thumb-slider d-flex justify-content-around"
                                                
                                                >
                                                <div class="item-thumb" 
                                                    v-for="(item, i) in items" :key="i"> 
                                                    <img 
                                                        :src="item.photo" 
                                                        alt="Thumbnail Image"
                                                        style="width: 100px; height: 80px;"
                                                        @click="changeToPreview(item)"
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-info border-primary">
                            <div class="item-navigation">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li>
                                        <a href="#product-details" class="active" id="tab1" aria-controls="product-details" role="tab" data-toggle="tab" aria-selected="true">
                                            Detalles del producto</a>
                                    </li>
                                    <li>
                                        <a href="#product-comment" id="tab2" aria-controls="product-comment" role="tab" data-toggle="tab">
                                            Comentarios </a>
                                    </li>
                                    <li>
                                        <a href="#product-review" id="tab3" aria-controls="product-review" role="tab" data-toggle="tab">
                                            <span> Autor </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="fade show tab-pane product-tab active" id="product-details" role="tabpanel" aria-labelledby="tab1">
                                    <div class="tab-content-wrapper">
                                        <h3 class="text-primary">Información:</h3>
                                        <p class="p-bottom-30">Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the
                                            mattis, leo quam aliquet congue placerat mi id nisi interdum mollis. Praesent
                                            pharetra,
                                            justo ut scel erisque the mattis, leo quam aliquet congue justo ut scelerisque.
                                            Praesent
                                            pharetra, justo ut scelerisque the mattis, leo quam aliquet congue justo ut
                                            scelerisque.</p>
                                        <img src="img/prodesc.jpg" alt="This is product description thumbnail">
                                    </div>
                                </div>
                                <div class="fade tab-pane product-tab" id="product-comment" role="tabpanel" aria-labelledby="tab2">
                                    <div class="thread">
                                        <ul class="media-list thread-list">
                                            <li class="single-thread">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" src="img/m1.png" alt="Commentator Avatar">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <div>
                                                            <div class="media-heading">
                                                                <a href="author.html">
                                                                    <h4>Themexylum</h4>
                                                                </a>
                                                                <span>9 Hours Ago</span>
                                                            </div>
                                                            <span class="comment-tag buyer">Purchased</span>
                                                            <a href="#" class="reply-link">Reply</a>
                                                        </div>
                                                        <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                            sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                                                            interdum mollis. </p>
                                                    </div>
                                                </div>
                                                
                                                <ul class="children">
                                                    <li class="single-thread depth-2">
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object" src="img/m2.png" alt="Commentator Avatar">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-heading">
                                                                    <h4>AazzTech</h4>
                                                                    <span>6 Hours Ago</span>
                                                                </div>
                                                                <span class="comment-tag author">Author</span>
                                                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra,
                                                                    justo ut sceleris que the mattis, leo quam aliquet congue
                                                                    placerat mi id nisi interdum mollis. </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="single-thread depth-2">
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#">
                                                                    <img class="media-object" src="img/m1.png" alt="Commentator Avatar">
                                                                </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="media-heading">
                                                                    <h4>Themexylum</h4>
                                                                    <span>9 Hours Ago</span>
                                                                </div>
                                                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra,
                                                                    justo ut sceleris que the mattis, leo quam aliquet congue
                                                                    placerat mi id nisi interdum mollis. </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                
                                                <!-- <div class="media depth-2 reply-comment">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" src="img/m2.png" alt="Commentator Avatar">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <form action="#" class="comment-reply-form">
                                                            <textarea class="bla" name="reply-comment" placeholder="Write your comment..."></textarea>
                                                            <button class="btn btn--md btn-primary">Post Comment</button>
                                                        </form>
                                                    </div>
                                                </div> -->
                                            </li>
                                        </ul>
                                        
                                        <!-- <nav class="pagination-default ">
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true"><i class="fa fa-long-arrow-left"></i></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                                                <li class="page-item"><a class="page-link" href="#">10</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav> -->
                                        <div class="comment-form-area">
                                            <h4>Leave a comment</h4>
                                            <div class="media comment-form">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="img/m7.png" alt="Commentator Avatar">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <form action="#" class="comment-reply-form">
                                                        <textarea name="reply-comment" placeholder="Write your comment..."></textarea>
                                                        <button class="btn btn--sm btn-primary">Post Comment</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fade tab-pane product-tab" id="product-review" role="tabpanel" aria-labelledby="tab3">
                                    <div class="thread thread_review">
                                        <ul class="media-list thread-list">
                                            <li class="single-thread">
                                                <div class="media">
                                                    <div class="media-left">
                                                        
                                                            <img class="media-object rounded-circle" src="img/m1.png" alt="Commentator Avatar">
                                                        
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="clearfix">
                                                            <div class="pull-left">
                                                                <div class="media-heading">
                                                                    
                                                                        <h4 class="text-primary mb-0 font-weight-border">
                                                                            Autor:
                                                                        </h4>
                                                                        <h4>
                                                                            Daniel L Lewis P.
                                                                        </h4>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-4">
                                                    <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                        sceleris que the mattis, leo quam aliquet congue placerat.</p>
                                                </div>
                                                
                                            </li>
                                            
                                            <div class="ml-5">
                                                <button class="btn btn--md btn-primary">Ver Autor</button>
                                            </div>

                                        </ul>
                                        
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <aside id="sidebar" ref="sidebar" class="sidebar sidebar--single-product card-specs position-relative">
                            <div class="sidebar-card card-pricing bg-primary text-white">
                                <div class="my-1 border-none d-flex justify-content-end mb-0">
                                    <h1 class="text-white">
                                        20,00 <sup>$</sup>
                                    </h1>
                                </div>
                                <div class="row d-flex justify-content-around">
                                    <div class="col-5 btn-list buy">
                                        <span class="">Comprar</span>
                                    </div>
                                    <div class="col-5 btn-list add">
                                        <span class=" ">Agregar a carrito</span>
                                    </div>
                                </div>

                                <ul class="border-bottom">
                                    <li>
                                        <div class="custom-radio d-flex">
                                            <div class="mt-2 mr-2 img-list">
                                                <img 
                                                    class="media-object rounded-circle" 
                                                    src="/imagenes/icons/detailsWorkArtist/User.png" 
                                                    alt=""
                                                >
                                            </div>
                                            <div class="mt-2">
                                                
                                                    <div class="list-bold">Autor</div>
                                                    <p>Daniel L Lewis P.</p>
                                                
                                            </div>
                                        </div>
                                    </li>
                                    <li class="border-none">
                                        <div class="custom-radio d-flex">
                                            <div class="mt-2 mr-2 img-list">
                                                <img 
                                                    class="media-object rounded-circle" 
                                                    src="/imagenes/icons/detailsWorkArtist/Desc.png" 
                                                    alt=""
                                                >
                                            </div>
                                            <div class="mt-2">
                                                
                                                    <div class="mb-0">Titulo obra:</div>
                                                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                
                                <div class="mt-3">
                                    <div class="ml-4">
                                        <h3 class="list-bold text-white">Atritutos.</h3>
                                    </div>

                                    <ul class="list-specs mb-0 border-bottom">
                                        <li class="border-none">
                                            <div class="custom-radio d-flex align-items-center">
                                                <div class="mt-2 mr-2 img-list">
                                                    <img 
                                                        class="media-object rounded-circle" 
                                                        src="/imagenes/icons/detailsWorkArtist/Size.png" 
                                                        alt=""
                                                    >
                                                </div>
                                                <div class="mt-2">
                                                   20cm x 20xm
                                                </div>
                                            </div>
                                        </li>
                                        <li class="border-none">
                                            <div class="custom-radio d-flex align-items-center">
                                                <div class="mt-2 mr-2 img-list">
                                                    <img 
                                                        class="media-object rounded-circle" 
                                                        src="/imagenes/icons/detailsWorkArtist/Weight.png" 
                                                        alt=""
                                                    >
                                                </div>
                                                <div class="mt-2">
                                                   1 kg
                                                </div>
                                            </div>
                                        </li>
                                        <li class="border-none">
                                            <div class="custom-radio d-flex align-items-center">
                                                <div class="mt-2 mr-2 img-list">
                                                    <img 
                                                        class="media-object rounded-circle" 
                                                        src="/imagenes/icons/detailsWorkArtist/Thematic.png" 
                                                        alt=""
                                                    >
                                                </div>
                                                <div class="mt-2">
                                                   Tematica: Abstracta Contemporanea
                                                </div>
                                            </div>
                                        </li>
                                        <li class="border-none">
                                            <div class="custom-radio d-flex align-items-center">
                                                <div class="mt-2 mr-2 img-list">
                                                    <img 
                                                        class="media-object rounded-circle" 
                                                        src="/imagenes/icons/detailsWorkArtist/Style.png" 
                                                        alt=""
                                                    >
                                                </div>
                                                <div class="mt-2">
                                                   Estilo: Clasico, Lumisimo
                                                </div>
                                            </div>
                                        </li>  
                                        <li class="border-none">
                                            <div class="custom-radio d-flex align-items-center">
                                                <div class="mt-2 mr-2 img-list">
                                                    <img 
                                                        class="media-object rounded-circle" 
                                                        src="/imagenes/icons/detailsWorkArtist/Technique.png" 
                                                        alt=""
                                                    >
                                                </div>
                                                <div class="mt-2">
                                                   Tecnica: Oleo, Pastel, Barniz
                                                </div>
                                            </div>
                                        </li>    
                                        <li class="border-none mb-2">
                                            <div class="custom-radio d-flex align-items-center">
                                                <div class="mt-2 mr-2 img-list">
                                                    <img 
                                                        class="media-object rounded-circle" 
                                                        src="/imagenes/icons/detailsWorkArtist/Calendar.png" 
                                                        alt=""
                                                    >
                                                </div>
                                                <div class="m-2">
                                                   Fecha: Desconocida
                                                </div>
                                            </div>
                                        </li>                                                                                                                     
                                    </ul>
                                </div>


                            </div>

                        </aside>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import Layout from "@/Layouts/Default/LayoutDefault"
import Header from "@/Layouts/Header"

export default {
    layout: Layout,
    props: ['artwork'],
    components: {
        Header
    },
  destroyed () {
      window.removeEventListener('scroll', this.handleScroll);
  },
    created(){
        console.log('artwork', this.artwork)

        window.addEventListener('scroll', this.handleScroll);

        let newItems = this.items.map((item, index) => ({
            ...item,
            index
        }))

        console.log(newItems)

        this.items = newItems;
        this.currentItem = newItems[0];
    },
    data(){
        return {
            items: [
                {
                    id: 1,
                    photo: "/imagenes/pinturas/pintura-1.jpg"
                },
                {
                    id: 2,
                    photo: "/imagenes/pinturas/pintura-2.jpg"
                },
                {
                    id: 3,
                    photo: "/imagenes/pinturas/pintura-3.jpg"
                },
                {
                    id: 4,
                    photo: "/imagenes/pinturas/pintura-4.jpg"
                },
                {
                    id: 5,
                    photo: "/imagenes/pinturas/pintura-5.jpg"
                },
                {
                    id: 6,
                    photo: "/imagenes/pinturas/pintura-6.jpg"
                },
                {
                    id: 7,
                    photo: "/imagenes/pinturas/pintura-7.jpg"
                },
                {
                    id: 8,
                    photo: "/imagenes/pinturas/pintura-8.jpg"
                }
            ],
            currentItem: null
        }
    },
    methods: {
        preview(){
            return this.currentItem;
        },
        changeToPreview(item){
            console.log(item)
            this.currentItem = item;
        },
        changeTo(type){
            let index =  this.currentItem.index;

            let newIndex = type === 'prev' ? index - 1 : index +1;

            if (index === -1 || index === this.items.length){
                return ;
            }
            let newItem = {
                ...[...this.items].splice(newIndex, 1)[0]
            };

            this.currentItem = newItem;
        },
        handleScroll(event){
            // console.log('scrollFn', event)

            if (window.innerWidth < 1000){
                return;
            }

            if (window.scrollY > 270 && window.scrollY < 1000){
                // let { sidebar: refSidebar } = this.$refs;
                // if (refSidebar){
                    let elem = document.getElementById('sidebar');
                    // console.log('ele', elem)
                    elem.style.top = `${window.scrollY -280}px`;
                    // ele = 500;
                    // this.$refs.sidebar.top = 300;
                    // console.log('refs', this.$refs.sidebar)
                // }

            }
            // console.log('scrrol', window.scrollY)
        }
    }
}
</script>

<style scoped>

    .card-specs {
        max-height: 95vh;
        overflow: hidden;
    }

    .list-specs li {
        margin-top: 5px;
        font-size: 1.1rem;
    }

    .list-bold {
        font-weight: border;
        font-size: 1.2rem;
    }

    .img-list {
        display: flex;
        align-items: center;
    }
    .img-list img {
        width: 30px;
    }

    .btn-list {
        background: red;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 90%;
        height: 50px;
    }

    .btn-list.buy {
        background: #79F013;
        color: black;
    }

    .btn-list.add {
        background: #F5B731;
    }


    /* @media (min-width: 768px){

    } */
</style>