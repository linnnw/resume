<template>
    <div class="homePage">
        <div class="head">
            <div class="nav">
                <span class="nav-l"><span>林</span>伟</span>
                <span class="nav-r"></span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Home"
    }
</script>

<style scoped>
    .homePage {
        background: url("../../assets/images/hero_1.jpg") no-repeat;
        background-size: 100vh 100vh;
        width: 100%;
        height: 100vh;
    }
    .head {
        position: relative;
        height: 8%;
        overflow: hidden;
    }
    .head .nav {
        position: absolute;
        height: 60%;
        width: 80%;
        left: 10%;
        top: 20%;
        font-size: 16px;
        font-weight: 700;
        line-height: 220%;
        color: #fff;
    }
    .head .nav .nav-l span{
        color: #00ffff;
    }
    .head .nav .nav-r {
        margin-top: 3%;
        background-color: #fff;
        width: 9%;
        height: 3px;
        float: right;
        position: relative;
    }
    .head .nav .nav-r::after {
        content: "";
        position: absolute;
        left: 0;
        top: 270%;
        background-color: #fff;
        width: 100%;
        height: 3px;
    }
    .head .nav .nav-r::before {
        content: "";
        position: absolute;
        left: 0;
        top: 550%;
        background-color: #fff;
        width: 100%;
        height: 3px;
    }
</style>