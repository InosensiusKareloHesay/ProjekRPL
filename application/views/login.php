<section class="ftco-section services-section" style="background-image: url('assets/images/bg_2.jpg')">
      <div class="container">
      	<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <h2 class="mt-20" style="color:white">Login</h2>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 col-centered">
          <form action="<?php echo base_url('/c_login/do_login') ?>" method="post" class="request-form ftco-animate">
            <div class="form-group">
                <label for="" class="label">Email</label>
              <input type="email" class="form-control" name="email" placeholder="E-mail" required ="Please fill out this field">
            </div>
            <div class="form-group">
              <label for="" class="label">Password</label>
              <input type="password" class="form-control" name="password" placeholder="password" required ="Please fill out this field">
            </div>
            <button type="submit" id="submit" class="form-group btn btn-primary py-3 px-4">Login</button>
            <p>Not having account ? <a href="<?php echo base_url('/c_register');?>"> Click Here! </a></p>
          </form>
        </div>
      </div>
    </section>