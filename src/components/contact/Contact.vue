<template>
    <div id="contact">
        <h1>給我留言</h1>
        <hr>
        <p>
            如果您想直接与我联系，请将您的电子邮件发送至：1666455972@qq.com
        </p>
        <Form class="form"></Form>
    </div>
</template>

<script>
    import Form from './childComponents/Form'

    export default {
        name: "Contact",
        components: {
            Form
        }
    }
</script>

<style scoped>
    @media screen and (max-width: 767px){
        #contact {
            overflow: hidden;
            background-color: #F2F2F2;
            padding: 0 25px 100px 25px;

        }
        h1 {
            width: 100px;
            text-align: center;
            font-size: 20px;
            margin: 88px auto 0;
            background-color: #0C6164;
            color: #fff;
        }
        hr {
            margin: 25px auto;
            background-color: #0c6164;
            height: 2px;
            border: none;
            width: 60px;
        }
        p {
            width: 300px;
            text-align: center;
            margin: 50px auto;
            font-size: 16px;
        }

    }

    @media screen and (min-width: 768px){
        #contact {
            overflow: hidden;
            background-color: #F2F2F2;
            padding-bottom: 150px;

        }
        h1 {
            width: 130px;
            text-align: center;
            font-size: 30px;
            margin: 88px auto 0;
            background-color: #0C6164;
            color: #fff;
        }
        hr {
            margin: 25px auto;
            background-color: #0c6164;
            height: 2px;
            border: none;
            width: 100px;
        }
        p {
            width: 700px;
            text-align: center;
            margin: 50px auto;
            font-size: 20px;
        }
        .form {
            width: 650px;
            margin: 0 auto;
        }
    }
</style>