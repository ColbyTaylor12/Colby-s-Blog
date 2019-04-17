<template>
  <div>
    <h1>Edit Post</h1>
    <form @submit.prevent="updateBlogPost">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>BlogPost Title:</label>
            <input type="text" class="form-control" v-model="blogpost.title">
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>BlogPost Body:</label>
              <textarea class="form-control" v-model="blogpost.body" rows="5"></textarea>
            </div>
          </div>
        </div><br />
        <div class="form-group">
          <button class="btn btn-primary">Update</button>
        </div>
    </form>
  </div>
</template>

<script>
    export default {

      data() {
        return {
          blogpost: {}
        }
      },
      created() {
        let uri = `http://vuelaravelcrud.test/api/blogpost/edit/${this.$route.params.id}`;
        this.axios.get(uri).then((response) => {
            this.blogpost = response.data;
        });
      },
      methods: {
        updatePost() {
          let uri = `http://vuelaravelcrud.test/api/blogpost/update/${this.$route.params.id}`;
          this.axios.blogpost(uri, this.blogpost).then((response) => {
            this.$router.push({name: 'blogposts'});
          });
        }
      }
    }
</script>
