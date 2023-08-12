<template>
    <Layout>
        <Welcome />
    </Layout>
</template>

<script>
    import Layout from './Layout.vue'
    import Welcome from './Welcome.vue'

    export default {
        name: 'App',
        components: {
            Layout,
            Welcome
        }
    }
</script>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Play:wght@700&display=swap');


    * {
        margin: 0;
        padding: 0;
        font-family: 'Play', sans-serif;
    }

    #app {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
        background-color: black;
    }
</style>
