<template>
    <div id="app">
        <div class="container">
            <top-bar></top-bar>
            <div class="row">
                <div class="col col-sm-2">
                    <side-bar></side-bar>
                </div>
                <div class="col col-sm-10">
                    <router-view></router-view>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    import TopBar from './layout/TopBar.vue';
    import SideBar from './layout/SideBar.vue';

    export default {
        components: {'top-bar': TopBar, 'side-bar': SideBar},

        name: 'app',
    }
</script>