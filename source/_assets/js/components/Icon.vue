<template>
    <span class="icon">
        <i :class="`fa fa-${icon}`"/>
    </span>
</template>

<script>
export default {
    props: {
        icon: {
            type: String,
            required: true
        }
    }
};
</script>
