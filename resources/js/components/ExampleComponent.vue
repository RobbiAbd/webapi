<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Test API</div>
                    <div v-if="loading == false">
                        <div class="card-body">
                            I'm an example component.

                            <p class="mt-2">response :</p>
                            <div class="text-danger">
                                {{ data }}
                            </div>    
                        </div>
                    </div>
                    <div v-else>
                        loading...
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                data: [],
                loading: false
            }
        },

        mounted() {
            this.getData()
        },

        methods: {
            getData() {
                this.loading = true
                axios.get('/testapi')
                .then((res) => {
                    this.data = res.data.data
                    this.loading = false
                })
                .catch((error) => {
                    this.data = error.message
                    this.loading = false
                })
            }
        }
    }
</script>
