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
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" value="<?= $datatrx->nama_customer;?>" class="form-control"/>
                                            </div>                                       
                                            <span class="help-block">Pilih Customer</span>
                                        </div>
                                    </div>
									
                                    <!-- <div class="container"> -->
                                        <div class="form-group" id="detail_transaksi">
                                        <h2 align="center">Detail Order</h2>  
                                                <div class="table">  
                                                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalForm">
                                                tambahkan detail pesanan
                                                </button>
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
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                                
            </div>            
            <!-- END PAGE CONTENT -->
			<?php $this->load->view('footer');?>
            
<!-- Modal -->
<div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Detail Pesanan</h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <input type="text" class="form-control" id="id_transaksi" value="<?= $datatrx->id_transaksi;?>"/>
                    <div class="form-group">
                        <label for="inputName">Nama Barang</label>
                        <select name="id_stok" class="form-control">
                            <option value="">Pilih Stok Bahan</option>
                            <?php foreach ($datastok as $key) { ?>
                            <option value="<?= $key->id_stok.";".$key->harga_stok;?>"><?= $key->nama_stok.' '. $key->panjang_stok.'x'.$key->lebar_stok.' '.$key->satuan_stok;?></option>
                        <?php }?>
                        </select>  
                    </div>
                    <div class="form-group">
                        <label for="jml_detail">Jumlah</label>
                        <input type="number" class="form-control" id="jml_detail" placeholder="Jumlah Pesan"/>
                    </div>
                    <div class="form-group">
                        <label for="harga_detail">Harga</label>
                        <input type="number" class="form-control" id="harga_detail" placeholder="Harga Satuan"/>
                    </div>
                    <div class="form-group">
                        <label for="jasa_design">Jasa Design</label>
                        <input type="number" class="form-control" id="jasa_design" placeholder="Biaya Jasa Design"/>
                    </div>
                    <div class="form-group">
                        <label for="total">Total</label>
                        <input type="number" class="form-control" id="total" placeholder="Total Harga"/>
                    </div>
                </form>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm()">Submit</button>
            </div>
        </div>
    </div>
</div>      
        
<script>
function submitContactForm(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+.)+[A-Z]{2,4}$/i;
    var name = $('#inputName').val();
    var email = $('#inputEmail').val();
    var message = $('#inputMessage').val();
    if(name.trim() == '' ){
        alert('Please enter your name.');
        $('#inputName').focus();
        return false;
    }else if(email.trim() == '' ){
        alert('Please enter your email.');
        $('#inputEmail').focus();
        return false;
    }else if(email.trim() != '' && !reg.test(email)){
        alert('Please enter valid email.');
        $('#inputEmail').focus();
        return false;
    }else if(message.trim() == '' ){
        alert('Please enter your message.');
        $('#inputMessage').focus();
        return false;
    }else{
        $.ajax({
            type:'POST',
            url:'submit_form.php',
            data:'contactFrmSubmit=1&name='+name+'&email='+email+'&message='+message,
            beforeSend: function () {
                $('.submitBtn').attr("disabled","disabled");
                $('.modal-body').css('opacity', '.5');
            },
            success:function(msg){
                if(msg == 'ok'){
                    $('#inputName').val('');
                    $('#inputEmail').val('');
                    $('#inputMessage').val('');
                    $('.statusMsg').html('<span style="color:green;">Thanks for contacting us, we'll get back to you soon.</p>');
                }else{
                    $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');
                }
                $('.submitBtn').removeAttr("disabled");
                $('.modal-body').css('opacity', '');
            }
        });
    }
}
</script>