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
                    <li class="active">Tambah Order Baru</li>
                </ul>
                <!-- END BREADCRUMB --> 
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" action="<?php echo site_url() ?>/Transaksi/addorder_process" method="post" enctype="multipart/form-data"> 
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Form</strong> Tambah Order </h3>
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
                                                <input type="date" id="tgl_transaksi" name="tgl_transaksi" value="<?php echo date("d/m/Y") ?>" class="form-control" require/>
                                            </div>
                                            <span class="help-block">Tanggal Order</span>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        document.getElementById('tgl_transaksi').valueAsDate = new Date();
                                    </script>
                                    
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Username</label>
                                        <div class="col-md-6 col-xs-12">   
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text"  readonly value="<?php echo $this->session->userdata('nama');?>" class="form-control"/>
                                                <input type="hidden" name="username" value="<?php echo $this->session->userdata('username');?>" class="form-control"/>
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
                                                <option value="<?= $key->id_customer;?>"><?= $key->nama_customer;?></option>
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
                                                            <th>Tambahkan</th>
                                                        </tr>
                                                        <!-- <tr>  
                                                            <td>
                                                            <select name="addmore[][id_stok]" class="form-control">
                                                                <option value="">Pilih Stok Bahan</option>
                                                                <?php foreach ($datastok as $key) { ?>
                                                                <option value="<?= $key->id_stok.";".$key->harga_stok;?>"><?= $key->nama_stok.' '. $key->panjang_stok.'x'.$key->lebar_stok.' '.$key->satuan_stok;?></option>
                                                            <?php }?>
                                                            </select>   
                                                            <input type="text" name="addmore[][id_stok]" class="form-control" required="" />  
                                                            </td>
                                                            <td><input type="text" name="addmore2[][jml_detail]" class="form-control " required="" /></td>  
                                                            <td><input type="text" name="addmore3[][harga_detail]" class="form-control" required="" /></td>  
                                                            <td><input type="text" name="addmore4[][jasa_design]" class="form-control" required="" /></td>  
                                                            <td><input type="text" name="addmore5[][total]" class="form-control" required="" /></td>  
                                                            <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                                        </tr>   -->
                                                    </table>  
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
                
                <script type="text/javascript">
                    $(document).ready(function(){      
                    var i=1;  
                
                    $('#add').click(function(){  
                        i++;  
                        $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="addmore[][id_stok]" class="form-control" required /></td><td><input type="text" name="addmore2[][jml_detail]" class="form-control" required /></td><td><input type="text" name="addmore3[][harga_detail]" class="form-control" required /></td><td><input type="text" name="addmore4[][jasa_design]" class="form-control" required /></td><td><input type="text" name="addmore5[][total]" class="form-control" required /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
                    });
                
                    $(document).on('click', '.btn_remove', function(){  
                        var button_id = $(this).attr("id");   
                        $('#row'+button_id+'').remove();  
                    });  
                
                    });  
                </script>
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                                
            </div>            
            <!-- END PAGE CONTENT -->
			<?php $this->load->view('footer');?>