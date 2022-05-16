<div class="container-fluid">
<section class="content-header">
<h1>Menu Penjualan</h1>
<ol class="breadcrumb">
<li><a><i class="fa fa-calculator"></i> Form penjualan</a></li>
</ol>
</section>
<h5><?php echo $this->session->flashdata('notif');?></h5>
<!--atas-->
<div class="row">

<div class="col-lg-6">
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary"></h6>
</div>
<div class="card-body">
                    <div class="form-body">
                    <form action="<?php echo site_url('pesanan/tambahnota')?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="form-group">
                    <label class="control-label col-md-5">Nomor Nota</label>
                    <div class="col-md-12">
                    <?php foreach ($data as $nota) { ?>
                    <input type="text" name="no_nota"  class="form-control" value="<?php echo $nota->no_nota;?>"> <?php } ?>
                    <?= form_error('no_nota','<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <label class="control-label col-md-5">Nama Kasir</label>
                    <div class="col-md-12">
                    <select name="plh_operator" class="form-control m-bot15">
                    <option  value="">--Pilih Kasir--</option>
                    <?php foreach ($dt as $key) { ?>
                    <option value="<?php echo $key->id_op;?>"><?php echo $key->nm_op;?></option>
                    <?php }?>
                    </select>
                    <?= form_error('plh_operator','<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <label class="control-label col-md-5">Tempat Diambil</label>
                    <div class="col-md-12">
                    <select name="plh_gudang" class="form-control m-bot15">
                    <option  value="">--Pilih Gudang--</option>
                    <?php foreach ($data2 as $row) { ?>
                    <option value="<?php echo $row->id_gdng;?>"><?php echo $row->nm_gdng;?></option>
                    <?php }?>
                    </select>
                    <?= form_error('plh_gudang','<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    </div>
                    </div>

                    
</div>
</div>
</div>

<div class="col-lg-6">
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary"></h6>
</div>
<div class="card-body">
                    <div class="form-body">
                    <div class="form-group">
                    <label class="control-label col-md-5">Jenis Saluran</label>
                    <div class="col-md-12">
                    <select name="plh_saluran" class="form-control m-bot15">
                    <option  value="">--Pilih Saluran--</option>
                    <?php foreach ($data1 as $r) { ?>
                    <option value="<?php echo $r->id_saluran;?>"><?php echo $r->nm_saluran;?></option>
                    <?php }?>
                    </select>
                    <?= form_error('plh_saluran','<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    </div>
                    </div>

                    <div class="form-body">
                    <div class="form-group">
                    <label class="control-label col-md-5">Nama Mitra</label>
                    <div class="col-md-12">
                    <input type="text" name="mitra" id="title" placeholder="Masukan nama mitra" class="form-control" value="<?= set_value('mitra'); ?>">
                    <?= form_error('mitra','<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    </div>
                    </div>
                    
                    <button class="btn btn-primary btn-md" type="submit"><span class="fa fa-save" ></span> Simpan</button>
</div>
</div>
</div>
</div>
</form>

<!--bawah-->
<div class="card shadow mb-4">
<div class="card-header py-3">
<!--isi form-->
<button data-toggle="modal" data-target="#tambah-data" class="btn btn-primary btn-md" type="button"><span class="fa fa-plus" ></span> Tambah Komoditi</button>
<h6 class="m-0 font-weight-bold text-primary"></h6>
</div>
<div class="card-body">
<h5><?php echo $this->session->flashdata('info');?></h5>
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama Komoditi</th>
            <th>Kuantum</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Aksi</th>
            <th style="display:none;"></th>
            </tr>
    </thead>
    <tbody>
    <?php 
                    $i=1; ?>
                    <?php foreach ($this->cart->contents() as $items) : 
                        ?>
                        
                    
        <tr>    
            <td><?= $i ?></td>
            <td><?= $items['id'] ?></td>
            <td><?= $items['name'] ?></td>
            <td> <div class="col-md-7"> 
            <input type="text" name="qty" placeholder="Masukan banyak kuantum" value="<?= $items['qty'] ?>" class="form-control numeric" required>
            </div>
            </td>
            <td>Rp. <?= number_format($items['price'],0,',','.') ?></td>
            <td>Rp. <?= number_format($items['subtotal'],0,',','.') ?></td>
            <td>
            <a href="<?php echo site_url('pesanan/hapus/'. $items['rowid']) ?>" class="btn btn-danger fa fa-trash">Hapus</a>
            </td>
            <td style="display:none;"><?= $items['kd_nota'] ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
            </tbody>
</table>
<br>
<form action="<?php echo site_url('pesanan/simpan_pesanan') ?>" method="post">
<div class="form-body">
                    <div class="form-group">
                    <label class="control-label col-md-5">Total (Rp)</label>
                    <div class="col-md-3">
                    <input type="text" name="total" class="form-control" value="<?= $this->cart->total(); ?>" readonly>
                    </div>
                    </div>
                    </div>

</div>
<td style="width:760px;" rowspan="2"><button type="submit" class="btn btn-success btn-lg"><span class="fa fa-print"></span> Cetak Nota</button></td>
</div>
</div>
</div>
<!-- /.container-fluid -->
</div>
</form>

<div aria-hidden="true" aria-labelledby="exampleModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header ">
                <h4 class="modal-title" id="exampleModalLabel">Tambah Komoditi</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                    </div>
                <form class="form-horizontal" action="<?php echo site_url('pesanan/add_to_cart')?>" method="post" enctype="multipart/form-data" role="form">
                    <div class="modal-body">
<div class="form-body">
                    <?php foreach ($data as $nota) { ?>
                    <input type="hidden" name="no_nota" value="<?php echo $nota->no_nota;?>" class="form-control"><?php }?>

                    <div class="form-group">
                    <label class="control-label col-md-5">Komoditi</label>
                    <div class="col-md-12">
                    <select name="plh_komoditi" class="form-control m-bot15" required>
                    <option  value="">--Pilih Komoditi--</option>
                    <?php foreach ($data3 as $row) { ?>
                    <option value="<?php echo $row->id_komoditi;?>"><?php echo $row->nm_komoditi;?></option>
                    <?php }?>
                    </select>
                    </div>
                    </div>
                    </div>
                    <div class="form-body">
                    <div class="form-group">
                    <label class="control-label col-md-5">Kuantum</label>
                    <div class="col-md-12">
                    <input type="text" name="kuantum" placeholder="Masukan banyak kuantum" class="form-control numeric" required>
                    </div>
                    </div>
                    </div>
                    <div class="form-body">
                    <div class="form-group">
                    <label class="control-label col-md-5">Jenis Harga</label>
                    <div class="col-md-12">
                    <select name="plh_harga" class="form-control m-bot15" required>
                    <option  value="">--Pilih Harga--</option>
                    <?php foreach ($data4 as $row) { ?>
                    <option value="<?php echo $row->harga;?>"><?php echo $row->harga;?></option>
                    <?php }?>
                    </select>
                    </div>
                    </div>
                    </div>

                    <div class="modal-footer">
                            <button class="btn btn-success" type="submit"> Simpan&nbsp;</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"> Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

<script type="text/javascript">
        $(document).ready(function(){
            $( "#title" ).autocomplete({
              source: "<?php echo site_url('pesanan/get_autocomplete/?');?>"
            });
        });
    </script>
