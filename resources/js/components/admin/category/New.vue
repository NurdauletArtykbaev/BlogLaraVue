<template>
    <div>
        <section class="content">
            <div class="row justify-content-around">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header with-border">
                            <h3 class="card-title">Add new Category</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" @click.prevent="addCategory">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="categoryId">Add new Category</label>
                                    <input type="text" v-model="form.cat_name" class="form-control" id="categoryId" placeholder="Add new Category">
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                    <!-- Form Element sizes -->


                </div>
            </div>
            <!-- /.row -->
        </section>
    </div>
</template>

<script>
    export default {
        name: "New",
        data(){
            return{
                form: new Form({
                    cat_name: ''

                })
            }

        },
        methods:{
            addCategory(){
                console.log('addca')
                this.form.post('/add-category').then((res)=>{
                    console.log('res', res.data)
                })
            }
        }
    }
</script>

<style scoped>

</style>
