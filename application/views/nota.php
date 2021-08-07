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
                    <li class="active">Nota</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->

                <div class="page-content-wrap">
                    
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Tables Goes Here :3 -->
                            <!-- START BORDERED TABLE SAMPLE -->
                            <div class="panel panel-default" name="panelprint">

                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Form</strong> Riwayat Transaksi </h3>
                                    <div class="pull-right">                                                                                    
                                    <button class="btn btn-default" onclick="printDiv('printableArea')"><span class="fa fa-print"></span> Cetak Halaman</button>
                                    </div>
                                </div>
                                <div class="panel-body"  id="printableArea">

                                    <h2 align="center">NOTA PEMBAYARAN</h2>  
                                    <h3 align="center">Amanah Digital printing</h3>  
                                    <hr>
                                    <div class="row">
                                        <label class="col-md-3">Tanggal Order</label>
                                        <label class="col-md-6">: <?= $datatrx->tgl_transaksi ?></label>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3">Username</label>
                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label class="col-md-6">: <?= $datatrx->nama_lengkap;?></label>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3">Customer</label>
                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label class="col-md-6">: <?= $datatrx->nama_customer;?></label>
                                    </div>
                                    
                                    <div class="form-group" id="detail_transaksi">
                                        <h4 align="center">Detail Order</h4>  
                                        <div class="table">  
                                            <table class="table table-bordered" id="dynamic_field">  
                                                <tr>
                                                    <th>Nama Barang</th>
                                                    <th>Ukuran</th>
                                                    <th>Jumlah</th>
                                                    <th>Harga</th>
                                                    <th>Jasa Design</th>
                                                    <th>Total</th>
                                                </tr>
                                                <?php foreach ($datadetail as $key) { ?>
                                                <tr>
                                                    <td><?php echo $key->nama_stok;?></td>
                                                    <td><?php echo $key->panjang." x ". $key->lebar;?></td><td><?php echo $key->jml_detail;?></td>
                                                    <td><?php echo $key->harga_detail;?></td>
                                                    <td><?php echo $key->jasa_design;?></td>
                                                    <td><?php echo $key->total_detail;?></td>
                                                </tr>
                                                <?php }?>
                                            </table>  
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3">Total Bayar</label>&nbsp&nbsp&nbsp&nbsp
                                        <label class="col-md-6">: <?= $datatrx->total_transaksi ?></label>
                                    </div>
                                    <?php if($datatrx->jenis_customer=="Instansi"){ ?>
                                    <div class="row">
                                        <label class="col-md-3">Diskon</label>
                                        <label class="col-md-6">: <?= $datatrx->diskon;?>
                                        </label>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3">Jumlah Bayar</label>
                                        <label class="col-md-6">: <?= $datatrx->dibayar;?>
                                        </label>
                                    </div>
                                    <?php } ?>
                                    
                                    <?php if($datatrx->jenis_customer=="Reseler"){ ?>
                                    <div class="row">
                                        <label class="col-md-3">Diskon</label>
                                        <label class="col-md-6">: <?= $datatrx->diskon;?>
                                        </label>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3">Jumlah Bayar</label>
                                        <label class="col-md-6">: <?= $datatrx->total_transaksi;?>
                                        </label>
                                    </div>
                                    <?php } ?>
                                    
                                    <?php if($datatrx->jenis_customer=="Umum"){ ?>
                                    <div class="row">
                                        <label class="col-md-3">Jumlah Bayar</label>
                                        <label class="col-md-6">: <?= $datatrx->total_transaksi;?>
                                        </label>
                                    </div>
                                    <?php } ?>
                                </div> 
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
			<?php $this->load->view('admin/footer');?>