const Welcome = () => import('./components/Welcome.vue' /* webpackChunkName: "resource/js/components/welcome" */)
const GenreList = () => import('./components/genre/List.vue' /* webpackChunkName: "resource/js/components/genre/list" */)
const GenreCreate = () => import('./components/genre/Add.vue' /* webpackChunkName: "resource/js/components/genre/add" */)
const GenreEdit = () => import('./components/genre/Edit.vue' /* webpackChunkName: "resource/js/components/genre/edit" */)

export const routes = [
    {
        name: 'home',
        path: '/',
        component: Welcome
    },
    {
        name: 'genreList',
        path: '/genre',
        component: GenreList
    },
    {
        name: 'genreEdit',
        path: '/genre/:id/edit',
        component: GenreEdit
    },
    {
        name: 'genreAdd',
        path: '/genre/add',
        component: GenreCreate
    }
]