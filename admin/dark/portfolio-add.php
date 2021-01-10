<?php require_once "header.php";
require_once "nav.php"; require_once "../settings/code/portfolio.php"; ?>
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
                <h4 class="text-themecolor">Portfolio Əlavə Etmə Paneli</h4>
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
                                <label for="ad">Kateqoriyalar (*)</label>
                                <select class="form-control" name="kateqoriya" id="kateqoriya" required >
                                    <option>Web Layihələr</option>
                                    <option>SEO</option>
                                    <option>Mobil Layihələr</option>
                                </select>
                                  </div>
                            <div class="form-group">
                                <label for="ad">Adı (*)</label>
                                <input type="text" name="ad" class="form-control" required="required" placeholder="Ad daxil edin..." id="ad" />
                            </div>
                            <div class="form-group">
                                <label for="info">Qeyd</label>
                                <input type="text" name="info" class="form-control" placeholder="Qeyd daxil edin..." id="info" />
                            </div>
                            <div class="form-group">
                                <label for="link">Link</label>
                                <input type="link" name="link" class="form-control" placeholder="Link daxil edin..." id="link" />
                            </div>
                            <div class="form-group">
                                <label>Şəkil (*)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Yüklə</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="sekil" required="required" class="custom-file-input" id="sekil">
                                        <label class="custom-file-label" for="logo">Fayl seç</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="portfolioadd">Əlavə Et</button>
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