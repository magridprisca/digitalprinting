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
 				<input type="text" name="search" placeholder="Search..." />
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
 		<li class="active">Tambah Stok Barang</li>
 	</ul>
 	<!-- END BREADCRUMB -->

 	<!-- PAGE CONTENT WRAPPER -->
 	<div class="page-content-wrap">

 		<div class="row">
 			<div class="col-md-12">

 				<form class="form-horizontal" action="<?php echo site_url() ?>/Stok/add_process" method="post"
 					enctype="multipart/form-data">
 					<div class="panel panel-default">
 						<div class="panel-heading">
 							<h3 class="panel-title"><strong>Form</strong> Tambah Stok Barang</h3>
 							<ul class="panel-controls">
 								<li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
 							</ul>
 						</div>
 						<div class="panel-body">

 						</div>
 						<div class="panel-body">

 							<div class="form-group">
 								<label class="col-md-3 col-xs-12 control-label">Nama Stok</label>
 								<div class="col-md-6 col-xs-12">
 									<div class="input-group">
 										<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
 										<input type="hidden" name="id_barang"
 											value="<?php echo $databarang->id_barang ?>" class="form-control" />
 										<input type="text" name="nama_stok"
 											value="<?php echo $databarang->nama_barang ?>" class="form-control"
 											readonly />
 									</div>
 								</div>
 							</div>

 							<div class="form-group">
 								<label class="col-md-3 col-xs-12 control-label">Jenis Barang </label>
 								<div class="col-md-6 col-xs-12">
 									<div class="input-group">
 										<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
 										<input type="text" name="jenis_stok" readonly
 											value="<?php echo $databarang->jenis_barang ?>" class="form-control" />
 									</div>
 								</div>
 							</div>
 							<div class="form-group">
 								<label class="col-md-3 col-xs-12 control-label">Panjang </label>
 								<div class="col-md-6 col-xs-12">
 									<div class="input-group">
 										<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
 										<input type="text" name="panjang_stok" readonly
 											value="<?php echo $databarang->panjang ?>" class="form-control" />
 										<span class="input-group-addon">cm</span>
 									</div>
 								</div>
 							</div>
 							<div class="form-group">
 								<label class="col-md-3 col-xs-12 control-label">Lebar</label>
 								<div class="col-md-6 col-xs-12">
 									<div class="input-group">
 										<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
 										<input type="text" name="lebar_stok" id="lebar" readonly
 											value="<?php echo $databarang->lebar ?>" class="form-control" />
 										<span class="input-group-addon">cm</span>
 									</div>
 								</div>
 							</div>
 							<!-- <div class="form-group">
 								<label class="col-md-3 col-xs-12 control-label">Lebar Potongan</label>
 								<div class="col-md-6 col-xs-12">
 									<div class="input-group">
 										<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
 										<input type="text" id="lebar_stok" name="lebar_stok" class="form-control"
 										 onchange="hitung_jumlah()" /> 
 									</div>
 									<span class="help-block">Lebar Stok </span>
 								</div>
 							</div> -->
 							<div class="form-group">
 								<label class="col-md-3 col-xs-12 control-label">Jumlah Barang</label>
 								<div class="col-md-6 col-xs-12">
 									<div class="input-group">
 										<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
 										<input type="text" id="jml_barang" name="jml_barang" onchange="hitung_jumlah()"
 											value="<?php echo $databarang->jml_barang ?>" class="form-control" />
 										<span class="input-group-addon"><?php echo $databarang->satuan ?></span>
 									</div>
 									<input type="hidden" name="satuan_barang" value="<?php echo $databarang->satuan ?>" readonly class="form-control" />
 									<span class="help-block">Jumlah Barang</span>
 								</div>
 							</div>
 							

 							<?php if($databarang->jenis_barang=="Banner"){ ?>

 							<div class="form-group">
 								<label class="col-md-3 col-xs-12 control-label">Lebar Potongan Banner</label>
 								<div class="col-md-6 col-xs-12">
 									<div class="input-group">
 										<div class="form-check">
 											<input class="form-check-input" type="radio" name="potong"
 												id="exampleRadios1" value="1" checked>
 											<label class="form-check-label" for="exampleRadios1">
 												106 + 107 + 107
 											</label>
 										</div>
 										<div class="form-check">
 											<input class="form-check-input" type="radio" name="potong"
 												id="exampleRadios2" value="2">
 											<label class="form-check-label" for="exampleRadios2">
 												160 + 160
 											</label>
 										</div>
 										<div class="form-check">
 											<input class="form-check-input" type="radio" name="potong"
 												id="exampleRadios3" value="3">
 											<label class="form-check-label" for="exampleRadios3">
 												210 + 110
 											</label>
 										</div>
 										<div class="form-check">
 											<input class="form-check-input" type="radio" name="potong"
 												id="exampleRadios4" value="4">
 											<label class="form-check-label" for="exampleRadios4">
 												260 + 60
 											</label>
 										</div>
 									</div>
 									<span class="help-block">Pilih ukuran potong banner</span>
 								</div>
 							</div>
                             
 							<?php } ?>
							 
 							<script>
								$( document ).ready(function() {
									hitung_jumlah();
								});
 								function hitung_jumlah() {
 									var jmlsatuan = $("#jmlpersatuan").val();
 									var jmlbrg = $("#jml_barang").val();

 									var hasil = jmlsatuan * jmlbrg ;
 									$("#jml_stok").val(hasil);
 								}

 							</script>
							<div class="form-group">
 								<label class="col-md-3 col-xs-12 control-label">
									 <?php if($databarang->jenis_barang=="Banner"){ echo "Panjang per "; } 
                                     else { echo "Jumlah per "; } echo $databarang->satuan; ?>
								</label>
 								<div class="col-md-6 col-xs-12">
 									<div class="input-group">
 										<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
 										<input type="text" id="jmlpersatuan" onchange="hitung_jumlah()" class="form-control" 
										 value="<?php if($databarang->jenis_barang=="Banner") echo $databarang->panjang ?>" />
 									</div>
 									<span class="help-block">Jumlah Stok</span>
 								</div>
 							</div>
 							<div class="form-group">
 								<label class="col-md-3 col-xs-12 control-label">Jumlah Stok</label>
 								<div class="col-md-6 col-xs-12">
 									<div class="input-group">
 										<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
 										<input type="text" id="jml_stok" name="jml_stok" class="form-control" readonly/>
 									</div>
 									<span class="help-block">Jumlah Stok</span>
 								</div>
 							</div>
 							<div class="form-group">
 								<label class="col-md-3 col-xs-12 control-label">Satuan Baru</label>
 								<div class="col-md-6 col-xs-12">
 									<div class="input-group">
 										<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
 										<input type="text" name="satuan_stok"
 											class="form-control" />
 									</div>
 									<span class="help-block">Satuan</span>
 								</div>
 							</div>
 							<div class="form-group">
 								<label class="col-md-3 col-xs-12 control-label">Harga Jual per
 									<?php if($databarang->jenis_barang=="Banner"){ echo "Meter"; } 
                                     else { echo "Satuan"; }?>
 								</label>
 								<div class="col-md-6 col-xs-12">
 									<div class="input-group">
 										<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
 										<input type="text" name="harga_stok" class="form-control" />
 									</div>
 									<span class="help-block">Harga</span>
 								</div>
 							</div>

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
