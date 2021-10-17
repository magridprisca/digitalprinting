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
                    <li class="active">List Order</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
				<!-- START WIDGETS -->                    
                    <div class="row">
					
						<div class="col-md-4">
                            <div class="widget widget-success widget-item-icon" onclick="location.href='<?=site_url()?>/Transaksi/add_order';">
                                <!-- <div class="widget-big-int"><span class="num-count">Order Baru</span></div>    -->
                                <div class="widget-item-left">
                                    <span class="fa fa-plus"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">Klik</div>
                                    <div class="widget-title">Disini</div>
                                    <div class="widget-subtitle">Untuk Membuat Order Baru</div>
                                </div>                         
                            </div>                        

                        </div>
                    </div>
                </div>
                <div class="page-content-wrap">
                    
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Tables Goes Here :3 -->
							 <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Tabel Order</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Nomor</th>
                                                <th>Tanggal</th>
                                                <th>Nama Customer</th>
                                                <th>Nama Karyawan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php foreach ($datatransaksi as $key) { ?>
                                            <tr>
                                                <td><?php echo $key->id_transaksi;?></td>
                                                <td><?php echo $key->tgl_transaksi;?></td>
                                                <td><?php echo $key->nama_customer;?></td>
                                                <td><?php echo $key->username;?></td>
												<td><a href="<?=site_url()?>/Transaksi/add_order2/<?php echo "$key->id_transaksi"?>" ><span class="fa fa-edit"></a>&nbsp&nbsp
												<a href="<?=site_url()?>/Karyawan/del_karyawan/<?php echo "$key->id_transaksi"?>" onclick="return doconfirm();"><span class="fa fa-trash-o"></a></td>
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