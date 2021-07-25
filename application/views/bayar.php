 <?php $this->load->view('header');?>
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
                    <li class="active">Pembayaran</li>
                </ul>
                <!-- END BREADCRUMB --> 
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                        <form class="form-horizontal" role="form" method="post" action="<?php echo site_url() ?>/Transaksi/bayar_process">
                             
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Form</strong> Pembayaran </h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    
                                </div>
                                <div class="panel-body">                                                                        
                                   
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Tanggal Order</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="date" name="tgl_transaksi" value="<?= $datatrx->tgl_transaksi ?>" class="form-control" require/>
                                            </div>
                                            <span class="help-block">Tanggal Order</span>
                                        </div>
                                    </div>
                                    
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Username</label>
                                        <div class="col-md-6 col-xs-12">   
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text"  value="<?= $datatrx->nama_lengkap;?>" class="form-control"/>
                                                <input type="hidden" name="id_transaksi" value="<?= $datatrx->id_transaksi;?>" class="form-control"/>
                                            </div>
                                            <span class="help-block">Daftar Username</span>
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Customer</label>
                                        <div class="col-md-6 col-xs-12"> 
                                            <select name="id_customer" class="form-control">
                                                <option value="">Pilih Customer terdaftar</option>
                                                <?php foreach ($datacus as $key) { ?>
                                                <option value="<?= $key->id_customer;?>" <?php if($datatrx->id_customer==$key->id_customer) echo "selected";?>><?= $key->nama_customer;?></option>
											<?php }?>
                                            </select>           
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
                                <div class="panel-footer">
                                    <button type="reset" class="btn btn-default">Clear Form</button>                                    
                                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                </div>
                            </div>
                            </form>
                            
                        </div>
                    </div>     
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                                
            </div>            
            <!-- END PAGE CONTENT -->
			<?php $this->load->view('footer');?>
 
        </div>
    </div>
</div>      
   