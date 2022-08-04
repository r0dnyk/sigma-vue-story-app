<template>
  <div class="col mb-5">
    <div class="card h-100">
      <img class="card-img-top" :src="image" :alt="name">
      <div class="card-body p-4">
        <div class="text-center">
          <h5 class="fw-bolder">{{ name }}</h5>
          <span>$</span><span>{{ price }}</span>
          <p class="mt-3">
            Stock:
            <strong v-if="count !== 0" class="text-success">Available</strong>
            <strong v-else class="text-danger">Sold out</strong>
          </p>
        </div>
      </div>

      <div class="d-grid gap-2 col-6 mx-auto pb-3">
        <button :disabled="count === 0"
                :class="`btn btn-${count !== 0 ? 'success' : 'secondary'} w-100 shadow-none`"
                @click="addToCart"
        >
          Add to cart
        </button>
        <button class="btn btn-warning w-100 shadow-none">
          Add to wishlist
        </button>
      </div>
    </div>
  </div>

</template>

<script>
export default {
  name: 'Product',
  props: {
    id: {
      type: Number,
      isRequired: true,
    },
    name: {
      type: String,
      isRequired: true,
    },
    image: String,
    price: Number,
    count: Number,
  },
  methods: {
    addToCart() {
      this.$root.addProduct({
        id: this.id,
        name: this.name,
        image: this.image,
        price: this.price,
        count: this.count,
      })
    }
  }
}
</script>
