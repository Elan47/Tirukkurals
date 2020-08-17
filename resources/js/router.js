import Vue from 'vue'
import Router from 'vue-router'
import Kural from './components/pages/Kural'
import About from './components/pages/About'
import Section from './components/pages/Section'
import Chapter from './components/pages/Chapter'
import ChapterGroup from './components/pages/ChapterGroup'
import ChapterKurals from './components/pages/ChapterKurals'
import SectionChapters from './components/pages/SectionChapters'
import ChapterGroupChapters from './components/pages/ChapterGroupChapters'
import KuralDetails from './components/pages/kuralDetail'
Vue.use(Router)


const routes = new Router({
    mode: 'history',
    routes: [{
            path: '/vue-kurals/public/kurals',
            name: 'kurals',
            component: Kural
        }, {
            path: '/vue-kurals/public/kural/:id',
            name: 'kural-details',
            component: KuralDetails
        },
        {
            path: '/vue-kurals/public/about',
            name: 'about',
            component: About
        }, {
            path: '/vue-kurals/public/sections',
            name: 'sections',
            component: Section
        }, {
            path: '/vue-kurals/public/chapters',
            name: 'chapters',
            component: Chapter
        }, {
            path: '/vue-kurals/public/chapter-groups',
            name: 'chapter-groups',
            component: ChapterGroup
        },
        {
            path: '/vue-kurals/public/chapter-kurals/:id',
            name: 'chapter-kurals',
            component: ChapterKurals,
        }, {
            path: '/vue-kurals/public/section-chapters/:id',
            name: 'section-chapters',
            component: SectionChapters,
        }, {
            path: '/vue-kurals/public/chapter-group-chapters/:id',
            name: 'chapter-group-chapters',
            component: ChapterGroupChapters,
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
