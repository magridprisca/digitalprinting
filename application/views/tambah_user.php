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
                    <li class="active">Tambah User</li>
                </ul>
                <!-- END BREADCRUMB --> 
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" action="<?php echo site_url() ?>/Admin/add_process" method="post" enctype="multipart/form-data"> 
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Form</strong> Tambah User</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    
                                </div>
                                <div class="panel-body">                                                                        
                                   
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Username</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="username" class="form-control" require/>
                                            </div>                                            
                                            <span class="help-block">Username</span>
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Nama</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="nama" class="form-control"/>
                                            </div>                                            
                                            <span class="help-block">Nama Lengkap</span>
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Email</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="email" name="email" class="form-control"/>
                                            </div>                                            
                                            <span class="help-block">Email Valid</span>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Password</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="password" name="password" class="form-control"/>
                                            </div>                                            
                                            <span class="help-block">Gunakan Password yang mudah diingat</span>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Level</label>
                                        <div class="col-md-6 col-xs-12">   
                                            <select name="level" class="select">
                                                <option value="Admin">Admin</option>
                                                <option value="Desain">Desain</option>
                                                <option value="Kasir">Kasir</option>
                                            </select>
                                            <span class="help-block">Jenis Login</span>
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