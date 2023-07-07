<template>
    <Head />

    <div class="card">
        <div class="card-header">
            Welcome
        </div>
        <div class="card-body">

        </div>
    </div>
</template>

<script>
import Layout from '@/Layouts/Layout.vue';
import { Head, Link } from '@inertiajs/vue3';

export default {
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
    },
    components: {
        Layout,
        Head,
        Link,
    },
    data() {
        return {

        }
    },
    mounted() {
    },
    methods: {

    },
}
</script>