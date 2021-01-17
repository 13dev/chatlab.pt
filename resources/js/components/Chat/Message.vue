<template>
    <div
        class="message-item"
        :class="{'outgoing-message': user.id === authUser.id }"
    >
        <div class="message-avatar">
            <figure class="avatar">
                <img src="{{ user.image }}" class="rounded-circle" alt="image">
            </figure>
            <div>
                <h5>{{ user.name }}</h5>
                <div class="time">
                    {{ message.time }} <i class="ti-double-check text-info"></i>
                </div>
            </div>
        </div>
        <div class="message-content">
            {{ message.content }}
        </div>
    </div>
</template>

<script>
export default {
    name: "Message",
    props: {
        user: {
            type: Object,
            required: true,
        },
        message: {
            type: Object,
            required: true,
        }
    }
}
</script>
<style scoped>

</style>
