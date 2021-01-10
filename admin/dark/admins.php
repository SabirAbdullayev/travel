<?php require_once "header.php";
require_once "nav.php";
require_once "../settings/code/admistrator.php"; ?>
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Admin Siyahı</h4>
            </div>

        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Siyahı</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Ad Soyad</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Email təsdiq</th>
                                        <th>Əməliyyatlar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < count($admins); $i++) { ?>
                                        <tr>
                                            <td><?= $admins[$i]["adsoyad"] ?></td>
                                            <td><?= $admins[$i]["email"] ?></td>
                                            <td><?= $admins[$i]["status"]=="1" ? "Aktiv" : "Deaktiv";   ?></td>
                                            <td><?= $admins[$i]["email_tesdiq"]=="1" ? "Təsdiq Edilib" : "Təsdiq edilməyibdir" ?></td>
                                            <td></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->

<!-- Blog Bax -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ətraflı İnformasiya</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tr>
                        <td>Şəkil</td>
                        <td id="img"></td>
                    </tr>
                    <tr>
                        <td>Başlıq</td>
                        <td id="title"></td>
                    </tr>
                    <tr>
                        <td>Məzmun</td>
                        <td id="context"></td>
                    </tr>
                    <tr>
                        <td>Oxunma Sayı</td>
                        <td id="readcount"></td>
                    </tr>
                    <tr>
                        <td>Teqlər</td>
                        <td id="tags"></td>
                    </tr>

                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla </button>
            </div>
        </div>
    </div>
</div>

<?php require_once  "footer.php"; ?>