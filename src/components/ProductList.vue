<template>
  <div class="container">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
      <product
          v-for="product in products"
          :key="product.id"
          :name="product.name"
          :price="product.price"
          :count="product.count"
          :image="product.image"
      ></product>

    </div>
  </div>
</template>

<script>
import Product from './Product'
import json from '/framework/db.json'

export default {
  name: 'ProductList',
  components: { Product },

  data: () => ({
    products: json.products,
  })
}
</script>
