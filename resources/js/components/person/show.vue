<template>
<div v-if="person">
    <div>
        Name: {{person.name}}
    </div>
    <div>
        Age: {{person.age}}
    </div>
    <div>
        Job: {{person.job}}
    </div>

    <div>
        <router-link :to="{name:'person.edit',params:{id:person.id}}">Edit</router-link>
    </div>
</div>
</template>

<script>
import axios from "axios";


export default {
    name: "show",

    mounted() {
        this.$store.dispatch('getPerson',this.$route.params.id)
    },

    methods:{ },

    computed:{
        person(){
            return this.$store.getters.person
        }
    }

}
</script>

<style scoped>

</style>
