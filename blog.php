<?php require_once "header.php";?>

    <div class="site-blocks-cover inner-page-cover" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h1 class="text-white font-weight-light">Blog Posts</h1>
              <div><a href="index.html">Home</a> <span class="mx-2 text-white">&bullet;</span> <span class="text-white">Blog</span></div>
              
            </div>
          </div>
        </div>
      </div>  


    
    <div class="site-section">
      <div class="container">
        
        <div class="row mb-3 align-items-stretch">
        <?php foreach ($blog as $blg){ ?>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-blog">
                                            <div class="img">
                                                <img width="150" height="150" src="<?= $blg['sekil'] ?>" alt="">
                                            </div>
                                            <div class="content">
                                                <ul class="top-meta">
                                                    <li>
                                                        <p class="date">
                                                            <?= $blg['vaxt'] ?>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="post-by">
                                                            By, Admin
                                                        </p>
                                                    </li>
                                                </ul>
                                                <a href="blog-details.php">
                                                    <h4 class="title">
                                                        <?= $blg['basliq'] ?>
                                                    </h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>

        </div>
        <div class="row">
          <div class="col-12 text-center">
            <a href="#" class="btn btn-outline-primary border-2 py-3 px-5">Load More Posts...</a>
          </div>
        </div>
      </div>
    </div>

    <?php require_once "footer.php" ?>