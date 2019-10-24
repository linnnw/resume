<template>
    <div id="Info">
        <img src="../../assets/images/head.jpg" alt="">
        <h1>前端即兴趣，兴趣即未来</h1>
        <hr>
        <div class="paragraph">
            <p>我毕业于软件学院，出来工作了一年的运维职位，接触前端后热爱，自学前端，但是暂无前端工作经验。但正式这一事实，我有巨大的前景和空间，凭着我认真踏实爱学的态度，努力奋斗的拼搏，在新的平台我将做出更好的成绩。</p>
            <p>我专门学习过前端Web开发技术，包括Vue，HTML（5），CSS（3），JavaScript等，希望在往后的开发项目中得到实践提升。</p>
            <p>我做事细心，一丝不苟，谨慎认真，热爱学习</p>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Info"
    }
</script>

<style scoped>

    @media screen and (max-width: 767px) {
        #Info {
            width: 100%;
            background-color: #fff;
            overflow: hidden;
        }
        #Info img   {
            display: block;
            width: 170px;
            height: 170px;
            border-radius: 50%;
            margin: 80px auto;
        }

        #Info h1 {
            display: block;
            width: 290px;
            text-align: center;
            margin: -20px auto 20px;
            font-weight: 700;
            font-size: 16px;
        }
        hr {
            border: none;
            height: 2px;
            width: 100px;
            background-color: #0C6164;
            margin: 30px auto 0;
        }
        .paragraph {
            margin: 0px auto 80px;
            padding: 15px;
        }
        p {
            margin: 20px auto;
            font-size: 14px;
            text-align: center;
            line-height: 20px;
        }
    }


    @media screen and (min-width: 768px) {
        #Info {
            width: 100%;
            background-color: #fff;
            overflow: hidden;
        }
        #Info img   {
            display: block;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin: 80px auto;
        }

        #Info h1 {
            display: block;
            width: 450px;
            text-align: center;
            margin: -20px auto 20px;
            font-weight: 700;
            font-size: 26px;
        }
        hr {
            border: none;
            height: 2px;
            width: 100px;
            background-color: #0C6164;
        }
        .paragraph {
            margin: 40px auto 80px;
            width: 700px;
        }
        p {
            margin: 20px auto;
            font-size: 16px;
            text-align: center;
            line-height: 24px;
        }
    }



</style>