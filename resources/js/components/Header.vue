<template>
    <div>
        <nav>
            <ul>
                <li v-for="(link, index) in linkMenu" :key="index">
                    <router-link
                        class="link-primary mx-2"
                        :to="{ name: link.routeName }"
                        >{{ link.label }}</router-link
                    >
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
export default {
    name: "Header",
    data() {
        return {
            linkMenu: [
                {
                    label: "Home",
                    routeName: "home",
                },
                {
                    label: "Contacs",
                    routeName: "contacs",
                },
            ],
        };
    },
};
</script>

<style></style>
