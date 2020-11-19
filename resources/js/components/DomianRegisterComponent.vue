<template>
    <div>
        <form action="" method="POST" enctype="multipart/form-data" @submit.prevent="submitDomain">
            <div class="form-group">
                <label for="category">Select a category</label>
                <select class="form-control" name="" id="category" v-model="form.category_id">
                    <option v-for="category in this.categories" :value="category.id">{{ category.name }}</option>
                </select>
            </div>

            <div class="form-group">
                <label for="subcategory">Select a subcategory if you wish</label>
                <select class="form-control" name="" id="subcategory" v-model="form.subcategory_id">
                    <option v-for="subcategory in this.filteredSubcategories" :value="subcategory.id">{{ subcategory.name }}</option>
                </select>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" placeholder="Please enter your email Address" v-model="from.email">
                </div>

                <div class="form-group col-md-6">
                    <label for="url">Enter your Domian URL</label>
                    <input type="text" :class="{ 'is-valid' : form.errors.has('url') }" 
                    class="form-control" placeholder="https://ypur-domain.com" v-model="from.url" @keydown="form.errors.clear('url')">
                    <div class="invalid-feedback" v-show="from.errors.has('url')" v-text="form.errors.get('url')"></div>
                </div>
            </div>

            <div class="input-group mb-3">
                <input type="file" id="img" class="form-control-file">
            </div>

            <div class="form-group">
                <label for="title">Title of your domain</label>
                <input type="text" class="form-control" v-model="from.title">
            </div>

            <div class="form-group">
                <label for="shortdesc">Short description</label>
                <input type="text" class="form-control" v-model="from.shortdesc">
            </div>
            
            <div class="form-group">
                <vue-editor v-model="from.desc"/>
            </div>

            <button type="submit" class="btn btn-success">Submit your Domain</button>
        </form>
    </div>
</template>
<script>
export default {
    props:['categories','subcategories'],
    data(){        
        return{
            form: new Form({
                email: '',
                title: '',
                url:'',
                shortdesc:'',
                desc:'',
                category_id:1,
                subcategory_id:'',
            })
        }
    },
    methods:{
        submitDomain(){
            let data = new FormData();
            data.append('title',this.form.title);
            data.append('email',this.form.email);
            data.append('url',this.form.url);
            data.append('shortdesc',this.form.shortdesc);
            data.append('desc',this.form.desc);
            data.append('category_id',this.form.category_id);
            data.append('subcategory_id',this.form.subcategory_id);
            if(document.getElementById('img').files[0]){
                data.append('img',document.getElementById('img').files[0]);
            }

            axios.post('/domain',data).then((response) =>{
                this.form.reset();
            }).catch(error => this.form.errors.record(error.response.data));
        }
    },
    computed:{
        filteredSubcategories:function(){
            return this.subcategories.filter((item) => item.category_id == this.form.category_id);
        }
    }
}
</script>