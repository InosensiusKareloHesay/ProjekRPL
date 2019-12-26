<section class="ftco-section services-section" style="background-image: url('<?php echo base_url();?>assets/images/bg_2.jpg');">
      <div class="container">
      	<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <h2 class="mt-20" style="color:white">List Komplain</h2>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 col-centered">
          <form action="#" class="request-form ftco-animate">
          
              <table class="demo-table">
                  <thead>
                    <tr>
                      <th width="40px">No</th>
                      <th width="400px">Akun</th>
                      <th width="1000px">Komplain</th>
                    </tr>
                  </thead>
                  <?php $coun = 1; ?>
                  <?php foreach($komplain as $list){?>
                  <tbody>
                    <tr>
                      <td> <?php echo $coun ?> </td>
                      <td> <?php echo $list["Nama"]; ?> </td>
                      <td> <?php echo $list["Keterangan"]; ?> </td>
                      <?php $coun+=1; ?>
                    </tr>
                  </tbody>
                  <?php } ?>
                </table>
                
          </form>
        </div>
      </div>
    </section>