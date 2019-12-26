<section class="ftco-section services-section" style="background-image: url('<?php echo base_url();?>assets/images/bg_2.jpg');">
      <div class="container">
      	<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <h2 class="mt-20" style="color:white">Status Mobil</h2>
          </div>
        </div>
        <div class="col-lg-12 col-md-12">
        <?php $coun = 1; ?>
          <?php foreach($status as $list){?>
          <form action="<?php echo base_url('/c_status/gantiStatus/');?><?php echo $list['Plat_Mobil']?>" class="request-form ftco-animate" method="post">
              <table class="demo-table">
                  <thead>
                    <tr>
                      <th width="60px">No</th>
                      <th width="200px">Jenis Mobil</th>
                      <th width="200px">Plat Mobil</th>
                      <th width="200px">Status Sekarang</th>
                      <th width="200px">Ganti Status</th>
                      <th width="200px">Konfirmasi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td> <?php echo $coun ?> </td>
                      <td><?php echo $list['Nama_Mobil'];?></td>
                      <td><?php echo $list['Plat_Mobil'];?></td>
                      <td><?php echo $list['Status'];?></td>
                      <td>
                        <select class="" name="valid">
                          <option value="Ready">Ready</option>
                          <option value="Booking">Booking</option>
                        </select>
                      </td>
                      <?php $coun+=1; ?>
                      <td>
                        <input type="submit" value="Ganti Status" class="btn btn-primary py-3 px-4">
                      </td>
                    </tr>
                  </tbody>
                </table>
          </form>
          <?php } ?>
        </div>
      </div>
    </section>