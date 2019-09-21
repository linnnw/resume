<template>
    <div id="corporate">
        <h1>就职公司</h1>
        <hr>
        <div class="enterprise">
            <div><img src="../../assets/images/power.png" alt=""></div>
            <div><img class="make" src="../../assets/images/make.png" alt=""></div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Corporate"
    }
</script>

<style scoped>
    @media screen and (max-width: 767px){
        #corporate {
            overflow: hidden;
            padding-bottom: 250px;
        }
        #corporate h1 {
            margin: 80px auto 0;
            width: 150px;
            text-align: center;
            font-size: 26px;
            font-weight: 700;
        }
        #corporate hr {
            border: none;
            height: 2px;
            width: 90px;
            background-color: #0C6164;
            margin: 20px auto;
        }
        .enterprise {
            display: flex;
        }
        .enterprise div {
            margin-top: 50px;
            flex: 1;
            text-align: center;
        }
        .enterprise img {
            width: 81px;
        }
        .enterprise .make {
            height: 70px;
            width: 150px;
        }
    }

    @media screen and (min-width: 768px){
        #corporate {
            overflow: hidden;
            padding-bottom: 250px;
        }
        #corporate h1 {
            margin: 80px auto 0;
            width: 150px;
            text-align: center;
            font-size: 26px;
            font-weight: 700;
        }
        #corporate hr {
            border: none;
            height: 2px;
            width: 90px;
            background-color: #0C6164;
            margin: 20px auto;
        }
        .enterprise {
            display: flex;
        }
        .enterprise div {
            margin-top: 50px;
            flex: 1;
            text-align: center;
        }
        .enterprise img {
            width: 120px;
        }
        .enterprise .make {
            height: 120px;
            width: 250px;
        }
    }

</style>