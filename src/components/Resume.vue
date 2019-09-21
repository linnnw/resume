<template>
    <div id="resume">

        <Head @clickLi="clickLi" ref="head" @upTop="upTop" :class="['head',{headStyle: headStyle}]" ></Head>

        <Scroll class="scroll" ref="scroll" @bTop="bToTop" :probeType="3">

            <Home ref="home">
                <Down class="animated infinite bounce down" @click.native="downInfo"></Down>
            </Home>
            <!--<Info></Info>-->
            <Info ref="info" ></Info>
            <SomeProject ref="sproject"></SomeProject>

        </Scroll>

        <BackTop  @click.native="backTop"  v-show="flag" :probeType="3"></BackTop>


    </div>
</template>

<script>
    import Scroll from '../components/scroll/Scroll'

    import Home from '../components/home/Home'
    import Info from '../components/info/Info'
    import BackTop from './BackTop'
    import Head from '../components/home/childComponents/Head'
    import Down from '../components/home/childComponents/Down'
    import SomeProject from '../components/someProject/SomeProject'



    export default {
        name: "Resume",
        data(){
            return {
                flag: false,
                headStyle: false,
                headHidden: true,
                infoTop: 0
            }
        },
        components: {
            Scroll,
            Home,
            Info,
            BackTop,
            Head,
            Down,
            SomeProject
        },
        methods: {
            backTop(){
                this.$refs.scroll.scrollBackTop(0,0,1000);  /*回到顶部*/
            },

            bToTop(option){     /*滑动到2000像素显示回到顶部*/
                // console.log(option);
                this.flag = (-option.y) > 700;
                this.headStyle = (-option.y) > 50;
                // this.$refs.home.isHidden = option.y >= 0;


                if (-option.y < this.$refs.info.$el.offsetTop) {
                    this.$refs.head.isCurrent = 99;
                }else if(-option.y == this.$refs.info.$el.offsetTop) {
                    this.$refs.head.isCurrent = 0;
                }else if (-option.y < this.$refs.sproject.$el.offsetTop) {
                    this.$refs.head.isCurrent = 0;
                }else if (-option.y >= this.$refs.sproject.$el.offsetTop) {
                    this.$refs.head.isCurrent = 1;
                }


            },
            downInfo(){
                this.infoTop = this.$refs.info.$el.offsetTop
                this.$refs.scroll.scrollBackTop(0,-this.infoTop,1000);
            },
            upTop() {
                this.$refs.scroll.scrollBackTop(0,0,0);  /*回到顶部*/
            },
            clickLi(k) {
                this.$refs.head.flag2 = false
                switch (k) {
                    case 0:
                        this.$refs.scroll.scrollBackTop(0,-this.$refs.info.$el.offsetTop,700);  /*到关于我页面*/
                        break;
                    case 1:
                        this.$refs.scroll.scrollBackTop(0,-this.$refs.sproject.$el.offsetTop,700);
                        break;

                }


            }
        }
    }
</script>

<style scoped>


    #resume {
        height: 100vh;
    }
    .scroll {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

    .down {
        animation-duration: 2200ms;  /*//动画执行时间*/
        animation-delay: 0ms;  /*//延迟*/
        position: absolute;
        bottom: 15px;
        left: 50%;
        margin-left: -25px;
    }

    .head {
        position: relative;
        z-index: 22;
        padding: 30px 40px!important;
        transition: all .5s ease;
        /*background-color: #090D16;*/
    }
    .headStyle {
        background-color: hsla(0,0%,100%,.95);
        padding: 20px 45px!important;
    }

    .headStyle>>>.nav-l {
        color: #595959;
    }
    .headStyle>>>.line,
    .headStyle>>>.nav-r2::before,
    .headStyle>>>.nav-r2::after {
        background-color: #595959;
    }
    .headStyle>>>.nav-ul li {
        color: #595959;
    }
</style>