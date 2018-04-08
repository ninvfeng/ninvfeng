// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
// import ElementUI from 'element-ui'
// import 'element-ui/lib/theme-chalk/index.css'

// Vue.use(ElementUI);

import axios from 'axios'
import Qs from 'qs'

Vue.config.productionTip = false

Vue.prototype.$http = axios

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  render: h => h(App),
  components: { App },
  template: '<App/>',
  created(){

    // axios全局配置
    axios.defaults.baseURL = 'http://ninvfeng.d'
    axios.defaults.headers['Content-Type'] = 'application/x-www-form-urlencoded'

    // 拦截请求
    axios.interceptors.request.use(function (config) {
      if(Qs.stringify(config.data)){
        config.data = Qs.stringify(config.data)
      }
      return config
    }, function (error) {
      return Promise.reject(error)
    })

    // 拦截响应
    axios.interceptors.response.use(function (response) {
      if(response.data.code==200||response.data.error=='0'){
        return response.data
      }else{
        alert(response.data.message)
      }
    }, function (error) {
      return Promise.reject(error)
    })
  }
})
