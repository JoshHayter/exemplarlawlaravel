<template>
<div>
<p id="qContainer">{{quotes[count]}}</p>
</div>
</template>

<script>
export default {
    mounted() {
        console.log('QuoteComponent mounted.')
        this.showNextQuote();
    },
    data: function() {
        return {
          quotes: ['"Super responsive, commercially savvy and a pleasure to work with. Can’t recommend highly enough."',
          '"I really enjoy working with you. Thank you for your commercial, balanced and more importantly down to earth, professional advice. You have helped me deal with many difficult employee issues, thoroughly, quickly and fairly. Fantastic service."',
          '"Ann provides concise yet detailed advice to suit the client’s needs and will respond promptly to urgent matters at all times. Ann takes time to listen and understand the cultures and practices of the company so that her advice is given in context and appropriate action can be taken in line with legislation, best practice and also to suit business needs. Ann is a pleasure to work with and I would have no hesitation in recommending her to any client whether commercial or an individual."',
          '"Highly recommended! I found Ann to be very thorough and professional. She went over and above to ensure we met the required time lines. I would definitely use her again."',
          '"We were advised by Ann in difficult litigation against a former member of staff. This went through several hearings before going to mediation. At every stage, Ann was available at all hours, and gave pragmatic, realistic and speedy advice. While we hope not to have similar litigation in the future, we would not hesitate to use Ann again."',
          '"Thank you so much for your wonderful support over the past few months. I could not have done any of it without you."',
          '"Ann was strongly recommended to me. Ann immediately demonstrated both her excellent client service and expertise. The former was important since it was a time of high stress for me. I was able to negotiate, within the tight deadline available, a favourable deal which I was pleased to accept. Ann’s responses were always considered and rapid. In summary, Ann is very professional, helpful and effective and I can certainly recommend her services."',
          '"It is always a great pleasure to work with Ann and we always find suitable, agreeable solutions for both parties. Ann always gets back to me in timely and accurate manner.  I have worked with Ann for many years and used her services successfully throughout the few companies I have been at and I would highly recommend her."',
          '"Ann was was highly responsive in assisting me with some negotiations with my employer and provided me with very strong advice. Ann’s approach was exactly what was needed in my circumstances and I would not hesitate and in recommending her to others who require legal representation with their employer."',
          '"I cannot thank you enough for all you have done for me. I am so grateful for your advice and counsel."'],
          count: 0,
        }
    },
    methods:{
      showNextQuote(){
        var q = $("#qContainer");
        setInterval(() => {
          q.fadeOut(3000, ()=> {
            this.count++;
            q.fadeIn(3000);
          });
        }, 15000);
      }
    },
}
</script>
