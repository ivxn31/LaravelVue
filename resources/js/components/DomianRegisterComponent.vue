<template>
    <div>
        <form action="">
            <div class="form-group">
                <label for="category">Select a category</label>
                <select class="form-control" name="" id="category">
                </select>
            </div>

            <div class="form-group">
                <label for="subcategory">Select a subcategory if you wish</label>
                <select class="form-control" name="" id="subcategory">
                </select>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" placeholder="Please enter your email Address">
                </div>

                <div class="form-group col-md-6">
                    <label for="url">Enter your Domian URL</label>
                    <input type="text" class="form-control" placeholder="https://ypur-domain.com">
                </div>
            </div>

            <div class="input-group mb-3">
                <input type="file" id="img" class="form-control-file">
            </div>

            <div class="form-group">
                <label for="title">Title of your domain</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="shortdesc">Short description</label>
                <input type="text" class="form-control">
            </div>
            
            <div class="form-group">
                <vue-editor/>
            </div>

            <button type="submit" class="btn btn-success">Submit your Domain</button>
        </form>
    </div>
</template>
<script>
export default {
    data(){
        return{
        }
    }
}
</script>