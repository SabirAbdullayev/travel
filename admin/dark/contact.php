<?php require_once "header.php";
require_once "nav.php"; require_once "../settings/code/settings.php"; ?>

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
                <h4 class="text-themecolor">Əlaqə Nizamlamaları</h4>
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
                                <label for="unvan">Ünvan </label>&nbsp;<i class="icon-location-pin"></i>
                                <input type="text" maxlength="255" name="unvan" value="<?= $data["unvan"] ?>" class="form-control" id="unvan" />
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>&nbsp;<i class="icons-Email"></i>
                                <input type="email" maxlength="255" name="email" class="form-control" value="<?= $data["email"] ?>" id="email" />
                            </div>

                            <div class="form-group">
                                <label for="tel">Telefon</label>&nbsp;<i class="icon-phone"></i>
                                <input type="tel" maxlength="255" name="tel" value="<?= $data["tel"] ?>" class="form-control" id="tel" />
                            </div>
                            <div class="form-group">
                                <label for="mobil">Mobil</label>&nbsp;<i class="icons-Smartphone"></i>
                                <input type="text" maxlength="255" name="mobil" value="<?= $data["mobil"] ?>" class="form-control" id="mobil" />
                            </div>
                            <div class="form-group">
                                <label for="facebook">Facebook </label>&nbsp;<i class="icon-social-facebook"></i>
                                <input type="text" maxlength="255" name="facebook" value="<?= $data["facebook"] ?>" class="form-control" id="facebook" />
                            </div>
                            <div class="form-group">
                                <label for="instagram">Instagram</label>&nbsp;<i class="icon-social-instagram"></i>
                                <input type="instagram" maxlength="255" name="instagram" value="<?= $data["instagram"] ?>" class="form-control" id="instagram" />
                            </div>
                            <div class="form-group">
                                <label for="twitter">Twitter</label>&nbsp;<i class="icon-social-twitter"></i>
                                <input type="twitter" maxlength="255" name="twitter" value="<?= $data["twitter"] ?>" class="form-control" id="twitter" />
                            </div>
                            <div class="form-group">
                                <label for="youtube">Youtube</label>&nbsp;<i class="icon-social-youtube"></i>
                                <input type="youtube" maxlength="255" name="youtube" value="<?= $data["youtube"] ?>" class="form-control" id="youtube" />
                            </div>
                            <div class="form-group">
                                <label for="github">Github</label>&nbsp;<i class="icon-social-github"></i>
                                <input type="github" maxlength="255" name="github" value="<?= $data["github"] ?>" class="form-control" id="github" />
                            </div>




                            <button type="submit" class="btn btn-primary" name="contact">Redaktə Et</button>
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