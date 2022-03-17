<template>
    <div>
        <Repo :repoArray="repo" />
    </div>
</template>

<script>
import Repo from "./Repo.vue";
export default {
    name: "Home",
    components: {
        Repo,
    },
    data() {
        return {
            repo: null,
        };
    },
    created() {
        this.getRepo();
    },
    methods: {
        getRepo() {
            axios
                .get("https://api.github.com/users/frampolz/repos")
                .then((result) => {
                    console.log(result);
                    this.repo = result.data;
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },
};
</script>

<style></style>
