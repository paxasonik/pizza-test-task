import Vue from 'vue'
import { createStore } from 'vuex'

const store = createStore({
    state: () => ({
        cartProducts: [],
        orderInfo : null,
    }),
    mutations: {
        addProductToCart(state, {id, count, title, price}) {
            const item = state.cartProducts.find(item => item.id === id);

            if (item) {
                item.count += count
            } else {
                state.cartProducts.push({
                    id,
                    count,
                    title,
                    price,
                })
            }
        },
        deleteProductCart(state, id) {
            state.cartProducts = state.cartProducts.filter(item => item.id !== id);
        },
        resetCart(state) {
            state.cartProducts = [];
        },
        updateOrderInfo(state, orderInfo) {
            state.orderInfo = orderInfo;
        },
        incrementProductCart(state, id) {
            const item = state.cartProducts.find(item => item.id === id);
            item.count++;
        },
        decrementProductCart(state, id) {
            const item = state.cartProducts.find(item => item.id === id);
            if (item.count > 1) item.count--;
        }
    },
    getters: {
        cartTotalPrice(state) {
            return state.cartProducts.reduce((acc, item) => (item.price * item.count) + acc, 0)
        },
        cartTotalNumber(state) {
            return state.cartProducts.reduce((acc, item) => (item.count) + acc, 0);
        },
        getOrderNumber(state) {
            if (state.orderInfo) return state.orderInfo.id
        },
        isCartProduct(state) {
            if (state.cartProducts.length !== 0) return true
        },
        getCartProduct(state) {
            return state.cartProducts
        },
        CartQtyProducts(state) {
            return state.cartProducts.reduce((acc, item) => item.count + acc, 0)
        },
    },
})

export default store;


