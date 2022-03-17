<template>
    <div>
        <div v-for="(repo, index) in repoArray" :key="index" class="repo">
            <div class="repo-title">{{ repo.name }}</div>
            <div class="repo-language">{{ repo.language }}</div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Repo",
    data() {
        return {};
    },
    props: {
        repoArray: {
            type: Array,
            default() {
                return [];
            },
        },
    },
};
</script>

<style></style>
