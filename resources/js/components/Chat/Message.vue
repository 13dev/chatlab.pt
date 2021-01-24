<template>
    <div
        class="message-item"
        :class="{'outgoing-message': message.user.id === this.$page.props.user.id }"
    >
        <div class="message-avatar">
            <figure class="avatar">
                <img :src="message.user.avatar" class="rounded-circle" alt="image">
            </figure>
            <div>
                <h5>{{ message.user.name }}</h5>
                <div class="time">
                    {{ message.time }} <i class="ti-double-check text-info"></i>
                </div>
            </div>
        </div>
        <div class="message-content">
            {{ message.body }}
        </div>
    </div>
</template>

<script>
export default {
    name: "Message",
    props: {
        message: {
            type: Object,
            required: true,
        }
    }
}
</script>
<style scoped>

</style>
