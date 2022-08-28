import './bootstrap';
import { createApp } from 'vue';
import router from "./router";
import store from "./store"
import Index from "./views/Index";
import Main from "./views/Main";
import Cart from "./views/Cart";

const app = createApp({
    components: {
        Index,
        Main,
        Cart,
    },

})

app.use(router)
app.use(store)
app.mount('#app');
