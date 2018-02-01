<template>
    <section id="app-projects">

        <div class="bg col-12 text-left app-section-title">
            <h1 class="display-2">Projects</h1>
        </div>

        <div id="projects-1" class="br row justify-content-center">
            <div class="bg col-11">
                <div class="bk d-flex flex-row align-items-center justify-content-md-around flex-wrap">
                    
                    <div v-for="project in items" :class="isFeatured(project.featured)" class="bp top-enter">
                        <div class="card">
                            <div v-if="project.featured == 1" class="card-header">Featured</div>
                            <div class="card-body">
                                <h4 class="card-title">{{ project.title }}</h4>
                                <p class="card-text">{{ project.content }}</p>
                                <a :href="prepareLink(project.link)" class="btn btn-tesc" target="_blank">Find out more &raquo;</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
</template>


<script>
    export default {
        computed: {
            items() {
                return this.$store.state.initialization.sectionProject;
            }
        },


        methods: {
            isFeatured(featured) {
                return featured == 1 ? 'col-md-6' : 'col-md-4';
            },

            prepareLink(slug) {
                return `/project/${slug}`;
            }            
        }
    }
</script>


<style lang="scss" scoped>
    @import '../../sass/variables';

    #projects-1 {
        background-color: $app-white;
    }

    #app-projects {
        #projects-1 {
            padding-top: 0;
        }
    }

    .card {
        border: 0;
        box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        transition: all 0.3s cubic-bezier(.25,.8,.25,1);

        border-radius: .5rem;
        // margin-top: 2rem;
        margin-top: 1.5rem;
    }

    .card:hover {
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);

        .card-header {
            background-color: #FFC107;
            border: 0;
            border-radius: .5rem .5rem 0 0;
            color: white;
        }
    }

    .btn-tesc {
        background-color: #3F51B5;
        color: white;
    }

    .app-section-title {
        margin-bottom: 1.5rem;
    }
</style>