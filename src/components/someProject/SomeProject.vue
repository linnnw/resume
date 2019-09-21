<template>
    <div id="someProject">
        <h1>项目</h1>
        <hr class="xm">

        <ul class="classification">
            <li>手机App</li>
        </ul>
        <div class="imag">
            <transition enter-active-class='fadeIn' leave-active-class='fadeOut'>
                <div class="bgc animated" v-show="flag" >
                    <h1>蘑菇街模仿</h1>
                    <hr ref="hr">
                </div>
            </transition>
            <div class="mouseImg" @mouseover="imgBlock" @mouseout="imgNone"></div>

            <img ref="img" src="../../assets/images/project.png" alt="">
        </div>
    </div>
</template>

<script>
    export default {
        name: "SomeProject",
        data() {
            return {
                flag: false
            }
        },
        methods: {
            imgBlock() {
                this.flag = true
                // this.$refs.img.style.width = '130%'
                // this.$refs.img.style.height = '130%'
                this.$refs.img.style.transform = 'scale(1.3)'
                this.$refs.hr.style.width = '100px'
            },
            imgNone() {
                this.flag = false
                // this.$refs.img.style.width = '100%'
                // this.$refs.img.style.height = '100%'
                this.$refs.img.style.transform = 'scale(1)'
                this.$refs.hr.style.width = '0'
            }
        }
    }
</script>

<style scoped>

    @media screen and (max-width: 767px){
        #someProject {
            height: 1900px;
            width: 100%;
            background-color: #F2F2F2;
            overflow: hidden;
        }
        h1 {
            font-size: 28px;
            font-weight: 700;
            margin: 80px auto 0;
            width: 200px;
            text-align: center;
        }
        .xm {
            border: none;
            height: 2px;
            width: 70px;
            background-color: #0C6164;
            margin: 20px auto;
        }
        .classification li{
            width: 60px;
            margin: 35px auto;
            text-align: center;
            font-size: 16px;
            padding-bottom: 5px;
            border-bottom: 2px solid #0C6164;
            color: #0C6164;
        }
        .imag {
            width: 307px;
            height: 407px;
            background-color: red;
            position: relative;
            margin: 0 auto;
            border-radius: 6px;
            overflow: hidden;
        }
        .imag img {
            width: 307px;
            height: 407px;
            transition: all .5s;
        }
        .imag .bgc {
            background-color: #21323B;
            opacity: .95;
            position: absolute;
            z-index: 100;
            width: 307px;
            height: 407px;
            display: none;
        }

    }

    @media screen and (min-width: 768px){
        #someProject {
            padding-bottom: 150px;
            width: 100%;
            background-color: #F2F2F2;
            overflow: hidden;
        }
        h1 {
            font-size: 32px;
            font-weight: 700;
            margin: 80px auto 0;
            width: 200px;
            text-align: center;
        }
        .xm {
            border: none;
            height: 2px;
            width: 70px;
            background-color: #0C6164;
            margin: 20px auto;
        }
        .classification li{
            width: 60px;
            margin: 35px auto;
            text-align: center;
            font-size: 16px;
            padding-bottom: 5px;
            border-bottom: 2px solid #0C6164;
            color: #0C6164;
        }
        .imag {
            width: 307px;
            height: 407px;
            background-color: red;
            position: relative;
            margin: 0 auto;
            border-radius: 6px;
            overflow: hidden;
            cursor: url("../../assets/icon/search.svg"),default;
        }
        .imag img {
            width: 100%;
            height: 100%;
            transition: all .5s;
        }
        .imag .bgc {
            background-color: #21323B;
            opacity: .95;
            position: absolute;
            z-index: 100;
            width: 307px;
            height: 407px;
            animation-duration:1000ms;
        }
        .mouseImg {
            position: absolute;
            z-index: 100;
            width: 100%;
            height: 100%;
        }
        .bgc hr {
            border: none;
            height: 2px;
            width: 0;
            background-color: #0C6164;
            margin: 20px auto;
            transition: all .5s;
        }
        .bgc h1 {
            margin-top: 50%;
            color: #fff;
            font-size: 24px;
        }
    }
</style>