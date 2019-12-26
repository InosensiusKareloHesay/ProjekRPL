<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url('/c_index');?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Profil <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Profil Anda</h1>
          </div>
        </div>
      </div>
		</section>
		
		<section class="ftco-section services-section">
    <?php foreach($profil as $data){ ?>
      <div class="container">
      	<div class="row justify-content-center">
          <div class="col-md-8 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">RM</span>
            <h2 class="mb-10">Hi, <?php echo $data["Nama"]; ?></h2>
          </div>
        </div>
        <div class="col-lg-12 col-md-12">
          <form action="#" class="request-form ftco-animate">
         
              <h2>Nama  : <?php echo $data["Nama"]; ?> </h2>
              <h2>Alamat  : <?php echo $data["Alamat"]; ?> </h2>
              <h2>No. Telp  : <?php echo $data["No_Hp"]; ?> </h2>
              <h2>No. KTP  : <?php echo $data["No_KTP"]; ?> </h2>
              <h2>No. SIM  : <?php echo $data["No_SIM"]; ?> </h2>
          <?php } ?>
            <p><a href="<?php echo base_url('/c_profilEdit');?>" class="btn btn-primary py-3 px-4 col-lg-12 col-md-12">Edit Profil</a></p>
          </form>
        </div>
      </div>
    </section>