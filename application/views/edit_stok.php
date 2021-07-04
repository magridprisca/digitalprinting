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
                    <li class="active">Tambah Stok</li>
                </ul>
                <!-- END BREADCRUMB --> 
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" action="<?php echo site_url() ?>/Stok/update_process" method="post" enctype="multipart/form-data"> 
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Form</strong> Edit Stok</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                                <input type="hidden" name="id_stok" class="form-control" value="<?php echo $datastok->id_stok ?>" />
                                                
                                    </div>

									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Nama Stok</label>
                                        <div class="col-md-6 col-xs-12">
                                        <div class="input-group">  
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>               
                                        <input type="hidden" name="id_stok" value="<?php echo $datastok->id_stok ?>" class="form-control"/>
                                            <input type="text" name="nama_stok" value="<?php echo $datastok->nama_stok ?>" class="form-control"/>
                                        </div>                
                                            <span class="help-block">Nama Stok</span>
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Panjang Stok</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="panjang_stok" value="<?php echo $datastok->panjang_stok ?>" class="form-control"/>
                                            </div>                                            
                                            <span class="help-block">Panjang Stok</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Lebar Awal</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="lebar" id="lebar" value="<?php echo $datastok->lebar ?>" class="form-control"/>
                                            </div>                                            
                                            <span class="help-block">Lebar Awal</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Lebar Stok</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" id="lebar_stok" name="lebar_stok" class="form-control" onchange="hitung_jumlah()" />
                                            </div>                                            
                                            <span class="help-block">Lebar Stok </span>
                                        </div>
                                    </div>
                                    <script>
                                        function hitung_jumlah(){
                                            var lebar = $("#lebar").val();
                                            var lebar_stok = $("#lebar_stok").val();

                                            var hasil = Math.floor(lebar /lebar_stok);
                                            $("#jml_stok").val(hasil);
                                        }
                                    </script>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Satuan Stok</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="satuan_stok" value="<?php echo $datastok->satuan_stok ?>" class="form-control"/>
                                            </div>                                            
                                            <span class="help-block">Satuan Stok</span>
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Jumlah Stok </label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="jml_stok" value="<?php echo $datastok->jml_stok ?>" class="form-control"/>
                                            </div>                                            
                                            <span class="help-block">Jumlah Stok</span>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Harga Stok</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="harga_stok" value="<?php echo $datastok->harga_stok ?>" class="form-control"/>
                                            </div>                                            
                                            <span class="help-block">Harga Stok</span>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Username</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="username" value="<?php echo $databarang->username ?>" class="form-control"/>
                                            </div>                                            
                                            <span class="help-block">Username</span>
                                        </div>
                                    </div> -->
                                <div class="panel-footer">
                                    <button type="reset" class="btn btn-default">Reset</button>                                    
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