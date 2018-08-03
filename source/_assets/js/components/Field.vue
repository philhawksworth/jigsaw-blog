<template>
    <div class="field">
        <label :for="labelFor || autoLabelFor" class="label">{{ label }}</label>
        <div class="control">
            <slot/>
        </div>
        <p v-show="error" class="help is-danger">{{ error }}</p>
    </div>
</template>

<script>
export default {
    props: {
        label: {
            type: String,
            required: true
        },
        labelFor: {
            type: String,
            default: ''
        },
        error: {
            type: String,
            default: ''
        }
    },
    computed: {
        autoLabelFor () {
            return this.label.toLowerCase();
        }
    }
};
</script>
