
<?php require_once "header.php" ?>
<div class="slide-one-item home-slider owl-carousel">
  <?php
  $xarici = $db->prepare("SELECT * FROM xarici WHERE xarici.basliq=?;");
  $xarici->execute(array("İstanbul"));

  foreach ($xarici as $xarici1) {
  ?>
    <div class="site-blocks-cover overlay" style="background-image: url(<?= $xarici1['sekil1'] ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">


            <h1 class="text-white font-weight-light">Araşdırmağı heç vaxt dayandırma!</h1>

          </div>
        </div>
      </div>
    </div>
  <?php } ?>
  <?php
  $daxili = $db->prepare("SELECT * FROM daxili WHERE daxili.basliq=?;");
  $daxili->execute(array("Quba"));

  foreach ($daxili as $daxili1) {
  ?>
    <div class="site-blocks-cover overlay" style="background-image: url(<?= $daxili1['sekil3'] ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white font-weight-light">Öyrənmək İstəsən səyahət etməlİsən.</h1>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
  <?php
  $xarici = $db->prepare("SELECT * FROM xarici WHERE xarici.basliq=?;");
  $xarici->execute(array("Roma"));

  foreach ($xarici as $xarici1) {
  ?>
    <div class="site-blocks-cover overlay" style="background-image: url(<?= $xarici1['sekil3'] ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">


            <h1 class="text-white font-weight-light">Səyahət etmək İnkİşaf etməkdİr!</h1>

          </div>
        </div>
      </div>
    </div>
  <?php } ?>

</div>




<div class="site-section">


  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center">
        <h2 class="font-weight-light text-black">Son 6 Tur</h2>
        <hr width="30%" color="#FF5733" style="height: 2px;">

      </div>
    </div>


    <div class="row">
      <?php
      $xarici = $db->prepare("SELECT * FROM xarici WHERE xarici.basliq=?;");
      $xarici->execute(array("İstanbul"));

      foreach ($xarici as $xarici1) {
      ?>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
          <a href="istanbul.php" class="unit-1 text-center">
            <img src="<?= $xarici1['sekil'] ?>" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <strong class="text-primary mb-2 d-block"></strong>
              <h3 class="unit-1-heading"><?= $xarici1['basliq'] ?></h3>
            </div>
          </a>
        </div>
      <?php } ?>
      <?php
      $xarici = $db->prepare("SELECT * FROM xarici WHERE xarici.basliq=?;");
      $xarici->execute(array("Roma"));

      foreach ($xarici as $xarici1) {
      ?>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
          <a href="roma.php" class="unit-1 text-center">
            <img src="<?= $xarici1['sekil'] ?>" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <strong class="text-primary mb-2 d-block"></strong>
              <h3 class="unit-1-heading"><?= $xarici1['basliq'] ?></h3>
            </div>
          </a>
        </div>
      <?php } ?>
      <?php
      $daxili = $db->prepare("SELECT * FROM daxili WHERE daxili.basliq=?;");
      $daxili->execute(array("Şuşa"));

      foreach ($daxili as $daxili1) {
      ?>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
          <a href="susa.php" class="unit-1 text-center">
            <img src="<?= $daxili1['sekil'] ?>" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <strong class="text-primary mb-2 d-block"></strong>
              <h3 class="unit-1-heading"><?= $daxili1['basliq'] ?></h3>
            </div>
          </a>
        </div>
      <?php } ?>

      <?php
      $daxili = $db->prepare("SELECT * FROM daxili WHERE daxili.basliq=?;");
      $daxili->execute(array("Kəlbəcər"));

      foreach ($daxili as $daxili1) {
      ?>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
          <a href="kelbecer.php" class="unit-1 text-center">
            <img src="<?= $daxili1['sekil'] ?>" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <strong class="text-primary mb-2 d-block"></strong>
              <h3 class="unit-1-heading"><?= $daxili1['basliq'] ?></h3>
            </div>
          </a>
        </div>
      <?php } ?>
      <?php
      $daxili = $db->prepare("SELECT * FROM daxili WHERE daxili.basliq=?;");
      $daxili->execute(array("Quba"));

      foreach ($daxili as $daxili1) {
      ?>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
          <a href="quba.php" class="unit-1 text-center">
            <img src="<?= $daxili1['sekil'] ?>" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <strong class="text-primary mb-2 d-block"></strong>
              <h3 class="unit-1-heading"><?= $daxili1['basliq'] ?></h3>
            </div>
          </a>
        </div>
      <?php } ?>
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-category="1">
        <a href="#" class="unit-1 text-center">
          <img src="img/06-australia.jpg" alt="Image" class="img-fluid">
          <div class="unit-1-text">
            <strong class="text-primary mb-2 d-block"></strong>
            <h3 class="unit-1-heading">Opera House, Australia</h3>
          </div>
        </a>
      </div>
    </div>
  </div>

</div>







<div class="site-section block-13 bg-light">


  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7">
        <h2 class="font-weight-light text-black text-center">Rəylər</h2>
        <hr width="30%" color="#FF5733" style="height: 2px;">

      </div>
    </div>

    <div class="nonloop-block-13 owl-carousel">
      <?php foreach ($reyler as $rey) { ?>
        <div class="item">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 mb-5">
                <img src="<?=$rey['sekil']?>" alt="Image" class="img-md-fluid">
              </div>
              <div class="overlap-left col-lg-6 bg-white p-md-5 align-self-center">
                <p class="text-black lead"><?= $rey['rey']?></p>
                <p class="">&mdash; <em><?= $rey['adsoyad']?></em>, <a href="#">Səyahətçi</a></p>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      
    </div>
  </div>





  <!-- <div class="site-section bg-light">
      
    </div> -->




  <div class="site-section bg-light" id="services">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center">
          <h2 class="font-weight-light text-black">Bizim Xidmətlər</h2>
          <hr width="30%" color="#FF5733" style="height: 2px;">

        </div>
      </div>
      <div class="row align-items-stretch">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-airplane"></span></div>
            <div>
              <h3>Uçuş bileti</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi
                at.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-route"></span></div>
            <div>
              <h3>Tur Paketlər</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi
                at.</p>
            </div>
          </div>
        </div>


        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-hotel"></span></div>
            <div>
              <h3>Otel Yerləşdirmə</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi
                at.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


  

  <div class="site-section border-top">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-12">
          <h2 class="mb-5 text-black">Bizimlə səyahət etmək istəyirsiniz?</h2>
          <button type="button" class="btn btn-primary btn-lg " style="width: 200px; height: 60px;font-size: medium;" data-toggle="modal" data-target="#staticBackdrop">
            İndi sifariş et
          </button>
          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Bizimlə səyahət etmək istəyirsiniz?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p style="font-weight:bold;">TUR SİFARİŞ EDİN</p>
                </div>
                <div class="modal-footer">
                  <a href="bookingaze.php" class="btn btn-outline-primary py-3 px-5">Daxili Turlar</a>
                  <a href="booking.php" class="btn btn-outline-primary py-3 px-5">Xarici Turlar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php require_once "footer.php" ?>