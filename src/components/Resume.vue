<template>
    <div id="resume">

        <Head :class="['head',{headStyle: headStyle}]" v-show="headHidden"></Head>

        <Scroll class="scroll" ref="scroll" @bTop="bToTop" :probeType="3">

            <Home  ref="home"></Home>
            <!--<Info></Info>-->
            <Info></Info>
        </Scroll>

        <BackTop class="animated" @click.native="backTop"  v-show="flag" :probeType="3"></BackTop>


    </div>
</template>

<script>
    import Scroll from '../components/scroll/Scroll'

    import Home from '../components/home/Home'
    import Info from '../components/info/Info'
    import BackTop from './BackTop'
    import Head from '../components/home/childComponents/Head'


    export default {
        name: "Resume",
        data(){
            return {
                flag: false,
                headStyle: false,
                headHidden: true
            }
        },
        components: {
            Scroll,
            Home,
            Info,
            BackTop,
            Head
        },
        methods: {
            backTop(){
                this.$refs.scroll.scrollBackTop(0,0,1000);  /*回到顶部*/
            },

            bToTop(option){     /*滑动到2000像素显示回到顶部*/
                // console.log(option);
                this.flag = (-option.y) > 700;
                this.headStyle = (-option.y) > 50;
                this.$refs.home.isHidden = (-option.y) < 1;
                this.headHidden = (option.y) < 0;

            },
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

    .head {
        position: relative;
        z-index: 22;
        padding: 30px 40px!important;
        transition: all .6s ease;
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
    .headStyle>>>.nav-r::before,
    .headStyle>>>.nav-r::after {
        background-color: #595959!important;
    }
    .headStyle>>>.nav-ul li {
        color: #595959!important;;
    }
</style>