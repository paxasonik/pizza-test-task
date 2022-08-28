<template>
    <section class="products mt-5 mb-5">
        <div class="container">
            <h1>Каталог</h1>
            <product-list :products="products"></product-list>
        </div>
    </section>
</template>

<script>
import ProductList from "../components/ProductList";
export default {
    name: "Main",
    components: {
        ProductList
    },
    data() {
        return {
            products: null,
        }
    },
    mounted() {
        this.getProducts()
    },
    methods: {
        getProducts() {
            axios.get('/api/products')
                .then(res => {
                    this.products = res.data
                })
                .catch(error => {
                    console.log("ERRRR:: ", error.response.data);
                })
        },
    },
}
</script>

<style scoped>
.products h1 {
    margin-bottom: 30px;
}
</style>
