<template>
    <div>
        <section class="content">
        <div class="row justify-content-around">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Category List</h3>
                        <div class="card-tools">
                            <router-link to="/add-category" class="btn btn-primary">Add Category</router-link>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Category Name</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Category Name</td>
                                <td>
                                    <a href="#">Delete</a>
                                </td>
                            </tr>

                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

            <div class="row justify-content-around">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Category List</h3>
                            <div class="card-tools">
                                <router-link to="/add-category" class="btn btn-primary">Add Category</router-link>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Category Name</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td role="row"> <div class="card-body">testt</div>1 2 3 4 5 </td>
                                    <td role="row">1 2 3 4 5 </td>
                                    <td role="row">1 2 3 4 5 </td>
                                </tr>
<!--                                <tr>-->
<!--                                    <td>1</td>-->
<!--                                    <td>Category Name</td>-->
<!--                                    <td>-->
<!--                                        <a href="#">Delete</a>-->
<!--                                    </td>-->
<!--                                </tr>-->

                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
    </div>
</template>

<script>
    export default {
        name: "List",
        data(){
            return{

            }
        },
        mounted(){
        },
        computed:{
        },
        methods:{
        }
    }
</script>

<style scoped>

</style>
