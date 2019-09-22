<template>
    <div id="copyright">
        <p>Copyright © 2019 林伟 All Rights Reserved</p>
    </div>
</template>

<script>
    export default {
        name: "Copyright"
    }
</script>

<style scoped>
    #copyright {
        height: 200px;
        background-color: #182327;
        overflow: hidden;
        position: relative;
    }
    p {
        width: 350px;
        text-align: center;
        font-size: 18px;

        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        color: #fff;
    }
</style>