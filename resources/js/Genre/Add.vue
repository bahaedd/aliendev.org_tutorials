<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Update genre</h4>
                </div>
                <div class="card-body">
                    <form @submit.prevent="update">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" v-model="genre.title">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" class="form-control" v-model="genre.description">
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"update-genre",
    data(){
        return {
            genre:{
                title:"",
                description:"",
                _method:"patch"
            }
        }
    },
    mounted(){
        this.showGenre()
    },
    methods:{
        async showGenre(){
            await this.axios.get(`/api/genre/${this.$route.params.id}`).then(response=>{
                const { title, description } = response.data
                this.genre.title = title
                this.genre.description = description
            }).catch(error=>{
                console.log(error)
            })
        },
        async update(){
            await this.axios.post(`/api/genre/${this.$route.params.id}`,this.genre).then(response=>{
                this.$router.push({name:"genreList"})
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>