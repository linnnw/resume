<template>
    <div class="head">

            <span class="nav-l" @click="upTop"><span>林</span>伟</span>
            <span class="nav-r">
                <span class="line"></span>
                    <ul class="nav-ul" v-show="flag">
                        <li v-for="(item, k) in list" :key="k" :class="{current:isCurrent == k}" @click="clickLi(k)">{{ item }}</li><!--电脑端-->
                    </ul>

            </span>

        <span @click.self="view" class="nav-r2">
                <span class="line"></span>


            <transition enter-active-class='fadeInRight' leave-active-class='fadeOutRight' >
                 <ul class="nav-ul2 animated" v-show="flag2">
                    <li v-for="(item, k) in list" :key="k" :class="{current:isCurrent == k}" @click="clickLi(k)">{{ item }}</li><!--手机-->
                </ul>
            </transition>

            </span>



    </div>
</template>

<script>
    export default {
        name: "Head",
        data(){
            return {
                isCurrent: 99,
                flag: true,
                flag2: false,
                list: ['关于我','项目','客户','联系方式']
            }
        },
        methods: {
            view() {
                    this.flag2 = !this.flag2

            },
            upTop() {
                this.$emit('upTop');
            },
            clickLi(k) {
                this.isCurrent = k;
                this.$emit('clickLi',k)
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
        .head .nav-l {
            font-size: 20px;
        }
        .head .nav-l span {
            color: #0C6164;
        }
        .head .nav-r2 {
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
        .head .nav-r2::after {
            content: "";
            position: absolute;
            left: 0;
            top: 8px;
            background-color: #fff;
            width: 100%;
            height: 3px;
        }
        .head .nav-r2::before {
            content: "";
            position: absolute;
            left: 0;
            top: 16px;
            background-color: #fff;
            width: 100%;
            height: 3px;
        }
        .nav-ul2 {
            padding: 45px 0;
            position: absolute;
            right: -3px;
            top: 25px;
            background-color: rgba(36,85,89,.9);

            width: 190px;
            height: 160px;
            border-radius: 7px;
        }
        .nav-ul2 li {
            font-size: 20px;
            text-align: center;
            color: #ddd;
            padding: 10px 5px;
        }

        .current {
            color: #0C6164!important;
        }

        .nav-r  {
             display: none;
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
        .head .line {
            display: none;
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
            font-size: 18px;
            text-align: center;
        }

        .head .nav-r .nav-ul li:hover {
            color: #0C6164;
        }

        .current {
            color: #0C6164!important;
        }
        .nav-r2  {
            display: none;
        }

    }

</style>