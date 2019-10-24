<template>
    <div id="corporate">
        <h1>就职公司</h1>
        <hr>
        <div class="enterprise">
            <div><img src="../../assets/images/power.png" alt=""></div>
            <div><img class="make" src="../../assets/images/make.png" alt=""></div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Corporate"
    }
</script>

<style scoped>
    /* 不需要做 max-width，不添加media query的情况下就是从0开始，你的下一个breakpoint就是你的max，是768px */
    /* @media screen and (max-width: 767px){ */
        * {
            box-sizing: border-box;
        }

        #corporate {
            overflow: hidden;
            padding: 80px 30px;
        }
        #corporate h1 {
            margin: 0 auto;
            width: 150px;
            text-align: center;
            font-size: 26px;
            font-weight: 700;
        }
        #corporate hr {
            border: none;
            height: 2px;
            width: 90px;
            background-color: #0C6164;
            margin: 20px auto;
        }
        .enterprise {
            display: flex;
        }
        .enterprise div {
            margin-top: 50px;
            flex: 1;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;

        }
        .enterprise img {
            width: 100%;
            max-width: 200px;
            padding: 20px;
        }
    /* } */

    @media screen and (min-width: 768px){
        .enterprise img {
            height: 100px;
            max-width: none;
            width: auto;
        }
    }

</style>