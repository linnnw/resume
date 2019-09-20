<template>
    <div id="Info">
        <img src="../../assets/images/hero_1.jpg" alt="">
        <h1>I AM DYNAMIC AND CREATIVE</h1>
        <hr>
        <div class="paragraph">
            <p>I am a Web Developer based in London, I graduated with a degree in computer science and currently work at Barclays in Canary Wharf, London. With more than four years of industry experiences in web development, I have worked on projects and applications for high profile clients such as HBO, Warner Bros, Hasbro and British Land.</p>
            <p>I am passionate about creating beautiful, usability oriented and highly crafted web solutions, combining a considered approach to emerging technologies. I specialise in front-end web development technologies including React, Redux, advanced HTML(5), CSS(3), JavaScript, JQuery (cross-platform and cross-browser compatibility) with a strong understanding of web accessibility, web usability standards and web design principles.</p>
            <p>Each website I develop is built to be search engine friendly, fully responsive and to apply the latest development principles and techniques. To find out more about what I can do, please check out my projects below.</p>
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