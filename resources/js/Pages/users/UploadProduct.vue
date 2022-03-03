<template>
    <div>
        <HeaderAccount />
        <div class="dashboard_contents my-5">
            <div class="dashboard_contents">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <form action="#">
                                <div class="upload_modules">
                                    <div class="modules__title">
                                        <h4 class="title">Producto</h4>
                                    </div>
                                    <div class="modules__content">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="product_name">Nombre</label>
                                                    <input type="text" id="product_name" class="text_field">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="category">Categoria</label>
                                                    <div class="select-wrap select-wrap2">
                                                        <select name="country" id="category" class="text_field">
                                                            <option value=""></option>
                                                        </select>
                                                        <span class="lnr icon-arrow-down"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="category">Atrituto 1</label>
                                                    <div class="select-wrap select-wrap2">
                                                        <select name="country" id="category" class="text_field">
                                                            <option value=""></option>
                                                        </select>
                                                        <span class="lnr icon-arrow-down"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="category">Atrituto 2</label>
                                                    <div class="select-wrap select-wrap2">
                                                        <select name="country" id="category" class="text_field">
                                                            <option value=""></option>
                                                        </select>
                                                        <span class="lnr icon-arrow-down"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="category">Atrituto 3</label>
                                                    <div class="select-wrap select-wrap2">
                                                        <select name="country" id="category" class="text_field">
                                                            <option value=""></option>
                                                        </select>
                                                        <span class="lnr icon-arrow-down"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="m-bottom-20 no-margin">
                                                    <p class="label">Description</p>
                                                    <textarea></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upload_modules module--upload">
                                    <div class="modules__title">
                                        <h4>Galeria</h4>
                                    </div>
                                    <div class="modules__content">
                                        <!-- <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <div class="upload_wrapper">
                                                        <div class="upload-field">
                                                            <div class="custom_upload">
                                                                <label for="thumbnail">
                                                                    <input type="file" id="thumbnail" class="files">
                                                                    <span class="btn btn-primary btn--md"><i class="icon-cloud-upload"></i>Subir Imagen</span>
                                                                </label>
                                                            </div>
                                                            <p>100x100px PX
                                                            </p>
                                                            <div class="upload_cross">
                                                                <span><img src="/img/cancel.svg" alt="" class="svg"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
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
                                                    <input type="text" id="dimension" class="text_field">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="dimension">Tamaño</label>
                                                    <input type="text" id="dimension" class="text_field">
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
                                                        <input type="text" id="rlicense" class="text_field" placeholder="200">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exlicense">Precio de oferta</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">$</span>
                                                        <input type="text" id="exlicense" class="text_field" placeholder="800">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btns m-top-40">
                                    <button type="submit" class="btn btn-lg btn-primary m-right-15">Guardar Cambios</button>
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
import HeaderAccount from '../Account/HeaderMenu.vue'

export default {
    layout,
    components: {
        HeaderAccount
    }
}

</script>


<style scoped>


</style>