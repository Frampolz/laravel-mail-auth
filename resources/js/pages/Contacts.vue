<template>
    <div class="container w-25">
        <form @submit.prevent="sendForm()">
            <div class="mb-3">
                <label for="exampleInputtext" class="form-label">Name</label>
                <input
                    v-model="name"
                    class="form-control"
                    type="text"
                    id="text"
                    name="text"
                />
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"
                    >Email address</label
                >
                <input
                    v-model="email"
                    type="email"
                    class="form-control"
                    id="email"
                    aria-describedby="emailHelp"
                />
                <div id="emailHelp" class="form-text">
                    We'll never share your email with anyone else.
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"
                    >Leave a message</label
                >
                <textarea
                    v-model="message"
                    class="form-control"
                    id="message"
                    rows="3"
                ></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</template>

<script>
export default {
    name: "Contacts",
    data() {
        return {
            name: null,
            email: null,
            message: null,
        };
    },
    methods: {
        sendForm() {
            axios
                .post("/Api/emailto", {
                    name: this.name,
                    email: this.email,
                    message: this.message,
                })
                .then((response) => {
                    console.log(response);
                })
                .catch((error) => {
                    console.log(error.response.data);
                });
        },
    },
};
</script>

<style></style>
