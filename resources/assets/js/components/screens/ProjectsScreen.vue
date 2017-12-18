<template>
    <div class="container">
        <div class="row">
            <div class="card" style="min-width: 100%">
                <!--Card content-->
                <div class="card-header">
                    <h3>Projects</h3>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <sync-loader :loading="loadingProjects"></sync-loader>
                    </div>

                    <div v-if="this.projects.length">
                        <div class="row">
                            <div class="col col-sm-6 col-md-6" v-for="project in this.projects">
                                <h4 class="text-center">{{ project.name }} </h4>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div><!-- /container -->
</template>

<script>
    import SyncLoader from 'vue-spinner/src/SyncLoader.vue';

    export default {
        components: {'sync-loader': SyncLoader},

        data() {
            return {
                loadingProjects: false,
                projects: [],
            }
        },

        mounted() {
          this.getProjects();
        },

        methods: {
            getProjects() {
                this.loadingProjects = true;
                axios.get('/projects').then(response => {
                    this.projects = response.data;
                }).catch((error) => {
                    console.error(error.response);
                }).then(() => {
                    this.loadingProjects = false;
                });
            }
        }
    }
</script>