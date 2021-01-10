<?php require_once "header.php";
require_once "nav.php";
require_once "../settings/code/admistrator.php"; ?>
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
                <h4 class="text-themecolor">Admin Əlavə</h4>
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
                        <form id="formid" class="mt-4" method="POST" action="#" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="adsoyad">Ad Soyad</label>
                                <input type="text" name="adsoyad" placeholder="Ad Soyad daxil edin..." id="adsoyad" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" placeholder="Email daxil edin..." name="email" id="email" class="form-control" />
                            </div>

                            <button type="submit" class="btn btn-primary" name="blog_add">Əlavə Et</button>
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