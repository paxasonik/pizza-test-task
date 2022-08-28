<template>
    <li class="cart__item product">
        <h3 class="product__title">
            {{ product.title }}
        </h3>

        <div class="product__counter form__counter">
            <button type="button" @click="decrementProductCart(product.id)">
                -
            </button>

            <input type="number" v-model="product.count" name="count" min="0" readonly>

            <button type="button" @click="incrementProductCart(product.id)">
                +
            </button>
        </div>

        <b class="product__price">
            {{ product.price * product.count }} ₽
        </b>

        <button class="product__del button-del" type="button" @click.prevent="deleteProductCart(product.id)">
            <svg width="22" height="29" viewBox="0 0 22 29" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.6042 2.88944H14.5451V1.73371C14.5451 0.777727 13.694 0 12.6479 0H8.85358C7.8074 0 6.95631 0.777727 6.95631 1.73371V2.88944H1.897C0.850828 2.88944 0 3.66717 0 4.62315V7.51234H1.26476V26.5827C1.26476 27.5387 2.11559 28.3164 3.16176 28.3164H18.3394C19.3856 28.3164 20.2367 27.5387 20.2367 26.5827V7.51234H21.5014V4.62315C21.5014 3.66717 20.6503 2.88944 19.6042 2.88944ZM8.22106 1.73371C8.22106 1.41497 8.50449 1.15573 8.85358 1.15573H12.6479C12.9969 1.15573 13.2804 1.41497 13.2804 1.73371V2.88944H8.22106V1.73371ZM18.9719 26.5827C18.9719 26.9017 18.6885 27.1607 18.3394 27.1607H3.16176C2.81295 27.1607 2.52952 26.9017 2.52952 26.5827V7.51234H18.9719V26.5827ZM20.2367 6.35662H1.26476V4.62315C1.26476 4.30441 1.54819 4.04517 1.897 4.04517H19.6042C19.9532 4.04517 20.2367 4.30441 20.2367 4.62315V6.35662Z"/>
                <path d="M14.5466 24.2712C14.8962 24.2712 15.1788 24.0127 15.1788 23.6935V10.9798C15.1788 10.6605 14.8962 10.4018 14.5466 10.4018C14.197 10.4018 13.9141 10.6605 13.9141 10.9798V23.6935C13.9141 24.0127 14.197 24.2712 14.5466 24.2712Z" />
                <path d="M10.7494 24.2712C11.0991 24.2712 11.3819 24.0127 11.3819 23.6935V10.9798C11.3819 10.6605 11.0991 10.4018 10.7494 10.4018C10.4001 10.4018 10.1172 10.6605 10.1172 10.9798V23.6935C10.1172 24.0127 10.4001 24.2712 10.7494 24.2712Z" />
                <path d="M6.95673 24.2712C7.30636 24.2712 7.58898 24.0127 7.58898 23.6935V10.9798C7.58898 10.6605 7.30636 10.4018 6.95673 10.4018C6.60711 10.4018 6.32422 10.6605 6.32422 10.9798V23.6935C6.32422 24.0127 6.60711 24.2712 6.95673 24.2712Z" />
            </svg>
        </button>
    </li>
</template>

<script>
import { mapMutations } from 'vuex';

export default {
    name: "CartProductItem",
    props: ['product'],
    methods: {
        ...mapMutations([
            'deleteProductCart',
            'incrementProductCart',
            'decrementProductCart',
        ]),
    },
}
</script>

<style scoped>
.product {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 60px;
    border-bottom: 1px solid #cfcfcf;
    padding: 20px 0px;
}
.product__price {
    font-size: 24px;
    flex: 0 0 100px;
}
.product__title {
    flex: 1;
}
@media screen and (max-width: 767px) {
    .product {
        flex-wrap: wrap;
        row-gap: 10px;
        column-gap: 30px;
    }
    .product__title {
        flex: 0 0 100%;
    }
    .product__price {
        flex: auto;
    }
}
</style>
