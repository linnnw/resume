<template>
    <div class="contactInfo">
        <div class="qq">
            <img @mouseover="isFlagT" @mouseout="isFlagF" src="../../assets/images/QQ.svg" alt="">
            <transition mode='out-in' enter-active-class='fadeInRight' leave-active-class='fadeOutRight' >
                <div class="qqInfo animated" v-show="flag"><div class="triangle"></div><img src="../../assets/images/qqerweima_01.png" alt=""></div>
            </transition>
        </div>
        <div class="weixin">
            <img @mouseover="isFlagT1" @mouseout="isFlagF1" src="../../assets/images/wexin.svg" alt="">
            <transition mode='out-in' enter-active-class='fadeInRight' leave-active-class='fadeOutRight' >
                <div class="weixinInfo" v-show="flagTo"><div class="triangle"></div><img src="../../assets/images/weixinerweima.jpg" alt=""></div>
            </transition>
        </div>



    </div>
</template>

<script>
    export default {
        name: "ContactInformation",
        data(){
            return {
                flag: false,
                flagTo: false
            }
        },
        methods: {
            isFlagT() {
                this.flag = true
            },
            isFlagF() {
                this.flag = false
            },
            isFlagT1() {
                this.flagTo = true
            },
            isFlagF1() {
                this.flagTo = false
            }
        }
    }
</script>

<style scoped>
    @media screen and (max-width: 767px) {
        .contactInfo {
            display: none;
        }
    }


    @media screen and (min-width: 768px) {
        .contactInfo {
            position: relative;
            width: 40px;
        }
        .contactInfo img {
            width: 30px;
            height: 30px;
            margin: 12px 0;
        }

        .qqInfo img,
        .weixinInfo img {
            width: 100px;
            height: 100px;
            position: absolute;
            top: 5px;
            margin: 0;
            border-radius: 5px;
        }


        .qqInfo .triangle {
            border: 5px solid;
            border-color: transparent #fff transparent transparent;
            position: absolute;
            top: 20px;
            left: -10px;
        }
        .weixinInfo .triangle {
            border: 5px solid;
            border-color: transparent #fff transparent transparent;
            position: absolute;
            top: 81px;
            left: -10px;
        }
        .qqInfo,
        .weixinInfo {
            position: absolute;
            top: 0;
            left: 50px;
            border-radius: 5px;
            width: 90px;
            height: 110px;
            animation-duration: 500ms;
        }
    }
</style>