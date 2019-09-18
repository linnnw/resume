<template>
    <div class="homePage">
        <Head v-if="isHidden"></Head>
        <div class="body">
            <h1>LIN WEI</h1>
            <hr>
            <div>123123</div>
            <button :class="{active: colorStyle}" @mouseover="modify" @mouseout="restore">查看项目</button>
        </div>
    </div>
</template>

<script>

    import Head from '../../components/home/childComponents/Head'

    export default {
        name: "Home",
        components: {
            Head
        },
        data(){
            return {
                isHidden: true,
                flag: false,
                screenWidth: document.body.clientWidth,   // 这里是给到了一个默认值 （这个很重要）
                colorStyle: false
            }
        },

        methods: {
            modify() {
                this.colorStyle = true
            },
            restore(){
                this.colorStyle = false
            },

        }
    }
</script>

<style scoped>
    @media screen and (max-width: 767px){
        .homePage {
            background: url("../../assets/images/hero_1.jpg") no-repeat;
            background-size: 100% 100%;
            width: 100%;
            height: 100vh;
            position: relative;
        }


        .body {
            height: 300px;
            width: 300px;
            position: absolute;
            left: 50%;
            transform: translate(-50%,-30%);
            top: 50%;
        }

        h1 {
            text-align: center;
            font-size: 45px;
            font-weight: 700;
            color: #fff;
        }
        hr {
            margin-top: 20px;
            width: 100px;
            border: none;
            height: 2px;
            background-color: #0C6164;
        }
        .body button {
            width: 220px;
            height: 34px;
            border: 2px solid #0C6164;
            border-radius: 3px;
            text-align: center;

            color: #0C6164;
            background-color: transparent;
            position: absolute;
            top: 150px;
            left: 50%;
            transform: translateX(-50%);

        }
        .body div {
            text-align: center;
        }
    }

    @media screen and (min-width: 768px){   /*电脑端*/
        .homePage {
            background: url("../../assets/images/hero_1.jpg") no-repeat;
            background-size: 100% 100%;
            width: 100%;
            height: 100vh;
            position: relative;
        }


        .body {
            height: 300px;
            width: 800px;
            position: absolute;
            left: 50%;
            transform: translate(-50%,-50%);
            top: 50%;
        }

        h1 {
            text-align: center;
            font-size: 65px;
            font-weight: 700;
            color: #fff;
        }
        hr {
            margin-top: 35px;
            width: 100px;
            border: none;
            height: 3px;
            background-color: #0C6164;
        }
        .body button {
            box-sizing: border-box;
            margin-top: 35px;
            width: 238px;
            height: 38px;
            line-height: 34px;
            border-radius: 8px;
            border: 2px solid #0C6164;
            text-align: center;
            color: #0C6164;
            background-color: transparent;
            position: absolute;
            top: 150px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 20px;
            font-weight: 700;

        }
        .body div {
            text-align: center;
        }

        .homePage .active {
            color: #fff;
            background-color: #0C6164;
        }
    }
</style>