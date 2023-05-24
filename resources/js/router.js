const Welcome = () => import('./Welcome.vue' /* webpackChunkName: "resource/js/welcome" */)
const GenreList = () => import('./genre/List.vue' /* webpackChunkName: "resource/js/genre/list" */)
const GenreCreate = () => import('./genre/Add.vue' /* webpackChunkName: "resource/js/genre/add" */)
const GenreEdit = () => import('./genre/Edit.vue' /* webpackChunkName: "resource/js/genre/edit" */)

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