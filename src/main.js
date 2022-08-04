import {createApp} from 'vue'
import 'bootstrap/dist/js/bootstrap.bundle.min'
import './styles.css'

import ProductList from './components/ProductList'
import Product from "./components/Product";

const app = createApp({
    data: () => ({
        cart: [],
    }),
    methods: {
        addProduct(product) {
            console.log(Product)
            this.cart.push(product)
        },
        removeProduct(index) {
            this.cart.splice(index, 1)
        },
    }
})

app.component('product-list', ProductList)

app.mount('#app')
