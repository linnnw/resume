<template>
    <div id="resume">
        <Scroll class="scroll">
            <Home></Home>
        </Scroll>

    </div>
</template>

<script>
    import Scroll from '../components/scroll/Scroll'

    import Home from '../components/home/Home'

    export default {
        name: "Resume",
        components: {
            Scroll,
            Home
        }
    }
</script>

<style scoped>
    #resume {
        height: 100vh;
    }
    .scroll {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }
</style>