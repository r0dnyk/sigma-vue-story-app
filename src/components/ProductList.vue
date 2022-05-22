<template>
  <div class="container">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
      <product></product>
    </div>
  </div>
</template>

<script>
import Product from './Product'

export default {
  name: 'ProductList',
  components: { Product }
}
</script>