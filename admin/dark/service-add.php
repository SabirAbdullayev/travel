<?php require_once "header.php";
require_once "nav.php"; require_once "../settings/code/service.php"; require_once "tinymce.php"; ?>
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
                                <label for="adi">Adı (*)</label>
                                <input type="text" name="adi" class="form-control" required="required" placeholder="Ad daxil edin..." id="adi" />
                            </div>
                            <div class="form-group">
                                <label for="haqqinda">Haqqında</label>
                                <textarea class="form-control txtarea" cols="50" rows="10" id="haqqinda" name="haqqinda"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Logo (*)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Yüklə</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="logo" required="required" class="custom-file-input" id="logo">
                                        <label class="custom-file-label" for="logo">Fayl seç</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Icon (*)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Yüklə</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="icon" required="required" class="custom-file-input" id="icon">
                                        <label class="custom-file-label" for="logo">Fayl seç</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="service-add">Əlavə Et</button>
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