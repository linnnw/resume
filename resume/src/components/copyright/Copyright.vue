<template>
    <div id="copyright">
        <p>Copyright © 2019 林伟 All Rights Reserved <br>闽ICP备19020203号</p>
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
        width: 450px;
        text-align: center;
        font-size: 14px;

        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        color: #fff;
    }
    @media screen and (max-width: 767px){
        p {
            width: 300px;
            text-align: center;
            font-size: 14px;

            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            color: #fff;
        }
    }
</style>
