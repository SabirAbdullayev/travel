<?php require_once "header.php";?>



    <div class="site-blocks-cover inner-page-cover" style="background-image: url(img/about-bg.jpg);" data-aos="fade"
      data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white font-weight-light" style="background-color: rgba(14, 13, 13, 0.527);">Haqqımızda</h1>

          </div>
        </div>
      </div>
    </div>



    <div class="site-section" data-aos="fade-up">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">
            <img src="<?= $settings['sekil']?>" style="width: 540px; height: 360px;"
              alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-6 pl-md-5">
            <h2 class="font-weight-light text-black mb-4">Şirkət Haqqında</h2>
            <p><?= $settings['haqqinda']?></p>

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
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
              aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                    <a href="bookingaze.html" class="btn btn-outline-primary py-3 px-5">Daxili Turlar</a>
                <a href="booking.html" class="btn btn-outline-primary py-3 px-5">Xarici Turlar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php require_once "footer.php" ?>