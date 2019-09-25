<template>

    <el-form :label-position="labelPosition" :rules="rules" :model="dynamicValidateForm" ref="dynamicValidateForm" label-width="100px" class="demo-dynamic">

        <el-form-item
                label="姓名"
                prop="fullName"
                :rules="[
      { required: true, message: '姓名不能为空'},
      { type: 'string', message: '姓名必须为字符串值'}
    ]"
        >
            <el-input placeholder="姓名" v-model="dynamicValidateForm.fullName" autocomplete="off"></el-input>
        </el-form-item>
        <el-form-item
                prop="email"
                label="邮箱"
                :rules="[
      { required: true, message: '请输入邮箱地址', trigger: 'blur' },
      { type: 'email', message: '请输入正确的邮箱地址', trigger: ['blur', 'change'] }
    ]"
        >
            <el-input placeholder="邮箱地址" v-model="dynamicValidateForm.email"></el-input>
        </el-form-item>

        <el-form-item label="留言" prop="desc">
            <el-input placeholder="这个功能暂时不能使用" :rows="7" type="textarea" v-model="dynamicValidateForm.desc"></el-input>
        </el-form-item>

        <el-form-item class="sub">
            <el-button type="primary" @click="submitForm(dynamicValidateForm)">提交</el-button>

            <el-button @click="resetForm('dynamicValidateForm')">重置</el-button>
        </el-form-item>
    </el-form>
</template>

<script>
    export default {

        name: "Form",
        data() {
            return {
                server: null,
                dynamicValidateForm: {
                    email: '',
                    fullName: '',
                    desc: ''
                },
                labelPosition: 'top',
                rules: {
                    desc: [
                        { required: true, message: '请填写活动形式', trigger: 'blur' }
                    ]
                }
            };
        },
        methods: {

            submitForm(dynamicValidateForm) {
                this.$refs['dynamicValidateForm'].validate((valid) => {
                    if (valid) {

                        this.$refs['dynamicValidateForm'].resetFields();
                        this.$notify({
                            title: 'success',
                            message: '邮件已发送，我会尽快回复',
                            type: 'success'
                        });

                    } else {
                        console.log('error submit!!');
                        return false;
                    }
                });
            },
            resetForm(dynamicValidateForm) {
                this.$refs['dynamicValidateForm'].resetFields();
            }

        }
    }
</script>

<style scoped>
    .sub {
        width: 330px;
        margin: 0 auto;
    }
    .sub .el-button {
        font-size: 18px;
        width: 157px;
    }
    .el-textarea__inner {
        min-height: 80px;
    }
</style>



