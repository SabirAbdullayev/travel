<?php require_once "header.php" ; require_once "nav.php" ; require_once "../settings/code/portfolio.php" ; ?>
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
                        <h4 class="text-themecolor">Portfolio</h4>
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
                                                <th>S/N</th>
                                                <th>ID</th>
                                                <th>Kateqoriya</th>
                                                <th>Adı</th>
                                                <th>Qeyd</th>
                                                <th>Link</th>
                                                <th>Status</th>
                                                <th>Əməliyyatlar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $a=1?>
                                            <?php foreach($data as $x) { ?>
                                            <tr>
                                                <td><?=$a++?></td>
                                                <td><?= $x['id'] ?></td>
                                                <td><?= $x['kateqoriya'] ?></td>
                                                <td><?= $x['adi'] ?></td>
                                                <td><?= $x['info'] ?></td>
                                                <td><?= $x['link'] ?></td>
                                                <td><input onchange="PortfolioStatus(<?= $x['id'] ?>)" type="checkbox" <?= $x["status"]==1 ? "checked" : "" ?>  class="js-switch" data-color="#f62d51" data-size="small" /></td>
                                                <td>
                                                    <button onclick="PortfolioRedakte(<?= $x['id'] ?>)" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-info btn-sm" >Redaktə Et</button>
                                                    <button onclick="PortfolioSil(<?= $x['id'] ?>,'../../../<?= $x['sekil'] ?>')" class="btn btn-outline-danger btn-sm">Sil</button>
                                                </td>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Redaktə Et</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="#" enctype="multipart/form-data">
                        <input type="hidden" value="" id="redakteid" name="id" />
                        <input type="hidden" value="" id="oldimg" name="oldimg" />
                        <div class="form-group">
                            <label for="ad">Kateqoriyalar (*)</label>
                            <select class="form-control" name="redaktekateqoriya" id="redaktekateqoriya" required >
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="redakteadi" class="col-form-label">Adı:</label>
                            <input type="text" class="form-control" name="redakteadi" id="redakteadi">
                        </div>
                        <div class="form-group">
                            <label for="redakteinfo" class="col-form-label">Qeyd:</label>
                            <input type="text" class="form-control" name="redakteinfo" id="redakteinfo">
                        </div>
                        <div class="form-group">
                            <label for="redaktelink" class="col-form-label">Link:</label>
                            <input type="text" class="form-control" name="redaktelink" id="redaktelink">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Cari Şəkil:</label> <br />
                            <img src="" width="100" height="70" id="redaktesekil" alt="" />
                        </div>
                        <div class="form-group">
                            <label>Şəkil (*)</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Yüklə</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" name="sekil"  class="custom-file-input" id="sekil">
                                    <label class="custom-file-label" for="logo">Fayl seç</label>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
                            <button class="btn btn-primary" name="portfolioredakte">Redaktə et</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


<?php require_once  "footer.php" ; ?>