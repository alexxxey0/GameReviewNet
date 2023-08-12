
<template>
    <header>
        <Link id="main-link" href="/">GameReviewNet</Link>
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
        }
    }
</script>

<style scoped>

    header {
        background-color: black;
        color: greenyellow;
        display: flex;
        justify-content: space-between;
        padding-block: 3%;
        padding-right: 3%;
        padding-left: 2%;
        border-bottom: 10px solid greenyellow;
    }

    header a {
        color: greenyellow;
        text-decoration: none;
        transition: all 0.1s;
    }

    header a:active {
        color: #8ccc26;
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
    }


</style>