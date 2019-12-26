<section class="ftco-section services-section" style="background-image: url('assets/images/bg_2.jpg')">
      <div class="container">
      	<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <h2 class="mt-20" style="color:white">Register</h2>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 col-centered">
          <form action="<?php echo base_url('/c_register/do_register') ?>" method="post" class="request-form ftco-animate">
            <div class="form-group">
                <label for="" class="label">Nama Lengkap</label>
              <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required ="Please fill out this field">
            </div>
            <div class="form-group">
                <label for="" class="label">Alamat Lengkap</label>
              <input type="text" class="form-control" name="alamat" placeholder="Alamat" required ="Please fill out this field">
            </div>
            <div class="form-group">
                <label for="" class="label">No. Telp</label>
              <input type="number" class="form-control" name="noTelp" placeholder="Nomer Telp" required ="Please fill out this field">
            </div>
            <div class="form-group">
                <label for="" class="label">Nomor Identitas KTP</label>
              <input type="text" class="form-control" name="ktp" placeholder="KTP" required ="Please fill out this field">
            </div>
            <div class="form-group">
                <label for="" class="label">Nomor Identitas SIM</label>
              <input type="text" class="form-control" name="sim" placeholder="SIM" required ="Please fill out this field">
            </div>
            <div class="form-group">
                <label for="" class="label">Email</label>
              <input type="email" class="form-control" name="email" placeholder="E-mail" required ="Please fill out this field">
            </div>
            <div class="form-group">
              <label for="" class="label">Password</label>
              <input type="password" class="form-control" name="password" placeholder="Password (Min 8 character - Must Have 1 Upper Case, 1 Lower Case, and 1 Number"  pattern=".[a-zA-Z0-9]{7,}" required ="Please fill out this field">
            </div>
            <button type="submit" id="submit" class="form-group btn btn-primary py-3 px-4">Register</button>
          </form>
        </div>
      </div>
    </section>