<template>
    <div id="app">

    </div>
</template>

<script>
    export default {
        props: ['contents'],

        data() {
            return {
                name:''

            }},

        mounted() {
            axios.get('show').then(response => {
                this.results = response.data
            })
        }
    }


</script>

<style scoped>

</style>