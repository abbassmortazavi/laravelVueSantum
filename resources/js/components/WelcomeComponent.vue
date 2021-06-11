<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h3>Welcome My website</h3>
                <router-link to="/create" class="btn btn-primary float-right">Create</router-link>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="value in allData">
                            <td>{{ value.id }}</td>
                            <td>{{ value.name }}</td>
                            <td>{{ value.position }}</td>
                            <td>{{ value.email }}</td>
                            <td>
                                <router-link :to="{ name: 'edit' , params: {id: value.id} }" class="btn btn-success">Edit</router-link>
                                <!--<a href="" class="btn btn-danger">Delete</a>-->
                                <a @click="deleteData(value.id)" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "WelcomeComponent",
        data(){
            return {
                allData: []
            }
        },
        methods:{
            getAll(){
                axios.get('/api/getAll')
                    .then(res=>{
                        this.allData = res.data.data;
                        console.log(res.data.data);
                    }).catch(err=>{
                    console.log(err);
                });
            },
            deleteData(id){
                axios.get('/api/deleteData/' + id)
                    .then(res=>{
                        //console.log(res.data);
                        this.getAll();
                    }).catch(err=>{
                        console.log(err);
                })
            }
        },
        created(){
            this.getAll();
        }
    }
</script>

<style scoped>

</style>