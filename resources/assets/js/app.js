require('./bootstrap')
var routes = require('./routes')
var components = require('./components')

Vue.use(window.VueRouter)

const router = components.router

//Create an Application instant
const app = new Vue({
  el: '#app',
  router,
  render: h => h(routes.app)
})