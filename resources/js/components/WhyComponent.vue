<template>
<div>
              <h1 class="title is-4">Why Exemplar?</h1>
    <div class="columns is-vcentered">
        <!-- Left side -->
        <div class="column">

            <p class="subtitle is-6">
                <strong>Commercially Astute | Personable | Innovative</strong>
            </p>
            <p>
                Ann set up Exemplar Law to deliver high quality legal advice on all employment related issues at an affordable price.
                <br>
                <br>
                Her background, initially as a commercial litigation partner in a City firm, followed by 10 years’ employment specialisation in a leading international practice, gives her an enviable edge over many peers. She appreciates and
                understands the bigger picture, providing her advice with this very much in mind. She can therefore play a vital role in necessary strategic decisions whilst guiding her clients through any challenges along the way.
                <br>
                <br>
                Ann prides herself on the quality of the service and advice that she can provide. She wants her clients to be able to rely on someone who understands their business and its (or their own) particular requirements.

            </p>
        </div>

        <!-- Right side -->
        <div class="column has-text-centered" style="position: relative; height: 100%;">
          <br>

          <div class="is-italic">
            <quote-component></quote-component>
          </div>
          <div class="position-bottom">
            <a class="button is-primary is-outlined">View all recommendations</a>
          </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    mounted() {
        console.log('WhyComponent mounted.')
    },
    data: function() {
        return {}
    },
}
</script>
