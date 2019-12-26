<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url('/c_index');?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Profil <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Edit Profil</h1>
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
            <form action="<?php echo base_url('/c_profilEdit/edit');?>" method="post" class="request-form ftco-animate">
                <h2>Perbaharui Informasi Anda</h2>
                    <div class="form-group">
                        <label for="" class="label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" value=<?php echo $data["Nama"]; ?> required ="Please fill out this field">
                    </div>
                    <div class="form-group">
                        <label for="" class="label">Alamat Lengkap</label>
                        <input type="text" class="form-control" name="alamat" value=<?php echo $data["Alamat"]; ?> required ="Please fill out this field">
                    </div>
                    <div class="form-group"> 
                        <label for="" class="label">No. Telp</label>
                        <input type="text" class="form-control" name="noTelp" value=<?php echo $data["No_Hp"]; ?> required ="Please fill out this field">
                    </div>
                    <div class="form-group">
                        <label for="" class="label">Nomor Identitas KTP</label>
                        <input type="text" class="form-control" name="ktp" value=<?php echo $data["No_KTP"]; ?> required ="Please fill out this field">
                    </div>
                    <div class="form-group">
                        <label for="" class="label">Nomor Identitas SIM</label>
                        <input type="text" class="form-control" name="sim" value=<?php echo $data["No_SIM"]; ?> required ="Please fill out this field">
                    </div>
                    <div class="form-group">
                        <label for="" class="label">Email</label>
                        <input type="email" class="form-control" name="email" value=<?php echo $data["Email"]; ?> required ="Please fill out this field">
                    </div>
                    <div class="form-group">
                        <label for="" class="label">Password</label>
                        <input type="password" class="form-control" name="password" value=<?php echo $data["Password"]; ?> required ="Please fill out this field">
                    </div>
                <?php } ?>
                <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-primary py-3 px-4">
                </div>
          </form>
        </div>
      </div>
    </section>