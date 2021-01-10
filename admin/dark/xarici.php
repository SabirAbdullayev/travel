<?php require_once "header.php" ; require_once "nav.php" ; require_once "../settings/code/xarici.php" ; ?>
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
                        <h4 class="text-themecolor">Xidmətlər</h4>
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
                                                <th>Başlıq</th>
                                                <th>Mezmun</th>
                                                <th>Şəkil(Ön şəkil)</th>
                                            
                                                <th>Əməliyyatlar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $a=1?>
                                            <?php foreach($data as $x) { ?>
                                            <tr>
                                                <td><?=$a++?></td>
                                                <td><?= $x['basliq'] ?></td>
                                                <td><?= mb_substr($x['mezmun'],0,50)?></td>
                                                <td><img height="75" width="100" src="../../<?= $x['sekil'] ?>" /></td>
                                                <td>
                                                     <a href="xarici-edit.php?id=<?= $x['id'] ?>&edit=ok" ><button  class="btn btn-outline-info btn-sm" >Redaktə Et</button></a>
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



<?php require_once  "footer.php" ; ?>