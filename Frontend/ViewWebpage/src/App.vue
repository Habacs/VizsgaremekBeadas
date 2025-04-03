<template>
 
<Navbar/>
<RouterView/>
<CartButton/>
</template>
  
<script>
import {RouterView} from 'vue-router'
import Navbar from './components/layout/Navbar.vue'
import CartButton from './components/CartButton.vue';
export default{
  components:{
    RouterView,
    Navbar,
    CartButton
  }
}
</script>
  