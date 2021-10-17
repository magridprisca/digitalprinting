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
                    <li class="active">Tambah Barang</li>
                </ul>
                <!-- END BREADCRUMB --> 
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" action="<?php echo site_url() ?>/Barang/add_process" method="post" enctype="multipart/form-data"> 
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Form</strong> Tambah Barang Masuk</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    
                                </div>
                                <div class="panel-body">                                                                        
                                   
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Nama Barang</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="nama_barang" class="form-control" require/>
                                            </div>                                            
                                            <span class="help-block">Nama Barang</span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Jenis Barang</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jenis_barang" id="exampleRadios1" value="Banner" checked>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Banner
                                                    </label>
                                                    </div>
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jenis_barang" id="exampleRadios2" value="Kertas">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Kertas
                                                    </label>
                                                </div>
                                            </div>                                            
                                            <span class="help-block">Pilih Jenis Barang</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Panjang</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="number" name="panjang" class="form-control"/>
                                                <span class="input-group-addon">cm</span>
                                            </div>                                            
                                            <span class="help-block">Panjang</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Lebar</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="number" name="lebar" class="form-control"/>
                                                <span class="input-group-addon">cm</span>
                                            </div>                                            
                                            <span class="help-block">Lebar</span>
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Jumlah Barang</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="number" name="jml_barang" class="form-control"/>
                                            </div>                                            
                                            <span class="help-block">Jumlah Barang</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Satuan</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="satuan" class="form-control"/>
                                            </div>                                            
                                            <span class="help-block">Satuan</span>
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Tanggal Diterima</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="date" name="tgl_diterima" class="form-control"/>
                                            </div>                                            
                                            <span class="help-block">Tanggal Diterima</span>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Supplier</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="supplier" class="form-control"/>
                                            </div>                                            
                                            <span class="help-block">Supplier</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Penerima</label>
                                        <div class="col-md-6 col-xs-12">   
                                                <?php $username=$this->session->userdata('username'); ?>
                                            <input type="hidden" name="username" value="<?php echo $username ?>">
                                                <!-- <option value="">Pilih username terdaftar</option> -->
                                                          
                                            <span class="help-block"><?php echo $username ?></span>
                                            
                                            <!-- <span class="help-block">Daftar Username</span> -->
                                        </div>
                                    </div>
									
									<!-- <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Level</label>
                                        <div class="col-md-6 col-xs-12">   
                                            <select name="level" class="select">
                                                <option>Admin</option>
                                                <option>User</option>
                                            </select>
                                            <span class="help-block">Nama Anda</span>
                                        </div>
                                    </div> -->
								 
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