<template>
    <form @submit.prevent="onSubmitContact">
        <div class="field">
            <label for="name" class="label">Name</label>
            <div class="control">
                <input type="text"
                    id="name"
                    name="name"
                    v-model="name"
                    class="input"
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
                <input type="text"
                    id="email"
                    name="email"
                    v-model="email"
                    class="input"
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
                <textarea
                    id="message"
                    name="message"
                    v-model="message"
                    class="textarea"
                    :class="{ 'is-danger': errors.has('message') }"
                    v-validate="'required|min:20'"
                />
            </div>
            <p v-show="errors.has('message')" class="help is-danger">
                {{ errors.first('message') }}
            </p>
        </div>
        <div class="field">
            <button class="button is-primary is-fullwidth" :disabled="errors.any()">
                Send
            </button>
        </div>
    </form>
</template>

<script>
export default {
    data () {
        return {
            name: '',
            email: '',
            message: ''
        };
    },
    methods: {
        onSubmitContact () {
            this.$validator.validateAll().then((isValid) => {
                if (isValid) {
                    alert('submit form');
                }
            });
        }
    }
};
</script>
