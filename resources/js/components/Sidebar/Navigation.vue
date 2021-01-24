<template>
    <!-- navigation -->
    <nav class="navigation">
        <div class="nav-group">
            <ul>
                <li class="logo">
                    <a href="">
                        <div class="loga">
                            <img src="images/logo/logo2.png" alt="image">
                        </div>

                    </a>
                </li>

                <li>
                    <a data-navigation-target="chats" @click.prevent="handleChangeSidebar(1,$event)" href="#"
                       data-toggle="tooltip" title="Chats"
                       data-placement="right">
                        <span class="badge badge-warning"></span>
                        <i data-feather="message-circle"></i>
                    </a>
                </li>
                <li>
                    <a data-navigation-target="friends" href="#" data-toggle="tooltip"
                       @click.prevent="handleChangeSidebar(2,$event)"
                       title="Friends" data-placement="right">
                        <span class="badge badge-danger"></span>
                        <i data-feather="user"></i>
                    </a>
                </li>
                <li>
                    <a data-navigation-target="favorites" data-toggle="tooltip" title="Favorites" data-placement="right"
                       @click.prevent="handleChangeSidebar(3,$event)"
                       href="#">
                        <i data-feather="star"></i>
                    </a>
                </li>
                <li class="brackets">
                    <a data-navigation-target="archived" href="#" data-toggle="tooltip"

                       title="Archived" data-placement="right">
                        <i data-feather="archive"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="dark-light-switcher" data-toggle="tooltip" title="Light mode"
                       @click.prevent="changeMode()"
                       data-placement="right">
                        <i data-feather="moon"></i>
                    </a>
                </li>

                <li data-toggle="tooltip" title="User menu" data-placement="right">
                    <a href="./login.html" data-toggle="dropdown">
                        <figure class="avatar">
                            <img :src="user.avatar" class="rounded-circle" alt="image">
                        </figure>
                    </a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item" data-toggle="modal" data-target="#editProfileModal">Edit
                            profile</a>
                        <a href="#" class="dropdown-item" data-navigation-target="contact-information">Profile</a>
                        <a href="#" class="dropdown-item" data-toggle="modal" data-target="#settingModal">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a href="login.html" class="dropdown-item text-danger">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- ./ navigation -->
</template>

<script>
export default {
    name: "Navigation",
    data() {
        return {
            mode: null,
            user: this.$page.props.user,
        }
    },
    created() {
        if (localStorage.getItem('MODE') === null) {
            localStorage.setItem('MODE', 2);
            this.mode = 2;
        } else {
            this.mode = localStorage.getItem('MODE');
        }
        this.backgroundColor(this.mode);
    },
    methods: {
        changeMode() {

            this.mode = this.mode == 1 ? 2 : 1;

            localStorage.setItem('MODE', this.mode);

            this.backgroundColor(this.mode);
        },

        handleChangeSidebar(id, event) {
            this.$bus.emit('SIDEBAR_CHANGED', id);
        },

        backgroundColor(mode) {
            let body = $('body');
            if (mode == 1) {
                body.addClass('dark');
                return;
            }
            body.removeClass('dark');
        }
    }
}
</script>

<style scoped>
.loga img {
    width: 100%;
    height: 100%;
    -o-object-fit: cover;
    object-fit: cover;
}

.loga {
    display: inline-block;
    margin-bottom: 0;
    height: 3.5rem;
    width: 3.5rem;
    border-radius: 50%;
}
</style>
