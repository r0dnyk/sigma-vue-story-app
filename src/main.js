import { createApp } from 'vue'
import 'bootstrap/dist/js/bootstrap.bundle.min'
import './styles.css'

import ProductList from './components/ProductList'

const app = createApp({})

app.component('product-list', ProductList)

app.mount('#app')
