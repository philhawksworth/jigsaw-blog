<template>
    <div v-if="message" :class="`notification is-${type}`">
        <button class="delete" @click="message = ''"/>
        <fa v-if="icon" :icon="icon"/>
        {{ message }}
    </div>
</template>

<script>
export default {
    data () {
        return {
            message: '',
            type: '',
            icon: ''
        };
    },
    created () {
        window.eventBus.$on('notify', (message, type = 'info', icon = '') => {
            this.message = message;
            this.type = type;
            this.icon = icon;
        });
    }
};
</script>
