<template>
    <div id="welcome">
        <h2>Welcome to GameReviewNet!</h2>
    </div>
</template>

<script>

    export default {
        name: 'Welcome',

         mounted() {
            //alert('nooo');
            document.querySelector('html').style.height = '100%';
            document.querySelector('body').style.height = '100%';
         },

         unmounted() {
            document.querySelector('html').style.height = 'initial';
            document.querySelector('body').style.height = 'initial';
         }
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
    }
</style>