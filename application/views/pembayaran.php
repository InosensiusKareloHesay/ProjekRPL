<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url('/c_index');?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Pembayaran <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Bukti Pembayaran</h1>
          </div>
        </div>
      </div>
		</section>
		
		<section class="ftco-section services-section">
      <div class="container">
      	<div class="row justify-content-center">
          <div class="col-md-8 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">RM</span>
            <h2 class="mb-10">Cek Status Pembayaran</h2>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 text-center">
          <form method="post" action="<?php echo base_url('/c_pembayaran/uploadGambar')?>" class="request-form ftco-animate" enctype="multipart/form-data">
            <h2>Status Pembayaran</h2>
              <input type="file" name="file" class="text-center">
              <input type="submit" value="Kirim Bukti" class="mt-20 btn btn-primary col-md-10 col-lg-10">
          </form>
        </div>
      </div>
    </section>