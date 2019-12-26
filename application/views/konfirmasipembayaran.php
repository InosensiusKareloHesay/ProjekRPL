<section class="ftco-section services-section" style="background-image: url('<?php echo base_url();?>assets/images/bg_2.jpg');">
      <div class="container">
      	<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <h2 class="mt-20" style="color:white">Konfirmasi Pembayaran</h2>
          </div>
        </div>
        <div class="col-lg-12 col-md-12">
        <?php $coun = 1; ?>
        <?php foreach($bayar as $list){?>
          <form action="<?php echo base_url('/c_konfirmasi/cekValid/');?><?php echo $list['kode_transaksi']?>" class="request-form ftco-animate" method="post">
              <table class="demo-table">
                  <thead>
                    <tr>
                      <th width="30px">No</th>
                      <th width="250px">Bukti Pembayaran</th>
                      <th width="250px">Kode Transaksi</th>
                      <th width="200px">Jenis Mobil</th>
                      <th width="200px">Validasi</th>
                      <th width="200px">Konfirmasi</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <tr>
                      <td> <?php echo $coun ?> </td>
                      <td>
                        <?php
                        $gambar = $list['Photo'];
                        echo '<img src="'.base_url('gambarTransaksi/'.$gambar.'').'" width="200" height="250px" style="display: block; margin: auto">';
                        ?>
                      </td>
                      <td><?php echo $list['kode_transaksi'];?></td>
                      <td><?php echo $list['Nama_Mobil'];?></td>
                      <td>
                        <select class="" name="valid">
                          <option value="0">Tidak Valid</option>
                          <option value="1">Valid</option>
                        </select>
                      </td>
                      <?php $coun+=1; ?>
                      <td>
                        <input type="submit" value="Konfirmasi" class="btn btn-primary py-3 px-4">
                      </td>
                    </tr>
                  </tbody>
                  
                </table>
          </form>
          <?php } ?>
        </div>
      </div>
    </section>