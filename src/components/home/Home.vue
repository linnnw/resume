<template>
    <div class="homePage">
<!--        <Head class="head" v-show="false"></Head>    &lt;!&ndash;isHidden&ndash;&gt;-->
        <div class="body">
            <h1>LIN WEI</h1>
            <hr>
            <transition enter-active-class='flipInX' leave-active-class='flipOutX' >
                <div v-show="divFlag" class="post animated">WEB前端</div>
            </transition>

            <button @click="project">查看项目</button>
        </div>
        <slot></slot>
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
                divFlag: true,
                isHidden: true,
                flag: false,
                screenWidth: document.body.clientWidth,   // 这里是给到了一个默认值 （这个很重要）
                colorStyle: false
            }
        },
        mounted() {
            setInterval(() => {
                this.divFlag = !this.divFlag
            },2000)
        },

        methods: {
            project() {
                this.$emit('project');
            }

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


        .post {
            margin: 33px auto;
            font-size: 16px;
            animation-duration: 2200ms;  /*//动画执行时间*/
            color: #fff;

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
            letter-spacing: 8px;
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

        .post {
            margin: 33px auto 37px;
            font-size: 16px;
            animation-duration: 2200ms;  /*//动画执行时间*/
            color: #fff;
        }

        h1 {
            text-align: center;
            font-size: 65px;
            font-weight: 700;
            color: #fff;
            letter-spacing: 8px;
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
            width: 238px;
            height: 38px;
            line-height: 34px;
            border-radius: 8px;
            border: 2px solid #0C6164;
            text-align: center;
            color: #0C6164;
            background-color: transparent;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            font-size: 20px;
            font-weight: 700;

        }
        .body button:hover {
            color: #fff;
            background-color: #0C6164;
        }
        .body div {
            text-align: center;
        }

        .homePage .active {
            color: #fff;
            background-color: #0C6164!important;
        }
    }
</style>