<template>

    <div class="container" v-if="getOrderNumber">
        <div class="d-flex align-items-center justify-content-center h-75">
            <h1 class="text-center">
                Ваш заказ № {{ getOrderNumber }}
            </h1>
        </div>
    </div>

    <div class="" v-else-if="isCartProduct">
        <cart-product></cart-product>
        <cart-order></cart-order>
    </div>

    <div class="container" v-else>
        <div class="d-flex align-items-center justify-content-center h-75">
            <h1 class="text-center">
                Корзина пустая
            </h1>
        </div>
    </div>

</template>

<script>
import cartProduct from '../components/CartProduct';
import cartOrder from '../components/CartOrder';
import { mapGetters } from 'vuex';

export default {
    name: "Cart",
    components: {
        cartProduct,
        cartOrder,
    },
    computed: {
        ...mapGetters(['getOrderNumber', 'isCartProduct'])
    }
}
</script>

<style scoped>

</style>
