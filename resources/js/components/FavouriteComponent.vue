<template>
      <button v-if="show" @click.prevent="unsave()" class="btn btn-success btn-block"><i class="fas fa-heart"></i> Unsave this Job</button>

      <button v-else @click.prevent="save()" class="btn btn-info btn-block"><i class="fas fa-heart"></i> Save this Job</button>

</template>

<script>
    export default {
        props:['jobid','favourited'],
        mounted() {
            console.log('Component mounted.')
        },
        data(){
          return{
            show:true
          }
        },

        mounted(){
        this.show =  this.jobFavourited ? true:false;
        },

        computed:{
          jobFavourited(){
            return this.favourited
          }
        },

        methods:{
          save(){
            axios.post('/save/'+this.jobid).then(response=>this.show=true).catch(error=>alert('error'))
          },
          unsave(){
            axios.post('/unsave/'+this.jobid).then(response=>this.show=false).catch(error=>alert('error'))
          }
        }

    }
</script>
