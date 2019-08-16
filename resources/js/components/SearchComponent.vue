<template>
    <div>
        <input type="text" v-model="keyword" placeholder="Keywords or Company" name="title" v-on:keyup="searchJobs" class="form-control">
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
          searchJobs(){

          }
        }
    }
</script>
