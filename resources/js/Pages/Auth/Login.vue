<template>
    <Layout>

        <Head title="Log in" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <div class="card">
            <div class="card-header">Login</div>

            <div class="card-body">
                <form @submit.prevent="submit">
                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>

                        <div class="col-md-6">
                            <TextInput id="email" type="email" v-model="form.email" required autofocus autocomplete="email"
                                :error="form.errors.email"></TextInput>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>

                        <div class="col-md-6">
                            <TextInput id="password" type="password" v-model="form.password" required
                                autocomplete="current-password" :error="form.errors.password"></TextInput>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    v-model="form.remember">

                                <label class="form-check-label" for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button class="btn btn-primary" :disabled="form.processing">
                                Log in
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </Layout>
</template>

<script>
import Layout from '../../Layouts/Layout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import InputError from '../../Components/InputError.vue';
import TextInput from '../../Components/TextInput.vue';
export default {
    props: {
        canResetPassword: Boolean,
        status: String,
    },
    components: {
        Layout,
        Head,
        Link,
        InputError,
        TextInput,
    },
    setup(props) {
        const form = useForm({
            email: '',
            password: '',
            remember: false,
        });

        const submit = () => {
            form.post('/login', {
                onFinish: () => form.reset('password'),
            });
        };

        return {
            form,
            submit,
        };
    },
};

</script>
