<template>
    <div class="person">
        <div class="person-wrapper">
            <div class="person-body">
                <table class="person-header">
                    <tr>
                        <td style="width: 45px;">
                            <div class="person-avatar" style="margin: 2px;"></div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        person: {
            type: Object,
            required: true,
        }
    },
    name: "Person"

}
</script>

<style scoped>

.person {
    width: 100%;
    height: calc(100% - 200px);
}

.person-wrapper {
    position: relative;
}

.person-body div,
.person-header tr td div {
    background-repeat: no-repeat;
    background-size: 800px 104px;
    height: 104px;
    position: relative;
}

.person-body div {
    position: absolute;
    right: 0px;
    left: 0px;
    top: 0px;
}

.person-avatar {
    height: 45px !important;
    width: 45px;
    margin: 10px;
    border-radius: 60px;
}
.person-name {
    height: 15px !important;
    margin-bottom: 10px;
    width: 150px;
    border-radius: 2px;
}

.person-date {
    height: 10px !important;
    width: 106px;
    border-radius: 2px;
}

</style>
