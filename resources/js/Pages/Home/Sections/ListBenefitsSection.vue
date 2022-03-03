<template>
    <section class="services" style="background:#E3E9F3;">
        <div class="container">
            <div class="row">
                <div
                    v-for="(item, i) in items"
                    :key="i"
                    class="col-lg-3 col-sm-6"
                >
                    <div class="service-single">
                        <span class="">
                            <img :src="`/imagenes/icon-beneficiary/${item.img}`" alt="" class="img-listBenefits">
                        </span>
                        <h4>{{ item.title }}</h4>
                        <p>
                            {{ item.description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
const items = [
    {
        title: "Pago Seguro",
        description:
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet est id corrupti ratione iste delectus, placeat quam quis",
        img: "secure_payment.png",
    },
    {
        title: "Productos Verficados",
        description:
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet est id corrupti ratione iste delectus, placeat quam quis",
        img: "verified.png",
    },
    {
        title: "Autores Verificados",
        description:
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet est id corrupti ratione iste delectus, placeat quam quis",
        img: "verify_authors.png",
    },
    {
        title: "Obras Originales",
        description:
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet est id corrupti ratione iste delectus, placeat quam quis",
        img: "original_worksArt.png",
    },
];

export default {
    data() {
        return {
            items: items,
        };
    },
};
</script>

<style scoped>

</style>
