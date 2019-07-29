<template>

      <form @submit="formSubmit">
      <button v-if="show" type="submit" class="btn btn-success btn-block" style="width: 100%;">Apply</button>
      <div v-else class="alert alert-success">
          Application sent!
      </div>
      </form>

</template>

<script>
    export default {
      props:["jobid"],
        mounted() {
            console.log('Component mounted.')
        },
        data(){
          return{
            'show':true
          }
        },
        methods:{
            formSubmit(e){
                e.preventDefault();
                axios.post('/applications/'+ this.jobid,{

                }).then((response)=>{
                    this.show=false

                });
            }
        }
    }
</script>
