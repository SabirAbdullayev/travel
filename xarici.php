<?php require_once "header.php"?>

   

    <div class="site-blocks-cover inner-page-cover" style="background-image: url(img/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h1 class="text-white font-weight-light">XARİCİ TURLAR</h1>
              
            </div>
          </div>
        </div>
      </div>  


    

    <div class="site-section">
      
      <div class="container">
        
        <div class="row">
        <?php
        $xarici=$db->prepare("SELECT * FROM xarici WHERE xarici.basliq=?;");
        $xarici->execute(array("İstanbul"));

        foreach ($xarici as $xarici1) {
      ?>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="susa.php" class="unit-1 text-center">
              <img src="<?= $xarici1['sekil']?>"  alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">100 AZN</strong>
                <h3 class="unit-1-heading"><?= $xarici1['basliq']?></h3>
              </div>
            </a>
          </div>
          <?php } ?>
          <?php
        $xarici=$db->prepare("SELECT * FROM xarici WHERE xarici.basliq=?;");
        $xarici->execute(array("Roma"));

        foreach ($xarici as $xarici1) {
      ?>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="roma.php" class="unit-1 text-center">
              <img src="<?= $xarici1['sekil']?>" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">$390</strong>
                <h3 class="unit-1-heading"><?= $xarici1['basliq']?></h3>
              </div>
            </a>
          </div>
          <?php } ?>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="unit-1 text-center">
              <img src="img/06-australia.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">$390</strong>
                <h3 class="unit-1-heading">Sidney, Avstraliya</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="unit-1 text-center">
              <img src="img/03-japan.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">$390</strong>
                <h3 class="unit-1-heading">Tokio, Yaponya</h3>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="unit-1 text-center">
              <img src="img/04-dubai.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">$320</strong>
                <h3 class="unit-1-heading">Dubay, BƏƏ</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="unit-1 text-center">
              <img src="img/05-london.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">$290</strong>
                <h3 class="unit-1-heading">London, İngiltərə</h3>
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
            <h2 class="font-weight-light text-black text-center">What People Says</h2>
          </div>
        </div>

        <div class="nonloop-block-13 owl-carousel">

          <div class="item">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 mb-5">
                  <img src="images/img_1.jpg" alt="Image" class="img-md-fluid">
                </div>
                <div class="overlap-left col-lg-6 bg-white p-md-5 align-self-center">
                  <p class="text-black lead">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique dolorem quisquam laudantium, incidunt id laborum, tempora aliquid labore minus. Nemo maxime, veniam! Fugiat odio nam eveniet ipsam atque, corrupti porro&rdquo;</p>
                  <p class="">&mdash; <em>James Martin</em>, <a href="#">Traveler</a></p>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 mb-5">
                  <img src="images/img_2.jpg" alt="Image" class="img-md-fluid">
                </div>
                <div class="overlap-left col-lg-6 bg-white p-md-5 align-self-center">
                  <p class="text-black lead">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique dolorem quisquam laudantium, incidunt id laborum, tempora aliquid labore minus. Nemo maxime, veniam! Fugiat odio nam eveniet ipsam atque, corrupti porro&rdquo;</p>
                  <p class="">&mdash; <em>Clair Augustin</em>, <a href="#">Traveler</a></p>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 mb-5">
                  <img src="images/img_4.jpg" alt="Image" class="img-md-fluid">
                </div>
                <div class="overlap-left col-lg-6 bg-white p-md-5 align-self-center">
                  <p class="text-black lead">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique dolorem quisquam laudantium, incidunt id laborum, tempora aliquid labore minus. Nemo maxime, veniam! Fugiat odio nam eveniet ipsam atque, corrupti porro&rdquo;</p>
                  <p class="">&mdash; <em>James Martin</em>, <a href="#">Traveler</a></p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section"  id="services">
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
            <p class="mb-0"><a href="booking.php" class="btn btn-primary py-3 px-5 text-white">İndi sifariş et</a></p>
          </div>
        </div>
      </div>
    </div>
    <?php require_once "footer.php" ?>