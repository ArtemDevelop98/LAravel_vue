const routes = [
    {
        path:'/people',
        component:  () => import('../components/person/index.vue'),
        name:'person.index'
    },
    {
        path:'/people/create',
        component:  () => import('../components/person/create.vue'),
        name:'person.create'
    },
    {
        path:'/people/:id/edit',
        component:  () => import('../components/person/edit.vue'),
        name:'person.edit'
    },
{
        path:'/people/:id',
        component:  () => import('../components/person/show.vue'),
        name:'person.show'
    },

];
export default routes
