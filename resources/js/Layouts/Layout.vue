<template>
    <div class="app">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <!-- <Link :href="homeUrl" class="navbar-brand">
                {{ appName }}
                </Link> -->

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto" v-if="isLoggedIn">
                        <!--  -->
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <div class="d-flex h-100 align-items-center">
                                <ThemeSwitcher />
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="my-5">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="alert alert-success" role="alert" v-if="successMessage">
                        {{ successMessage }}
                    </div>

                    <div class="alert alert-danger" role="alert" v-if="errorMessage">
                        {{ errorMessage }}
                    </div>

                    <slot />
                </div>
            </div>
        </main>
    </div>
</template>

<script>
import { Link } from '@inertiajs/vue3';
import ThemeSwitcher from '@/Components/ThemeSwitcher.vue';

export default {
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
    },
    components: {
        Link,
        ThemeSwitcher,
    },
    computed: {
        homeUrl() {
            return this.$page.props.auth?.user?.home_url ?? '/';
        },
        isAdmin() {
            return this.$page.props.auth.isAdmin;
        },
        isLoggedIn() {
            return this.$page.props.auth.user !== null;
        },
        successMessage() {
            return this.$page.props.flash.success;
        },
        errorMessage() {
            return this.$page.props.flash.error;
        },
        appName() {
            return this.$page.props.appName;
        },
    },
    methods: {
        logout() {
            this.$inertia.post('/logout');
        },
    },
}
</script>