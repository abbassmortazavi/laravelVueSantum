<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create</div>

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
                           <button @click="addRecord" class="btn btn-primary">Create</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Create",
        data(){
            return{
                formData:{
                    name: '',
                    position: '',
                    email: ''
                }
            }
        },
        methods:{
            addRecord(){
                axios.post('/api/create',this.formData)
                    .then(res=>{
                        console.log(res);
                        this.$router.replace('/');
                    }).catch(err=>{
                        console.log(err);
                });
            }
        }
    }
</script>

<style scoped>

</style>