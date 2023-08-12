
<template>
    <header>
        <div id="title">
            <Link id="main-link" href="/">GameReviewNet</Link>
            <div class="colors">
                <div @click="changeColor" class="square green"></div>
                <div @click="changeColor" class="square blue"></div>
                <div @click="changeColor" class="square red"></div>
            </div>
        </div>
        <nav>
            <h2>Search for games</h2>
            <Link href='/register'>Register</Link>
            <Link href='/login'>Log In</Link>
        </nav>
    </header>
</template>

<script>
    import { Link } from '@inertiajs/vue3'

    export default {
        name: 'Header',
        components: {
            Link
        },
        props: [
            'themeColor'
        ],

        methods: {
            changeColor(event) {
                if (event.target.classList.contains('green')) {
                    this.$emit('change-color', 'green');
                }
                else if (event.target.classList.contains('blue')) {
                    this.$emit('change-color', 'blue');
                }
                else if (event.target.classList.contains('red')) {
                    this.$emit('change-color', 'red');
                }
            }
        },


    }
</script>

<style scoped>

    .square {
        height: 30px;
        width: 30px;
        border-radius: 2px;
    }

    .square:hover {
        cursor: pointer;
    }

    .green {
        background-color: greenyellow;
    }

    .blue {
        background-color: lightskyblue;
    }

    .red {
        background-color: orangered;
    }

    .colors {
        display: flex;
        flex-direction: column;
        gap: 0.4em;
    }

    #title {
        display: flex;
        gap: 3em;
    }

    header {
        background-color: black;
        color: v-bind(themeColor);
        display: flex;
        justify-content: space-between;
        padding-block: 3%;
        padding-right: 3%;
        padding-left: 2%;
        border-bottom: 10px solid v-bind(themeColor);
    }

    header a {
        color: v-bind(themeColor);
        text-decoration: none;
        transition: all 0.1s;
    }

    h1 {
        font-size: 2.5em;
    }

    header h2, header a {
        font-size: 1.5em;
    }

    nav {
        display: flex;
        align-items: center;
        gap: 2em;
    }

    #main-link {
        font-size: 3em;
        align-self: center;
    }


</style>