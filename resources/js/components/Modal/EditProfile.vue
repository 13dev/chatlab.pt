<template>
    <!-- edit profile modal -->
    <div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-zoom" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i data-feather="edit-2" class="mr-2"></i> Edit Profile
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="icon-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#personal" role="tab"
                               aria-controls="personal" aria-selected="true">Personal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#about" role="tab" aria-controls="about"
                               aria-selected="false">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#social-links" role="tab"
                               aria-controls="social-links" aria-selected="false">Social Links</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="personal" role="tabpanel">
                            <form>
                                <div class="form-group">
                                    <label  class="col-form-label">Fullname</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" v-model="fullName">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-form-label">Email</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" v-model="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Avatar</label>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <figure class="avatar mr-3 item-rtl">
                                                <img :src="user.avatar" class="rounded-circle"
                                                     alt="image">
                                            </figure>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                    <div class="form-group">
                                        <label class="col-form-label">New Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" v-model="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Confirm Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" v-model="password_confirmation">
                                        </div>
                                    </div>

                                <!--<div class="form-group">
                                    <label for="city" class="col-form-label">City</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="city" placeholder="Ex: Columbia">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i data-feather="target"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="col-form-label">Phone</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="phone" placeholder="(555) 555 55 55">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i data-feather="phone"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="website" class="col-form-label">Website</label>
                                    <input type="text" class="form-control" id="website" placeholder="https://">
                                </div>-->
                            </form>
                        </div>
                        <div class="tab-pane" id="about" role="tabpanel">
                            <form>
                                <div class="form-group">
                                    <label for="about-text" class="col-form-label">Write a few words that describe
                                        you</label>
                                    <textarea class="form-control" id="about-text"></textarea>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" checked id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">View profile</label>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="social-links" role="tabpanel">
                            <form>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Username">
                                        <div class="input-group-append">
                                        <span class="input-group-text bg-facebook">
                                            <i class="icon-facebook"></i>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Username">
                                        <div class="input-group-append">
                                        <span class="input-group-text bg-twitter">
                                            <i class="icon-twitter"></i>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Username">
                                        <div class="input-group-append">
                                        <span class="input-group-text bg-instagram">
                                            <i class="icon-instagram"></i>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Username">
                                        <div class="input-group-append">
                                        <span class="input-group-text bg-linkedin">
                                            <i class="icon-linkedin"></i>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Username">
                                        <div class="input-group-append">
                                        <span class="input-group-text bg-dribbble">
                                            <i class="icon-dribbble"></i>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Username">
                                        <div class="input-group-append">
                                        <span class="input-group-text bg-youtube">
                                            <i class="icon-youtube"></i>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text"  class="form-control" placeholder="Username">
                                        <div class="input-group-append">
                                        <span class="input-group-text bg-google">
                                            <i class="icon-google"></i>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" @click.prevent="updateUser()">Save</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'EditProfile',
    data() {
        return {
            user: this.$page.props.user,
            fullName: '',
            password: '',
            password_confirmation: '',
            email: ''
        }
    },
    created() {
        this.fullName = this.user.name;
        this.email = this.user.email;
    },
    methods: {
        updateUser(){
            if(this.password != this.password_confirmation){
                console.log(1);
                return
            }
            let data = {
                name : this.fullName,
                email : this.email,
                password : this.password,
                password_confirmation : this.password_confirmation
            }

            this.$inertia.put('/user/'+ this.user.id, data, {
                onSuccess: () => {
                    console.log('fino');
                },
                onError(errors) {
                    console.log(222);
                },

            });


        }
    }
};
</script>

<style scoped>

</style>
