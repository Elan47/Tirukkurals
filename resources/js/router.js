import Vue from 'vue';
import Router from 'vue-router';
import Kural from './components/pages/Kural';
import Home from './components/pages/Home';
import Section from './components/pages/Section';
import Chapter from './components/pages/Chapter';
import ChapterGroup from './components/pages/ChapterGroup';
import ChapterKurals from './components/pages/ChapterKurals';
import SectionChapters from './components/pages/SectionChapters';
import ChapterGroupChapters from './components/pages/ChapterGroupChapters';
import KuralDetails from './components/pages/KuralDetail';
import Search from './components/pages/Search';
import Login from './components/pages/user/Login';
import Register from './components/pages/user/Register';

Vue.use(Router);
const ARL = '/vue-kurals/public/';
// const ARL = this.$APPURL;

const routes = new Router({
    mode: 'history',
    routes: [{
            path: ARL + 'kurals',
            name: 'kurals',
            component: Kural
        },
        {
            path: ARL + 'kural/:id',
            name: 'kural-details',
            component: KuralDetails
        },
        {
            path: ARL + 'home',
            name: 'home',
            component: Home
        },
        {
            path: ARL + 'sections',
            name: 'sections',
            component: Section
        },
        {
            path: ARL + 'chapters',
            name: 'chapters',
            component: Chapter
        },
        {
            path: ARL + 'chapter-groups',
            name: 'chapter-groups',
            component: ChapterGroup
        },
        {
            path: ARL + 'chapter-kurals/:id',
            name: 'chapter-kurals',
            component: ChapterKurals
        },
        {
            path: ARL + 'section-chapters/:id',
            name: 'section-chapters',
            component: SectionChapters
        },
        {
            path: ARL + 'chapter-group-chapters/:id',
            name: 'chapter-group-chapters',
            component: ChapterGroupChapters
        },
        {
            path: ARL + 'search',
            name: 'search',
            component: Search,
            beforeEnter: (to, form, next) => {
                axios.get('api/authenticated').then(() => {
                    next()
                }).catch(() => {
                    return next({
                        name: 'login'
                    })
                })
            }
        },
        {
            path: ARL + 'login',
            name: 'login',
            component: Login
        },
        {
            path: ARL + 'register',
            name: 'register',
            component: Register
        },
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
