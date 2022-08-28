<template>
    <li class="product__item">
        <img :src="product.image" :alt="product.title" class="product-item__img">
        <h4 class="product-item__title">{{ product.title }}</h4>
        <div class="product-item__description">{{ product.description }}</div>

        <form class="product-item__form">
            <div class="product-item__price">{{ product.price }} ₽</div>

            <div class="product__counter">
                <button type="button" @click="decrementItem">
                    -
                </button>

                <input type="number" name="count" v-model.number="count" min="0" readonly>

                <button type="button" @click="incrementItem">
                    +
                </button>
            </div>

            <button class="button" type="submit" @click.prevent="addToCart(product.id, product.title, product.price)">
                В корзину
            </button>
        </form>
    </li>
</template>

<script>
export default {
    name: "ProductItem",
    props: ['product'],
    data() {
        return {
            count: 1,
        }
    },
    methods: {
        incrementItem() {
            this.count++;
        },
        decrementItem() {
            if (this.count > 1 ) {
                this.count--;
            }
        },
        addToCart(id, title, price) {
            this.$store.commit(
                'addProductToCart',
                {id: id, count: this.count, title: title, price: Number(price)}
            )
        },
    }
}
</script>

<style scoped>

.product__item {
    display: grid;
    height: auto;
    flex-grow: 0;
    flex-shrink: 0;
    flex-basis: calc((100% / var(--colums)) - (var(--gap) * (var(--colums) - 1)) /  var(--colums));
}
.product-item__img {
    display: block;
    margin: 0 auto 20px;
}
.product-item__title {
    margin: 0 0 10px;
}
.product-item__description {
    margin: 0 0 20px;
}
.product-item__form {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
}
.product-item__price {
    flex: 0 0 100%;
    font-size: 20px;
    font-weight: bold;
    text-align: right;
}
@media screen and (max-width: 767px) {
    .product-item__img {
        width: 100%;
        min-width: 175px;
    }
    .product-item__form {
        flex-direction: column;
    }
    .product-item__price {
        flex: auto;
        width: 100%;
    }
    .product-item__form .button {
        width: 100%;
    }
}
</style>
