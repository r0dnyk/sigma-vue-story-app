<template>
  <div class="col mb-5">
    <div class="card h-100">
      <img class="card-img-top" :src="image" :alt="name"/>
      <div class="card-body p-4">
        <div class="text-center">
          <h5 class="fw-bolder">{{ name }}</h5>
          <span>$</span><span>{{ price }}</span>
        </div>
      </div>
      <div class="d-grid gap-2 col-6 mx-auto pb-3">
        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="cart">Add to cart</a></div>
        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="wishlist">Add to wishlist</a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Product',
  props: {
    name: {
      type: String,
      isRequired: true,
    },
    image: String,
    price: Number,
  },
}
</script>
