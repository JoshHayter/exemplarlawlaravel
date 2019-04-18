<template>
        <p class="is-size-7">
            ©️ {{year}} Exemplar Law Limited
            <br>
            <br>
            Exemplar Law Limited is a limited company (registered in England and Wales number under company number 10583620) which is authorised and regulated by the Solicitors Regulation Authority (“SRA”). We use the term "partner" to refer to a
            Director of Exemplar Law Limited. A list of the names of Directors of Exemplar Law Limited and their respective professional qualifications may be inspected at our registered office, 2 Worrin Road, Shenfield, CM15 8DE. The SRA Code of
            Conduct sets out the rules and principles of professional conduct for practising solicitors and can be accessed from the SRA website.
        </p>
</template>

<script>
export default {
    mounted() {
        console.log('FooterComponent mounted.')
    },
    data: function() {
        return {}
    },
    computed: {
        year: function() {
            return new Date().getFullYear();
        }
    },
  }
</script>
