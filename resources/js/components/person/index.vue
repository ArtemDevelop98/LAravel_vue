<template>
<div>
    <table class="table w-75">
        <thead>
        <tr>
            <th scope="col">name</th>
            <th scope="col">Age</th>
            <th scope="col">Job</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="person in people">
            <td><router-link :to="{name:'person.show',params: {id:person.id}}">{{ person.name }}</router-link></td>
            <td>{{ person.age }}</td>
            <td>{{ person.job }}</td>
            <td><router-link :to="{name:'person.edit',params:{id:person.id}}" class="btn btn-outline-primary">edit</router-link></td>
            <td>
                <a @click.prevent="deletePerson(person.id)" href="#" class="btn btn-outline-danger"> Delete</a>
            </td>
        </tr>

        </tbody>
    </table>
</div>
</template>

<script>
import axios from "axios";

export default {
    name: "index",
    data(){
      return{
          people:null
      }
    },
    mounted() {
        this.getPeople()
    },
    methods:{
        getPeople(){
            axios.get('/api/people')
                .then(res =>
                {
                    this.people = res.data.data
                })
        },
        deletePerson(id){
            axios.delete(`/api/people/${id}`)
            .then(res=>{
                this.getPeople()
                }
            )
        }
    }
}
</script>

<style scoped>

</style>
