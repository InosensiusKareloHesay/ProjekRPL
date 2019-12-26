<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
       <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url('/c_index');?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Mobil<i class="ion-ios-arrow-forward"></i></span></p>
       <h1 class="mb-3 bread">Jenis Mobil</h1>
   </div>
</div>
</div>
</section>

<section class="ftco-section">
 <div class="container">
  <div class="row">
    <?php foreach ($mobil as $data): ?>
       <div class="col-md-3">
        <div class="car-wrap ftco-animate">
         <div class="img d-flex align-items-end" style="background-image: url(assets/images/<?php echo $data['Gambar'];?>);">
          <div class="price-wrap d-flex">
           <span class="rate"><?php echo $data['Harga'];?> </span>
           <p class="from-day">
            <span>From</span>
            <span>/Day</span>
        </p>
    </div>
</div>
<div class="text p-4 text-center">
    <?php 
    $arr = explode(' ',trim($data['Nama_Mobil']));?>
    <h2 class="mb-0"><?php echo $arr[0]; ?></h2>
    <span><?php echo $arr[1]; ?></span>
    <p class="d-flex mb-0 d-block"><a href="<?php echo base_url('/c_penyewaan');?>" class="btn btn-black btn-outline-black mr-1">Book now</a>
    <a href="<?php echo base_url('/c_detailCar/getMobil/');?><?php echo $data['Nama_Mobil'] ?>" class="btn btn-black btn-outline-black mr-1">Detail</a> 
    </p>
</div>
</div>
</div>
<?php endforeach; ?>
</div>
</div>
</section>
