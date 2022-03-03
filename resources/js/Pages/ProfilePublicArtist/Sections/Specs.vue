<template>
    <div class="bg-primary content p-4 position-absolute">
        <div class="d-flex justify-content-end">
            <h3 class="text-price">20,00$</h3>
        </div>
        <div class="my-4 d-flex justify-content-between">
            <button class="btn btn-sm btn-secondary">
                Comprar
            </button>
            <button class="btn btn-sm btn-secondary">
                Agregar al Carrito
            </button>
        </div>
        <div class="mt-2 mb-2 d-flex">
            <div>
                <img src="/img/dw-avatar2.png" alt="">
            </div>
            <div class="ml-3">
                <div>
                    <h3>Autor:</h3>
                    <p>Daniel L Lewis P.</p>
                </div>
            </div>
        </div>
        <div class="my-3 d-flex">
            <div>
                <img src="/img/dw-avatar2.png" alt="">
            </div>
            <div class="ml-3">
                <div>
                    <p class="mb-0">Titulo Obra:</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti delectus molestias</p>
                </div>
            </div>
        </div>
        <div class="divider" />
        <div class="text-center mt-2">
            Atributos.
        </div>
        <div>
            <ul class="list">
                <li>
                    <img src="/img/dw-avatar2.png" alt="">
                    <span>
                        <p class="mb-0">20cm x 20cm</p>
                    </span>
                </li>
                <li>
                    <img src="/img/dw-avatar2.png" alt="">
                    <span>
                        <p class="mb-0">1kg.</p>
                    </span>
                </li>
                <li>
                    <img src="/img/dw-avatar2.png" alt="">
                    <span>
                        <p class="mb-0">Tematica Abstracta, Comtemporanea</p>
                    </span>
                </li>
                <li>
                    <img src="/img/dw-avatar2.png" alt="">
                    <span>
                        <p class="mb-0">Estilo. Clasico, Luminismo</p>
                    </span>
                </li>
                <li>
                    <img src="/img/dw-avatar2.png" alt="">
                    <span>
                        <p class="mb-0">Tecnica, Oleo, Pastel, Barniz</p>
                    </span>
                </li>
                <li>
                    <img src="/img/dw-avatar2.png" alt="">
                    <span>
                        <p class="mb-0">Fecha Desconocida</p>
                    </span>
                </li>
            </ul>
        </div>
    </div>
</template>

<style scoped>
    .content {
        width: 100%;
        min-height: 50vh;
        color: #fff;
    }

    .text-price {
        font-size: 2.5rem;
        color: #fff;
    }

    .divider {
        border: 1px solid white;
    }

    .list li{
        display: flex;
        align-items: center;
        margin-top: 10px;
    }

    .list li span{
        padding-left: 20px;
    }
</style>