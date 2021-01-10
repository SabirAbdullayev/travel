<?php require_once "header.php";
require_once "nav.php"; require_once "../settings/code/daxili.php"; require_once "tinymce.php"; ?>
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
                <h4 class="text-themecolor">Xidmət Əlavə Etmə Paneli</h4>
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
                            <div class="form-group">
                                <label for="basliq">Başlıq (*)</label>
                                <input type="text" name="basliq" class="form-control" required="required" placeholder="Ad daxil edin..." id="basliq" />
                            </div>
                            <div class="form-group">
                                <label for="mezmun">Məzmun</label>
                                <textarea class="form-control txtarea" cols="50" rows="10" id="mezmun" name="mezmun"></textarea>
                            </div>
                           <div class="form-group">
                                <label>Şəkil (*)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Yüklə</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="sekil" required="required" class="custom-file-input" id="sekil">
                                        <label class="custom-file-label" for="sekil">Fayl seç</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Şəkil 1 (*)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Yüklə</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="sekil1" required="required" class="custom-file-input" id="sekil1">
                                        <label class="custom-file-label" for="sekil1">Fayl seç</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Şəkil 2 (*)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Yüklə</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="sekil2" required="required" class="custom-file-input" id="sekil2">
                                        <label class="custom-file-label" for="sekil2">Fayl seç</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Şəkil 3 (*)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Yüklə</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="sekil3" required="required" class="custom-file-input" id="sekil3">
                                        <label class="custom-file-label" for="sekil3">Fayl seç</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="daxili-add">Əlavə Et</button>
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
<?php require_once "footer.php"; ?>