<template>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <p class="text-muted">Lorem ipsum is a pseudo-Latin text used in web design, typography,
                layout, and printing in place of English to emphasise design elements over content.
                It's also called placeholder (or filler) text. It's a convenient tool for
                mock-ups.</p>
            <div class="mt-4 mb-4">
                <h6>Phone</h6>
                <p class="text-muted">(555) 555 55 55</p>
            </div>
            <div class="mt-4 mb-4">
                <h6>City</h6>
                <p class="text-muted">Germany / Berlin</p>
            </div>
            <div class="mt-4 mb-4">
                <h6>Website</h6>
                <p>
                    <a href="#">www.franshanscombe.com</a>
                </p>
            </div>
            <div class="mt-4 mb-4">
                <h6 class="mb-3">Social media accounts</h6>
                <ul class="list-inline social-links">
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-sm btn-floating btn-facebook" data-toggle="tooltip" title="" data-original-title="Facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-sm btn-floating btn-twitter" data-toggle="tooltip" title="" data-original-title="Twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-sm btn-floating btn-dribbble" data-toggle="tooltip" title="" data-original-title="Dribbble">
                            <i class="fa fa-dribbble"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-sm btn-floating btn-whatsapp" data-toggle="tooltip" title="" data-original-title="Whatsapp">
                            <i class="fa fa-whatsapp"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-sm btn-floating btn-linkedin" data-toggle="tooltip" title="" data-original-title="Linkedin">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-sm btn-floating btn-google" data-toggle="tooltip" title="" data-original-title="Google">
                            <i class="fa fa-google"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-sm btn-floating btn-behance" data-toggle="tooltip" title="" data-original-title="Behance">
                            <i class="fa fa-behance"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-sm btn-floating btn-instagram" data-toggle="tooltip" title="" data-original-title="Instagram">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
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

    </div>
</template>

<script>
export default {
    name: "About"
}
</script>

<style scoped>

</style>
