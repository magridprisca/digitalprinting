
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Halaman Print A4</title>
</head>
<style type="text/css">
/* Kode CSS Untuk PAGE ini dibuat oleh http://jsfiddle.net/2wk6Q/1/ */
    body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font: 12pt "Tahoma";
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 105mm;
        min-height: 148mm;
        padding: 10mm;
        margin: 10mm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage {
        padding: 1cm;
        border: 5px red solid;
        /*height: 257mm;*/
        outline: 2cm #FFEAEA solid;
    }
    
    @page {
        size: A6;
        margin: 0;
    }
    @media print {
        html, body {
            width: 105mm;
            height: 148mm;        
        }
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }
</style>
<body>
<div class="book">
    <div class="page">
        <div class="subpage">
    
                                    <h2 align="center">NOTA PEMBAYARAN</h2>  
                                    <h3 align="center">Amanah Digital printing</h3>  
                                    <div>
                                        <h5 align="center"><?= $datatrx->nota ?></h5>
                                        
                                    </div>
                                    
                                    <hr>
                                    <div class="row">
                                        <label >Tanggal Order</label>
                                        <label >: <?= $datatrx->tgl_transaksi ?></label>
                                    </div>
                                    <div class="row">
                                        <label>Username</label>
                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label>: <?= $datatrx->nama_lengkap;?></label>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3">Customer</label>
                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label class="col-md-6">: <?= $datatrx->nama_customer." ".$datatrx->keterangan;?></label>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3">No HP</label>
                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label class="col-md-6">: <?= $datatrx->telp_customer;?></label>
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
                                                    <th>Lain-lain</th>
                                                    <th>Biaya Lain-lain</th>
                                                    <th>Total</th>
                                                </tr>
                                                <?php $hargareseler=0;
                                                foreach ($datadetail as $key) { ?>
                                                <tr>
                                                    <td><?php echo $key->nama_stok;?></td>
                                                    <td><?php echo $key->panjang." x ". $key->lebar;?></td><td><?php echo $key->jml_detail;?></td>
                                                    <td><?php echo $key->harga_detail;?></td>
                                                    <td><?php echo $key->jasa_design;?></td>
                                                    <td><?php echo $key->lain_lain;?></td>
                                                    <td><?php echo $key->biaya_lain;?></td>
                                                    <td><?php echo $key->total_detail;?></td>
                                                </tr>
                                                <?php 
                                                $hargareseler += $key->total_detail;
                                            }?>
                                            </table>  
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3">Total Bayar</label>&nbsp&nbsp&nbsp&nbsp
                                        <label class="col-md-6">: <?php if($datatrx->keterangan=="Instansi"){ echo $hargareseler; } else {echo $datatrx->total_transaksi;} ?></label>
                                    </div>
                                    
                                    <div class="row">
                                        <label class="col-md-3">Jumlah Bayar</label>
                                        <label class="col-md-6">: <?php if($datatrx->keterangan=="Instansi"){ echo $hargareseler; } else {echo $datatrx->dibayar;} ?>
                                        
                                        </label>
                                    </div>
                                    
                                    <div class="row">
                                        <label class="col-md-3">Kembali</label>&nbsp&nbsp&nbsp&nbsp
                                        <label class="col-md-6">: <?php if($datatrx->keterangan=="Instansi"){ echo "0"; } else {echo $datatrx->kembali;}?></label>
                                    </div>
        </div>    
    </div>
 
    <div class="page">
        <div class="subpage">Page 2/2</div>    
    </div>

</div>
</body>
</html>
<script type="text/javascript">window.print();</script>