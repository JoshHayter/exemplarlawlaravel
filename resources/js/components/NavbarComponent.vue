<template>
<nav class="navbar is-spaced">
  <div class="container">
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
            <img :src="inlineLogo" alt="Exemplar Law">
        </a>

        <a class="navbar-burger burger">
            <span></span>
            <span></span>
            <span></span>
        </a>
    </div>

    <div class="navbar-menu">
        <div class="navbar-end">
            <a class="navbar-item">
                why
            </a>

            <a class="navbar-item">
                who
            </a>

            <a class="navbar-item">
                contact
            </a>


        </div>
    </div>
  </div>
</nav>
</template>

<script>
export default {
    mounted() {
        console.log('NavbarComponent mounted.')
    },
    data: function() {
        return {
            inlineLogo: '/img/inlineLogo.png',
        }
    },
}
</script>
