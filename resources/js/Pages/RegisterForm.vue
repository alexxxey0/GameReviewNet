<template>
    <form action="">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" required>
        </div>

        <div>
            <label for='password'>Password</label>
            <input type='password' name='password' id='password' required>
        </div>

        <div>
            <label for='password'>Confirm password</label>
            <input type='password' name='password_confirmation' id='password_confirmation' required>
        </div>

        <button type='submit'>Register</button>
    </form>
</template>

<script>
    export default {
        name: 'RegisterForm'
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
</style>