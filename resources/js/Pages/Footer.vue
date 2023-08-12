<template>
    <footer>
        <h2>GameReviewNet, 2023 &copy; All Rights Reserved</h2>
    </footer>
</template>

<script>
    export default {
        name: 'Footer',
        props: [
            'themeColor'
        ]
    }
</script>

<style scoped>
    footer {
        background-color: black;
        color: v-bind(themeColor);
        border-top: 5px solid v-bind(themeColor);
        padding-block: 1em;
        text-align: right;
        margin-top: 5%;
    }

    footer h2 {
        margin-right: 0.5em;
    }
</style>