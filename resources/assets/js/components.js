import VueRouter from 'vue-router';
var routes = require('./routes');

export const router = new VueRouter({
  hashbang: true,
  // mode: 'history',
  routes: [
    {
      path: '/',
      component: routes.index,
      name: 'Home',
    },
  ]
});
