<template>
    <div class="row">
        <div class="col-12 mb-2 text-end">
            <router-link :to='{name:"genreAdd"}' class="btn btn-primary">Create</router-link>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Genre</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody v-if="genres.length > 0">
                                <tr v-for="(genre,key) in genres" :key="key">
                                    <td>{{ genre.id }}</td>
                                    <td>{{ genre.title }}</td>
                                    <td>{{ genre.description }}</td>
                                    <td>
                                        <router-link :to='{name:"genreEdit",params:{id:genre.id}}' class="btn btn-success">Edit</router-link>
                                        <button type="button" @click="deleteGenre(genre.id)" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody v-else>
                                <tr>
                                    <td colspan="4" align="center">No genres Found.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"genres",
    data(){
        return {
            genres:[]
        }
    },
    mounted(){
        this.getGenres()
    },
    methods:{
        async getGenres(){
            await this.axios.get('/api/genre').then(response=>{
                this.genres = response.data
            }).catch(error=>{
                console.log(error)
                this.genres = []
            })
        },
        deleteGenre(id){
            if(confirm("Are you sure to delete this genre ?")){
                this.axios.delete(`/api/genre/${id}`).then(response=>{
                    this.getGenres()
                }).catch(error=>{
                    console.log(error)
                })
            }
        }
    }
}
</script>