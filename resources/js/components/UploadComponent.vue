<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Antonis Project - Upload File to Drive</div>
                    <div class="card-body">
                        <div v-if="success != ''" class="alert alert-success" role="alert">
                            {{success}}
                        </div>

                        <form @submit="formSubmit" enctype="multipart/form-data">
                            <strong>Image:</strong>
                            <input type="file" class="form-control" v-on:change="onImageChange">

                            <div v-if="loading" class="loader"></div>
                            <div v-else>
                                <button class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</template>


<script>


    export default {

        mounted() {
            console.log('Component mounted.')

        },

        data() {
            return {
                image: '',
                success: '',
                loading: false,
            };
        },

        methods: {
            onImageChange(e) {
                console.log(e.target.files[0]);
                this.image = e.target.files[0];
            },
            formSubmit(e) {
                e.preventDefault();
                let currentObj = this;
                const config = {
                    headers: {'content-type': 'multipart/form-data'}
                };

                let formData = new FormData();
                formData.append('image', this.image);
                this.loading = true;
                axios.post('/upload', formData, config)

                    .then(function (response) {
                        currentObj.success = response.data.success;
                    })

                    .catch(function (error) {
                        currentObj.output = error;
                    });

            }


        }
    }

</script>

<style scoped>
    .loader {
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        width: 60px;
        height: 60px;
        -webkit-animation: spin 2s linear infinite; /* Safari */
        animation: spin 2s linear infinite;
    }

    /* Safari */
    @-webkit-keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }
</style>