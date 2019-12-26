 <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?php echo base_url();?>assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url('/c_index');?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Mobil<i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Profil Mobil</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-car-details">
			<?php foreach($mobil as $data){ ?>
      <div class="container">
      	<div class="row justify-content-center">
      		<div class="col-md-12">
      			<div class="car-details">
							<?php
							$gambar = $data['Gambar'];
							echo '<img src="'.base_url('assets/images/'.$gambar.'').'" width="350px" height="250px" style="display: block; margin: auto">';
							?><div class="text text-center">
								<?php 
								$arr = explode(' ',trim($data['Nama_Mobil']));?>
      					<span class="subheading"><?php echo $arr[0]; ?></span>
      					<h2><?php echo $arr[1]; ?></h2>
      				</div>
      			</div>
      		</div>
      	</div>
      	<div class="row">
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon"><span class="flaticon-car-machine"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Engine
		                	<span><?php echo $data['Engine'];?> cc</span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon"><span class="flaticon-car-seat"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Seats
		                	<span><?php echo $data['Tempat_Duduk'];?></span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon"><span class="flaticon-diesel"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Fuel Capacity
		                	<span><?php echo $data['Tangki'];?> Liter</span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
					</div>
				</div>	
			</div>
			<?php } ?>
    </section>