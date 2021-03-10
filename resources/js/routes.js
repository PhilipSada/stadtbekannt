import Home from './components/Home';
import About from './components/About';
import NotFound from './components/NotFound.vue';
import Login from './components/Login.vue';
import Register from './components/Register.vue';
import Dashboard from './components/Dashboard.vue';

export default{
    mode:'history',
    linkActiveClass:'',
    routes:[
        {
            path: '*',
            component:NotFound
        },
        // {
        //     path:'/',
        //     component:Home
        // },
        {
            path:'/about',
            component:About
        },
        {
            path:'/',
            component:Login,
            name:'Login'
        },
        {
            path:'/register',
            component:Register
        },
        {
            path:'/dashboard',
            component:Dashboard,
            name:'Dashboard',
            meta:{requiresAuth:true}
        }
    ]
}