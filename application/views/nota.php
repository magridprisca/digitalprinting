            <?php $this->load->view('header');?>
			<script>
				function printDiv(panelprint) {
				var printContents = document.getElementById(panelprint).innerHTML;
				var originalContents = document.body.innerHTML;

				document.body.innerHTML = printContents;
				window.print();

				document.body.innerHTML = originalContents;
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
                    <li class="active">Dashboard</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal"> 
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Form</strong> Riwayat Transaksi </h3>

                                    <div class="pull-right">                                                                                    
                                    <button class="btn btn-default" onclick="printDiv('printableArea')"><span class="fa fa-print"></span> Cetak Halaman</button>
                                    </div>

                                    <!-- <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul> -->
                                </div>
                                <div class="panel-body">
                                    
                                </div>
                                <div class="panel-body">                                                                        
                                   
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Tanggal Order</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            
                                                <?= $datatrx->tgl_transaksi ?>
                                            <!-- </div> -->
                                           
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Username</label>
                                        <div class="col-md-6 col-xs-12">   
                                            <div class="input-group">
                                                <!-- <span class="input-group-addon"><span class="fa fa-pencil"></span></span> -->
                                                <?= $datatrx->nama_lengkap;?>
                                                
                                            </div>
                                            <!-- <span class="help-block">Daftar Username</span> -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Customer</label>
                                        <div class="col-md-6 col-xs-12"> 
                                                 
                                            <span class="help-block">Pilih Customer</span>
                                        </div>
                                    </div>
                                    
                                    <!-- <div class="container"> -->
                                        <div class="form-group" id="detail_transaksi">
                                        <h2 align="center">Detail Order</h2>  
                                                <div class="table">  
                                
                                                    <table class="table table-bordered" id="dynamic_field">  
                                                        <tr>
                                                            <th>Nama Barang</th>
                                                            <th>Jumlah</th>
                                                            <th>Harga</th>
                                                            <th>Jasa Design</th>
                                                            <th>Total</th>
                        
                                                        </tr>
                                                        <?php foreach ($datadetail as $key) { ?>
                                                        <tr>
                                                            <td><?php echo $key->nama_stok;?></td>
                                                            <td><?php echo $key->jml_detail;?></td>
                                                            <td><?php echo $key->harga_detail;?></td>
                                                            <td><?php echo $key->jasa_design;?></td>
                                                            <td><?php echo $key->total_detail;?></td>
                
                                                        </tr>
                                                        <?php }?>
                                                        
                                                    </table>  
                                                </div>
                                                <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Total Bayar</label>
                                        <div class="col-md-6 col-xs-12"> 
                                            <input type="text" name="total_transaksi" value="<?= $datatrx->total_transaksi ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Jumlah Bayar</label>
                                        <div class="col-md-6 col-xs-12"> 
                                            <input type="text" name="dibayar" value="<?= $datatrx->dibayar;?>" class="form-control">
                                        </div>
                                    </div>
                                    
                                        </div> 
                                    <!-- </div> -->
                                    
                                 
                                </div>
                                
                            </div>
                            </form>
                            
                        </div>
                    </div>     
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
			<?php $this->load->view('admin/footer');?>