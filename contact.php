<?php require_once "header.php";?>

   

    <div class="site-blocks-cover inner-page-cover" style="background-image: url(img/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h1 class="text-white font-weight-light">Bizimlə Əlaqə</h1>
              
            </div>
          </div>
        </div>
      </div>  


    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5">

            

            <form action="#" class="p-5 bg-white">
             

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Ad</label>
                  <input type="text" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Soyad</label>
                  <input type="text" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Mövzu</label> 
                  <input type="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Mesaj</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Qeydlərinizi yaza bilərsiniz..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Mesajı göndər" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Adres</p>
              <p class="mb-4"><?= $settings['unvan']?></p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#"><?= $settings['tel']?></a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#"><?= $settings['email']?></a></p>

            </div>
            
            <div class="p-4 mb-3 bg-white">
              <img src="img/hero_bg_1.jpg" alt="Image" class="img-fluid mb-4 rounded">
              <h3 class="h5 text-black mb-3">Ətraflı informasiya</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur? Fugiat quaerat eos qui, libero neque sed nulla.</p>
              <p><a href="#" class="btn btn-primary px-4 py-2 text-white">Daha çox</a></p>
            </div>


          </div>
        </div>
      </div>
    </div>
    <?php require_once "footer.php" ?>