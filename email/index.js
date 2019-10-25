const express = require('express');

const app = express();

app.use(require('cors')())  /*cors是允许跨域请求的不然会有404*/
app.use(express.json())

require('./routes/admin')(app)

app.listen(3000, () => {
    console.log('启动');
})
