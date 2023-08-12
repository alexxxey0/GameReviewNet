<template>
    <Header :themeColor="themeColor" @change-color="changeColor" />
        <slot />
    <Footer :themeColor="themeColor" @change-color="changeColor" />
</template>

<script>
    import Header from './Header.vue'
    import Footer from './Footer.vue'

    export default {
        name: 'Layout',
        components: {
            Header,
            Footer
        },

        data() {
            return {
                themeColor: null
            }
        },

        mounted() {
            this.themeColor = localStorage.getItem('themeColor') !== null ? localStorage.getItem('themeColor') : 'greenyellow';
        },

        methods: {
            changeColor(color) {
                if (color === 'green') {
                    this.themeColor = 'greenyellow';
                    localStorage.setItem('themeColor', 'greenyellow');
                }
                else if (color === 'blue') {
                    this.themeColor = 'lightskyblue';
                    localStorage.setItem('themeColor', 'lightskyblue');
                }
                else if (color === 'red') {
                    this.themeColor = 'orangered';
                    localStorage.setItem('themeColor', 'orangered');
                }
            }
        }
    }
</script>