<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url('c_index/');?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Komplain <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Komplain</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section services-section">
      <div class="container">
      	<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">RM</span>
            <h2 class="mb-10">Komplain</h2>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 col-centered">
          <form action="<?php echo base_url('/c_komplain/do_komplain') ?>" method="post" class="request-form ftco-animate">
            <h2>Input Your Complaint</h2>
            <div class="form-group">
              <label for="" class="label">Isi Keluhan</label>
              <input type="text" class="form-control" name="komplain" placeholder="Komplain" required ="Please fill out this field">
            </div>
            <div class="form-group">
              <input type="submit" value="Kirim Keluhan" class="btn btn-primary py-3 px-4">
            </div>
          </form>
        </div>
      </div>
    </section>