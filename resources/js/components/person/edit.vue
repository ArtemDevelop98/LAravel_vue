<template>
<div>
    <div class="w-25 mt-3">
        <div class="mb-3">
            <input type="text" v-model="name" placeholder="name" class="form-control">
        </div>
        <div class="mb-3">
            <input type="number" v-model="age" placeholder="age" class="form-control">
        </div>
        <div class="mb-3">
            <input type="text" v-model="job" placeholder="job" class="form-control">
        </div>
        <div class="mb-3">
            <input :disabled="!isDisabled" @click.prevent="updatePerson" type="submit" value="update" class="btn btn-primary">
        </div>
    </div>
</div>
</template>

<script>
import axios from "axios";
import router from "../../routes/router";

export default {
    name: "edit",
    data(){
        return{
            name:null,
            age:null,
            job:null,
        }
    },
    mounted() {
        this.getPerson()
    },
    methods:{
        getPerson() {
            axios.get(`/api/people/${this.$route.params.id}` )
                .then(
                res =>{
                    this.name = res.data.data.name
                    this.age = res.data.data.age
                    this.job = res.data.data.job
                }
            )
        },
        updatePerson(){
            axios.patch(`/api/people/${this.$route.params.id}`,{name: this.name, age:this.age, job:this.job})
                .then(res =>{
                    this.$router.push({name:'person.show',params:{id:this.$route.params.id}})
                })
        }
    },
    computed: {
        isDisabled() {
            return this.name && this.age && this.job
        }
    }
}
</script>

<style scoped>

</style>
