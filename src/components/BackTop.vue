<template>
    <h1 id="top">置顶</h1>
</template>

<script>
    export default {
        name: "BackTop"
    }
</script>

<style scoped>

    @media screen and (max-width: 767px){
        #top {
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            border-radius: 5px;
            background-color: #0C6164;
            color: #fff;
            font-weight: 700;
            font-size: 14px;
            position: fixed;
            right: 30px;
            bottom: 30px;
            transition: all .3s;
            opacity: 0;

        }
    }
    @media screen and (min-width: 768px){
        #top {
            box-sizing: border-box;
            width: 50px;
            height: 50px;
            padding: 15px 10px;
            border-radius: 5px;
            background-color: #0C6164;
            color: #fff;
            font-weight: 700;
            font-size: 15px;
            position: fixed;
            right: 55px;
            bottom: 45px;
            transition: all .3s;
            opacity: 0;
            cursor: pointer;
        }


    }   /*电脑端*/

</style>