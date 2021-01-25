<template>
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <p class="text-muted">{{thread.description}}</p>
        <div class="mt-4 mb-4" >

            <h6  class="mb-3">Participants</h6>
            <div v-for="participant in participants"
            :participant="participant" class="d-flex mb-2">
             <figure class="avatar mr-3 item-rtl">
                <img :src="participant.avatar" class="rounded-circle"
                       alt="image">
              </figure>
            <span class="text-muted d-flex align-items-center">{{participant.name}}</span>
            </div>
        </div>

       <!-- <div class="mt-4 mb-4">
            <h6 class="mb-3">Social media accounts</h6>
            <ul class="list-inline social-links">
                <li class="list-inline-item">
                    <a href="#" class="btn btn-sm btn-floating btn-facebook" data-toggle="tooltip" title=""
                       data-original-title="Facebook">
                        <i class="fa icon-facebook"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="btn btn-sm btn-floating btn-twitter" data-toggle="tooltip" title=""
                       data-original-title="Twitter">
                        <i class="fa icon-twitter"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="btn btn-sm btn-floating btn-dribbble" data-toggle="tooltip" title=""
                       data-original-title="Dribbble">
                        <i class="fa icon-dribbble"></i>
                    </a>
                </li>

                <li class="list-inline-item">
                    <a href="#" class="btn btn-sm btn-floating btn-linkedin" data-toggle="tooltip" title=""
                       data-original-title="Linkedin">
                        <i class="fa icon-linkedin"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="btn btn-sm btn-floating btn-google" data-toggle="tooltip" title=""
                       data-original-title="Google">
                        <i class="fa icon-google"></i>
                    </a>
                </li>

                <li class="list-inline-item">
                    <a href="#" class="btn btn-sm btn-floating btn-instagram" data-toggle="tooltip" title=""
                       data-original-title="Instagram">
                        <i class="fa icon-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>-->
        <div class="mt-4 mb-4">
            <h6 class="mb-3">Settings</h6>
            <div class="form-group">
                <div class="form-item custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch11">
                    <label class="custom-control-label" for="customSwitch11">Block</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-item custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" checked="" id="customSwitch12">
                    <label class="custom-control-label" for="customSwitch12">Mute</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-item custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch13">
                    <label class="custom-control-label" for="customSwitch13">Get
                        notification</label>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "About",
    props: {
        thread: {
            type: Object,
            required: true,
        },
    },
    data() {
        return {
            participants: []
        }
    },on: {
        PARTICIPANTS(participants) {
            this.participants = participants;
        }
    },
}
</script>

<style scoped>

</style>
