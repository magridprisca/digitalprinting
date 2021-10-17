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
                    <li class="active">List Barang</li>
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
                                    <h3 class="panel-title">Tabel Barang</h3>
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
                                                <th>No</th>
                                                <th>Nama Barang</th>
                                                <th>Jenis</th>
                                                <th>Ukuran</th>
                                                <th>Jumlah Barang</th>
                                                <th>Tanggal Diterima</th>
                                                <th>Supplier</th>
                                                <th>Penerima</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php $i=1; foreach ($databarang as $key) { ?>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $key->nama_barang;?></td>
                                                <td><?php echo $key->jenis_barang;?></td>
                                                <td><?php echo $key->panjang." x ".$key->lebar." cm";?></td>
                                                <td><?php echo $key->jml_barang." ".$key->satuan;?></td>
                                                <td><?php echo $key->tgl_diterima;?></td>
                                                <td><?php echo $key->supplier;?></td>
                                                <td><?php echo $key->username;?></td>
												<td><?php if ($key->jml_barang>0){?><a href="<?=site_url()?>/stok/add_stok/<?php echo "$key->id_barang"?>" ><span class="fa fa-plus"></a><?php } ?>&nbsp&nbsp
                                                <a href="<?=site_url()?>/barang/update_barang/<?php echo "$key->id_barang"?>" ><span class="fa fa-edit"></a>&nbsp&nbsp
												<a href="<?=site_url()?>/barang/del_barang/<?php echo "$key->id_barang"?>" onclick="return doconfirm();"><span class="fa fa-trash-o"></a></td>
                                            </tr>
											<?php $i++; }?>
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