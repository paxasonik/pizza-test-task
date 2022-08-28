<template>
    <section class="cart mt-5 mb-5">
        <div class="container">
            <div class="order">
                <h2>Оформление заказа</h2>
                <form action="" method="post">
                    <label class="form__label">
                        <input class="form__input" type="text" v-model="name" placeholder="Введите ваше полное имя*">
                        <span class="form__value">ФИО</span>
                        <span class="form__error" v-if="formError.name">{{ formError.name }}}</span>
                    </label>
                    <label class="form__label">
                        <input class="form__input" type="text" v-model="address" placeholder="Введите ваш адрес*">
                        <span class="form__value">Адрес доставки</span>
                        <span class="form__error" v-if="formError.address">{{ formError.address }}}</span>
                    </label>
                    <label class="form__label">
                        <input class="form__input" type="tel" v-model="phone" placeholder="Введите ваш телефон*">
                        <span class="form__value">Телефон</span>
                        <span class="form__error" v-if="formError.phone">{{ formError.phone }}}</span>
                    </label>
                    <label class="form__label">
                        <input class="form__input" type="email" v-model="email" placeholder="Введи ваш Email*">
                        <span class="form__value">Email</span>
                        <span class="form__error" v-if="formError.email">{{ formError.email }}}</span>
                    </label>
                    <label class="form__label">
                        <textarea class="form__input form__input--area" v-model="comment" placeholder="Ваши пожелания"></textarea>
                        <span class="form__value">Комментарий к заказу</span>
                        <span class="form__error" v-if="formError.comment">{{ formError.comment }}}</span>
                    </label>
                    <button class="cart__button button" type="submit" @click.prevent="addOrder">
                        Оформить заказ
                    </button>
                </form>
            </div>
        </div>
    </section>
</template>

<script>
import {mapGetters} from 'vuex';

export default {
    name: "cartOrder",
    data() {
        return {
            total_price: null,
            total_count: null,
            name: null,
            address: null,
            phone: null,
            email: null,
            comment: null,
            products: null,
            formError: {
                name: null,
                address: null,
                phone: null,
                email: null,
                comment: null,
            },
        }
    },
    methods: {
        addOrder() {
            axios.post('/api/order', {
                total_price: this.cartTotalPrice,
                total_count: this.cartTotalNumber,
                name: this.name,
                address: this.address,
                phone: this.phone,
                email: this.email,
                comment: this.comment,
                products: this.getCartProduct,
            })
            .then(res => {
                this.formData = {}
                this.formError = {}
                this.$store.commit('resetCart')
                this.$store.commit('updateOrderInfo', res.data)
                this.$router.push({ name: 'orderInfo' })
            })
            .catch(error => {
                this.formError = error.response.data.errors || {};
            });
        },
    },
    computed: {
        ...mapGetters(['cartTotalPrice', 'cartTotalNumber', 'getCartProduct']),
    }
}
</script>

<style scoped>
.order h2 {
    margin-bottom: 30px;
}
.form__label:not(:last-child) {
    margin-bottom: 25px;
}
.form__label {
    position: relative;
    display: block;
    color: #737373;
}
.form__input {
    padding: 28px 15px 13px 20px;
    width: 100%;
    height: 65px;
    border-radius: 0;
    background-color: transparent;
    border: 1px solid #cfcfcf;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-transition: all .2s ease;
    transition: all .2s ease;
    color: #222;
    font-size: 16px;
}
.form__input--area {
    height: 140px;
    resize: none;
}
.form__value {
    position: absolute;
    top: 10px;
    left: 20px;
    font-size: 12px;
    line-height: 1;
    color: #737373;
    font-weight: 300;
}
.form__error {
    position: absolute;
    bottom: -17px;
    left: 20px;
    font-size: 11px;
    line-height: 14px;
    color: #ff4d00;
}
</style>
