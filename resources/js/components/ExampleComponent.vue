<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-4">
                    <div class="card-header">Test API</div>
                    <div v-if="loading == false">
                        <div class="card-body">
                            Belajar Vue Js.

                            <p class="mt-2">response :</p>
                            <div class="text-danger">
                                <table class="table">
                                  <thead class="thead-dark">
                                    <tr>
                                      <th scope="col">Nama</th>
                                      <th scope="col">Jenis Kelamin</th>
                                      <th scope="col">Dibuat Pada</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <tr v-for="item in data":key="item.id">
                                    <td>{{ item.nama }}</td>
                                    <td>{{ item.jk }}</td>
                                    <td>{{ item.created_at }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>    
                </div>
            </div>
            <div v-else>
                <vue-progress-bar></vue-progress-bar>
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
                this.$Progress.start()
                axios.get('/testapi')
                .then((res) => {
                    this.data = res.data.data
                    this.loading = false
                    this.$Progress.finish()
                })
                .catch((error) => {
                    this.data = error.message
                    this.loading = false
                    this.$Progress.fail()
                })
            }
        }
    }
</script>
