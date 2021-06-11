<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Toko - Amanah Digital Printing</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="<?php echo base_url(); ?>assets/favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
            <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url(); ?>assets/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <!-- <li class="xn-logo">
                        <a href="<?=site_url()?>/admin/dashboard">EKBANG</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li> -->
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="<?php echo base_url(); ?>assets/user.jpg" alt="Negev"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
								<?php $pic=$this->session->userdata('gambar'); ?>
								<?php
									if($pic == NULL){
									echo "<img src='../../assets/images/noimgs.jpg'/>";
									//echo "<img src='base_url();assets/images/noimg.jpg' alt='Negev'/>";
								}
								else{
									echo "<img src='../../assets/images/$pic'/>";
								}
								?>
                            </div>
                            <div class="profile-data">
							<?php $name=$this->session->userdata('nama'); ?>
                                <div class="profile-data-name"><?php echo $name ?></div>
                                <div class="profile-data-title">Administrator</div>
                            </div>
                            <div class="profile-controls">
                                <a href="#" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="#" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>
                        </div>                                                                        
                    </li>
                    <li class="xn-title">Menu</li>
                    <li class="active">
                        <a href="<?=site_url()?>/admin/dashboard"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-user"></span> <span class="xn-text">User</span></a>
                        <ul>
                           <li><a href="<?=base_url()?>index.php/Admin/view_user"><span class="fa fa-arrows-h"></span> Tambah Pengeluaran</a></li>
                           <li><a href="<?=site_url()?>/pengeluaran/pengeluaranpage"><span class="fa fa-list-ul"></span> List Pengeluaran</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-users"></span> <span class="xn-text">Karyawan</span></a>
                        <ul>
                           <li><a href="<?=site_url()?>/pengeluaran/tambahpage"><span class="fa fa-arrows-h"></span> Tambah Pengeluaran</a></li>
                           <li><a href="<?=site_url()?>/pengeluaran/pengeluaranpage"><span class="fa fa-list-ul"></span> List Pengeluaran</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-pencil-square-o"></span> <span class="xn-text">Laporan</span></a>
                        <ul>
                           <li><a href="<?=site_url()?>/pengeluaran/tambahpage"><span class="fa fa-arrows-h"></span> Tambah Pengeluaran</a></li>
                           <li><a href="<?=site_url()?>/pengeluaran/pengeluaranpage"><span class="fa fa-list-ul"></span> List Pengeluaran</a></li>
                        </ul>
                    </li>
					 <li class="xn-openable">
                        <a href="#"><span class="fa fa-arrow-down"></span> <span class="xn-text">Data Barang Masuk</span></a>
                        <ul>
                           <li><a href="<?=site_url()?>/admin/tambahpage"><span class="fa fa-arrows-h"></span> Tambah Admin</a></li>
                           <li><a href="<?=site_url()?>/admin/adminpage"><span class="fa fa-list-ul"></span> List Admin</a></li>
                        </ul>
                    </li>
					 <li class="xn-openable">
                        <a href="#"><span class="fa fa-table"></span> <span class="xn-text">Stok Barang</span></a>
                        <ul>
                           <li><a href="<?=site_url()?>/skpd/tambahpage"><span class="fa fa-arrows-h"></span> Tambah SKPD</a></li>
                           <li><a href="<?=site_url()?>/skpd/skpdpage"><span class="fa fa-list-ul"></span> List SKPD</a></li>
                        </ul>
                    </li>
					<li>
                        <li>
                        <a href="<?=site_url()?>/progress/index"><span class="fa fa-exchange"></span> <span class="xn-text">Transaksi Penjualan</span></a> 
                        </li>
                    </li>
					<li>
                        <a href="<?=site_url()?>/progress/index"><span class="fa fa-list-alt"></span> <span class="xn-text">Data Pelanggan</span></a> 
                    </li>
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->