<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit</div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" v-model="formData.name"/>
                        </div>
                        <div class="form-group">
                            <label for="position">Position</label>
                            <input type="text" class="form-control" v-model="formData.position"/>
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="text" class="form-control" v-model="formData.email"/>
                        </div>
                        <div class="form-group">
                            <button @click="updateData()" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Edit",
        data(){
            return{
                formData:{}
            }
        },
        methods:{
            getData(){
                axios.get('/api/getData/' + this.$route.params.id)
                    .then(res=>{
                        //console.log(res.data.data.name);
                        this.formData = res.data.data;
                        /*this.formData.name = res.data.data.name;
                        this.formData.position = res.data.data.position;
                        this.formData.email = res.data.data.email;*/

                    }).catch(err=>{
                    console.log(err);
                });
            },
            updateData(){
                axios.post('/api/updateData' , this.formData)
                    .then(res=>{
                        console.log(res);
                        this.$router.push('/');
                    }).catch(err=>{
                        console.log(err);
                });
            }
        },
        mounted(){
            this.getData();
        }
    }
</script>

<style scoped>

</style>