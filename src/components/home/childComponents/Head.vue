<template>
    <div class="head">

            <span class="nav-l"><span>林</span>伟</span>
            <span @click.self="view" class="nav-r">
                <span class="line"></span>
                    <ul class="nav-ul" v-show="flag">
                        <li>关于</li>
                        <li>项目</li>
                        <li>客户</li>
                        <li>联系方式</li>
                    </ul>
            </span>

    </div>
</template>

<script>
    export default {
        name: "Head",
        data(){
            return {
                flag: false,
                screenWidth: document.body.clientWidth,   // 这里是给到了一个默认值 （这个很重要）
            }
        },
        created() {

            if(this.screenWidth > 767){
                this.flag = true
            }else {
                this.flag = false
            }

        },
        methods: {
            view(){
                if (this.screenWidth <= 767) {
                    this.flag = !this.flag
                }
            },
        },
        mounted() {
            const that = this
            window.onresize = () => {
                return (() => {
                    window.screenWidth = document.body.clientWidth
                    that.screenWidth = window.screenWidth
                })()
            }
        },
        watch: {
            screenWidth () {
                if(this.screenWidth > 767){
                    this.flag = true
                }else {
                    this.flag = false
                }
            }
        }
    }
</script>

<style scoped>
    @media screen and (max-width: 767px){

        .head {
            padding: 30px 40px;
            /*position: fixed;*/
            font-size: 16px;
            font-weight: 700;
            color: #fff;
        }

        .head  .nav-l span{
            color: #0C6164;
        }
        .head  .nav-r {
            width: 25px;
            float: right;
            position: relative;
        }
        .head .line {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            background-color: #fff;
            width: 100%;
            height: 3px;
        }
        .head .nav-r::after {
            content: "";
            position: absolute;
            left: 0;
            top: 8px;
            background-color: #fff;
            width: 100%;
            height: 3px;
        }
        .head .nav-r::before {
            content: "";
            position: absolute;
            left: 0;
            top: 16px;
            background-color: #fff;
            width: 100%;
            height: 3px;
        }
        .nav-ul {
            width: 70px;
            position: absolute;
            right: -3px;
            top: 25px;
        }
        .nav-ul li {
            text-align: right;
            color: #ddd;
        }

    }

    @media screen and (min-width: 768px){   /*电脑端*/

        .head {
            padding: 30px 40px;
            position: relative;
            font-size: 24px;
            font-weight: 700;
            line-height: 40px;
            color: #fff;
            /*overflow: hidden;*/
        }
        .head  .nav-l span{
            color: #0C6164;
        }
        .head .nav-r {
            float: right;
        }
        .head .nav-r .nav-ul {
            display: flex;
            width: 400px;
        }
        .head .nav-r .nav-ul li {
            flex: 1;
            font-size: 20px;
        }


    }

</style>