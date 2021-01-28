<template>
    <!-- new group modal -->
    <div class="modal fade" id="newGroup" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-zoom" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i data-feather="users" class="mr-2"></i> New Group
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="icon-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label class="col-form-label">Group name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" v-model="groupName">
                            </div>
                        </div>


                        <div class="form-group">
                            <p class="mb-2">The group members</p>
                            <div class="input-group">
                                <input type="text" class="form-control" v-model="participantEmail">
                                <div class="input-group-append">
                                    <button class="btn btn-light" data-toggle="tooltip" title="Emoji" type="button"
                                            @click.prevent="addParticipant(participantEmail)">
                                        <i data-feather="user-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="avatar-group">
                                <figure class="avatar" data-toggle="tooltip"
                                        v-for="user in participants"
                                        :user="user"
                                >
                                    <span class="avatar-title bg-success rounded-circle"
                                          :title="user.name">{{ user.charAt(0) }}</span>
                                </figure>
                                <div v-show="participants.length != 0">
                                    <a href="#" title="Remove friends" @click.prevent="removeParticipant()">
                                        <figure class="avatar">
                                    <span class="avatar-title bg-danger rounded-circle">
                                        <i class="icon-user-minus " data-feather="user-minus" ></i>
                                    </span>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Avatar</label>
                            <div class="d-flex align-items-center">
                                <div>
                                    <figure class="avatar mr-3 item-rtl">
                                        <img src="" class="rounded-circle"
                                             alt="image">
                                    </figure>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" @change="avatar">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Description</label>
                            <textarea class="form-control" v-model="description"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" @click.prevent="createGroup()">Create Group</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ./ new group modal -->

</template>

<script>
export default {
    name: 'NewGroup',
    props: {
        users: {
            type: Array,
            required: false,
        }
    },
    data() {
        return {
            groupName: '',
            avatar: '',
            participantEmail: '',
            participants: [],
            participantsId: [],
            description: ''
        }
    },

    methods: {
        addParticipant(email) {
        this.users.forEach((user) => {
            if(email == user.email){
                if(this.participants.includes(user.name) || email == this.$page.props.user.email){
                    return;
                }
                this.participants.push(user.name);
                this.participantsId.push(user.id);
            }
            this.participantEmail = '';
        })
        },
        createGroup(){

            if(!this.participantsId.includes(this.$page.props.user.id)){
                this.participantsId.push(this.$page.props.user.id)
            }

            let data = {
                participants: this.participantsId,
                title: this.groupName,
                description: this.description
            }

            this.groupName = '';
            this.description = '';
            this.partipants = [];
            this.participantsId = [];

            this.$inertia.post('/thread', data, {
                onSuccess: () => {
                    console.log('fino');
                },
                onError(errors) {
                    console.log(222);
                },


            });
        },
        removeParticipant(){
            this.participants.splice(-1);
            this.participantsId.splice(-1);
        }
},
}
</script>

<style scoped>

</style>
