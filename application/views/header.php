<!DOCTYPE html>
<html lang="en">
  <head>
    <title>RM - Rental Mobil (Proyek RPL Kel 5)</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/open-iconic-bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css');?>">
    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.default.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css');?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/aos.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/ionicons.min.css');?>">
    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datepicker.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.timepicker.css');?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/flaticon.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/icomoon.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?php echo base_url('/c_index');?>">Auto<span>road</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="<?php echo base_url('/c_index');?>" class="nav-link">Home</a></li>
							<li class="nav-item"><a href="<?php echo base_url('/c_penyewaan');?>" class="nav-link">Penyewaan</a></li>
							<li class="nav-item"><a href="<?php echo base_url('/c_car');?>" class="nav-link">Mobil</a></li>
							<li class="nav-item"><a href="<?php echo base_url('/c_pembayaran');?>" class="nav-link">Pembayaran</a></li>
							<li class="nav-item"><a href="<?php echo base_url('/c_komplain');?>" class="nav-link">Komplain</a></li>
							<li class="nav-item"><a href="<?php echo base_url('/c_contact');?>" class="nav-link">Contact</a></li>
              <li class="nav-item">
                <?php if($this->session->userdata('login') == false) {
                        $string = "Login";
                        echo '<a href="'.base_url('/c_login').'" class="nav-link">'.$string.'</a>';
                      }
                      else {
                        $username = $this->session->userdata('name');
                        $id = $this->session->userdata('id');
                        $user = explode("@",$username);
                        $hasil = $user[0];
                        echo '<a href="'.base_url('/c_profil').'" class="nav-link">'.$hasil.'</a>';
                      }
                ?>
              </li>
              <li class="nav-item">
                <?php if($this->session->userdata('login') == true) {
                        $string = "Logout";
                        echo '<a href="'.base_url('/c_login/do_logout').'" class="nav-link">'.$string.'</a>';
                      }
                  ?>
              </li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->