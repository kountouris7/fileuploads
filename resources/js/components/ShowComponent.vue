<template>
    <div id="app">
        <button v-on:click="redirect">
            {{contents.name}}
        </button>

    </div>
</template>

<script>
    export default {
        props: ['content', 'cloudFolderLink'],

        data() {
            return {
                contents: this.content,
                url: this.cloudFolderLink
            }
        },

        methods: {
            redirect() {
                axios.get('/shareFile/' + this.content.name)
                    .then(response => {
                        console.log(response);
                        window.alert(response.data);

                    });
            }
        }
    }


</script>

<style scoped>

</style>