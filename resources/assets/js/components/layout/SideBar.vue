<template>
    <ul class="list-group">
        <li class="list-group-item">
            <router-link to="/">
                <i class="fa fa-home" aria-hidden="true"></i> Home
            </router-link>
        </li>
        <li class="list-group-item">
            <router-link to="/skills">
                <i class="fa fa-wrench" aria-hidden="true"></i> My Skills
            </router-link>
        </li>
        <li class="list-group-item">
            <router-link to="/projects">
                <i class="fa fa-table" aria-hidden="true"></i> My Projects
            </router-link>
        </li>
        <li class="list-group-item">
            <router-link to="/">
                <i class="fa fa-star" aria-hidden="true"></i> My Ratings
            </router-link>
        </li>

        <hr>

        <li class="list-group-item">
            <router-link to="/profile">
                <i class="fa fa-user" aria-hidden="true"></i> Profile
            </router-link>
        </li>
        <li class="list-group-item">
            <router-link to="/">
                <i class="fa fa-cog" aria-hidden="true"></i> Settings
            </router-link>
        </li>
        <li class="list-group-item">
            <router-link to="/help">
                <i class="fa fa-question-circle" aria-hidden="true"></i> Help
            </router-link>
        </li>
    </ul>
</template>

<script>
    export default {}
</script>