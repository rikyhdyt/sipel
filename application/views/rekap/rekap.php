<div class="container-fluid">
<section class="content-header">
      <h1>
        Menu Rekap
      </h1>
      <ol class="breadcrumb">
        <li><a><i class="fa fa-table"></i> Filter Rekap</a></li>
      </ol>
    </section>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"></h6>
  </div>
  <div class="card-body">
  <form class="form-horizontal" action="<?php echo site_url('rekap/filter')?>" method="post" enctype="multipart/form-data" role="form">
 
  <div class="form-body">
                    <div class="form-group">
                    <label class="control-label col-md-5">Tanggal</label>
                    <div class="col-md-5">
                    <input type="date" name="tanggal" class="form-control" required="">
                    </div>
                    </div>
                    </div>
                    <!--<td style="width:760px;" rowspan="2"><button type="submit" class="btn btn-success btn-lg"><span class="fa fa-file" target="_blank"></span> Export Excel</button></td>
                    -->
                   
                    <td style="width:760px;" rowspan="2"><button type="submit" class="btn btn-primary btn-lg"><span class="fa fa-filter"></span> Filter</button></td>
                    </form>
                    
  </div>
</div>

</div>
<!-- /.container-fluid -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
<!--isi form-->
<h6 class="m-0 font-weight-bold text-primary"></h6>
</div>
<div class="card-body">
<h5><?php echo $this->session->flashdata('info');?></h5>
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

    <thead>
        <tr>
            <th>No</th>
            <th>No. Nota</th>
            <th>Nama Konsumen</th>
            <th>Jenis Komoditi</th>
            <th>Tanggal</th>
            <th>Kuantum</th>
            <th>Harga</th>
            <th>Aksi</th>
            </tr>
    </thead>
    <tbody>
        <tr>  
        <?php
            $no = 1;
            foreach ($data->result() as $row){
                ?>  
            <td><?php echo $no++;?></td>
            <td><?php echo $row->kd_nota;?></td>
            <td><?php echo $row->nm_mitra;?></td>
            <td><?php echo $row->id_barang;?></td>
            <td><?php echo $row->tanggal;?></td>
            <td> <div class="col-md-10">
                    <input type="text" name="kuantum" class="form-control" value="<?php echo $row->kuantum;?>" required="">
                    </div>
                    </td>
            <td><div class="col-md-10">
                    <input type="text" name="harga" class="form-control" value="<?php echo $row->harga;?>" required="">
                    </div>
                    </td>
            <td align="center">
            <a ><button href="#" class="btn btn-warning btn-md"><span class="fa fa-edit" ></span></button></a>
            
                                     
            </td>
        </tr>
        
        <?php } ?>
    
    </tbody>
</table>
<br>
<!--<form class="form-horizontal" action="<?php echo site_url('rekap/export_excel')?>" method="post" enctype="multipart/form-data" role="form">
<input type="hidden" name="tanggal" class="form-control" value="<?php echo $data->tanggal;?>" required="">-->
<td style="width:760px;" rowspan="2"><button type="submit" class="btn btn-success btn-lg" target="_blank"><span class="fa fa-file" ></span> Export Excel</button></td>
<!--</form>-->
</div>
</div>
</div>



