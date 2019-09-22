<template>
    <div id="someProject">
        <h1>项目</h1>
        <hr class="xm">

        <ul class="classification">
            <li>手机App</li>
        </ul>


        <el-button class="elButton" type="text" @click="centerDialogVisible = true">
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

        </el-button>

        <el-dialog
                class="pop"
                :visible.sync="centerDialogVisible"
                width="70%"
                :append-to-body="true"> <!--弹出层在遮罩层下面用这个:append-to-body="true"-->


            <div class="pjPopup">
                <div class="pjPopup-l">
                    <img class="pjInfoImg" src="../../assets/images/project.png" alt="">
                </div>

                <hr class="mobleHr">
                <div class="pjPopup-r">
                    <h1>蘑菇街</h1>
                    <hr>
                    <h2>模拟蘑菇街，用的蘑菇街真实数据</h2>
                    <ul>
                        <li>html5</li>
                        <li>css3</li>
                        <li>webpack</li>
                        <li>vue</li>
                        <li>axios</li>
                    </ul>
                </div>
            </div>
        </el-dialog>
    </div>
</template>



<script>


    export default {
        name: "SomeProject",
        data() {
            return {
                flag: false,
                centerDialogVisible: false
            }
        },
        methods: {

            // open() {
            //     this.$alert('<strong>这是 <i>HTML</i> 片段</strong>',  {
            //         dangerouslyUseHTMLString: true
            //     });
            // },

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


    /* @media screen and (max-width: 767px){ */
        #someProject {
            width: 100%;
            background-color: #F2F2F2;
            overflow: hidden;
            padding: 70px 0;
        }
        h1 {
            margin: 0 auto;
            font-size: 28px;
            font-weight: 700;
            width: 200px;
            text-align: center;
        }
        ul {
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
            display: inline-block;
            margin: 35px auto;
            text-align: center;
            font-size: 16px;
            padding-bottom: 5px;
            border-bottom: 2px solid #0C6164;
            color: #0C6164;
        }
        .imag {
            width: 227px;
            height: 327px;
            background-color: red;
            position: relative;
            margin: 0 auto;
            border-radius: 6px;
            overflow: hidden;
        }
        .imag img {
            width: 227px;
            height: 327px;
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
        .elButton {
            margin-left: 50%;
            transform: translateX(-50%);
        }
        .pjPopup {
            height: 557px;

        }
        .pjPopup-l {
            height: 50%;
            width: 100%;
        }
        .pjPopup .pjPopup-l .pjInfoImg {
            width: 100%;
            height: 100%;
            float: left;
            box-shadow: 0px 5px 8px rgba(0,0,0,.3);
        }
        .mobleHr {
            margin: 35px 0 5px 0;
            border: none;
            height: 2px;
            width: 100%;
            background-color: #0C6164;
        }
        .pjPopup-r {
            margin-top: 30px;
        }
        .pjPopup-r h1 {
            margin: 10px 0;
            text-align: left;
            font-weight: normal;
            font-size: 18px;
        }
        .pjPopup-r h2 {
            font-size: 16px;
            margin: 20px 0;
        }
        .pjPopup-r hr {

            border: none;
            height: 2px;
            width: 100px;
            background-color: #585858;
            margin: 8px 0;
        }
        .pjPopup-r ul {
            margin-top: 30px;
        }
        .pjPopup-r li {
            float: left;
            margin-right: 14px;
            margin-bottom: 14px;
            font-size: 16px;
            padding: 5px;
            background-color: #585858;
            color: #fff;

        }
        .pop {
            position: absolute;
            left: 0;
            top: 0;
        }

    /* } */

    @media screen and (min-width: 768px){
        #someProject {
            position: relative;
            width: 100%;
            background-color: #F2F2F2;
            overflow: hidden;
        }
        h1 {
            font-size: 32px;
            font-weight: 700;
            margin: 0 auto;
            width: 200px;
            text-align: center;;
        }
        .xm {
            border: none;
            height: 2px;
            width: 70px;
            background-color: #0C6164;
            margin: 20px auto;
        }
        .classification li{
            width: 80px;
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
        .elButton {
            margin-left: 50%;
            transform: translateX(-50%);
        }
        .pjPopup {
            display: flex;
            height: 557px;

        }
        .pjPopup-l,
        .pjPopup-r {
            flex: 1;
        }
        .pjPopup-l {
            height: 100%;
            width: 50%;
            padding-left: 35px;
        }
        .pjPopup .pjPopup-l .pjInfoImg {
            width: 407px;
            height: 557px;
            float: left;
            box-shadow: 0 5px 8px rgba(0,0,0,.3);
        }
        .pjPopup-r {
            float: right;
            padding: 50px 0 0 100px;
        }
        .pjPopup-r h1 {
            margin: 0;
            text-align: left;
            font-weight: normal;
            font-size: 26px;
        }
        .pjPopup-r h2 {
            font-size: 18px;
            margin: 25px 0;
        }
        .pjPopup-r hr {

            border: none;
            height: 2px;
            width: 100px;
            background-color: #585858;
            margin: 8px 0;
        }
        .pjPopup-r ul {
            margin-top: 70px;
        }
        .pjPopup-r li {
            float: left;
            margin-right: 14px;
            margin-bottom: 14px;
            font-size: 16px;
            padding: 5px;
            background-color: #585858;
            color: #fff;

        }
        .pop {
            position: absolute;
            left: 0;
            top: 0;
        }
        .mobleHr {
            display: none;
        }

    }
</style>