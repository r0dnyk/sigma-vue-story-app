import { createApp } from 'vue'
import 'bootstrap/dist/js/bootstrap.bundle.min'
import './styles.css'

import Product from './components/Product'

const app = createApp({})

app.component('product', Product)

app.mount('#app')
app.mount('#app-cart')
app.mount('#app-wishlist')