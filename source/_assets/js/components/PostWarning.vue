<template>
    <article v-if="isOld" class="message is-warning">
        <div class="message-header">
            <span><fa icon="warning"/>Warning</span>
        </div>
        <div class="message-body">
            This post is over a year old. Some of the information this contains may be outdated.
        </div>
    </article>
</template>

<script>
export default {
    props: {
        date: {
            type: String,
            required: true
        }
    },
    computed: {
        isOld () {
            return ((Date.now() / 1000 - this.date) / 86400) > 365;
        }
    }
};
</script>
