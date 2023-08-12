<template>
    <Layout>
        <div>
            <h2 class="reg-header">Register</h2>
            <RegisterForm />
        </div>
    </Layout>
</template>

<script>
    import Layout from './Layout.vue'
    import RegisterForm from './RegisterForm.vue'

    export default {
        name: 'Register',
        components: {
            Layout,
            RegisterForm
        }
    }
</script>

<style scoped>
    .reg-header {
        color: white;
        text-align: center;
        font-size: 3em;
        margin-bottom: 1em;
        margin-top: 1em;
    }
</style>