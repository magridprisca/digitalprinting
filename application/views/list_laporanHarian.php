            <?php $this->load->view('header');?>
			<script>
			function doconfirm()
			{
				job=confirm("Anda Yakin Ingin Menghapus Data Ini ?? ");
				if(job!=true)
				{
				return false;
				}
				else
				{
				return true;
				}
			}
			</script>
			<!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search..."/>
                        </form>
                    </li>   
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li class="active">List Laporan Harian</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Tables Goes Here :3 -->
							 <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Tabel Laporan Harian</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>

                                <!-- search -->
                                <!-- <button <?php echo $button3[1] ?> class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg"><span class="fa fa-search"></span></button> -->
                                <button  class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg"><span class="fa fa-search"></span></button>
                                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                    </button>
                                    
                                    <form method="post" action="<?php echo site_url()?>/Laporan/view_laporanHarian">
                                        
                                    <h4 class="modal-title" id="myModalLabel">Cari Data Periode</h4>
                                    </div>
                                    <div class="modal-body">
                                    <h4>Cari Periode Mutu dan Judul Mutu</h4>
                                    
                                    
                                    <div class='input-group date' id=''>
                                    <input name="tgl_hari" id="" type='text' class="form-control date-picker"/>
                                    <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button class="btn btn-primary">Reset</button> -->
                                        <button type="submit" class="btn btn-primary">Cari</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                                    



                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <!-- <th>Nomor</th> -->
                                                <th>Tanggal Transaksi</th>
                                                <th>Nama Customer</th>
                                                <th>Nama Barang</th>
                                                <th>Jumlah</th>
                                                <th>Jasa Desain</th>
                                                <th>Biaya</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php foreach ($datalaporan as $key) { ?>
                                            <tr>
                                                <td><?php echo $key->tgl_transaksi;?></td>
                                                <td><?php echo $key->nama_customer;?></td>
                                                <td><?php echo $key->nama_stok;?></td>
                                                <td><?php echo $key->jml_detail;?></td>
                                                <td><?php echo $key->jasa_design;?></td>
                                                <td><?php echo $key->total_detail;?></td>
                                            </tr>
											<?php }?>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->
							<!-- End of The Tables >.< -->
                        </div>
                    </div>
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
			<?php $this->load->view('footer');?>