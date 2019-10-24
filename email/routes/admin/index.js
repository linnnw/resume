module.exports = app => {

    const express = require('express')

    const router = express.Router();
    // const Category = require('../../models/Category')


    //添加分类
    router.post('/email', async (req, res) => {
        const data = await req.body


        'use strict';

        const nodemailer = require('nodemailer');

        let transporter = nodemailer.createTransport({
            // host: 'smtp.ethereal.email',
            service: '163', // 使用了内置传输发送邮件 查看支持列表：https://nodemailer.com/smtp/well-known/
            port: 25, // SMTP 端口
            secureConnection: true, // 使用了 SSL
            auth: {
                user: 'm13235002300@163.com',//你的邮箱
                // 这里密码不是qq密码，是你设置的smtp授权码
                pass: 'Aass121212',
            }
        });

        let mailOptions = {
            from: 'm13235002300@163.com', // sender address
            to: '1666455972@qq.com', // list of receivers
            subject: `${data.email}`, // Subject line 标题
            // 发送text或者html格式
            // text: 'Hello 我是火星黑洞', // plain text body
            html: `<b>我是${data.fullName}<br/><h1>内容:</h1>${data.desc}</b>` // html body 内容
        };

        // send mail with defined transport object
        transporter.sendMail(mailOptions, (error, info) => {
            if (error) {
                return console.log(error);
            }
            console.log('Message sent: %s', info.messageId);
            // Message sent: <04ec7731-cc68-1ef6-303c-61b0f796b78f@qq.com>
        });


        res.send('发送成功')
    })


    //查询分类
    router.get('/test', async (req, res) => {
        const items = await 'abc'
        res.send(items);
    })


    app.use('/admin/api',router)
}
