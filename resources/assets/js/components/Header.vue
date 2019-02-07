<template>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <ul class="navbar-nav">
                <router-link :to="{ name: 'home'}" class="nav-link">Home</router-link>
                <router-link :to="{ name: 'login'}" class="nav-link">Login</router-link>
            </ul>
        </div>

    </nav>
</template>
<script>
    export default { }
</script>