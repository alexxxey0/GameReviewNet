<template>
    <div id="welcome">
        <h2>Welcome to GameReviewNet!</h2>
        <img src="../images/penguin.gif" alt="">
    </div>
</template>

<script>

    export default {
        name: 'Welcome'
    }
</script>

<style scoped>
    #welcome {
        background-color: black;
    }

    #welcome h2 {
        font-size: 4em;
        text-align: center;
        color: white;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        margin-top: 1em;
    }

    #welcome img {
        width: 20%;
        margin-inline: auto;
        display: block;
        margin-top: 2%;
        border: 2px solid lightskyblue;
        border-radius: 5%;
    }
</style>