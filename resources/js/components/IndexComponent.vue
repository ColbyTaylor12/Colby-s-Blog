<template>
  <div>
      <h1>Posts</h1>
        <div class="row">
          <div class="col-md-10"></div>
          <div class="col-md-2">
            <a href="/blog-create" class="btn btn-primary">Create Post</a>
          </div>
        </div><br />

        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Blog Title</th>
                <th>Blog Body</th>
            </tr>
            </thead>
            <tbody>
                <tr v-for="blogpost in blogposts" :key="blogpost.id">
                    <td>{{ blogpost.id }}</td>
                    <td>{{ blogpost.title }}</td>
                    <td>{{ blogpost.body }}</td>
                    <td><a href="/blog-edit" params: { id: post.id }} class="btn btn-primary">Edit</a></td>
                    <td><button class="btn btn-danger" @click.prevent="deleteBlogPost(blogpost.id)">Delete</button></td>
                </tr>
            </tbody>
        </table>
  </div>
</template>

<script>
  export default {
      data() {
        return {
          blogposts: [],
          api: "http://localhost:8888/blog-home/api/",
        }
      },
      created() {
      let uri = this.api + "blogposts";
      this.axios.get(uri).then(response => {
        this.blogposts = response.data.data;
      });
    },
    methods: {
      deleteBlogPost(id)
      {
        let uri = this.api + "delete/${id}";
        this.axios.delete(uri).then(response => {
          this.blogposts.splice(this.blogposts.indexOf(id), 1);
        });
      }
    }
  }
</script>