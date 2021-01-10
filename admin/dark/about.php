<?php require_once "header.php";
require_once "nav.php"; require_once "../settings/code/settings.php"; require_once 'tinymce.php'; ?>
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
                <h4 class="text-themecolor">Haqqında</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="mt-4" method="POST" action="#" enctype="multipart/form-data">
                        <input type="hidden" name="old_sekil" value="<?= $data["sekil"] ?>" />
                        <div class="form-group">
                                <label for="description">Şəkil</label> <br />
                                <img height="125" src="../../<?= $data["sekil"] ?>" alt="" />
                            </div>
                            <div class="form-group">
                                <label for="mezmun">Məzmun</label>
                                <textarea class="form-control txtarea" name="mezmun" id="mezmun" cols="30" rows="10"><?= $data["haqqinda"] ?></textarea>
                            </div>

                            <div class="form-group">
                                <label>Şəkil (Dəyişmək üçün seçim edin)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Yüklə</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="sekil" class="custom-file-input" id="sekil">
                                        <label class="custom-file-label" for="logo">Fayl seç</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="about">Redaktə Et</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<?php require_once "footer.php";  ?>