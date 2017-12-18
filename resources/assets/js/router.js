import Vue from 'vue';
import Router from 'vue-router';
import LoginScreen from './components/screens/LoginScreen.vue';

import HomeScreen from './components/screens/HomeScreen.vue';
import ProfileScreen from './components/screens/ProfileScreen.vue';
import SkillsScreen from './components/screens/SkillsScreen.vue';
import ProjectsScreen from './components/screens/ProjectsScreen.vue';

Vue.use(Router);

export default new Router({
    routes: [
        {
            path: '/',
            name: 'HomeScreen',
            component: HomeScreen,
        },
        {
            path: '/profile',
            name: 'ProfileScreen',
            component: ProfileScreen,
        },
        {
            path: '/skills',
            name: 'SkillsScreen',
            component: SkillsScreen,
        },
        {
            path: '/projects',
            name: 'ProjectsScreen',
            component: ProjectsScreen,
        }
    ]
})