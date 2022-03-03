<template id="">
    <div>
        <HeaderAccount />

        <div class="container my-5">
            <form
            @submit.prevent="submit" class="setting_form"
            >
            <div class="row">
                <div class="col-md-12">
                    <div class="information_module">
                        <div class="information__set profile_images">
                            <div class="information_wrapper">
                                <div class="profile_image_area">
                                    <div class="d-flex align-items-center">

                                        <div style="width: 130px;">
                                            <Avatar
                                            :path="(typeof form.avatar === 'string') ?
                                            form.avatar : form.avatar.url"
                                            />
                                        </div>

                                        <div class="img_info">
                                            <div class="btn btn-outline-secondary btn--sm" @click="$refs.avatar.click()">
                                                <span>
                                                    {{ form.avatar !== "" ? 'Cambia' : 'Agrega' }} tu foto de perfil
                                                </span>
                                            </div>
                                            <input ref="avatar" type="file" id="thumbnail" class="files" @change="newAvatar">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="information_module">
                            <div class="toggle_title">
                                <h4>Información Personal</h4>
                            </div>
                            <div class="information__set">
                                <div class="information_wrapper form--fields row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstName">Nombre
                                                <sup>*</sup>
                                            </label>
                                            <input type="text" id="firstName" class="text_field" v-model="form.firstName">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastName">Apellido
                                                <sup>*</sup>
                                            </label>
                                            <input type="text" id="lastName" class="text_field" v-model="form.lastName">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailad">Mail
                                                <sup>*</sup>
                                            </label>
                                            <input type="text" id="emailad" class="text_field" v-model="form.email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastName">Apellido
                                            <sup>*</sup>
                                        </label>
                                        <input type="text" id="lastName" class="text_field" v-model="form.lastName">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="emailad">Mail
                                            <sup>*</sup>
                                        </label>
                                        <input type="text" id="emailad" class="text_field" v-model="form.email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="usrname">Nombre de Usuario
                                            <sup>*</sup>
                                        </label>
                                        <input type="text" id="usrname" class="text_field" v-model="form.name">
                                    </div>
                                </div>
                                <!-- <div class="col-md-6">
                                <div class="form-group">
                                <label for="password">Clave
                                <sup>*</sup>
                            </label>
                            <input type="password" id="password" class="text_field" >
                        </div>
                    </div> -->
                    <!-- <div class="col-md-6">
                    <div class="form-group">
                    <label for="conpassword">Confirm Password
                    <sup>*</sup>
                </label>
                <input type="password" id="conpassword" class="text_field" placeholder="re-enter password">
            </div>
        </div> -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="prohead">Rellena tu biografía</label>
                <input type="text" id="prohead" class="text_field" v-model="form.biography">
            </div>
        </div>
        <div class="col-12 my-2" v-if="user.seller">
            <h3 class="subtitle">Cambiar etiquetas</h3>
            <div>
                <!-- <SelectTagsCustom
                :dataInitial="user.seller?.tags ?? []"
                :tags="tags"
                v-on:update="form.tags = $event"
                /> -->
                <SelectTagsCustom
                :tags="tags"
                v-on:update="form.tags = $event"
                />
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="col-md-12">
    <div class="information_module">
        <div class="toggle_title">
            <h4>Facturación</h4>
        </div>
        <div class="information__set">
            <div class="information_wrapper form--fields">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first">Dirección
                                <sup>*</sup>
                            </label>
                            <input type="text" id="first" class="text_field" v-model="form.address">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="country">País
                                <sup>*</sup>
                            </label>
                            <input type="text" id="country" class="text_field" v-model="form.country">
                            <!-- <div class="select-wrap select-wrap2">
                            <select name="country" id="country1" class="text_field">
                            <option value="">Select one</option>
                            <option value="bangladesh">Bangladesh</option>
                            <option value="india">India</option>
                            <option value="uruguye">Uruguye</option>
                            <option value="australia">Australia</option>
                            <option value="neverland">Neverland</option>
                            <option value="atlantis">Atlantis</option>
                        </select>
                        <span class="lnr icon-arrow-down"></span>
                    </div> -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="address1">Ciudad Provincia</label>
                    <input type="text" id="address1" class="text_field" v-model="form.city">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="regiton">Región</label>
                    <input type="text" id="regiton" class="text_field" v-model="form.region">
                </div>
            </div>

            <div class="col-md-6">
                <div class="">
                    <label for="zipcode">Código postal
                        <sup>*</sup>
                    </label>
                    <input type="text" id="zipcode" class="text_field" v-model="form.zip_code">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<div class="col-md-12">
    <div class="information_module">
        <div class="toggle_title">
            <h4>Metodos de Pago</h4>
        </div>
        <div class="information__set">
            <div class="information_wrapper form--fields">
                <div class="row">
                    <input id="" type="text">
                    <!-- Stripe Elements Placeholder -->
                    <div id="card-element"></div>




                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first_name">Nombre Completo
                                <sup>*</sup>
                            </label>
                            <input type="text" id="first_name" class="text_field">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="card-holder-name">Numero de tarjeta
                                <sup>*</sup>
                            </label>
                            <input type="text" id="card-holder-name" class="text_field">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address1">Codigo de seguridad</label>
                            <input type="text" id="address1" class="text_field">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address2">Fecha de vencimiento</label>
                            <input type="text" id="address2" class="text_field">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="information_module">
        <div class="toggle_title">
            <h4>Redes sociales</h4>
        </div>
        <div class="information__set social_profile">
            <div class="information_wrapper">
                <div class="social__single">
                    <div class="social_icon">
                        <span class="fa fa-facebook"></span>
                    </div>
                    <div class="link_field">
                        <input type="text" class="text_field" v-model="form.facebook">
                    </div>
                </div>
                <div class="social__single">
                    <div class="social_icon">
                        <span class="fa fa-twitter"></span>
                    </div>
                    <div class="link_field">
                        <input type="text" class="text_field" v-model="form.twitter">
                    </div>
                </div>
                <!-- <div class="social__single">
                <div class="social_icon">
                <span class="fa fa-google-plus"></span>
            </div>
            <div class="link_field">
            <input type="text" class="text_field" v-model="form.google">
        </div>
    </div> -->
</div>
</div>
</div>
</div>
<div class="col-md-12">
    <div class="dashboard_setting_btn">
        <button
        class="btn btn--md btn-primary"
        type="submit"
        >
        Guardar Cambios
    </button>
    <!-- <button class="btn btn-md btn-danger">Cancelar</button> -->
</div>
</div>
</div>
</form>
</div>
</div>
</template>
<script>
import layout from "@/Layouts/Default/LayoutDefault.vue"
import HeaderAccount from '@/Layouts/HeaderMenu.vue'
import Avatar from '@/Components/Avatar.vue'
import SelectTagsCustom from '@/Components/SelectTagsCustom'

export default {
    props: ['tags', 'intent'],
    layout,
    components: {
        HeaderAccount,
        Avatar,
        SelectTagsCustom
    },
    data() {
        return {
            form: {}
        }
    },
    created(){
        let user = this.$page.props.auth.user;

        this.init();

        console.log('props', {
            es: this,
            tags: this.tags
        })
    },
    computed: {
        user(){
            return this.$page.props.auth.user;
        }
    },
    methods: {
        init(){
            this.form = this.$inertia.form({
                _method: 'put',
                avatar: this.user.profile.avatar ?? "",
                firstName: this.user.profile.firstName,
                lastName: this.user.profile.lastName,
                email: this.user.email,
                name: this.user.name,
                biography: this.user.profile.biography,
                address: this.user.profile.address,
                country: this.user.profile.country,
                city: this.user.profile.city,
                region: this.user.profile.region,
                zip_code: this.user.profile.zip_code,
                card_brand: this.user.card_brand,
                card_last_four: this.user.card_last_four,
                trial_ends_at: this.user.trial_ends_at,
                facebook: this.user.profile.facebook,
                twitter: this.user.profile.twitter,
                //google: this.user.profile.google,
                tags: this.user.profile?.seller?.tags ?? []
            })
        },
        submit() {
            // console.log('fomr', this.form)
            if (this.form.avatar && (typeof this.form.avatar === "object")){
                // console.log('file', this.form.avatar.file)
                let file = this.form.avatar.file;
                this.form.avatar = file;
            }

            this.form.post(route('dashboard-users.update', this.user.id), {
                //   preserveScroll: true,
                onSuccess: () => {
                    this.init();
                }
            })
        },
        newAvatar(event){
            let file = event.target.files[0];
            let preview = {
                file,
                url: URL.createObjectURL(file),
                name: file.name,
                size: Number(file.size / 1024).toFixed(0)
            };

            this.form.avatar = preview;
            console.log('file', file)
        }
    }
}

</script>

<style scoped>
.table-custom th{
    font-size: 1.2rem;
}

.table-custom td{
    font-weight: bolder;
    font-size: 1.2rem;
}

</style>
