<template>
    <section class="cart mt-5">
        <div class="container">
            <h1>Корзина</h1>
            <div class="cart__qty">{{ cartTotalNumber }} товара</div>
            <ul class="cart__list">
                <cart-product-item v-for="product in cartProducts" :product="product" :key="product.id"></cart-product-item>
            </ul>
            <h3 class="mt-5">
                Итого: {{ cartTotalPrice }} ₽
            </h3>
        </div>
    </section>
</template>

<script>
import CartProductItem from "./CartProductItem";
import { mapGetters, mapState } from 'vuex';

export default {
    name: "CartComponents",
    components: {CartProductItem},
    computed: {
        ...mapGetters(['cartTotalPrice', 'cartTotalNumber']),
        ...mapState(['cartProducts'])
    }
}
</script>

<style scoped>
.cart h1 {
    margin-bottom: 10px;
}
.cart__list {
    display: grid;
    border-top: 1px solid #cfcfcf;
}
.cart__qty {
    color: #9d9d9d;
    margin-bottom: 30px;
}
</style>
