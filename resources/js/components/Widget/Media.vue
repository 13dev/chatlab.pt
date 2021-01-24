<template>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <h6 class="mb-3 d-flex align-items-center justify-content-between">
            <span>Recent Files</span>
            <a href="#" class="btn btn-link small">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload mr-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg> Upload
            </a>
        </h6>
        <div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item pl-0 pr-0 d-flex align-items-center">
                    <a href="#">
                        <i class="fa fa-file-pdf-o text-danger mr-2"></i> report4221.pdf
                    </a>
                </li>
                <li class="list-group-item pl-0 pr-0 d-flex align-items-center">
                    <a href="#">
                        <i class="fa fa-image text-muted mr-2"></i> avatar_image.png
                    </a>
                </li>
                <li class="list-group-item pl-0 pr-0 d-flex align-items-center">
                    <a href="#">
                        <i class="fa fa-file-excel-o text-success mr-2"></i>
                        excel_report_file2020.xlsx
                    </a>
                </li>
                <li class="list-group-item pl-0 pr-0 d-flex align-items-center">
                    <a href="#">
                        <i class="fa fa-file-text-o text-warning mr-2"></i> articles342133.txt
                    </a>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: "Media"
}
</script>

<style scoped>

</style>
