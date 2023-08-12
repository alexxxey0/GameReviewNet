<template>
    <form @submit.prevent="submit">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" v-model="form.username" required>
        </div>

        <div>
            <label for='password'>Password</label>
            <input type='password' name='password' id='password' v-model="form.password" required>
        </div>

        <div>
            <label for='password'>Confirm password</label>
            <input type='password' name='password_confirmation' id='password_confirmation' required>
        </div>

        <div id="image">
            <label for="image">Profile picture (optional)</label>
            <input type="file" name="image" @change="uploadImage">
        </div>

        <button type='submit'>Register</button>
    </form>
</template>

<script>
import { router } from '@inertiajs/vue3';

export default {
    name: 'RegisterForm',

    data() {
        return {
            form: {
                username: null,
                password: null,
                image: null
            }
        }
    },

    methods: {
        submit() {
            router.post('/create_user', this.form);
        },

        uploadImage(event) {
            this.form.image = event.target.files[0];
        }
    }
}
</script>

<style scoped>
    form {
        border-radius: 10px;
        color: white;
        display: flex;
        flex-direction: column;
        width: 40%;
        margin-inline: auto;
        gap: 1em;
        padding: 3%;

        border-left: 5px solid white;
        border-right: 5px solid white;
        border-radius: 0;
    }

    form label {
        font-size: 1.2em;
    }

    form input {
        font-size: 1.2em;
        padding: 1%;
    }

    form button {
        font-size: 1.5em;
        width: 30%;
        margin-inline: auto;
        padding: 1%;
        margin-top: 1em;
    }

    form button:hover {
        cursor: pointer;
    }

    form div {
        display: flex;
        flex-direction: column;
    }

    form #image {
        color: white;
    }
</style>