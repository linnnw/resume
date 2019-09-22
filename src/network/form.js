import ajax from './ajax.js'
import Vue from 'vue'
Vue.$ajax = ajax


this.$ajax.post(url,data).then(result => {
    // 你的逻辑
}).catch(err => {
    // 你的逻辑
})