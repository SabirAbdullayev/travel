<?php ?>
<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="row mb-5">
          <div class="col-md-12">
            <h3 class="footer-heading mb-4"><a href="index.php" class="text-gray h2 mb-0">SA1 Travel</a></h3>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="row mb-5">
          <div class="col-md-12">
            <h3 class="footer-heading mb-4">Naviqasiya</h3>
          </div>
          <div class="col-md-6 col-lg-6">
            <ul class="list-unstyled">
              <li><a href="index.php">Əsas Səhifə</a></li>
              <li class="has-children">
                <a style="color:#686463;">Turlar</a>
                <ul class="dropdown">
                  <li><a href="daxili.php">Daxili turlar</a></li>
                  <li><a href="xarici.php">Xarici turlar</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-6">
            <ul class="list-unstyled">
              <li><a href="#">Blog</a></li>
              <li><a href="#services">Xidmətlər</a></li>
              <li><a href="#">Haqqımızda</a></li>
              <li><a href="#">Əlaqə</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mb-5 mb-lg-0">


        <div class="mb-5">
          <h3 class="footer-heading mb-2">Ünvan</h3>
        <p style="font-size: 17px;">  <span class="icon-map-marker"> </span><?= $settings['unvan'] ?></p>
        
        <h3 class="footer-heading mb-2">Əlaqə</h3>
        <p style="font-size: 17px;">  <span class="icon-phone"> </span><?= $settings['tel'] ?></p>
        <h3 class="footer-heading mb-2">E-poçt</h3>
        <p style="font-size: 17px;">  <span class="icon-envelope"> </span><?= $settings['email'] ?></p>
        </div>

      </div>

    </div>
    <div class="row pt-5 mt-5 text-center">
      <div class="col-md-12">
        <div class="mb-5">
          <a href="<?= $settings['facebook']?>" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
          <a href="<?= $settings['twitter']?>" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
          <a href="<?= $settings['instagram']?>" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
          <a href="<?= $settings['youtube']?>" class="pl-3 pr-3"><span class="icon-youtube"></span></a>
        </div>

        <p>
           &copy;
          <script>
            document.write(new Date().getFullYear());
          </script><a href="index.php" style="color: #FF5733;"> SA1 Travel.</a> Bütün hüquqlarımız qorunur.
        </p>
      </div>

    </div>
  </div>
</footer>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/aos.js"></script>

<script src="js/main.js"></script>

</body>

</html>