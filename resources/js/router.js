import Vue from 'vue'
import Router from 'vue-router'

import Home from './components/pages/Home'
import About from './components/pages/About'
Vue.use(Router)


const routes = new Router({
    mode: 'history',
    routes: [{
            path: '/vue-kurals/public/home',
            name: 'home',
            component: Home
        },
        {
            path: '/vue-kurals/public/about',
            name: 'about',
            component: About
        }
    ]
});

export default routes;


// Format didn't work
// const routes = [{
//         path: '/home',
//         name: 'home',
//         component: Home
//     },
//     {
//         path: '/about',
//         name: 'about',
//         component: About
//     }
// ]
// export default new Router({
//     mode: history,
//     routes
// })
