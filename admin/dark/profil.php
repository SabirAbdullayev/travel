<?php require_once "header.php";
require_once "nav.php"; require_once "../settings/code/profil.php"; ?>
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
                <h4 class="text-themecolor">Ümumi Nizamlamalar</h4>
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
                        <input type="hidden" name="old_logo" value="<?= $data["logo"] ?>" />
                            <div class="form-group">
                                <label for="title">Başlıq</label>
                                <input type="text" maxlength="255" name="title" value="<?= $data["basliq"] ?>" class="form-control" id="title" />
                            </div>
                            <div class="form-group">
                                <label for="description">Açıqlama</label>
                                <input type="text" maxlength="255" name="description" class="form-control" value="<?= $data["aciqlama"] ?>" id="description" />
                            </div>

                            <div class="form-group">
                                <label for="description">Cari Logo</label> <br />
                                <img src="../../<?= $data["logo"] ?>" width="100" height="100" alt="" />
                            </div>

                            <div class="form-group">
                                <label>Logo (Dəyişmək üçün seçim edin)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Yüklə</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="logo" class="custom-file-input" id="logo">
                                        <label class="custom-file-label" for="logo">Fayl seç</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Robots.txt (Dəyişmək üçün seçim edin)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Yüklə</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="robots" class="custom-file-input" id="robots">
                                        <label class="custom-file-label" for="robots">Fayl seç</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="general_settings">Redaktə Et</button>
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