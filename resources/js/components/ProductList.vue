<template>
    <ul class="product__list">
        <product-item v-for="product in products" :product="product"  :key="product.id"></product-item>
    </ul>
</template>

<script>
import ProductItem from "./ProductItem";
export default {
    name: "ProductList",
    components: {ProductItem},
    props: ['products'],
}
</script>

<style scoped>

.product__list {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    --gap: 40px;
    --colums: 4;
    gap: var(--gap);
}
</style>
