<?php require_once "header.php"?>
<?php
        $daxili=$db->prepare("SELECT * FROM daxili WHERE daxili.basliq=?;");
        $daxili->execute(array("Kəlbəcər"));

        foreach ($daxili as $daxili1) {
      ?>
    <div class="slide-one-item home-slider owl-carousel">

      <div class="site-blocks-cover overlay"
        style="background-image: url(<?= $daxili1['sekil1'] ?>); background-size: 100% 120%;"
        data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">


              <h1 class="text-white font-weight-light">Araşdırmağı heç vaxt dayandırma!</h1>

            </div>
          </div>
        </div>
      </div>

      <div class="site-blocks-cover overlay"
        style="background-image:url(<?= $daxili1['sekil2'] ?>);background-size: 100% 120%;"
        data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h1 class="text-white font-weight-light">Öyrənmək İstəsən səyahət etməlİsən.</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="site-blocks-cover overlay"
        style="background-image: url(<?= $daxili1['sekil3'] ?>);background-size: 100% 120%;"
        data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">


              <h1 class="text-white font-weight-light">Səyahət etmək İnkİşaf etməkdİr!</h1>

            </div>
          </div>
        </div>
      </div>


    </div>




    <div class="site-section">


      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
        





            <h2 class="font-weight-light text-black"><?= $daxili1['basliq'] ?></h2>
            
            <hr color="#FF5733" width="25%">
          </div>
        </div>


        <div class="row">
        <?= $daxili1['mezmun'] ?>




        </div>
      </div>

    </div>





    <div class="site-section border-top">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h2 class="mb-5 text-black">Bizimlə Kəlbəcər səyahət etmək istəyirsiniz?</h2>
            <p class="mb-0"><a href="bookingaze.php" class="btn btn-primary py-3 px-5 text-white">İndi sifariş et</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
    <?php require_once "footer.php" ?>