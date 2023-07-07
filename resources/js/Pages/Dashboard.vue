<script setup>
import Layout from '@/Layouts/AdminLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <Layout>
        <div class="card">
            <div class="card-header">Dashboard</div>

            <div class="card-body">
                <p>You are logged in!</p>
            </div>
        </div>
    </Layout>
</template>
