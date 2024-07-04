<template>
<div>

    <router-link style="margin-right:20px" :to="{name:'person.index'}">people</router-link>
    <router-link style="margin-right:20px" :to="{name:'person.create'}">Add</router-link>
    <router-view/>
</div>
</template>

<script>
export default {
    name: "index"
}
</script>

<style scoped>
</style>
