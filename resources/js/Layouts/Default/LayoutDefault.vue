<template>
  <div>
    <NavBar />
    
    <main class="">
      <slot />
    </main>

    <Footer />
  </div>
</template>

<script>
import NavBar from './NavBar'
import Footer from './Footer'

export default {
  components: {
    NavBar,
    Footer
  },

  data() {
    return {
    }
  },
}
</script>
