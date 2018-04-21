<template>
    <form @submit.prevent="onSubmitContact" autocomplete="off">
        <input type="text" class="is-hidden" v-model="form.trapit">

        <div class="field">
            <label for="name" class="label">Name</label>
            <div class="control">
                <input type="text" class="input"
                    id="name" name="name" v-model="form.name"
                    :class="{ 'is-danger': errors.has('name') }"
                    v-validate="'required|max:80'"
                >
            </div>
            <p v-show="errors.has('name')" class="help is-danger">
                {{ errors.first('name') }}
            </p>
        </div>

        <div class="field">
            <label for="email" class="label">Email</label>
            <div class="control">
                <input type="text" class="input"
                    id="email" name="email" v-model="form.email"
                    :class="{ 'is-danger': errors.has('email') }"
                    v-validate="'required|max:70|email'"
                >
            </div>
            <p v-show="errors.has('email')" class="help is-danger">
                {{ errors.first('email') }}
            </p>
        </div>

        <div class="field">
            <label for="message" class="label">Message</label>
            <div class="control">
                <textarea class="textarea"
                    id="message" name="message" v-model="form.message"
                    :class="{ 'is-danger': errors.has('message') }"
                    v-validate="'required|min:20'"
                />
            </div>
            <p v-show="errors.has('message')" class="help is-danger">
                {{ errors.first('message') }}
            </p>
        </div>

        <div class="field has-text-centered">
            <button class="button is-primary" :disabled="errors.any()" :class="{ 'is-loading': sending }">
                <fa icon="envelope"/>
                <span>Send me a message</span>
            </button>
        </div>
    </form>
</template>

<script>
import axios from 'axios';
import qs from 'qs';

export default {
    data () {
        return {
            sending: false,
            form: {
                trapit: '',
                name: '',
                email: '',
                message: ''
            }
        };
    },
    methods: {
        onSubmitContact () {
            this.$validator.validateAll().then((isValid) => {
                if (isValid) {
                    this.send();
                }
            });
        },
        send () {
            this.sending = true;
            axios.post('https://jumprock.co/mail/raniesantos', qs.stringify({
                ...this.form,
                replyto: this.email,
                subject: 'Blog Contact Page'
            }))
                .then(({ data }) => {
                    this.sending = false;
                    this[(data.status === 'success' ? 'onSuccess' : 'onError')]();
                })
                .catch((error) => {
                    this.sending = false;
                    this.onError();
                    console.log(error.response);
                });
        },
        onSuccess () {
            this.form.name = '';
            this.form.email = '';
            this.form.message = '';
            this.$validator.reset();
            window.eventBus.$emit('notify', 'Your message has been sent.', 'success', 'check-circle');
        },
        onError () {
            window.eventBus.$emit('notify', 'Sending failed, please try again.', 'danger', 'times-circle');
        }
    }
};
</script>
