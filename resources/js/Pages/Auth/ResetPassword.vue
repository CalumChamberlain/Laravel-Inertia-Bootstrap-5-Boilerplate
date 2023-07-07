<template>
    <Layout>

        <Head title="Reset Password" />
        <div class="card">
            <div class="card-header">
                Reset Password
            </div>
            <div class="card-body">
                <form @submit.prevent="submit">
                    <div class="form-group my-4">
                        <label for="email">Email</label>
                        <TextInput id="email" type="email" :value="form.email" required autofocus autocomplete="username"
                            v-model="form.email" :error="form.errors.email" />
                    </div>

                    <div class="form-group my-4">
                        <label for="password">Password</label>
                        <TextInput id="password" type="password" required autocomplete="new-password"
                            v-model="form.password" :error="form.errors.password" />
                    </div>

                    <div class="form-group my-4">
                        <label for="password_confirmation">Confirm Password</label>
                        <TextInput id="password_confirmation" type="password" v-model="form.password_confirmation" required
                            autocomplete="new-password" :error="form.errors.password_confirmation" />
                    </div>

                    <div class="form-group d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">
                            Reset Password
                        </button>
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
        email: { type: String, required: true },
        token: { type: String, required: true },
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
            token: props.token,
            email: props.email,
            password: '',
            password_confirmation: '',
        });

        const submit = () => {
            form.post('/reset-password', {
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
